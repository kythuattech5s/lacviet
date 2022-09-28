import { initWowJs } from "../../plugins/wow";

export default {
    id: "inquiries",
    label: "Inquiries",
    category: "Trang chủ",
    content: `
    <section class="section-all customer-inquiries lg:py-8 py-6 bg-no-repeat bg-cover" style="background-image:url(/theme/frontend/images/phanhoi.jpg);">
        <div class="container mx-auto">
        <p class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Thắc mắc của khách hàng khi sử dụng dịch vụ <br> tại Bệnh viện Phương Đông
        </p>
        <div class="module-customer__inquiries relative lg:after:absolute lg:after:top-0 lg:after:left-1/2 lg:after:bg-white lg:after:rounded-2xl lg:after:-translate-x-1/2 lg:after:h-full 2xl:after:w-[10px] lg:after:w-[6px]">
            <!-- Câu hỏi -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-0 items-center inquiries-item question 2xl:mb-10 lg:mb-6 mb-4 last:mb-0">
            <div class="col-span-1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="inquiries-content block sm:flex bg-white 2xl:p-6 lg:p-4 p-2 rounded-2xl">
                <span class="img block shrink-0 mb-2 sm:mb-0 2xl:w-60 2xl:h-60 lg:w-52 lg:h-52 w-40 h-40 2xl:mr-6 lg:mr-4 mr-2">
                    <img src="/theme/frontend/images/ba-bau.jpg" alt="">
                </span>
                <div class="content">
                    <p class="title font-bold text-[#252525] 2xl:mb-4 mb-2 2xl:text-[1.125rem] lg:text-[1rem] text-[0.875rem]">
                    Bệnh viện Phương Đông có tiêm phòng trước khi mang thai không?
                    </p>
                    <div class="s-content text-justify">
                    Xin chào bệnh viện, em chưa có kinh nghiệm về thai sản và sắp tới em có dự định có em bé, em muốn hỏi
                    bên bệnh viện mình có xét nghiệm và tiêm phòng trước khi mang thai không ạ và em mới bị COVID-19 hiện
                    tại đã khỏi thì có ảnh hưởng gì đến việc tiêm phòng không? Nếu có thì phải chờ bao lâu mới được tiêm
                    phòng và chi phí các mũi tiêm là như thế nào ạ? Cảm ơn quý bệnh viện.
                    </div>
                </div>
                </div>
            </div>
            <div class="col-span-1 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="info-customer lg:ml-28 mr-auto flex items-center w-fit bg-white 2xl:p-6 lg:p-4 p-2 rounded-2xl shadow-[8px_12px_40px_rgba(0,0,0,.08)]">
                <span class="ava block shrink-0 rounded-full 2xl:w-20 2xl:h-20 lg:w-16 lg:h-16 w-12 h-12 overflow-hidden mr-4">
                    <img src="/theme/frontend/images/ava.png" alt="">
                </span>
                <div class="content">
                    <p class="title font-bold text-[#252525] 2xl:mb-4 mb-2 2xl:text-[1.125rem] lg:text-[1rem] text-[0.875rem]">
                    Nguyễn Minh Ánh
                    </p>
                    <p class="time lg:text-[0.875rem]">
                    Đã hỏi: Ngày 25/07/2022
                    </p>
                </div>
                </div>
            </div>
            </div>
            <!-- End -->
            <!-- Câu trả lời -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-0 items-center inquiries-item answer 2xl:mb-10 lg:mb-6 mb-4 last:mb-0">
            <div class="col-span-1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="info-customer lg:mr-28 ml-auto flex items-center w-fit bg-white 2xl:p-6 lg:p-4 p-2 rounded-2xl shadow-[8px_12px_40px_rgba(0,0,0,.08)]">
                <span class="ava block shrink-0 rounded-full 2xl:w-20 2xl:h-20 lg:w-16 lg:h-16 w-12 h-12 overflow-hidden mr-4">
                    <img src="/theme/frontend/images/ava-bs.jpg" alt="">
                </span>
                <div class="content">
                    <p class="title font-bold text-[#252525] 2xl:mb-4 mb-2 2xl:text-[1.125rem] lg:text-[1rem] text-[0.875rem]">
                    Bác sĩ Nguyễn Huy Bạo
                    </p>
                    <p class="time lg:text-[0.875rem]">
                    Đã trả lời: Ngày 25/07/2022
                    </p>
                </div>
                </div>
            </div>
            <div class="col-span-1 order-first lg:order-last wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="inquiries-content flex  bg-white 2xl:p-6 lg:p-4 p-2 rounded-2xl">

                <div class="content">
                    <p class="title font-bold text-[#252525] 2xl:mb-4 mb-2 2xl:text-[1.125rem] lg:text-[1rem] text-[0.875rem]">
                    Bệnh viện Phương Đông có tiêm phòng trước khi mang thai không?
                    </p>
                    <div class="s-content text-justify">
                    Xin chào bệnh viện, em chưa có kinh nghiệm về thai sản và sắp tới em có dự định có em bé, em muốn hỏi
                    bên bệnh viện mình có xét nghiệm và tiêm phòng trước khi mang thai không ạ và em mới bị COVID-19 hiện
                    tại đã khỏi thì có ảnh hưởng gì đến việc tiêm phòng không? Nếu có thì phải chờ bao lâu mới được tiêm
                    phòng và chi phí các mũi tiêm là như thế nào ạ? Cảm ơn quý bệnh viện.
                    </div>
                </div>
                </div>
            </div>

            </div>
            <!--  -->
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
    </script>
    `,
    media: `<div class="mx-auto text-center">
       <img src="/theme/frontend/images/inquiries.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
