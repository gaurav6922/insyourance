(function ($) {
    "use strict";

    $(window).on('elementor/frontend/init', () => {
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-project.default', ($element) => {
            let addHandler = $('.insul-swiper-wrapper', $element);
            if (addHandler.length > 0) {
                elementorFrontend.elementsHandler.addHandler(insulSwiperBase, {
                    $element,
                });
            }
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/insul-project.default', ($scope) => {
            let settings = $scope.data('settings');
            let currentIsotope = $scope.find('.isotope-grid');
            if (currentIsotope.length) {
                let objisotope = {
                    filter: '*',
                    masonry: {
                        columnWidth: '.grid__item',
                        gutter: settings.column_spacing.size,
                    }
                };
                currentIsotope.isotope(objisotope);
                $scope.find('.elementor-project__filters li').on('click', function () {
                    $(this).parents('ul.elementor-project__filters').find('li.elementor-project__filter').removeClass('elementor-active');
                    $(this).addClass('elementor-active');
                    let selector = $(this).attr('data-filter');
                    currentIsotope.isotope({filter: selector});
                });
                currentIsotope.imagesLoaded(function () {
                    currentIsotope.isotope('style');
                });
                let $total = $scope.find('.elementor-project__filters .total').text();
                $scope.find('.elementor-project__filters .all .count').text($total);
            }
            //style-2
            let $active = $scope.find('.insul_project-wrapper');
            let $content = $scope.find('.elementor-item-project');
            $active.find('.elementor-item-project').first().addClass('active');
            $content.find('.active').show();
            var windowsize = $(window).width();
            if (windowsize > 567) {
                let firstId = $active.find('.elementor-item-project').first().attr('aria-controls');
                $content.find('#' + firstId).addClass('active');
                $active.find('.elementor-item-project').hover(function (e) {
                    e.preventDefault();
                    let id = $(this).attr('aria-controls');
                    $active.find('.elementor-item-project').removeClass('active');
                    $(this).addClass('active');
                    $content.find('#' + id).addClass('active');
                });
            } else {
                $active.find('.elementor-item-project').on('click', function (e) {
                    e.preventDefault();
                    let id = $(this).attr('aria-controls');
                    $active.find('.elementor-item-project').removeClass('active');
                    $(this).addClass('active');
                    $contents.find('#' + id).addClass('active');
                });
            }
        });
    });

})(jQuery);



