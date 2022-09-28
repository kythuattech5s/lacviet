export default {
    id: "new_no_link",
    label: "Tin tức",
    category: "Landing",
    media: `<div class="mx-auto text-center">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="mx-auto">
            <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z" />
        </svg>
    </div>`,
    content: `<section class="2xl:py-10 py-6">
        <div class="container">
            <div class="grid grid-cols-2 2xl:gap-6 gap-4 items-center">
                <div class="col-span-1">
                    <div class="img_full rounded-2xl overflow-hidden">
                        <img src="theme/frontend/images/news-main.jpg" alt="">
                    </div>
                </div>
                <div class="col-span-1">
                    <p class="title font-bold 2xl:text-[1.25rem] uppercase 2xl:mb-6 mb-4">
                        Lorem ipsum dolor sit amet, consectetur
                    </p>
                    <div class="s-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </div>
                </div>
            </div>

        </div>
    </section>`,
    activate: true,
    select: true,
};
