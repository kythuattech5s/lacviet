var HOME_EXAM = {

    slideLibService: function () {
        if (typeof Tech.$('.slide-lib__service') === 'undefined') return;
        const swiperBanner = new Swiper('.slide-lib__service', {
            slidesPerView: 2,
            disableOnInteraction: true,
            speed: 600,
            spaceBetween: 1,
            slidesPerColumn: 2,
            pagination: {
                el: ".pagination-lib__service",
                clickable: true,
            },
            breakpoints: {


                576: {

                    slidesPerView: 2.5,

                    spaceBetween: 1,
                    slidesPerColumn: 2,


                },

                768: {

                    slidesPerView: 3,

                    spaceBetween: 1,
                    slidesPerColumn: 2,


                },

                992: {

                    spaceBetween: 1,

                    slidesPerView: 3,
                    slidesPerColumn: 3,

                }

            }

        });
    },
    showFaqContent: function () {
        var btnShow = Tech.$('.show_answer');
        if (typeof btnShow !== 'undefined') {
            btnShow.onClick(function () {
                Tech.$(this).toggleClass('open');
                Tech.$(this).next('.answer-content').toggleSlide(300);
            })
        }
    },
    slidePriceService: function () {
        if (typeof Tech.$('.slide-price__service') === 'undefined') return;
        const swiperBanner = new Swiper('.slide-price__service', {
            slidesPerView: 1,
            disableOnInteraction: true,
            speed: 600,
            spaceBetween: 1,
            navigation: {
                nextEl: ".price-service__next",
                prevEl: ".price-service__prev",
            },
            pagination: {
                el: ".pagination-price",
                clickable: true,
            },

        });
    },
    slideEndowService: function () {
        if (typeof Tech.$('.slide-endow__service') === 'undefined') return;
        const swiperBanner = new Swiper('.slide-endow__service', {
            slidesPerView: 1.2,
            disableOnInteraction: true,
            speed: 600,
            spaceBetween: 10,
            navigation: {
                nextEl: ".endow-service__next",
                prevEl: ".endow-service__prev",
            },
            breakpoints: {


                576: {

                    slidesPerView: 1.5,

                    spaceBetween: 10,


                },

                768: {

                    slidesPerView: 2,

                    spaceBetween: 15,


                },

                992: {

                    spaceBetween: 24,

                    slidesPerView: 3,

                }

            }

        });
    },
    fixedMenu: function () {
        /* Cài đặt chế độ menu */
        optionMenu = {
            hideOnScrollDown: false,
            delayShowOnScrollTop: 0 /* Delay hiển thị khi scroll top. Áp dụng khi hideOnScrollDown = true */ ,
        };

        hideOnScrollDown = optionMenu.hideOnScrollDown || false;
        delayShowOnScrollTop = optionMenu.delayShowOnScrollTop || 0;

        /* Khai báo header */
        var header = Tech.$(".header-fixed");
        var headerHeight = header.outerHeight();
        var lastScrollTop = 0;
        window.addEventListener("scroll", function () {
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (lastScrollTop > headerHeight) {
                header.addClass('scrollTop');
            }
            else {
                header.removeClass('scrollTop');
            }
            lastScrollTop = st <= 0 ? 0 : st;
        }, );
    },
    initAnimation: function () {
        var width_ = window.innerWidth;
        if (width_ > 1023) {
            var wow = new WOW();
            wow.init();
        }

    },
    showMenu: function () {
        var buttonShowMenu = Tech.$('.show-menu-mobile ')
        var closeMenu = Tech.$('.over-lay');
        if (typeof buttonShowMenu != 'undefined') {
            buttonShowMenu.onClick(function () {
                Tech.$('.menu').addClass('active');
                Tech.$('.over-lay').addClass('show');
                Tech.$('body,html').addClass('show-menu');
            })
        }
        if (typeof closeMenu != 'undefined') {
            closeMenu.onClick(function () {
                Tech.$('.menu').removeClass('active');
                Tech.$('.over-lay').removeClass('show');
                Tech.$('body,html').removeClass('show-menu');
            })
        }

        var width_ = window.innerWidth;

        if (width_ < 1024) {
            var listIitemLi = Tech.$('.menu').find('li');
            listIitemLi.forEach(function (element, index) {
                if (element.find(':scope > ul').length() > 0) {
                    element.append(`<span class="btn-dropdown-menu"><i class="fa fa-angle-down" aria-hidden="true"></i></span>`);
                }
            });
            var listBtnDropdownMenu = Tech.$('.menu').find('.btn-dropdown-menu');
            var timeSlide = 300;
            listBtnDropdownMenu.onClick(function (event) {
                var _this = Tech.$(this);
                _this.css('pointer-events', 'none');
                setTimeout(function () {
                    _this.css('pointer-events', 'all');
                }, timeSlide);
                // var parentLi = Tech.$(this.closest('li'));
                var listUlChild = Tech.$(this).prev('ul');
                _this.toggleClass('open');
                listUlChild.toggleSlide(timeSlide);
            });
        }

    },

    init: function () {
        HOME_EXAM.slideLibService();
        HOME_EXAM.showFaqContent();
        HOME_EXAM.slidePriceService();
        HOME_EXAM.slideEndowService();
        HOME_EXAM.fixedMenu();
        HOME_EXAM.initAnimation();
        HOME_EXAM.showMenu();

    },
}
Tech.Query.ready(function () {
    setTimeout(function () {
        HOME_EXAM.init();
    }, 100);
});