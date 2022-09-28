export default {
    id: "device",
    label: "Giới thiệu về trang thiết bị",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-device 2xl:py-10 py-6">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] 2xl:mb-8 mb-6">
                Cơ sở khang trang, Trang thiết bị hiện đại
            </h2>

            <div class="swiper-container slide-device">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/co-so-1.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/co-so-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/co-so-2.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/co-so-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/co-so-1.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/co-so-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/co-so-2.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/co-so-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/co-so-1.jpg" title="" data-fslightbox="img-result"
                            class="img-result img__ c-img pt-[100%]">
                            <img src="theme/frontend/images/co-so-1.jpg" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
