import { initWowJs } from "../../plugins/wow";

export default {
    id: "utilities",
    label: "utilities",
    category: "Trang chủ",
    media: `<div class="mx-auto text-center">
       <img src="/theme/frontend/images/utilities.png" alt="" />
    </div>`,
    content: `
    <section class="section-all section-utilities lg:py-8 py-6">
        <div class="container mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-3 2xl:gap-10 lg:gap-6 sm:gap-4 gap-2">
            <div class="col-span-1 wow flipInY" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-1.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Đội ngũ bác sĩ giàu y đức
                </p>
                <p class="text">
                Đội ngũ bác sĩ khám sàng lọc và tư vấn có trình độ chuyên môn
                cao, giàu kinh nghiệm, tư vấn tận tình.
                </p>
            </div>
            </div>
            <div class="col-span-1 wow flipInY" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-2.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Cảm giác thư thái, bình yên
                </p>
                <p class="text">
                Không gian bệnh viện theo mô hình khách sạn hiện đại, khuôn viên
                rộng gần 10ha với hàng vạn cây xanh
                </p>
            </div>
            </div>
            <div class="col-span-1 wow flipInY" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-3.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Chất lượng dịch vụ hàng đầu
                </p>
                <p class="text">
                Trang bị đầy đủ phương tiện y tế cùng ekip cấp cứu luôn túc trực
                giúp theo dõi và xử trí kịp thời các trường hợp
                </p>
            </div>
            </div>
            <div class="col-span-1 wow flipInY" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-4.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Chi phí hợp lý, tiết kiệm
                </p>
                <p class="text">
                Xây dựng đa dạng gói tiêm với chi phí hợp lý, hỗ trợ trả góp qua
                thẻ tín dụng 0% lãi suất khi mua trọn gói.
                </p>
            </div>
            </div>
            <div class="col-span-1 wow flipInY" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-5.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Thủ tục đơn giản, nhanh gọn
                </p>
                <p class="text">
                Thủ tục đặt lịch dễ dàng, nhanh gọn, tư vấn tận tình không mất
                nhiều thời gian của khách hàng.
                </p>
            </div>
            </div>
            <div class="col-span-1 wow flipInY" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: flipInY;">
            <div class="item-utilities text-center">
                <span class="icon block 2xl:w-[6.25rem] 2xl:h-[6.25rem] lg:w-16 lg:h-16 w-14 h-14 mx-auto mb-4">
                <img src="/theme/frontend/images/uti-6.png" alt="">
                </span>
                <p class="title font-bold text-[#252525] mb-2 2xl:text-[1.375rem] sm:text-[1rem] text-[0.875rem]">
                Chăm sóc khách hàng sau tiêm
                </p>
                <p class="text">
                Lưu giữ lịch sử tiêm online, nhắc lịch và thông báo cập nhật vắc
                xin thường xuyên.
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}    
    </script>
    `,
    activate: true,
    select: true,
};