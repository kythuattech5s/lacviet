export default {
    id: "team",
    label: "Đội ngũ",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-team 2xl:py-10 py-6 bg-no-repeat bg-cover"
        style="background-image: url(theme/frontend/images/bg-team.jpg);">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-white 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] mb-2">
                Đội ngũ bác sĩ chuyên gia
            </h2>
            <p class="sub-title text-center font-semibold text-white 2xl:mb-7 mb-4 max-w-[765px] mx-auto">
                Quy tụ đội ngũ bác sĩ tốt nghiệp loại giỏi tại các trường ĐH Y khoa trong và ngoài nước. Các bác sĩ đều
                có chứng chỉ hành nghề và có nhiều năm kinh nghiệm trên các ca lâm sàng.
            </p>
            <div class="image-team text-cener hidden lg:block">
                <img src="theme/frontend/images/team.png" alt="">
            </div>
            <div class="swiper-container slide-team lg:mt-[-48px] lg:px-16 2xl:mb-8 mb-6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item-team text-center">
                            <span
                                class="img block mx-auto 2xl:w-60 2xl:h-60 lg:w-52 lg:h-52 w-40 h-40 rounded-full overflow-hidden mb-4">
                                <img src="theme/frontend/images/team-1.png" alt="">
                            </span>
                            <p class="name font-semibold text-white uppercase 2xl:text-[1.125rem] mb-4 bg-[length:100%_100%] p-4"
                                style="background-image: url(theme/frontend/images/bg-name.png);">
                                BS: Mai Minh Vương
                            </p>
                            <p class="desc text-white">
                                Tốt nghiệp bác sĩ chuyên khoa Răng
                                Hàm Mặt tại Đại học Y Hải Phòng
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-team text-center">
                            <span
                                class="img block mx-auto 2xl:w-60 2xl:h-60 lg:w-52 lg:h-52 w-40 h-40 rounded-full overflow-hidden mb-4">
                                <img src="theme/frontend/images/team-1.png" alt="">
                            </span>
                            <p class="name font-semibold text-white uppercase 2xl:text-[1.125rem] mb-4 bg-[length:100%_100%] p-4"
                                style="background-image: url(theme/frontend/images/bg-name.png);">
                                BS: Mai Minh Vương
                            </p>
                            <p class="desc text-white">
                                Tốt nghiệp bác sĩ chuyên khoa Răng
                                Hàm Mặt tại Đại học Y Hải Phòng
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-team text-center">
                            <span
                                class="img block mx-auto 2xl:w-60 2xl:h-60 lg:w-52 lg:h-52 w-40 h-40 rounded-full overflow-hidden mb-4">
                                <img src="theme/frontend/images/team-1.png" alt="">
                            </span>
                            <p class="name font-semibold text-white uppercase 2xl:text-[1.125rem] mb-4 bg-[length:100%_100%] p-4"
                                style="background-image: url(theme/frontend/images/bg-name.png);">
                                BS: Mai Minh Vương
                            </p>
                            <p class="desc text-white">
                                Tốt nghiệp bác sĩ chuyên khoa Răng
                                Hàm Mặt tại Đại học Y Hải Phòng
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-team text-center">
                            <span
                                class="img block mx-auto 2xl:w-60 2xl:h-60 lg:w-52 lg:h-52 w-40 h-40 rounded-full overflow-hidden mb-4">
                                <img src="theme/frontend/images/team-1.png" alt="">
                            </span>
                            <p class="name font-semibold text-white uppercase 2xl:text-[1.125rem] mb-4 bg-[length:100%_100%] p-4"
                                style="background-image: url(theme/frontend/images/bg-name.png);">
                                BS: Mai Minh Vương
                            </p>
                            <p class="desc text-white">
                                Tốt nghiệp bác sĩ chuyên khoa Răng
                                Hàm Mặt tại Đại học Y Hải Phòng
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-btn__landing landing-prev team-prev 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 left-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div
                    class="swiper-btn__landing landing-next team-next 2xl:w-14 2xl:h-14 w-8 h-8 rounded-full hidden md:flex items-center justify-center cursor-pointer text-white 2xl:text-[1.875rem] text-[1.25rem] absolute top-1/2 right-0 -translate-y-1/2 z-[1] bg-[#0a68c8]">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
            <a href="#" title="Đăng ký ngay"
                class="btn-white flex w-fit mx-auto uppercase items-center justify-center lg:text-[0.875rem] py-3 px-8 rounded-3xl text-white bg-transparent border-[1px] border-solid border-white transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                Đăng ký ngay
            </a>
        </div>
    </section>`,
    activate: true,
    select: true,
};
