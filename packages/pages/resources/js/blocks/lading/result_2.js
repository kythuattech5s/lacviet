export default {
    id: "result_2",
    label: "Kết quả niềng răng",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-result 2xl:py-10 py-6">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] mb-2">
                Kết quả niềng răng Invisalign
            </h2>
            <p class="sub-title text-center font-semibold text-[#323232] 2xl:mb-6 mb-4">
                tại Lạc Việt Intech
            </p>
            <div class="swiper-container slide-result lg:px-16">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/img-result.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/img-result.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/img-result-1.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/img-result-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/img-result-2.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/img-result-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/img-result-3.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/img-result-3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="pagination-landing pagination-result"></div>
                <div
                    class="swiper-btn__landing landing-prev result-prev 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 left-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div
                    class="swiper-btn__landing landing-next result-next 2xl:w-14 2xl:h-14 w-8 h-8  rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 right-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
