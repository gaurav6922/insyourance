(function () {
    var form = document.getElementById('contact-form');
    if (!form) {
        return;
    }

    var submitBtn = document.getElementById('contact-form-submit');
    var responseEl = document.getElementById('contact-form-response');
    var defaultSubmitLabel = submitBtn
        ? (submitBtn.querySelector('span') ? submitBtn.querySelector('span').textContent.trim() : submitBtn.textContent.trim())
        : 'send message';

    function showResponse(message, type) {
        if (!responseEl) {
            return;
        }

        responseEl.textContent = message;
        responseEl.setAttribute('aria-hidden', 'false');
        responseEl.classList.remove('wpcf7-mail-sent-ok', 'wpcf7-mail-sent-ng', 'wpcf7-validation-errors');
        responseEl.style.display = 'block';

        if (type === 'success') {
            responseEl.classList.add('wpcf7-mail-sent-ok');
        } else {
            responseEl.classList.add('wpcf7-mail-sent-ng');
        }
    }

    function clearResponse() {
        if (!responseEl) {
            return;
        }

        responseEl.textContent = '';
        responseEl.setAttribute('aria-hidden', 'true');
        responseEl.classList.remove('wpcf7-mail-sent-ok', 'wpcf7-mail-sent-ng', 'wpcf7-validation-errors');
        responseEl.style.display = '';
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        clearResponse();

        if (submitBtn) {
            submitBtn.disabled = true;
            var labelSpan = submitBtn.querySelector('span');
            if (labelSpan) {
                labelSpan.textContent = 'Sending...';
            }
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
                    form.reset();
                    showResponse('Thank you! Your message has been sent. We will get back to you shortly.', 'success');
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
                showResponse(error.message || 'Unable to send your message. Please try again.', 'error');
            })
            .finally(function () {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    var labelSpan = submitBtn.querySelector('span');
                    if (labelSpan) {
                        labelSpan.textContent = defaultSubmitLabel;
                    }
                }
            });
    });
})();
