export default {
    id: "news_call",
    label: "Báo trí nói gì về Lạc Việt",
    category: "Basic",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: ` <section class="section-new__landing 2xl:py-10 py-6">
        <div class="container">
            <h2
                class="title title-landing text-center font-['Every',sans-serif] uppercase text-[#0a68c8] 2xl:text-[3.5rem] lg:text-[2rem] text-[1.25rem] mb-2">
                Báo chí - Truyền hình
            </h2>
            <p class="sub-title text-center font-semibold text-[#323232] 2xl:mb-6 mb-4">
                nói gì về Lạc Việt Intech
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="col-span-1">
                    <div class="img-new img__ c-img pt-[50%] mb-4">
                        <img src="theme/frontend/images/news-main.jpg" alt="">
                    </div>
                    <a href="#" title="" class="video-new c-img block pt-[50%] group">
                        <img src="theme/frontend/images/news-main.jpg" alt="">
                        <div class="shadow absolute top-0 left-0 w-full h-full flex items-center justify-center ">
                            <span
                                class="play-video flex items-center justify-center rounded-full 2xl:w-20 2xl:h-20 lg:w-14 lg:h-14 w-10 h-10 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.25rem] text-white bg-[rgba(0,0,0,.4)] transition-all duration-300 group-hover:scale-[1.1]">
                                <i class="fa fa-play relative left-1" aria-hidden="true"></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-span-1">
                    <div class="list-new__item scroll-left text-left 2xl:max-h-[855px] lg:max-h-[590px] 2xl:mb-8 mb-4">
                        <div class="item-new__landing flex lg:flex-row-reverse items-center 2xl:mb-6 mb-4 last:mb-0">
                            <div class="image sm:w-60 w-44 shrink-0 2xl:mr-4 mr-2">
                                <a href="#" title="" class="img img__ block c-img pt-[60%]">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </a>
                            </div>
                            <div class="content flex-1">
                                <h3>
                                    <a href="#" title=""
                                        class="title font-semibold line-clamp-2 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] 2xl:mb-4 mb-2">
                                        Đột phá công nghệ-bước tiến mới trong niềng răng nền nha khoa Việt
                                    </a>
                                </h3>
                                <div class="short_content line-clamp-2 2xl:mb-4 mb-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, velit iusto at
                                    pariatur culpa cumque quasi, voluptatem id hic provident sequi possimus reiciendis
                                    praesentium. Delectus quae optio et eos illo!
                                </div>
                                <a href="#" title="Đọc tiếp" class="readmore text-[#5eb569]">Đọc tiếp</a>
                            </div>
                        </div>
                        <div class="item-new__landing flex lg:flex-row-reverse items-center 2xl:mb-6 mb-4 last:mb-0">
                            <div class="image sm:w-60 w-44 shrink-0 2xl:mr-4 mr-2">
                                <a href="#" title="" class="img img__ block c-img pt-[60%]">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </a>
                            </div>
                            <div class="content flex-1">
                                <h3>
                                    <a href="#" title=""
                                        class="title font-semibold line-clamp-2 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] 2xl:mb-4 mb-2">
                                        Đột phá công nghệ-bước tiến mới trong niềng răng nền nha khoa Việt
                                    </a>
                                </h3>
                                <div class="short_content line-clamp-2 2xl:mb-4 mb-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, velit iusto at
                                    pariatur culpa cumque quasi, voluptatem id hic provident sequi possimus reiciendis
                                    praesentium. Delectus quae optio et eos illo!
                                </div>
                                <a href="#" title="Đọc tiếp" class="readmore text-[#5eb569]">Đọc tiếp</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>`,
    activate: true,
    select: true,
};
