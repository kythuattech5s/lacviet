import { initWowJs } from "../../plugins/wow";

export default {
    id: "news",
    label: "News",
    category: "Trang chủ",
    content: `
    <section class="section-all section-news overflow-hidden 2xl:py-8 py-6 2xl:pt-32 lg:pt-20 bg-no-repeat bg-cover bg-top max-w-[1920px] mx-auto relative" style="background-image: url(/theme/frontend/images/bg-new.jpg);">
        <span class="after-top absolute top-0 right-12 -translate-y-1/2 z-[1] hidden lg:block">
        <img src="/theme/frontend/images/after-top.png" alt="">
        </span>
        <div class="container mx-auto">
        <ul class="social flex 2xl:mx-20 lg:mx-10 mx-6 lg:rounded-t-[1.875rem] rounded-t-[0.875rem] items-center 2xl:gap-12 lg:gap-6 gap-4 bg-[#ECF3F6] 2xl:py-4 2xl:px-14 lg:py-3 lg:px-10 py-2 px-4 text-[#888] lg:text-[1.875rem] text-[1.25rem] wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" title="Youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
        <div class="box-content bg-white rounded-t-[1.875rem] 2xl:p-10 p-4">
            <div class="grid grid-cols-3 lg:grid-cols-4">
            <div class="col-span-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <p class="title-all font-bold text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative 2xl:mb-6 mb-4">
                9 mũi vắc xin ngoài chương trình tiêm chủng mở rộng cha mẹ không nên bỏ qua
                </p>
                <ul class="time-new text-[#888] lg:text-[0.875rem] 2xl:mb-10 mb-6">
                <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                    <img src="/theme/frontend/images/calc.svg" class="mr-2" alt="date">
                    22/07/2022
                </li>
                <li class="inline-flex items-center 2xl:mr-6 mr-3 last:mr-0">
                    <img src="/theme/frontend/images/user.svg" class="mr-2" alt="user">
                    Admin
                </li>
                </ul>
                <div class="s-content">
                <p>Theo khuyến cáo của bác sĩ nhi khoa, để giúp trẻ có được hệ miễn dịch tốt nhất, tránh khỏi các bệnh
                    truyền nhiễm nguy hiểm, ngoài việc tiêm đầy đủ vắc xin trong chương trình tiêm chủng mở rộng, cha mẹ nên
                    lưu ý cho bé tiêm thêm một số mũi quan trọng khác phòng các bệnh như thủy đậu, viêm gan A...Tham khảo
                    ngay 9 mũi tiêm quan trọng cho trẻ trong bài viết dưới đây:</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae vitae ut erat laoreet sit
                    elit. Lorem ridiculus suscipit ipsum quis in fames ultricies nec quis. Semper nulla adipiscing leo
                    mauris, sed. Eu cras mattis posuere imperdiet id mauris egestas. Ante ipsum nisi, diam quis neque, nunc
                    tortor faucibus. Ullamcorper commodo velit ut ipsum dictum platea ullamcorper vitae neque. Potenti amet
                    lacus nisi massa malesuada etiam mauris vivamus. Lacus amet, at mauris scelerisque. Donec amet ultrices
                    libero, congue. In sapien, viverra sed aenean tristique eget. Porttitor libero dapibus integer tempus,
                    fames diam. Elit lectus eget laoreet enim, diam. Dapibus et ultrices dolor, mauris neque augue faucibus
                    a mauris.
                </p>
                <p>
                    Ullamcorper commodo velit ut ipsum dictum platea ullamcorper vitae neque. Potenti amet lacus nisi massa
                    malesuada etiam mauris vivamus. Lacus amet, at mauris scelerisque. Donec amet ultrices libero, congue.
                </p>
                </div>
            </div>
            <div class="col-span-1 hidden lg:block wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <div class="img_full img-auto 2xl:mt-[-200px]">
                <img src="/theme/frontend/images/portrait-young-asian-female-doctor.png" alt="">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="bg-bottom absolute bottom-0 left-0 w-full z-[1] pointer-events-none hidden lg:block">
        <img src="/theme/frontend/images/logo-bottom.png" alt="">
        </div>
    </section>
    <script>
        ${initWowJs}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/news.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
