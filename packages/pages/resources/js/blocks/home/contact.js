import { initWowJs } from "../../plugins/wow";

export default {
    id: "contact",
    label: "Contact",
    category: "Trang chủ",
    content: `
        <section class="section-all section-contact lg:py-16 lg:pb-0 py-6 bg-[#F4F7F7]">
            <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="col-span-1 relative lg:pt-8">
                <p class="text font-['Dancing',sans-serif] text-[#252525] font-bold text-center 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] relative z-[1] wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    Thực hiện tiêm chủng Vắc-xin để bảo vệ bản thân <br> và bảo vệ những người xung quanh !
                </p>
                <div class="img-vaccin absolute bottom-0 left-1/2 -translate-x-1/2 w-full hidden lg:block">
                    <img src="/theme/frontend/images/vaccin.png" alt="">
                </div>
                </div>
                <div class="col-span-1 ">
                <div class="form-send__contact bg-white rounded-2xl shadow-[8px_12px_64px_rgba(0,0,0,.06)] overflow-hidden 2xl:mb-16 lg:mb-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="head text-center bg-gradient-to-r from-[#4EBEFF] to-[#0679BB] 2xl:p-4 py-3 px-4">
                    <p class="title font-bold text-white 2xl:text-[1.25rem] mb-1 lg:text-[1rem] text-[0.875rem]">ĐĂNG KÝ TƯ
                        VẤN MIỄN PHÍ</p>
                    <p class="text text-white lg:text-[0.875rem]">Đặt hẹn ngay để nhận tư vấn và chúng tôi sẽ xếp lịch khám
                        kịp thời!</p>
                    </div>
                    <form class="form 2xl:p-8 lg:p-4 p-3" action="" method="">
                    <input type="text" name="" placeholder="Họ và tên (*)" class="form-control mb-4 w-full bg-[#f5f5f5] py-3 px-4 outline-none">
                    <input type="text" name="" placeholder="Số điện thoại (*)" class="form-control mb-4 w-full bg-[#f5f5f5] py-3 px-4 outline-none">
                    <input type="text" name="" placeholder="Email (*)" class="form-control mb-4 w-full bg-[#f5f5f5] py-3 px-4 outline-none">
                    <textarea class="form-control resize-none mb-6 w-full bg-[#f5f5f5] py-3 px-4 h-20 outline-none" placeholder="Nội dung"></textarea>
                    <button class="uppercase btn-orange flex w-fit mx-auto items-center justify-center py-3 px-5 rounded-3xl bg-gradient-to-b from-[#FFB469] to-[#E57709] text-white font-bold shadow-[0_8px_16px_rgba(229,119,9,.35)]">
                        <img src="/theme/frontend/images/icon-note.png" alt="icon" class="icon mr-2">
                        Đăng ký tư vấn</button>
                    </form>
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
       <img src="/theme/frontend/images/contact.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
