(function ($) {
    "use strict";
    $(window).on('elementor/frontend/init', () => {
        const addHandler = ($element) => {
            var swiper2 = new Swiper(".mySwiper", {
                spaceBetween: 1,
                slidesPerView: 6,
                // centeredSlides: true,
                loop: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    },
                    1440: {
                        slidesPerView: 5,
                    },
                },
                speed: 5000,
            });

            $(".swiper-slide").hover(function () {
                swiper2.autoplay.stop();
            }, function () {
                swiper2.autoplay.start();
            });
        };
        elementorFrontend.hooks.addAction('frontend/element_ready/insul-image-carousel.default', addHandler);
    });


})(jQuery);
