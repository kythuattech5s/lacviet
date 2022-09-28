import { initWowJs } from "../../plugins/wow";

export default {
    id: "Effect",
    label: "Effect",
    category: "Trang chủ",
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/effect.png" alt="" />
    </div>`,
    content: `
    <section class="section-all section-effective lg:py-8 py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center">
                <div class="col-span-1 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="img-effective relative module-statis img_full lg:pb-12 pb-6">
                    <img src="/theme/frontend/images/effective.png" alt="">
                    <span class="rec-effect hidden md:block absolute top-1/4 lg:left-[-200px] left-[-100px]">
                    <img src="/theme/frontend/images/rec.svg" alt="">
                    </span>
                    <div class="box-text-statis w-fit absolute bottom-1/4 left-0 2xl:-translate-x-1/2 -translate-x-4 flex items-center z-[1] bg-white shadow-[0_8px_40px_rgba(0,0,0,.15)] lg:p-4 p-2 lg:pr-10 pr-5 rounded-2xl">
                    <span class="icon 2xl:w-20 2xl:h-20 lg:w-14 lg:h-14 w-12 h-12 shrink-0 mr-4">
                        <img src="/theme/frontend/images/statis-1.png" alt="icon">
                    </span>
                    <div class="text-ct">
                        <p class="count font-bold 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem]" tech5s-number="900+">900+</p>
                        <p class="text">Khách hàng đã tiêm</p>
                    </div>
                    </div>
                    <div class="box-text-statis w-fit absolute bottom-0 right-[10%] flex items-center z-[1] bg-white shadow-[0_8px_40px_rgba(0,0,0,.15)] lg:p-4 p-2 lg:pr-10 pr-5 rounded-2xl">
                    <span class="icon 2xl:w-20 2xl:h-20 lg:w-14 lg:h-14 w-12 h-12 shrink-0 mr-4">
                        <img src="/theme/frontend/images/statis-2.png" alt="icon">
                    </span>
                    <div class="text-ct">
                        <p class="count font-bold 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem]" tech5s-number="100%">100%</p>
                        <p class="text">Khách hàng hài lòng</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-span-1 2xl:pt-48 lg:pt-20 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <p class="title-all font-bold text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mt-2 2xl:mb-10 mb-6">
                    Hiệu quả phòng bệnh tối ưu từ việc thực hiện Tiêm chủng Vắc-xin
                </p>
                <div class="s-content 2xl:mb-12 lg:mb-6 mb-4">
                    Bệnh viện Đa khoa Phương Đông cung cấp dịch vụ tư vấn và tiêm
                    chủng vắc-xin dành cho cả trẻ em và người lớn với nhiều gói tiêm
                    đa dạng, chi phí hợp lý, mang lại hiệu quả phòng bệnh tối ưu. Tiêm
                    chủng tạo cho con người nền tảng phát triển khỏe mạnh, không dị
                    tật, di chứng... góp phần thúc đẩy nguồn nhân lực cho các quốc
                    gia. Từ đó giảm chi phí chăm sóc y tế, tăng năng suất lao động,
                    góp phần quan trọng trong xóa đói giảm nghèo và thúc đẩy phát
                    triển kinh tế, xã hội. <br>
                    Tiêm chủng vắc-xin là biện pháp phòng bệnh an toàn, hiệu quả, được
                    áp dụng cho cả người lớn và trẻ em, đặc biệt là người già, người
                    có bệnh nền mạn tính (tim mạch, tiểu đường, huyết áp...), người bị
                    suy giảm miễn dịch… Để được tiêm phòng đầy đủ các loại vắc xin cần
                    thiết, các gia đình nên lựa chọn những cơ sở y tế chuyên biệt về
                    tiêm chủng, có đầy đủ cơ sở vật chất, trang thiết bị y tế để được
                    tư vấn và tiêm vắc xin chất lượng, an toàn.
                </div>
                <a href="#" title="Đăng ký tư vấn" class="uppercase btn-orange inline-flex items-center justify-center py-3 px-5 rounded-3xl bg-gradient-to-b from-[#FFB469] to-[#E57709] text-white font-bold shadow-[0_8px_16px_rgba(229,119,9,.35)]">
                    <img src="/theme/frontend/images/icon-note.png" alt="icon" class="icon mr-2">
                    Đăng ký tư vấn</a>
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
