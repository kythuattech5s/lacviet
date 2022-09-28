import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "feedback",
    label: "Feedback",
    category: "Trang chủ",
    content: `
    <section class="section-all section-feedback lg:py-8 py-6 max-w-[1920px] mx-auto lg:px-0 px-[0.938rem]">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-4 items-center">
        <div class="col-span-1 lg:col-span-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <div class="img-feedback">
            <img src="/theme/frontend/images/img-feedback.png" alt="">
            </div>
        </div>
        <div class="col-span-1 lg:col-span-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
            <p class="title-all font-bold text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mt-2 2xl:mb-10 mb-6">
            Cảm nhận của khách hàng sau khi <br>
            sử dụng dịch vụ
            </p>
            <div class="short_content 2xl:mb-10 lg:mb-6 mb-4 max-w-[800px] ml-0 mr-auto">
            Dưới đây là những chia sẻ từ khách hàng dành cho Bệnh viện Đa khoa
            Phương Đông và tập thể điều dưỡng Khoa kiểm soát nhiễm khuẩn đã tận
            tình chăm sóc, điều trị trong suốt thời gian qua.
            </div>
            <div class="swiper-container slide-feedback py-5 z-[1] 2xl:ml-[-150px] lg:ml-[-100px] swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-8723937b54c771fd" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide h-auto swiper-slide-active" role="group" aria-label="1 / 1" style="width: 502px; margin-right: 24px;">
                <div class="item-feedback h-full bg-white rounded-2xl 2xl:p-6 lg:p-4 p-2 border-[1px] border-solid border-[#ebebeb] transition-all duration-300 hover:shadow-[0_4px_10px_rgba(0,0,0,.3)] hover:border-transparent">
                    <div class="feedback-ct">
                    Trong thời gian chữa bệnh cho chồng tôi ở bệnh viện. Tôi
                    thật sự cảm ơn các bác sĩ đã cứu chữa cho chồng tôi rất
                    giỏi. Còn các điều dưỡng y tá ở phòng thì thái độ rất hòa
                    nhã, chăm sóc tận tình, luôn luôn theo dõi sức khỏe chồng
                    tôi thật sát sao, luôn có trách nhiệm.
                    </div>
                    <hr class="line my-4 opacity-100 bg-[#ebebeb]">
                    <div class="info-customer flex items-center justify-between">
                    <div class="info flex items-center">
                        <span class="ava block shrink-0 mr-3"><img src="/theme/frontend/images/ava.png" alt=""></span>
                        <div class="info-ct">
                        <p class="name font-bold text-[#252525] mb-1">
                            Nguyễn Quỳnh Trang
                        </p>
                        <p class="address md:text-[0.875rem]">Hà Nội</p>
                        </div>
                    </div>
                    <div class="rating-item">
                        <p class="rating">
                        <span class="rating-box">
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span style="width: 100%">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                        </span>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="pagination-all pagination-feedback text-left 2xl:ml-[150px] lg:ml-[-100px] swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
        if(typeof window['initSlideFeedback'] == 'undefined'){
            var initSlideFeedback = function () {
            if (!document.querySelector('.slide-feedback')) return;
                const swiperBanner = new Swiper('.slide-feedback', {
                    slidesPerView: 1.5,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 10,

                    navigation: {
                        nextEl: ".feedback__next",
                        prevEl: ".feedback__prev",
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },

                        1023: {
                            slidesPerView: 3,
                            spaceBetween: 24,
                        },
                    }
                });
            }
        }
        ${swiperInit(`initSlideFeedback`)}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/feedback.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
