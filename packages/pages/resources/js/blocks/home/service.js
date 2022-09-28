import { initWowJs } from "../../plugins/wow";

export default {
    id: "service",
    label: "Service",
    category: "Trang chủ",
    content: `
    <section class="section-all section-service lg:py-8 py-6">
        <div class="container mx-auto">
        <p class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Dịch vụ của Bệnh viện Phương Đông có gì đặc biệt?
        </p>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="col-span-1">
            <div class="service-special flex items-center bg-[#ECF3F6] rounded-[1.25rem] 2xl:py-4 2xl:px-6 lg:p-4 p-2 2xl:mb-6 mb-4 last:mb-0 2xl:even:translate-x-[125px] lg:even:translate-x-[80px] wow fadeIn 2xl:even:hover:translate-x-[110px] lg:even:hover:translate-x-[65px] lg:odd:hover:translate-x-[15px] transition-all duration-300" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <span class="icon 2xl:w-24 2xl:h-24 lg:w-16 lg:h-16 w-14 h-14 block shrink-0 md:mr-4 mr-2 img_full">
                <img src="/theme/frontend/images/special-1.png" alt="">
                </span>
                <div class="ct-text">
                <p class="title font-bold text-[#252525] 2xl:text-[1.25rem] text-[1rem] mb-2">
                    Tiêu chuẩn Bệnh viện 5 sao
                </p>
                <div class="desc">
                    Bệnh viện Phương Đông được xây dựng theo tiêu chuẩn 5 sao, đặt
                    mục tiêu trở thành nhà cung cấp hàng đầu các dịch vụ chăm sóc
                    y tế đạt đẳng cấp thế giới thu hút khách hàng trong nước và
                    khu vực châu Á.
                </div>
                </div>
            </div>
            <div class="service-special flex items-center bg-[#ECF3F6] rounded-[1.25rem] 2xl:py-4 2xl:px-6 lg:p-4 p-2 2xl:mb-6 mb-4 last:mb-0 2xl:even:translate-x-[125px] lg:even:translate-x-[80px] wow fadeIn 2xl:even:hover:translate-x-[110px] lg:even:hover:translate-x-[65px] lg:odd:hover:translate-x-[15px] transition-all duration-300" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <span class="icon 2xl:w-24 2xl:h-24 lg:w-16 lg:h-16 w-14 h-14 block shrink-0 md:mr-4 mr-2 img_full">
                <img src="/theme/frontend/images/special-2.png" alt="">
                </span>
                <div class="ct-text">
                <p class="title font-bold text-[#252525] 2xl:text-[1.25rem] text-[1rem] mb-2">
                    Lợi thế địa lý của Phương Đông
                </p>
                <div class="desc">
                    Bệnh viện Đa khoa Phương Đông được coi là điểm sáng về y tế
                    khu vực phía Tây Hà Nội, là địa chỉ khám chữa bệnh tin cậy cho
                    gần 180.000 cư dân có nhu cầu sử dụng dịch vụ y tế chất lượng
                    cao.
                </div>
                </div>
            </div>
            <div class="service-special flex items-center bg-[#ECF3F6] rounded-[1.25rem] 2xl:py-4 2xl:px-6 lg:p-4 p-2 2xl:mb-6 mb-4 last:mb-0 2xl:even:translate-x-[125px] lg:even:translate-x-[80px] wow fadeIn 2xl:even:hover:translate-x-[110px] lg:even:hover:translate-x-[65px] lg:odd:hover:translate-x-[15px] transition-all duration-300" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <span class="icon 2xl:w-24 2xl:h-24 lg:w-16 lg:h-16 w-14 h-14 block shrink-0 md:mr-4 mr-2 img_full">
                <img src="/theme/frontend/images/special-3.png" alt="">
                </span>
                <div class="ct-text">
                <p class="title font-bold text-[#252525] 2xl:text-[1.25rem] text-[1rem] mb-2">
                    Đội ngũ bác sĩ giàu kinh nghiệm, giàu tâm huyết
                </p>
                <div class="desc">
                    Bệnh viện Đa khoa Phương Đông quy tụ đội ngũ bác sĩ có trình
                    độ chuyên môn cao, giàu kinh nghiệm, có nhiều năm công tác và
                    giữ vị trí quan trọng tại các bệnh viện tuyến trung ương.
                </div>
                </div>
            </div>
            <div class="service-special flex items-center bg-[#ECF3F6] rounded-[1.25rem] 2xl:py-4 2xl:px-6 lg:p-4 p-2 2xl:mb-6 mb-4 last:mb-0 2xl:even:translate-x-[125px] lg:even:translate-x-[80px] wow fadeIn 2xl:even:hover:translate-x-[110px] lg:even:hover:translate-x-[65px] lg:odd:hover:translate-x-[15px] transition-all duration-300" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <span class="icon 2xl:w-24 2xl:h-24 lg:w-16 lg:h-16 w-14 h-14 block shrink-0 md:mr-4 mr-2 img_full">
                <img src="/theme/frontend/images/special-4.png" alt="">
                </span>
                <div class="ct-text">
                <p class="title font-bold text-[#252525] 2xl:text-[1.25rem] text-[1rem] mb-2">
                    Trang thiết bị hiện đại
                </p>
                <div class="desc">
                    Bệnh viện Đa khoa Phương Đông đầu tư đồng bộ về cơ sở vật
                    chất, trang thiết bị nhập khẩu từ các thương hiệu hàng đầu thế
                    giới như: Mỹ, Nhật Bản,... đảm bảo các tiêu chí về hiệu quả,
                    an toàn, tiết kiệm thời gian, chính xác và thân thiện với môi
                    trường.
                </div>
                </div>
            </div>
            </div>
            <div class="hidden lg:block col-span-1">
            <div class="img_full img-auto 2xl:pl-[175px] lg:pl-[130px] wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <img src="/theme/frontend/images/img-special.png" alt="">
            </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/service.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
