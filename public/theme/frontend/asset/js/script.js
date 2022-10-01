$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
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
var QUESTION_GUI = (function () {
    var initReplyButton = function () {
        $(".btn-reply-comment-question").click(function () {
            $("html, body").animate(
                {
                    scrollTop:
                        $(".form-comment__box").offset().top -
                        $("header").height(),
                },
                300
            );
        });
    };
    var initFavouriteButton = function () {
        $(".btn-favourite-question").click(function () {
            if ($(this).hasClass("inited")) {
                NOTIFICATION.showNotify(
                    200,
                    "Bạn đã đánh giá rồi. Cảm ơn đánh giá của bạn."
                );
                return;
            }
            var _this = $(this);
            $.ajax({
                url: "favourite-question/",
                type: "POST",
                dataType: "json",
                data: {
                    id: $(this).data("id"),
                    type: $(this).data("type"),
                },
            }).done(function (data) {
                NOTIFICATION.toastrMessage(data);
                if (data.code == 200) {
                    _this.addClass("active");
                    $(".like-count").html(data.countLike);
                    $(".unlike-count").html(data.countUnLike);
                    $(".btn-favourite-question").addClass("inited");
                }
            });
        });
    };
    return {
        _: function () {
            initReplyButton();
            initFavouriteButton();
        },
    };
})();
$(document).ready(function () {
    NEW_GUI._();
    QUESTION_GUI._();
});
