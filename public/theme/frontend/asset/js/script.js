var NEW_GUI = (function () {
    var slideDetailEditor = function () {
        var boxSlides = $(".slide_detail_editor");
        if (boxSlides.length == 0) return;
        boxSlides.each(function (e) {
            var _this = $(this);
            var dataId = _this.attr("data-code");
            if ($(".slide_detail_editor_" + dataId).length == 0) return;
            const swiper = new Swiper(".slide_detail_editor_" + dataId, {
                slidesPerView: 1,
                disableOnInteraction: true,
                speed: 600,
                spaceBetween: 0,
                observer: true,
                observeParents: true,
                navigation: {
                    nextEl: ".slide_detail_editor_next_" + dataId,
                    prevEl: ".slide_detail_editor_prev_" + dataId,
                },
            });
        });
    };
    var scrollIntoViewNew = function () {
        if ($("#toc_container").length == 0) return;
        $(document).on("click", '#toc_container a[href^="#"]', function (e) {
            e.preventDefault();
            var id = $(this).attr("href");
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }
            var pos = $id.offset().top;
            $("body, html").animate({ scrollTop: pos }, 400);
        });

        $(document).on("click", ".toggle-content-toc", function (event) {
            event.preventDefault();
            $(this).toggleClass("active");
            var tocList = $(this).closest("#toc_container").find(".toc_list");
            if ($(this).hasClass("active")) {
                tocList.slideDown(300);
            } else {
                tocList.slideUp(300);
            }
        });
    };
    return {
        _: function () {
            slideDetailEditor();
            scrollIntoViewNew();
        },
    };
})();
$(document).ready(function () {
    NEW_GUI._();
});
