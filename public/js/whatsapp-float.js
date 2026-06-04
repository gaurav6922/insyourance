(function () {
    var POPUP_KEY = 'whatsapp_popup_dismissed';
    var DELAY_MS = 15000;

    function init() {
        var popup = document.getElementById('whatsapp-popup');
        if (!popup) {
            return;
        }

        if (sessionStorage.getItem(POPUP_KEY) === '1') {
            return;
        }

        var closeBtn = popup.querySelector('.whatsapp-popup__close');

        function showPopup() {
            if (sessionStorage.getItem(POPUP_KEY) === '1') {
                return;
            }
            popup.classList.add('whatsapp-popup--visible');
            popup.setAttribute('aria-hidden', 'false');
        }

        function hidePopup() {
            popup.classList.remove('whatsapp-popup--visible');
            popup.setAttribute('aria-hidden', 'true');
            sessionStorage.setItem(POPUP_KEY, '1');
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', hidePopup);
        }

        // WhatsApp card popup disabled — CTA popups (cta-popup.js) handle timed prompts.
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
