import { swiperInit } from "../../plugins/swiper";
import { initWowJs } from "../../plugins/wow";

export default {
    id: "benefit",
    label: "Benefit",
    category: "Trang chủ",
    content: `
    <section class="section-all section-benefit lg:py-8 py-6">
        <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 gap-4">
            <div class="col-span-1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <p class="title-all font-bold text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mt-2 2xl:mb-10 mb-6">
                Quyền lợi của khách hàng
            </p>
            <ul class="customer__benefit 2xl:mb-8 mb-6">
                <li class="relative after:absolute after:w-5 after:h-5 after:bg-plus-icon after:bg-no-repeat after:bg-contain after:top-0 after:left-0 pl-7 mb-4 last:mb-0">
                <p class="title font-bold text-[#252525] mb-2">
                    Được khám bệnh, chữa bệnh và chăm sóc kịp thời, tận tình chu
                    đáo
                </p>
                <p class="desc">
                    Được khám chữa bệnh bằng phương pháp an toàn, hiệu quả; phù
                    hợp với tình trạng bệnh tật và nhu cầu của người bệnh.
                </p>
                </li>
                <li class="relative after:absolute after:w-5 after:h-5 after:bg-plus-icon after:bg-no-repeat after:bg-contain after:top-0 after:left-0 pl-7 mb-4 last:mb-0">
                <p class="title font-bold text-[#252525] mb-2">
                    Được tôn trọng các giá trị và niềm tin cá nhân
                </p>
                <p class="desc">
                    Được tôn trọng quyền riêng tư, các nhu cầu tình cảm, xã hội,
                    văn hóa, tín ngưỡng. Được bảo mật các thông tin cá nhân và
                    thông tin y tế.
                </p>
                </li>
                <li class="relative after:absolute after:w-5 after:h-5 after:bg-plus-icon after:bg-no-repeat after:bg-contain after:top-0 after:left-0 pl-7 mb-4 last:mb-0">
                <p class="title font-bold text-[#252525] mb-2">
                    Được bảo vệ an toàn
                </p>
                <p class="desc">
                    Được cung cấp dịch vụ y tế đảm bảo về chất lượng dịch vụ và an
                    toàn người bệnh. Được bảo vệ khỏi những rủi ro, được hỗ trợ
                    bảo quản tài sản.
                </p>
                </li>
                <li class="relative after:absolute after:w-5 after:h-5 after:bg-plus-icon after:bg-no-repeat after:bg-contain after:top-0 after:left-0 pl-7 mb-4 last:mb-0">
                <p class="title font-bold text-[#252525] mb-2">
                    Được cung cấp thông tin
                </p>
                <p class="desc">
                    Được bác sĩ tư vấn, giải thích đầy đủ về tình trạng bệnh tật,
                    hướng điều trị, khả năng thành công, phục hồi, hậu quả nếu
                    không điều trị và những rủi ro có thể xảy ra.
                </p>
                </li>
            </ul>
            <p class="font-bold lg:text-[1.125rem] text-[1rem] text-[#252525] mb-4">
                Quý khách vui lòng để lại số điện thoại, chúng tôi sẽ liên hệ lại
                ngay!
            </p>
            <form action="" method="" class="send__phone relative max-w-[600px]">
                <input type="text" name="" placeholder="Nhập số điện thoại..." class="form-control py-3 px-4 w-full bg-[#f5f5f5] rounded-3xl 2xl:h-14 h-10 outline-none">
                <a href="#" title="Gửi thông tin" class="uppercase absolute top-1/2 right-2 -translate-y-1/2 z-[1] 2xl:h-10 h-8 btn-orange mb-2 sm:mb-0 w-auto inline-flex items-center justify-center py-3 px-5 rounded-3xl bg-gradient-to-b from-[#FFB469] to-[#E57709] text-white font-bold shadow-[0_8px_16px_rgba(229,119,9,.35)]">
                <i class="fa fa-paper-plane mr-2" aria-hidden="true"></i>
                Gửi thông tin</a>
            </form>
            </div>
            <div class="col-span-1 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="swiper-container slide-img__benefit">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/theme/frontend/images/img-benefit.png" title="" data-fslightbox="img-benefit" class="img block c-img pt-[87%]">
                                <img src="/theme/frontend/images/img-benefit.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="pagination-all pagination-benefit"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        ${initWowJs}
        if (typeof window["initSwiperBenefit"] == "undefined") {
            var initSwiperBenefit = () => {
                if (!document.querySelector(".slide-img__benefit")) return;
                    new Swiper(".slide-img__benefit", {
                    slidesPerView: 1,
                    disableOnInteraction: true,
                    speed: 600,
                    spaceBetween: 20,
                    pagination: {
                        el: ".pagination-benefit",
                        clickable: true,
                    },
                })
            };
        }
        ${swiperInit('initSwiperBenefit')}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/benefit.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
