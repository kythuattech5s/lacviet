export default {
    id: "experience-customer",
    label: "Trải nghiệm của khách hàng",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="experience-customer 2xl:py-10 py-6">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] 2xl:mb-6 mb-4">
                Trải nghiệm khách hàng
            </h2>
            <div class="slide-experience swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/trai-nghiem.jpg" title="" data-fslightbox="experience_customer"
                            class="img img__ block c-img pt-[100%]">
                            <img src="theme/frontend/images/trai-nghiem.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/trai-nghiem.jpg" title="" data-fslightbox="experience_customer"
                            class="img img__ block c-img pt-[100%]">
                            <img src="theme/frontend/images/trai-nghiem.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="theme/frontend/images/trai-nghiem.jpg" title="" data-fslightbox="experience_customer"
                            class="img img__ block c-img pt-[100%]">
                            <img src="theme/frontend/images/trai-nghiem.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
