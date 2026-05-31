(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-accordion.default', ($scope) => {
            const $accordion = $scope.find('.elementor-accordion-item');

            $accordion.find('.elementor-tab-title').on('click', function () {
                var current = $(this);
                var parent = current.parent();
                if (current.hasClass('elementor-active')) {
                    current.removeClass('elementor-active');
                } else {
                    current.addClass('elementor-active');
                }

                //dd of just clicked dt not active - direct sibling
                if (!$(this).next('.elementor-tab-content').hasClass('elementor-active')) {
                    //call back function interprets this as selected $('dd')
                    //checking if any other sibling dd's active

                    if (parent.siblings().find('.elementor-tab-content.elementor-active').length) {
                        //find dd with a class of active before sliding up
                        parent.siblings().find('.elementor-tab-title').removeClass('elementor-active')
                        parent.siblings().find('.elementor-tab-content')
                            .slideUp(function () {
                                current
                                    .next('.elementor-tab-content')
                                    .slideDown()
                                    .addClass('elementor-active');
                            })

                            .removeClass('elementor-active')
                            .siblings().find('.elementor-tab-content.elementor-active')
                            .hide()
                            .removeClass('elementor-active');

                    } else {
                        current.next('.elementor-tab-content').slideDown().addClass('elementor-active');
                    }
                } else {
                    //dd of just clicked dt is active - close form
                    current.next('.elementor-tab-content').slideUp().removeClass('elementor-active');
                }
            });

        });
    });
})(jQuery);

