export default {
    id: "consultation",
    label: "Thăm khám và từ vấn",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center">
                <div class="col-span-1 py-6">
                    <div class="list-endow">
                        <div class="list-endow__item flex items-center gap-4 xl:mb-6 mb-4 last:mb-0">
                            <span class="icon shrink-0 lg:w-20 w-10">
                                <img src="theme/frontend/images/endow-1.png" alt="">
                            </span>
                            <div class="content">
                                <p class="title font-bold text-[#163e78] 2xl:text-[1.25rem] text-[1rem] uppercase mb-2">
                                    THĂM KHÁM VÀ TƯ VẤN
                                </p>
                                <div class="short_content">
                                    Chụp phim với máy CT Conebeam, khám và Scan lấy dấu răng bằng máy Itero. Bác sĩ tư
                                    vấn chọn mắc cài phù hợp.
                                </div>
                            </div>
                        </div>
                        <div class="list-endow__item flex items-center gap-4 xl:mb-6 mb-4 last:mb-0">
                            <span class="icon shrink-0 lg:w-20 w-10">
                                <img src="theme/frontend/images/endow-2.png" alt="">
                            </span>
                            <div class="content">
                                <p class="title font-bold text-[#163e78] 2xl:text-[1.25rem] text-[1rem] uppercase mb-2">
                                    NGHE KẾ HOẠCH, XEM TRƯỚC KẾT QUẢ
                                </p>
                                <div class="short_content">
                                    Bác sĩ xây dựng kế hoạch điều trị và mô phỏng kết quả bằng công nghệ X-Matrix giúp
                                    xem trước kết quả điều trị.
                                </div>
                            </div>
                        </div>
                        <div class="list-endow__item flex items-center gap-4 xl:mb-6 mb-4 last:mb-0">
                            <span class="icon shrink-0 lg:w-20 w-10">
                                <img src="theme/frontend/images/endow-3.png" alt="">
                            </span>
                            <div class="content">
                                <p class="title font-bold text-[#163e78] 2xl:text-[1.25rem] text-[1rem] uppercase mb-2">
                                    KÝ CAM KẾT, GẮN MẮC CÀI
                                </p>
                                <div class="short_content">
                                    Khách hàng kiểm tra nguồn gốc xuất xứ mắc cài sử dụng,
                                    ký hợp đồng cam kết, sau đó gắn mắc cài.
                                </div>
                            </div>
                        </div>
                        <div class="list-endow__item flex items-center gap-4 xl:mb-6 mb-4 last:mb-0">
                            <span class="icon shrink-0 lg:w-20 w-10">
                                <img src="theme/frontend/images/endow-4.png" alt="">
                            </span>
                            <div class="content">
                                <p class="title font-bold text-[#163e78] 2xl:text-[1.25rem] text-[1rem] uppercase mb-2">
                                    CHỈNH NHA ĐỊNH KỲ
                                </p>
                                <div class="short_content">
                                    Chỉnh nha theo lịch hẹn. Đồng thời, khách hàng được gửi lộ trình dịch chuyển răng
                                    theo từng giai đoạn.


                                </div>
                            </div>
                        </div>
                        <div class="list-endow__item flex items-center gap-4 xl:mb-6 mb-4 last:mb-0">
                            <span class="icon shrink-0 lg:w-20 w-10">
                                <img src="theme/frontend/images/endow-5.png" alt="">
                            </span>
                            <div class="content">
                                <p class="title font-bold text-[#163e78] 2xl:text-[1.25rem] text-[1rem] uppercase mb-2">
                                    THÁO MẮC CÀI VÀ ĐEO HÀM DUY TRÌ
                                </p>
                                <div class="short_content">
                                    Tháo mắc cài sau quãng thời gian điều trị. Để có hàm răng đều đẹp, nụ cười rạng rỡ
                                    hãy đeo duy trì theo chỉ dẫn.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 img-package">
                    <img src="theme/frontend/images/package.jpg" alt="">
                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
