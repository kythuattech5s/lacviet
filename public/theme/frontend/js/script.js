var CLICK = {
    fixedMenu: function () {
        /* Cài đặt chế độ menu */
        optionMenu = {
            hideOnScrollDown: false,
            delayShowOnScrollTop: 0 /* Delay hiển thị khi scroll top. Áp dụng khi hideOnScrollDown = true */,
        };

        hideOnScrollDown = optionMenu.hideOnScrollDown || false;
        delayShowOnScrollTop = optionMenu.delayShowOnScrollTop || 0;

        /* Khai báo header */
        var header = Tech.$(".header");
        var headerHeight = header.outerHeight();
        var headerTop = Tech.$(".header-top").outerHeight();
        var headerNavHeight = Tech.$(".header-nav").outerHeight();

        // var classMenuInShow = "in-menu-show";
        // var classMenuInHide = "in-menu-hide";
        // var _width = window.innerWidth;
        var bodyPage = Tech.$("body");
        var width_ = window.innerWidth;
        // Tech.$("body").css("padding-top", headerHeight + `px`);

        /* Function phụ trợ */

        /* Ẩn hiện menu khi scroll */
        var lastScrollTop = 0;
        window.addEventListener("scroll", function () {
            var st = window.pageYOffset || document.documentElement.scrollTop;
            // if(width_ > 1023){
            //     if (st > lastScrollTop) {
            //         if (lastScrollTop > headerHeight) {
            //             header.css("top", `-` + (headerTop + 1) + `px`);
            //         }
            //     } else {
            //         header.css("top", "0px");

            //     }
            // }

            lastScrollTop = st <= 0 ? 0 : st;
        });
    },
    showMenu: function () {
        var buttonShowMenu = Tech.$(".show-menu-mobile");
        var closeMenu = Tech.$(".over-lay");
        if (typeof buttonShowMenu != "undefined") {
            buttonShowMenu.onClick(function () {
                Tech.$(".menu").addClass("active");
                Tech.$(".over-lay").addClass("show");
                Tech.$("body,html").addClass("show-menu");
            });
        }
        if (typeof closeMenu != "undefined") {
            closeMenu.onClick(function () {
                Tech.$(".menu").removeClass("active");
                Tech.$(".over-lay").removeClass("show");
                Tech.$("body,html").removeClass("show-menu");
            });
        }

        var width_ = window.innerWidth;
        var listIitemLi = Tech.$(".menu").find("li");
        if (width_ >= 1024) {
            listIitemLi.forEach(function (element, index) {
                if (element.find(":scope > ul").length() > 0) {
                    element.append(
                        `<span class="btn-dropdown-menu"><i class="fa fa-caret-down" aria-hidden="true"></i></span>`
                    );
                }
            });
        }

        if (width_ < 1024) {
            listIitemLi.forEach(function (element, index) {
                if (element.find(":scope > ul").length() > 0) {
                    element.append(`<span class="btn-dropdown-menu"></span>`);
                }
            });
            var listBtnDropdownMenu =
                Tech.$(".menu").find(".btn-dropdown-menu");
            var timeSlide = 300;
            listBtnDropdownMenu.onClick(function (event) {
                var _this = Tech.$(this);
                _this.css("pointer-events", "none");
                setTimeout(function () {
                    _this.css("pointer-events", "all");
                }, timeSlide);
                // var parentLi = Tech.$(this.closest('li'));
                var listUlChild = Tech.$(this).prev("ul");
                _this.toggleClass("open");
                listUlChild.toggleSlide(timeSlide);
            });
        }
    },
    showCategory: function () {
        var btn = Tech.$(".show-category");
        if (typeof btn !== "undefined") {
            btn.onClick(function () {
                Tech.$(this).find("ul").toggleClass("active");
            });
            window.onclick = function (event) {
                var ul = document.querySelector(".show-category ul");
                if (event.target == ul) {
                    ul.classList.remove("active");
                }
            };
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
        var btnShowSearch = Tech.$(".show-form-search");
        var btnCloseSearch = Tech.$(".close-form-search");
        if (typeof btnShowSearch !== "undefined") {
            btnShowSearch._element.onclick = function () {
                Tech.$(".form-search-mobile").addClass("active");
                setTimeout(function () {
                    document.getElementById("input-search-header").focus();
                }, 500);
            };
        }
        if (typeof btnCloseSearch !== "undefined") {
            btnCloseSearch._element.onclick = function () {
                Tech.$(".form-search-mobile").removeClass("active");
            };
        }
    },
    showWidget: function () {
        var btn = Tech.$(".show-widget");
        if (typeof btn !== "undefined") {
            btn.onClick(function (e) {
                e.preventDefault();
                Tech.$(".widget").toggleClass("active");
            });
        }
    },
    changeSelect: function () {
        var selectService = document.querySelector(
            ".form-booking select[name='service']"
        );
        var serviceTemp = document.querySelector(
            ".form-booking [name='service_text']"
        );
        if (typeof selectService !== "undefined" && selectService !== null) {
            selectService.addEventListener("input", function (e) {
                serviceTemp.value =
                    selectService.options[selectService.selectedIndex].text;
                e.stopPropagation();
            });
        }
    },
    countDownTime: function () {
        const timecoundown = document.querySelectorAll(".time-countdown");

        if (timecoundown.length == 0) {
            return false;
        }

        timecoundown.forEach(function (element) {
            const timeElement = setInterval(function () {
                var timeStart = element.dataset.start;

                var timeEnd = element.dataset.end;

                var dataStart = getValueTime(timeStart);

                var dataEnd = getValueTime(timeEnd);

                var startEventTime = new Date(dataStart.dateTimeArray[0]);

                var endEvent = new Date(dataEnd.dateTimeArray[0]);

                startEventTime = startEventTime.setHours(
                    dataStart.hours,

                    dataStart.minutes,

                    dataStart.seconds
                );

                endEvent = endEvent.setHours(
                    dataEnd.hours,

                    dataEnd.minutes,

                    dataEnd.seconds
                );

                var now = new Date();

                now = now.getTime();

                timeStart = startEventTime - now;

                timeEnd = endEvent - now;
                var showDays = element.querySelector("#day");

                var showHour = element.querySelector("#hours");

                var showMinute = element.querySelector("#minutes");

                var showSecond = element.querySelector("#seconds");

                var days = Math.floor(timeEnd / (1000 * 60 * 60 * 24));

                if (days > 0) {
                    days = days + 1;
                }

                var hours =
                    Math.floor(
                        (timeEnd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                    ) +
                    days * 24;

                var minutes = Math.floor(
                    (timeEnd % (1000 * 60 * 60)) / (1000 * 60)
                );

                var second = Math.floor((timeEnd % (1000 * 60)) / 1000);
                showDays.innerHTML =
                    Number(days) >= 10 ? days : "0" + Number(days);
                showHour.innerHTML =
                    Number(hours) >= 10 ? hours : "0" + Number(hours);

                showMinute.innerHTML =
                    Number(minutes) >= 10 ? minutes : "0" + Number(minutes);

                showSecond.innerHTML =
                    Number(second) >= 10 ? second : "0" + Number(second);

                if (timeEnd <= 0) {
                    clearInterval(timeElement);
                }
            }, 1000);
        });
    },
    init: function () {
        CLICK.showMenu();
        CLICK.initAnimation();
        CLICK.showCategory();
        CLICK.moduleSearch();
        CLICK.fixedMenu();
        CLICK.showWidget();
        CLICK.countDownTime();
        CLICK.changeSelect();
    },
};
Tech.Query.ready(function () {
    setTimeout(function () {
        CLICK.init();
    }, 100);
    // BackToTop.create('.back-to-top', {
    //     threshold: 300,
    // })
    document
        .querySelector(".header-nav")
        .classList.remove("header_over_flow_hidden");
});
function getValueTime(dateTime) {
    var dateTimeArray = dateTime.split(" ");

    var hourMinuteSecond = dateTimeArray[1].split(":");

    var hours = hourMinuteSecond[0];

    var minutes = hourMinuteSecond[1];

    var seconds = hourMinuteSecond[2];

    return { dateTimeArray, hourMinuteSecond, hours, minutes, seconds };
}
