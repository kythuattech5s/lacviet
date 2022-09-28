export default {
    id: "info",
    label: "Thông tin",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-profile 2xl:py-10 py-6 bg-[#efefef]">
        <div class="container">
            <p class="sub-title text-center font-semibold text-[#323232] mb-2">
                PROFILE
            </p>
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] 2xl:mb-7 mb-4">
                cHUYÊN GIA INVISALIGN
            </h2>
            <div class="swiper-container slide-profile md:px-16">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="profile-experts grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                            <div class="col-span-1 2xl:pl-12">
                                <p class="title font-bold text-[#323232] 2xl:text-[1.1255rem] mb-2">
                                    Dr Linh + Chuyên Gia
                                </p>
                                <p class="name-dr flex items-center mb-4">
                                    <span
                                        class="sub font-semibold 2xl:text-[1.5rem] lg:text-[1.125rem] text-[1rem] text-[#323232] mr-4">
                                        BS:
                                    </span>
                                    <span
                                        class="name text-[#0a68c8] font-['Pleasent',sans-serif] 2xl:text-[4.5rem] lg:text-[3rem] text-[2rem] leading-[1.6]">Cao
                                        Thị Linh</span>
                                </p>
                                <ul class="list-degree">
                                    <li class="flex items-center gap-4 2xl:mb-6 mb-4 last:mb-0">
                                        <span
                                            class="icon 2xl:w-16 2xl:h-16 lg:w-14 lg:h-14 w-11 h-11 rounded-full shrink-0">
                                            <img src="theme/frontend/images/degree-1.png" alt="">
                                        </span>
                                        <p class="text text-[#323232] flex-1">
                                            Tốt nghiệp bác sĩ chính quy chuyên ngành Răng Hàm Mặt đại học Y Hà Nội.
                                        </p>
                                    </li>
                                    <li class="flex items-center gap-4 2xl:mb-6 mb-4 last:mb-0">
                                        <span
                                            class="icon 2xl:w-16 2xl:h-16 lg:w-14 lg:h-14 w-11 h-11 rounded-full shrink-0">
                                            <img src="theme/frontend/images/degree-2.png" alt="">
                                        </span>
                                        <p class="text text-[#323232] flex-1">
                                            Thành viên Liên đoàn chỉnh nha thế giới
                                        </p>
                                    </li>
                                    <li class="flex items-center gap-4 2xl:mb-6 mb-4 last:mb-0">
                                        <span
                                            class="icon 2xl:w-16 2xl:h-16 lg:w-14 lg:h-14 w-11 h-11 rounded-full shrink-0">
                                            <img src="theme/frontend/images/degree-3.png" alt="">
                                        </span>
                                        <p class="text text-[#323232] flex-1">
                                            Thành viên Hiệp hội Chỉnh nha không mắc cài Châu Âu.
                                        </p>
                                    </li>
                                    <li class="flex items-center gap-4 2xl:mb-6 mb-4 last:mb-0">
                                        <span
                                            class="icon 2xl:w-16 2xl:h-16 lg:w-14 lg:h-14 w-11 h-11 rounded-full shrink-0">
                                            <img src="theme/frontend/images/degree-4.png" alt="">
                                        </span>
                                        <p class="text text-[#323232] flex-1">
                                            Chứng chỉ Invisalign tại Mỹ.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-span-1 order-first md:order-last">
                                <div class="img_full">
                                    <img src="theme/frontend/images/img-profile.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-landing pagination-profile"></div>
                <div
                    class="swiper-btn__landing landing-prev profile-prev 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 left-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div
                    class="swiper-btn__landing landing-next profile-next 2xl:w-14 2xl:h-14 w-8 h-8  rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 right-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
