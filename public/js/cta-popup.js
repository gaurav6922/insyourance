(function () {
    var POPUP_KEY = 'cta_popup_dismissed';
    var DELAY_MS = 22000;

    function init() {
        var popup = document.getElementById('cta-popup');
        if (!popup) {
            return;
        }

        if (sessionStorage.getItem(POPUP_KEY) === '1') {
            return;
        }

        var closeTriggers = popup.querySelectorAll('[data-cta-close]');
        var form = document.getElementById('cta-popup-form');
        var statusEl = document.getElementById('cta-popup-status');
        var successEl = document.getElementById('cta-popup-success');
        var contentEl = popup.querySelector('.cta-popup__content');
        var submitBtn = document.getElementById('cta-popup-submit');

        function showPopup() {
            if (sessionStorage.getItem(POPUP_KEY) === '1') {
                return;
            }

            popup.classList.add('cta-popup--visible');
            popup.setAttribute('aria-hidden', 'false');
            document.body.classList.add('cta-popup-open');
        }

        function hidePopup() {
            popup.classList.remove('cta-popup--visible');
            popup.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('cta-popup-open');
            sessionStorage.setItem(POPUP_KEY, '1');
        }

        function showStatus(message, type) {
            if (!statusEl) {
                return;
            }

            statusEl.hidden = false;
            statusEl.textContent = message;
            statusEl.className = 'cta-popup__status cta-popup__status--' + type;
        }

        function clearStatus() {
            if (!statusEl) {
                return;
            }

            statusEl.hidden = true;
            statusEl.textContent = '';
            statusEl.className = 'cta-popup__status';
        }

        function showSuccess() {
            if (contentEl) {
                contentEl.hidden = true;
            }

            if (successEl) {
                successEl.hidden = false;
            }

            sessionStorage.setItem(POPUP_KEY, '1');
        }

        closeTriggers.forEach(function (trigger) {
            trigger.addEventListener('click', hidePopup);
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && popup.classList.contains('cta-popup--visible')) {
                hidePopup();
            }
        });

        if (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                clearStatus();

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
                            showSuccess();
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
                        showStatus(error.message || 'Unable to send your request. Please try again.', 'error');
                    })
                    .finally(function () {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Request Callback';
                        }
                    });
            });
        }

        window.setTimeout(showPopup, DELAY_MS);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
