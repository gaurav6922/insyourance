(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-post-grid.default', ($element) => {
            let addHandler = $('.insul-swiper-wrapper', $element);
            if (addHandler.length > 0) {
                elementorFrontend.elementsHandler.addHandler(insulSwiperBase, {
                    $element,
                });
            }
        });
    });
})(jQuery);

