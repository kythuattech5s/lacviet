export default {
    id: "feeling",
    label: "Cảm nhận",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-feeling 2xl:py-10 py-6 bg-no-repeat bg-cover"
        style="background-image: url(theme/frontend/images/bg-feeling.jpg);">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-white 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] mb-2">
                Cảm nhận của khách hàng
            </h2>
            <p class="sub-title text-center font-semibold text-white 2xl:mb-6 mb-4">
                Niềng răng Invisalign tại Lạc Việt Intech
            </p>
            <div class="box-slide relative sm:max-w-[65%] mx-auto lg:px-20">
                <span class="heart-icon absolute top-[63%] left-[6%] z-[2] w-[10%] hidden lg:block pointer-events-none">
                    <img src="theme/frontend/images/heart.png" alt="">
                </span>
                <span
                    class="icon-relative absolute top-[63%] left-[85%] z-[2] w-[10%] hidden lg:block pointer-events-none">
                    <img src="theme/frontend/images/icon.png" alt="">
                </span>
                <div class="swiper-container slide-feeling  ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item-feeling flex gap-4 bg-no-repeat bg-[length:100%_100%]"
                                style="background-image: url(theme/frontend/images/box-feeling.png);">
                                <div
                                    class="box-ava w-[200px] h-[200px] shrink-0 bg-white p-2 rounded-3xl overflow-hidden">
                                    <img src="theme/frontend/images/ava-1.png" alt="">
                                </div>
                                <div class="content">
                                    <p
                                        class="name font-bold text-[#2269bd] uppercase 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] 2xl:mb-6 mb-4">
                                        KH: Trần Nguyên
                                    </p>
                                    <div class="s-content italic mb-4">
                                        Răng có xu hướng hô ra ngoài khiến mình vô cùng tự ti. Lựa chọn niềng răng tại
                                        Nha khoa Lạc Việt Intech đã giúp mình tự tin, cười nhiều hơn.
                                        #niengranginvisalign #lacvietintech
                                    </div>
                                    <div
                                        class="box-rating w-fit bg-gradient-to-r from-[#22b6fe] to-[#1d78fa] rounded-2xl py-2 px-4">
                                        <div class="rating-item">
                                            <p class="rating">
                                                <span class="rating-box">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <span style="width:100%">
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
                    </div>
                </div>
                <div
                    class="swiper-btn__landing landing-prev feeling-prev 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 left-0 -translate-y-1/2 z-[1] bg-transparent border-[1px] border-solid border-white hover:bg-[#0a68c8] hover:border-[#0a68c8] transition-all duration-300">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div
                    class="swiper-btn__landing landing-next feeling-next 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 right-0 -translate-y-1/2 z-[1] bg-transparent border-[1px] border-solid border-white hover:bg-[#0a68c8] hover:border-[#0a68c8] transition-all duration-300">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>

        </div>
    </section>`,
    activate: true,
    select: true,
};
