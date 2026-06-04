(function () {
    var DEFAULT_SUBMIT_LABEL = 'Request Callback';
    var schedulerTimer = null;
    var activePopup = null;

    function randomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function pickRandom(list) {
        if (!list.length) {
            return null;
        }

        return list[randomInt(0, list.length - 1)];
    }

    function readPopupData() {
        var el = document.getElementById('cta-popup-data');

        if (!el || !el.textContent) {
            return null;
        }

        try {
            return JSON.parse(el.textContent);
        } catch (error) {
            return null;
        }
    }

    function getSchedulerConfig(data) {
        var scheduler = data && data.scheduler;

        if (scheduler) {
            return {
                initial: parseInt(scheduler.initial, 10) || 0,
                intervalMin: parseInt(scheduler.intervalMin, 10) || 20000,
                intervalMax: parseInt(scheduler.intervalMax, 10) || 45000
            };
        }

        var el = document.getElementById('cta-popup-scheduler');

        if (!el) {
            return { initial: 0, intervalMin: 20000, intervalMax: 45000 };
        }

        return {
            initial: parseInt(el.getAttribute('data-cta-initial-delay'), 10) || 0,
            intervalMin: parseInt(el.getAttribute('data-cta-interval-min'), 10) || 20000,
            intervalMax: parseInt(el.getAttribute('data-cta-interval-max'), 10) || 45000
        };
    }

    function randomInterval(config) {
        var min = config.intervalMin;
        var max = config.intervalMax;

        if (min > max) {
            var swap = min;
            min = max;
            max = swap;
        }

        return randomInt(min, max);
    }

    function buildWhatsAppUrl(number, message) {
        var text = encodeURIComponent(message || '');
        return 'https://wa.me/' + number + '?text=' + text;
    }

    function clearScheduled() {
        if (schedulerTimer !== null) {
            window.clearTimeout(schedulerTimer);
            schedulerTimer = null;
        }
    }

    function scheduleNext(delayMs) {
        clearScheduled();
        schedulerTimer = window.setTimeout(showNextPopup, delayMs);
    }

    function init() {
        var popupSmall = document.getElementById('cta-popup-small');
        var popupBig = document.getElementById('cta-popup-big');

        if (!popupSmall && !popupBig) {
            return;
        }

        var data = readPopupData();
        var config = getSchedulerConfig(data);
        var smallVariants = data && Array.isArray(data.smallVariants) ? data.smallVariants : [];
        var bigVariants = data && Array.isArray(data.bigVariants) ? data.bigVariants : [];
        var waNumber = data && data.whatsapp ? data.whatsapp.number : '';
        var waDefault = data && data.whatsapp ? data.whatsapp.default : '';

        if (!smallVariants.length && !bigVariants.length) {
            return;
        }

        var smallFomo = document.getElementById('cta-popup-small-fomo');
        var smallTitle = document.getElementById('cta-popup-small-title');
        var smallText = document.getElementById('cta-popup-small-text');
        var smallWaLink = document.getElementById('cta-popup-small-wa');

        var bigFomo = document.getElementById('cta-popup-big-fomo');
        var bigEyebrow = document.getElementById('cta-popup-big-eyebrow');
        var bigTitle = document.getElementById('cta-popup-big-title');
        var bigText = document.getElementById('cta-popup-big-text');
        var subjectEl = document.getElementById('cta-popup-subject');
        var variantEl = document.getElementById('cta-popup-variant');
        var form = document.getElementById('cta-popup-form');
        var statusEl = document.getElementById('cta-popup-status');
        var successEl = document.getElementById('cta-popup-success');
        var contentEl = document.getElementById('cta-popup-big-content');
        var submitBtn = document.getElementById('cta-popup-submit');
        var activeBigVariant = null;
        var defaultSubmitLabel = submitBtn ? submitBtn.textContent.trim() : DEFAULT_SUBMIT_LABEL;

        function lockBody(lock) {
            document.body.classList.toggle('cta-popup-open', lock);
        }

        function hideActivePopup() {
            if (!activePopup) {
                return;
            }

            activePopup.classList.remove('cta-popup--visible');
            activePopup.setAttribute('aria-hidden', 'true');
            activePopup = null;
            lockBody(false);
        }

        function applySmallVariant(variant) {
            if (!variant || !popupSmall) {
                return;
            }

            if (smallFomo) {
                if (variant.fomo) {
                    smallFomo.textContent = variant.fomo;
                    smallFomo.hidden = false;
                } else {
                    smallFomo.hidden = true;
                }
            }

            if (smallTitle && variant.title) {
                smallTitle.textContent = variant.title;
            }

            if (smallText && variant.text) {
                smallText.textContent = variant.text;
            }

            if (smallWaLink) {
                var message = variant.whatsapp_message || waDefault;
                smallWaLink.href = buildWhatsAppUrl(waNumber, message);
                smallWaLink.textContent = variant.submit || 'Chat on WhatsApp';
            }
        }

        function applyBigVariant(variant) {
            if (!variant) {
                return;
            }

            activeBigVariant = variant;

            if (bigFomo) {
                if (variant.fomo) {
                    bigFomo.textContent = variant.fomo;
                    bigFomo.hidden = false;
                } else {
                    bigFomo.hidden = true;
                }
            }

            if (bigEyebrow && variant.eyebrow) {
                bigEyebrow.textContent = variant.eyebrow;
            }

            if (bigTitle && variant.title) {
                bigTitle.textContent = variant.title;
            }

            if (bigText && variant.text) {
                bigText.textContent = variant.text;
            }

            if (subjectEl && variant.subject) {
                subjectEl.value = variant.subject;
            }

            if (variantEl && variant.id) {
                variantEl.value = variant.id;
            }

            if (submitBtn && variant.submit) {
                submitBtn.textContent = variant.submit;
            }
        }

        function resetBigPopup() {
            if (contentEl) {
                contentEl.hidden = false;
            }

            if (successEl) {
                successEl.hidden = true;
            }

            if (form) {
                form.reset();
            }

            clearBigStatus();
        }

        function clearBigStatus() {
            if (!statusEl) {
                return;
            }

            statusEl.hidden = true;
            statusEl.textContent = '';
            statusEl.className = 'cta-popup__status';
        }

        function showBigStatus(message, type) {
            if (!statusEl) {
                return;
            }

            statusEl.hidden = false;
            statusEl.textContent = message;
            statusEl.className = 'cta-popup__status cta-popup__status--' + type;
        }

        function showBigSuccess() {
            if (contentEl) {
                contentEl.hidden = true;
            }

            if (successEl) {
                successEl.hidden = false;
            }
        }

        function showPopup(el, prepareFn) {
            if (!el) {
                return;
            }

            hideActivePopup();
            prepareFn();
            activePopup = el;
            el.classList.add('cta-popup--visible');
            el.setAttribute('aria-hidden', 'false');

            if (el.classList.contains('cta-popup--big')) {
                lockBody(true);
            }
        }

        function showSmallPopup() {
            if (!popupSmall || !smallVariants.length) {
                if (popupBig && bigVariants.length) {
                    showBigPopup();
                }
                return;
            }

            showPopup(popupSmall, function () {
                applySmallVariant(pickRandom(smallVariants));
            });
        }

        function showBigPopup() {
            if (!popupBig || !bigVariants.length) {
                if (popupSmall && smallVariants.length) {
                    showSmallPopup();
                }
                return;
            }

            showPopup(popupBig, function () {
                resetBigPopup();
                applyBigVariant(pickRandom(bigVariants));
            });
        }

        function showNextPopup() {
            var hasSmall = popupSmall && smallVariants.length;
            var hasBig = popupBig && bigVariants.length;

            if (!hasSmall && !hasBig) {
                return;
            }

            if (hasSmall && hasBig) {
                if (Math.random() < 0.5) {
                    showSmallPopup();
                } else {
                    showBigPopup();
                }
            } else if (hasSmall) {
                showSmallPopup();
            } else {
                showBigPopup();
            }
        }

        function onPopupClosed() {
            hideActivePopup();
            scheduleNext(randomInterval(config));
        }

        function bindCloseHandlers(popup) {
            if (!popup) {
                return;
            }

            popup.querySelectorAll('[data-cta-close]').forEach(function (trigger) {
                trigger.addEventListener('click', onPopupClosed);
            });
        }

        bindCloseHandlers(popupSmall);
        bindCloseHandlers(popupBig);

        if (popupSmall && smallWaLink) {
            smallWaLink.addEventListener('click', function () {
                window.setTimeout(onPopupClosed, 400);
            });
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && activePopup && activePopup.classList.contains('cta-popup--visible')) {
                onPopupClosed();
            }
        });

        if (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                clearBigStatus();

                var submitLabel = (activeBigVariant && activeBigVariant.submit) || defaultSubmitLabel;

                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Sending...';
                }

                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        Accept: 'application/json'
                    }
                })
                    .then(function (response) {
                        if (response.ok) {
                            showBigSuccess();
                            window.setTimeout(onPopupClosed, 2800);
                            return;
                        }

                        return response.json().then(function (data) {
                            var message = 'Something went wrong. Please try again.';

                            if (data && data.errors) {
                                message = Object.values(data.errors)
                                    .map(function (errors) {
                                        return errors.join(', ');
                                    })
                                    .join(' ');
                            }

                            throw new Error(message);
                        });
                    })
                    .catch(function (error) {
                        showBigStatus(error.message || 'Unable to send your request. Please try again.', 'error');
                    })
                    .finally(function () {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = submitLabel;
                        }
                    });
            });
        }

        var initialDelay = config.initial;

        if (initialDelay <= 0) {
            showNextPopup();
        } else {
            scheduleNext(initialDelay);
        }
    }

    function boot() {
        try {
            init();
        } catch (error) {
            if (typeof console !== 'undefined' && console.error) {
                console.error('CTA popup failed to initialize', error);
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
