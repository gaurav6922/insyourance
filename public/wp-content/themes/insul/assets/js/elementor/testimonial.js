(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        const addHandler = ($element) => {
            elementorFrontend.elementsHandler.addHandler(insulSwiperBase, {
                $element,
            });

            let selectorTes = $('.elementor-testimonials-swiper');

            selectorTes.each(function() {
                let $element = $(this);

                let check_pagination = $element.find('.elementor-custom-swiper-pagination');

                if (check_pagination.length > 0) {
                    $element.on("swiperInit", function (e, slider) {

                        if ($('.elementor-custom-swiper-pagination').length > 0) {

                            var thumbs = new Swiper('.elementor-custom-swiper-pagination', {
                                // slidesPerView: 3,
                                spaceBetween: 14,
                                centeredSlides: true,
                                loop: true,
                                loopedSlides: 4,
                                slideToClickedSlide: true,
                                breakpoints: {
                                    1024: {
                                        slidesPerView: 3, spaceBetween: 14
                                    },
                                    768: {
                                        slidesPerView: 3, spaceBetween: 14
                                    },
                                    425: {
                                        slidesPerView: 1, spaceBetween: 10
                                    },
                                    375: {
                                        slidesPerView: 1, spaceBetween: 10
                                    }, 320: {
                                        slidesPerView: 1, spaceBetween: 10
                                    },
                                },
                            });
                            slider.controller.control = thumbs;
                            thumbs.controller.control = slider;

                        }
                    });
                }
            });


        };
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-testimonials.default', addHandler);
    });


})(jQuery);
