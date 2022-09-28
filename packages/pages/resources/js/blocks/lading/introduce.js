export default {
    id: "introduce",
    label: "Giới thiêu",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="section-about 2xl:py-10 py-6">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center 2xl:gap-6 gap-4">
                <div class="col-span-1">
                    <div class="img_full overflow-hidden lg:rounded-3xl rounded-2xl">
                        <img src="theme/frontend/images/commit.jpg" alt="">
                    </div>
                </div>
                <div class="col-span-1">
                    <h2
                        class="title title-landing font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem] 2xl:mb-6 mb-4">
                        Giới thiệu nha khoa Lạc Việt
                    </h2>
                    <div class="s-content s-content-commit scroll-left">
                        <p>
                            Nha khoa Lạc Việt Intech khẳng định sự uy tín khi đảm bảo với khách hàng 3 minh bạch, 4 cam
                            kết.
                        </p>
                        <p>
                            3 minh bạch gồm:
                        </p>
                        <p>- Minh bạch về thông tin bác sĩ </p>
                        <p>- Minh bạch về kết quả điều trị </p>
                        <p>- Minh bạch về xuất xứ, nguồn gốc các sản phẩm dùng cho bệnh nhân </p>
                        <p>4 cam kết gồm: </p>
                        <p>- Trực tiếp các chuyên gia đầu ngành điều trị </p>
                        <p>- Áp dụng các công nghệ điều trị tiên tiến nhất</p>
                        <p>- Sử dụng sản phẩm chính hãng</p>
                        <p>- Cam kết kết quả điều trị bằng văn bản có tính pháp lý</p>

                    </div>
                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
