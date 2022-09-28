import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "team",
    label: "Team",
    category: "Trang chủ",
    content: `
    <section class="section-all section-team relative lg:py-8 py-6 bg-no-repeat bg-cover"style="background-image: url(/theme/frontend/images/bg-team.jpg);">
        <div class="container mx-auto">
        <p
            class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Đội ngũ bác sĩ giàu nhiệt huyết, tận tụy vì khách hàng
        </p>
        <div class="swiper-container slide-team wow fadeInUp">
            <div class="swiper-wrapper">
            <div class="swiper-slide h-auto">
                <div class="item-team group relative overflow-hidden h-full bg-[#ECF3F6] rounded-2xl">
                <span class="img block c-img pt-[145%]">
                    <img src="/theme/frontend/images/img-team-1.png" alt="">
                </span>
                <div
                    class="ct-text text-center absolute z-[1] transition-all duration-300 bottom-0 left-0 w-full bg-white 2xl:p-6 lg:p-4 p-2">
                    <p class="name font-bold text-[#252525] 2xl:text-[1.125rem] uppercase mb-2">
                    NGUYỄN TRUNG CHÍNH
                    </p>
                    <p class="role lg:text-[0.875rem] text-[#0A9949]">
                    PGS.TS. Bác sĩ Ung bướu
                    </p>
                    <div
                    class="desc-content overflow-hidden h-0 transition-all duration-300 group-hover:h-auto opacity-0 group-hover:opacity-100 ">
                    <p class="desc text-[0.75rem] 2xl:mb-6 mb-4 2xl:mt-6 mt-4">
                        Với hơn 40 năm kinh nghiệm trong lĩnh vực Sản phụ khoa cùng nhiều nghiên cứu khoa học giá trị về sức
                        khỏe sinh sản phụ nữ, TTND.TS.BS Nguyễn Huy Bạo - Nguyên Giám đốc Bệnh viện Phụ sản Hà Nội đã mang
                        đến hạnh phúc cho hàng triệu thai phụ trong hành trình đón con yêu chào đời.
                    </p>
                    <div class="rating-item justify-center">
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
            <div class="swiper-slide h-auto">
                <div class="item-team group relative overflow-hidden h-full bg-[#ECF3F6] rounded-2xl">
                <span class="img block c-img pt-[145%]">
                    <img src="/theme/frontend/images/img-team-1.png" alt="">
                </span>
                <div
                    class="ct-text text-center absolute z-[1] transition-all duration-300 bottom-0 left-0 w-full bg-white 2xl:p-6 lg:p-4 p-2">
                    <p class="name font-bold text-[#252525] 2xl:text-[1.125rem] uppercase mb-2">
                    NGUYỄN TRUNG CHÍNH
                    </p>
                    <p class="role lg:text-[0.875rem] text-[#0A9949]">
                    PGS.TS. Bác sĩ Ung bướu
                    </p>
                    <div
                    class="desc-content overflow-hidden h-0 transition-all duration-300 group-hover:h-auto opacity-0 group-hover:opacity-100 ">
                    <p class="desc text-[0.75rem] 2xl:mb-6 mb-4 2xl:mt-6 mt-4">
                        Với hơn 40 năm kinh nghiệm trong lĩnh vực Sản phụ khoa cùng nhiều nghiên cứu khoa học giá trị về sức
                        khỏe sinh sản phụ nữ, TTND.TS.BS Nguyễn Huy Bạo - Nguyên Giám đốc Bệnh viện Phụ sản Hà Nội đã mang
                        đến hạnh phúc cho hàng triệu thai phụ trong hành trình đón con yêu chào đời.
                    </p>
                    <div class="rating-item justify-center">
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
            <div class="swiper-slide h-auto">
                <div class="item-team group relative overflow-hidden h-full bg-[#ECF3F6] rounded-2xl">
                <span class="img block c-img pt-[145%]">
                    <img src="/theme/frontend/images/img-team-1.png" alt="">
                </span>
                <div
                    class="ct-text text-center absolute z-[1] transition-all duration-300 bottom-0 left-0 w-full bg-white 2xl:p-6 lg:p-4 p-2">
                    <p class="name font-bold text-[#252525] 2xl:text-[1.125rem] uppercase mb-2">
                    NGUYỄN TRUNG CHÍNH
                    </p>
                    <p class="role lg:text-[0.875rem] text-[#0A9949]">
                    PGS.TS. Bác sĩ Ung bướu
                    </p>
                    <div
                    class="desc-content overflow-hidden h-0 transition-all duration-300 group-hover:h-auto opacity-0 group-hover:opacity-100 ">
                    <p class="desc text-[0.75rem] 2xl:mb-6 mb-4 2xl:mt-6 mt-4">
                        Với hơn 40 năm kinh nghiệm trong lĩnh vực Sản phụ khoa cùng nhiều nghiên cứu khoa học giá trị về sức
                        khỏe sinh sản phụ nữ, TTND.TS.BS Nguyễn Huy Bạo - Nguyên Giám đốc Bệnh viện Phụ sản Hà Nội đã mang
                        đến hạnh phúc cho hàng triệu thai phụ trong hành trình đón con yêu chào đời.
                    </p>
                    <div class="rating-item justify-center">
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
            <div class="swiper-slide h-auto">
                <div class="item-team group relative overflow-hidden h-full bg-[#ECF3F6] rounded-2xl">
                <span class="img block c-img pt-[145%]">
                    <img src="/theme/frontend/images/img-team-1.png" alt="">
                </span>
                <div
                    class="ct-text text-center absolute z-[1] transition-all duration-300 bottom-0 left-0 w-full bg-white 2xl:p-6 lg:p-4 p-2">
                    <p class="name font-bold text-[#252525] 2xl:text-[1.125rem] uppercase mb-2">
                    NGUYỄN TRUNG CHÍNH
                    </p>
                    <p class="role lg:text-[0.875rem] text-[#0A9949]">
                    PGS.TS. Bác sĩ Ung bướu
                    </p>
                    <div
                    class="desc-content overflow-hidden h-0 transition-all duration-300 group-hover:h-auto opacity-0 group-hover:opacity-100 ">
                    <p class="desc text-[0.75rem] 2xl:mb-6 mb-4 2xl:mt-6 mt-4">
                        Với hơn 40 năm kinh nghiệm trong lĩnh vực Sản phụ khoa cùng nhiều nghiên cứu khoa học giá trị về sức
                        khỏe sinh sản phụ nữ, TTND.TS.BS Nguyễn Huy Bạo - Nguyên Giám đốc Bệnh viện Phụ sản Hà Nội đã mang
                        đến hạnh phúc cho hàng triệu thai phụ trong hành trình đón con yêu chào đời.
                    </p>
                    <div class="rating-item justify-center">
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
            </div>
            <div class="pagination-all pagination-team"></div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
        if (typeof window["initSlideTeam"] == "undefined") {
            var initSlideTeam = () => {
                if (!document.querySelector(".slide-team")) return;
                const swiperBanner = new Swiper(".slide-team", {
                    slidesPerView: 1,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 10,

                    pagination: {
                        el: ".pagination-team",
                        clickable: true,
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 2,
                            spaceBetween: 10,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                        },

                        992: {
                            slidesPerView: 3,
                            spaceBetween: 10,
                        },
                        1366: {
                            slidesPerView: 4,
                            spaceBetween: 24,
                        },
                    },
                });
            };
        }
        ${swiperInit('initSlideTeam')}
    </script>
    `,
    media: `<div class="mx-auto text-center">
       <img src="/theme/frontend/images/team.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
