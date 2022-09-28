import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "videofeedback",
    label: "VideoFeedback",
    category: "Trang chủ",
    content: `
      <section class="section-all video-feecback lg:py-8 py-6 bg-no-repeat bg-top bg-[length:100%_60%]"
        style="background-image: url(/theme/frontend/images/bg-video.jpg);">
        <div class="container mx-auto">
        <p
            class="title-all font-bold text-center text-white 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-white after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Video khách hàng thăm khám tại Bệnh viện Phương Đông
        </p>
        <div class="boxslide__video relative wow fadeInUp">
            <div class="swiper-container slide-video__feedback py-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="item-video__feedback">
                    <a href="" title="" data-fslightbox="video_feedback"
                    class="img play-video block c-img pt-[60%] rounded-2xl overflow-hidden">
                    <img src="/theme/frontend/images/img-video.jpg" alt="">
                    </a>
                    <div
                    class="content relative z-[1] lg:mt-[-70px] mt-[-40px] text-center max-w-[85%] mx-auto bg-white rounded-2xl 2xl:p-6 lg:p-4 p-2 shadow-[0_0_40px_rgba(0,0,0,.08)]">
                    <p class="title font-bold text-[#252525] line-clamp-2 mb-3">
                        Diễn viên Mạnh Trường trải nghiệm dịch vụ Tư vấn & Tiêm chủng Vắc-xin
                    </p>
                    <ul class="time-new text-[#888] lg:text-[0.875rem]">
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/calc.svg" class="mr-2" alt="date">
                        22/07/2022
                        </li>
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/eye.svg" class="mr-2" alt="date">
                        149 người đã xem
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="item-video__feedback">
                    <a href="" title="" data-fslightbox="video_feedback"
                    class="img play-video block c-img pt-[60%] rounded-2xl overflow-hidden">
                    <img src="/theme/frontend/images/img-video.jpg" alt="">
                    </a>
                    <div
                    class="content relative z-[1] lg:mt-[-70px] mt-[-40px] text-center max-w-[85%] mx-auto bg-white rounded-2xl 2xl:p-6 lg:p-4 p-2 shadow-[0_0_40px_rgba(0,0,0,.08)]">
                    <p class="title font-bold text-[#252525] line-clamp-2 mb-3">
                        Diễn viên Mạnh Trường trải nghiệm dịch vụ Tư vấn & Tiêm chủng Vắc-xin
                    </p>
                    <ul class="time-new text-[#888] lg:text-[0.875rem]">
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/calc.svg" class="mr-2" alt="date">
                        22/07/2022
                        </li>
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/eye.svg" class="mr-2" alt="date">
                        149 người đã xem
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="item-video__feedback">
                    <a href="" title="" data-fslightbox="video_feedback"
                    class="img play-video block c-img pt-[60%] rounded-2xl overflow-hidden">
                    <img src="/theme/frontend/images/img-video.jpg" alt="">
                    </a>
                    <div
                    class="content relative z-[1] lg:mt-[-70px] mt-[-40px] text-center max-w-[85%] mx-auto bg-white rounded-2xl 2xl:p-6 lg:p-4 p-2 shadow-[0_0_40px_rgba(0,0,0,.08)]">
                    <p class="title font-bold text-[#252525] line-clamp-2 mb-3">
                        Diễn viên Mạnh Trường trải nghiệm dịch vụ Tư vấn & Tiêm chủng Vắc-xin
                    </p>
                    <ul class="time-new text-[#888] lg:text-[0.875rem]">
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/calc.svg" class="mr-2" alt="date">
                        22/07/2022
                        </li>
                        <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                        <img src="/theme/frontend/images/eye.svg" class="mr-2" alt="date">
                        149 người đã xem
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div
            class="swiper-circle 2xl:left-[-60px] left-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__prev video__prev">
            <img src="/theme/frontend/images/arrow-left.svg" class="group-hover:brightness-[100]" alt="prev">
            </div>
            <div
            class="swiper-circle 2xl:right-[-60px] right-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__next video__next">
            <img src="/theme/frontend/images/arrow-right.svg" class="group-hover:brightness-[100]" alt="next">
            </div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}

        if(typeof window['initSlideVideoFeedback'] == 'undefined'){
            var initSlideVideoFeedback = () => {
                if (!document.querySelector('.slide-video__feedback')) return;
                const swiperBanner = new Swiper('.slide-video__feedback', {
                    slidesPerView: 1,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 10,

                    navigation: {
                        nextEl: ".video__next",
                        prevEl: ".video__prev",
                    },

                    breakpoints: {
                        576: {
                            slidesPerView: 1.5,
                            spaceBetween: 15
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        992: {
                            slidesPerView: 2.5,
                            spaceBetween: 15,
                        },

                        1366: {
                            slidesPerView: 3,
                            spaceBetween: 24,
                        },
                    }

                });
            }
        }
        ${swiperInit('initSlideVideoFeedback')}
    </script>
    `,
    media: `<div class="mx-auto text-center">
       <img src="/theme/frontend/images/video-feedback.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
