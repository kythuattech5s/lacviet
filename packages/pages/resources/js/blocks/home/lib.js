import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "lib",
    label: "Lib",
    category: "Trang chủ",
    content: `
    <section class="section-all section-lib lg:py-8 py-6">
        <div class="container mx-auto">
            <p
                class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
                Hình ảnh khách hàng khi sử dụng gói dịch vụ Tiêm chủng Vắc-xin
            </p>
            <div class="swiper-container slide-lib mb-2 wow fadeInUp">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/theme/frontend/images/img-lib.jpg" title="" data-fslightbox="img_lib"
                    class="img-lib img__ block c-img rounded-2xl overflow-hidden pt-[48%]">
                    <img src="/theme/frontend/images/img-lib.jpg" alt="">
                    </a>
                </div>
                </div>
            </div>
            <div class="boxslide-lib relative wow fadeInUp" data-wow-delay="0.2s">
                <div class="swiper-container slide-lib__thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <div class="img-lib img__ c-img pt-[60%] rounded-lg overflow-hidden">
                        <img src="/theme/frontend/images/lib-thumbs.jpg" alt="">
                    </div>
                    </div>
                </div>
                </div>
                <div class="swiper-circle 2xl:left-[-60px] left-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__prev lib__prev">
                    <img src="/theme/frontend/images/arrow-left.svg" class="group-hover:brightness-[100]" alt="prev">
                </div>
                <div class="swiper-circle 2xl:right-[-60px] right-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__next lib__next">
                <img src="/theme/frontend/images/arrow-right.svg" class="group-hover:brightness-[100]" alt="next">
                </div>
            </div>
        </div>
    </section>
    <script>
        ${initWowJs}
        if (typeof window["initSlideLib"] == "undefined") {
            var initSlideLib = () => {
                if (!document.querySelector(".slide-lib__thumbs")) return;
                const swiperBanner = new Swiper(".slide-lib__thumbs", {
                    slidesPerView: 3,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 8,
                    freeMode: true,
                    watchSlidesProgress: true,

                    breakpoints: {
                        576: {
                            slidesPerView: 5,
                            spaceBetween: 8,
                        },
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 8,
                        },

                        1023: {
                            slidesPerView: 6,
                            spaceBetween: 8,
                        },
                        1366: {
                            slidesPerView: 7,
                            spaceBetween: 8,
                        },
                    },
                });

                if (!document.querySelector(".slide-lib")) return;
                const swiperBanner1 = new Swiper(".slide-lib", {
                    slidesPerView: 1,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 10,
                    freeMode: true,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl: ".lib__next",
                        prevEl: ".lib__prev",
                    },
                    thumbs: {
                        swiper: swiperBanner,
                    },
                });
            };
        }
        ${swiperInit("initSlideLib")}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/lib.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
