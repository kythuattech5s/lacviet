import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "procedure",
    label: "Procedure",
    category: "Trang chủ",
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/proceure.png" alt="" />
    </div>`,
    content: `<section class="section-all section-procedure lg:py-8 py-6">
            <div class="module-proceure 2xl:max-w-[90%] mx-auto relative bg-no-repeat bg-[length:100%_100%] 2xl:py-20 lg:py-10 py-10"
                style="background-image: url(/theme/frontend/images/bg-procedure.png)">
                <span class="after-top absolute top-0 right-12 -translate-y-1/2 z-[1] hidden lg:block">
                    <img src="/theme/frontend/images/after-top.png" alt="" />
                </span>
                <span class="after-bottom absolute bottom-0 left-12 translate-y-1/2 z-[1] hidden lg:block">
                    <img src="/theme/frontend/images/after-bottom.png" alt="" />
                </span>
                <div class="container mx-auto">
                    <p
                    class="title-all font-bold text-white text-center 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-white after:block after:mx-auto 2xl:after:mt-t lg:after:mt-4 after:mt-2 2xl:mb-10 mb-6">
                    Quy trình dịch vụ Tiêm chủng Vắc-xin tại Bệnh viện Phương Đông
                    </p>
                    <div class="swiper-container slide-roadmap">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide group wow fadeInUp" data-wow-delay="0.1s">
                        <div class="item-roadmap flex group-odd:flex-col group-even:flex-col-reverse">
                            <div class="border-box rounded-full p-3">
                            <div class="bg-blue shadow-[0_0_16px_rgba(0,0,0,.35)] w-full h-full rounded-full p-4">
                                <div
                                class="year w-full h-full rounded-full flex flex-col items-center justify-center font-semibold shadow-[0_0_16px_rgba(0,0,0,.35)]">
                                <span class="text">Bước</span>
                                <span class="number"> 01 </span>
                                </div>
                            </div>
                            </div>
                            <div class="desc text-white text-center">
                            <p class="title font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2">
                                Đăng ký thông tin
                            </p>
                            <p class="text">
                                Khách hàng đăng ký thông tin tại quầy tiếp đón Trung tâm
                                Tư vấn & Tiêm chủng vắc-xin.
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide group wow fadeInUp" data-wow-delay="0.2s">
                        <div class="item-roadmap flex group-odd:flex-col group-even:flex-col-reverse">
                            <div class="border-box rounded-full p-3">
                            <div class="bg-blue shadow-[0_0_16px_rgba(0,0,0,.35)] w-full h-full rounded-full p-4">
                                <div
                                class="year w-full h-full rounded-full flex flex-col items-center justify-center font-semibold shadow-[0_0_16px_rgba(0,0,0,.35)]">
                                <span class="text">Bước</span>
                                <span class="number"> 02 </span>
                                </div>
                            </div>
                            </div>
                            <div class="desc text-white text-center">
                            <p class="title font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2">
                                Tư vấn & Thăm khám
                            </p>
                            <p class="text">
                                Khách hàng được thăm khám và tư vấn kỹ trước khi tiêm tại
                                phòng khám với bác sĩ.
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide group wow fadeInUp" data-wow-delay="0.3s">
                        <div class="item-roadmap flex group-odd:flex-col group-even:flex-col-reverse">
                            <div class="border-box rounded-full p-3">
                            <div class="bg-blue shadow-[0_0_16px_rgba(0,0,0,.35)] w-full h-full rounded-full p-4">
                                <div
                                class="year w-full h-full rounded-full flex flex-col items-center justify-center font-semibold shadow-[0_0_16px_rgba(0,0,0,.35)]">
                                <span class="text">Bước</span>
                                <span class="number"> 03 </span>
                                </div>
                            </div>
                            </div>
                            <div class="desc text-white text-center">
                            <p class="title font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2">
                                Thanh toán chi phí
                            </p>
                            <p class="text">
                                Khách hàng thanh toán chi phí tiêm tại quầy Lễ tân và nhận
                                phiếu thanh toán.
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide group wow fadeInUp" data-wow-delay="0.4s">
                        <div class="item-roadmap flex group-odd:flex-col group-even:flex-col-reverse">
                            <div class="border-box rounded-full p-3">
                            <div class="bg-blue shadow-[0_0_16px_rgba(0,0,0,.35)] w-full h-full rounded-full p-4">
                                <div
                                class="year w-full h-full rounded-full flex flex-col items-center justify-center font-semibold shadow-[0_0_16px_rgba(0,0,0,.35)]">
                                <span class="text">Bước</span>
                                <span class="number"> 04 </span>
                                </div>
                            </div>
                            </div>
                            <div class="desc text-white text-center">
                            <p class="title font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2">
                                Thực hiện tiêm chủng
                            </p>
                            <p class="text">
                                Cầm theo phiếu thanh toán tới tiêm Vắc-xin tại phòng tiêm
                                theo chỉ dẫn của nhân viên y tế.
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide group wow fadeInUp" data-wow-delay="0.5s">
                        <div class="item-roadmap flex group-odd:flex-col group-even:flex-col-reverse">
                            <div class="border-box rounded-full p-3">
                            <div class="bg-blue shadow-[0_0_16px_rgba(0,0,0,.35)] w-full h-full rounded-full p-4">
                                <div
                                class="year w-full h-full rounded-full flex flex-col items-center justify-center font-semibold shadow-[0_0_16px_rgba(0,0,0,.35)]">
                                <span class="text">Bước</span>
                                <span class="number"> 05 </span>
                                </div>
                            </div>
                            </div>
                            <div class="desc text-white text-center">
                            <p class="title font-bold 2xl:text-[1.125rem] text-[0.875rem] mb-2">
                                Theo dõi sức khỏe
                            </p>
                            <p class="text">
                                Theo dõi 30 phút sau tiêm, kiểm tra sức khỏe trước khi ra
                                về và hướng dẫn theo dõi tại nhà.
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            ${initWowJs}
            if(typeof window['initSwiperRoadMap'] == 'undefined'){
                var initSwiperRoadMap = function () {
                    if (!document.querySelector(".slide-roadmap")) return;
                    const swiperBanner = new Swiper(".slide-roadmap", {
                        slidesPerView: 2,
                        disableOnInteraction: true,
                        speed: 600,
                        spaceBetween: 10,

                        breakpoints: {
                            576: {
                                slidesPerView: 2.5,
                                spaceBetween: 10,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },

                            992: {
                                slidesPerView: 4,
                                spaceBetween: 20,
                            },
                            1366: {
                                slidesPerView: 5,
                                spaceBetween: 30,
                            },
                        },
                    });
                };
            }

            ${swiperInit(`initSwiperRoadMap`)}
        </script>
        `,
    activate: true,
    select: true,
};
