var CLICK = {


    fixedMenu: function () {
        /* Cài đặt chế độ menu */
        optionMenu = {
            hideOnScrollDown: false,
            delayShowOnScrollTop: 0 /* Delay hiển thị khi scroll top. Áp dụng khi hideOnScrollDown = true */ ,
        };

        hideOnScrollDown = optionMenu.hideOnScrollDown || false;
        delayShowOnScrollTop = optionMenu.delayShowOnScrollTop || 0;

        /* Khai báo header */
        var header = Tech.$(".header");
        var headerHeight = header.outerHeight();
        var headerTop = Tech.$('.header-top').outerHeight();
        var headerNavHeight = Tech.$('.header-nav').outerHeight();

        // var classMenuInShow = "in-menu-show";
        // var classMenuInHide = "in-menu-hide";
        // var _width = window.innerWidth;
        var bodyPage = Tech.$("body");
        var width_ = window.innerWidth;
        Tech.$("body").css("padding-top", headerHeight + `px`);
        header.addClass("fixed");

        /* Function phụ trợ */


        /* Ẩn hiện menu khi scroll */
        var lastScrollTop = 0;
        window.addEventListener("scroll", function () {
            var st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop) {
                if (lastScrollTop > headerHeight) {
                    header.css("top", `-` + headerTop + `px`);
                }
            } else {
                header.css("top", "0px");

            }
            if(st > headerHeight){
                header.addClass('scroll');
            }else{
                header.removeClass('scroll');

            }

            lastScrollTop = st <= 0 ? 0 : st;
        }, );
    },
    showMenu: function () {
        var buttonShowMenu = Tech.$('.show-menu-mobile')
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
        var listIitemLi = Tech.$('.menu').find('li');
        if(width_ >=1024){
            listIitemLi.forEach(function (element, index) {
                if (element.find(':scope > ul').length() > 0) {
                    element.append(`<span class="btn-dropdown-menu"><i class="fa fa-caret-down" aria-hidden="true"></i></span>`);
                }
            });
        }
      
        if (width_ < 1024) {
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
    showCategory:function(){
        var btn=Tech.$('.show-category');
        var btnClose=Tech.$('.close-category');
        if(typeof btn !=='undefined'){
            btn.onClick(function(){
                Tech.$('.nav-category').addClass('active');
            })
        }
        if(typeof btnClose !=='undefined'){
            btnClose.onClick(function(){
                Tech.$('.nav-category').removeClass('active');
            })
        }
    },

    initAnimation: function () {
        var width_ = window.innerWidth;
        if (width_ > 1023) {
            var wow = new WOW();
            wow.init();
        }

    },


    moduleSearch: function () {
        var btnShowSearch = Tech.$('.show-form-search');
        var btnCloseSearch = Tech.$('.close-form-search');
        if (typeof btnShowSearch !== 'undefined') {
            btnShowSearch._element.onclick = function () {
                Tech.$('.form-search-mobile').addClass('active');
                setTimeout(function () {
                    document.getElementById("input-search-header").focus();
                }, 500);
            }
        }
        if (typeof btnCloseSearch !== 'undefined') {
            btnCloseSearch._element.onclick = function () {
                Tech.$('.form-search-mobile').removeClass('active');
            }
        }

    },



 
    init: function () {
        CLICK.showMenu();
        CLICK.initAnimation();
        CLICK.showCategory();
        CLICK.moduleSearch();
        CLICK.fixedMenu();
   

    },
}
Tech.Query.ready(function () {
    setTimeout(function () {
        CLICK.init();
    }, 100);
    // BackToTop.create('.back-to-top', {
    //     threshold: 300,
    // })

});

