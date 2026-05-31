(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        const addHandler = ($element) => {
            [...document.querySelectorAll('[data-fx="1"]')].forEach(link => new HoverImgFx1(link));
            elementorFrontend.elementsHandler.addHandler(insulSwiperBase, {
                $element,
            });
        };
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-our-service.default', ($scope) => {
            let $active = $scope.find('.insul_service-wrapper');
            $active.find('.elementor-service-item').first().addClass('active');

            $active.find('.elementor-service-item').on('mouseenter', function (e) {
                e.preventDefault();
                var current = $(this);
                var parent = current.parent();
                $active.find('.elementor-service-item').removeClass('active');
                current.addClass('active');
                current.next('.excerpt-content').slideDown().addClass('active');
            });
            $active.find('.elementor-service-item').on('mouseleave', function (e) {
                e.preventDefault();
                $active.find('.elementor-service-item').first().addClass('active');
            });
        });
    });

})(jQuery);