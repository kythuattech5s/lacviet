import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "program",
    label: "Program",
    category: "Trang chủ",
    content: `
    <section class="section-all lg:py-8 py-6">
        <div class="container mx-auto">
        <p
            class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Chương trình ưu đãi đặc biệt dành cho gói Tư vấn & Tiêm chủng Vắc-xin
        </p>
        <div class="boxslide_program relative max-w-[1170px] mx-auto wow fadeInUp">
            <div class="swiper-container slide-program lg:py-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto ">
                <div
                    class="item-program group h-full items-center lg:p-3 p-2 rounded-2xl bg-[#ECF3F6] transition-all duration-300">
                    <span class="img block c-img pt-[60%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                    <img src="/theme/frontend/images/img-program.jpg" alt="">
                    </span>
                    <p class="title text-center font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2 text-[#2891CC]">Ưu đãi
                    Tiêm chủng gói
                    Gia Đình</p>
                    <p
                    class="price text-center font-bold text-[#2891CC] 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem] mb-1">
                    999K
                    </p>
                    <p class="text-note text-center lg:text-[0.875rem] text-[#888] mb-4">(Giá cũ: 1999k)</p>
                    <div class="s-content s-content-endow mb-4">
                    <ul>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                    </ul>
                    </div>
                    <a href="#" title="Đăng ký tư vấn"
                    class="uppercase btn-blue flex w-fit mx-auto items-center justify-center py-3 px-5 rounded-lg bg-gradient-to-b from-[#4EBEFF] to-[#0679BB] text-white font-bold">
                    Đăng ký ngay</a>
                </div>
                </div>
                <div class="swiper-slide h-auto ">
                <div
                    class="item-program group h-full items-center lg:p-3 p-2 rounded-2xl bg-[#ECF3F6] transition-all duration-300">
                    <span class="img block c-img pt-[60%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                    <img src="/theme/frontend/images/img-program.jpg" alt="">
                    </span>
                    <p class="title text-center font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2 text-[#2891CC]">Ưu đãi
                    Tiêm chủng gói
                    Gia Đình</p>
                    <p
                    class="price text-center font-bold text-[#2891CC] 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem] mb-1">
                    999K
                    </p>
                    <p class="text-note text-center lg:text-[0.875rem] text-[#888] mb-4">(Giá cũ: 1999k)</p>
                    <div class="s-content s-content-endow mb-4">
                    <ul>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                    </ul>
                    </div>
                    <a href="#" title="Đăng ký ngay"
                    class="uppercase btn-blue flex w-fit mx-auto items-center justify-center py-3 px-5 rounded-lg bg-gradient-to-b from-[#4EBEFF] to-[#0679BB] text-white font-bold">
                    Đăng ký ngay</a>
                </div>
                </div>
                <div class="swiper-slide h-auto ">
                <div
                    class="item-program group h-full items-center lg:p-3 p-2 rounded-2xl bg-[#ECF3F6] transition-all duration-300">
                    <span class="img block c-img pt-[60%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                    <img src="/theme/frontend/images/img-program.jpg" alt="">
                    </span>
                    <p class="title text-center font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2 text-[#2891CC]">Ưu đãi
                    Tiêm chủng gói
                    Gia Đình</p>
                    <p
                    class="price text-center font-bold text-[#2891CC] 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem] mb-1">
                    999K
                    </p>
                    <p class="text-note text-center lg:text-[0.875rem] text-[#888] mb-4">(Giá cũ: 1999k)</p>
                    <div class="s-content s-content-endow mb-4">
                    <ul>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                        <li>Chương trình ưu đãi dành cho Gia đình 4 người</li>
                    </ul>
                    </div>
                    <a href="#" title="Đăng ký tư vấn"
                    class="uppercase btn-blue flex w-fit mx-auto items-center justify-center py-3 px-5 rounded-lg bg-gradient-to-b from-[#4EBEFF] to-[#0679BB] text-white font-bold">
                    Đăng ký ngay</a>
                </div>
                </div>
            </div>
            </div>
            <div
            class="swiper-circle 2xl:left-[-60px] left-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__prev program__prev">
            <img src="/theme/frontend/images/arrow-left.svg" class="group-hover:brightness-[100]" alt="prev">
            </div>
            <div
            class="swiper-circle 2xl:right-[-60px] right-[-18px] group border-[1px] border-solid border-[#4EBEFF] transition-all duration-300 hover:bg-[#4EBEFF] absolute top-1/2 -translate-y-1/2 cursor-pointer z-[1] rounded-full w-9 h-9 flex items-center justify-center swiper-circle__next program__next">
            <img src="/theme/frontend/images/arrow-right.svg" class="group-hover:brightness-[100]" alt="next">
            </div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
        if(typeof window['initSlideProgram'] == 'undefined'){

            var initSlideProgram = () => {
                if (!document.querySelector('.slide-program')) return;
                const swiperBanner = new Swiper('.slide-program', {
                    slidesPerView: 1,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 10,
                    loop: false,
                    centeredSlides: true,
                    disableOnInteraction: false,
                    loop: true,
                    effect: 'coverflow',
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 200,
                        modifier: 1.5,
                        slideShadows: false,
                    },

                    navigation: {
                        nextEl: ".program__next",
                        prevEl: ".program__prev",
                    },
                    breakpoints: {
                        0: {
                    effect: 'false',

                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 10
                        },
                        768: {
                            slidesPerView: 2.5,
                            spaceBetween: 10,
                            effect: 'false',
                            depth: 0,
                            modifier: 0,
                            loop: false,
                            centeredSlides: false,

                        },

                        992: {
                            slidesPerView: 2.5,
                            spaceBetween: 10,
                            depth: 0,
                            modifier: 0,
                            loop: false,
                            centeredSlides: false,
                            effect: 'false',
                        },
                        1366: {
                        
                            slidesPerView: 2.4,
                            spaceBetween: 0,
                            effect: 'coverflow',
                            rotate: 0,
                            stretch: 0,
                            depth: 200,
                            modifier: 1.5,
                            slideShadows: false,

                        },
                    }

                });
            }
        }
        ${swiperInit("initSlideProgram")}
    </script>
    `,
    media: `<div class="mx-auto text-center">
       <img src="/theme/frontend/images/program.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
