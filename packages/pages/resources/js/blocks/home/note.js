import { initWowJs } from "../../plugins/wow";

export default {
    id: "note",
    label: "Note",
    category: "Trang chủ",
    content: `
    <section class="section-all necessary-note lg:py-8 py-6">
        <div class="container mx-auto">
        <p class="title-all font-bold text-center text-[#252525] 2xl:text-[1.875rem] lg:text-[1.5rem] text-[1.125rem] relative after:w-28 lg:after:h-1 after:h-[2px] after:bg-gradient-to-r after:from-[#4EBEFF] after:to-[#0679BB] after:block 2xl:after:mt-t lg:after:mt-4 after:mx-auto after:mt-2 2xl:mb-10 mb-6">
            Những lưu ý cần thiết dành cho khách hàng
        </p>
        <div class="module-content 2xl:pt-20 lg:pt-10 bg-no-repeat bg-cover bg-center" style="background-image: url(/theme/frontend/images/bg-map.png);">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 gap-2 items-center mb-3">
            <div class="col-span-1 note-content__left">
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
        
            </div>
            <div class="col-span-2 hidden lg:block">
                <div class="img-note-main relative z-[1]">
                <img src="/theme/frontend/images/border.png" class="mx-auto" alt="">
                <span class="img-main">
                    <img src="/theme/frontend/images/bacsi.png" alt="" class="relative z-10">
                </span>
                </div>
            </div>
            <div class="col-span-1 note-content__right">
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
                <div class="item-note group bg-white 2xl:py-4 2xl:px-6 lg:p-4 p-2 rounded-2xl shadow-[0_8px_48px_rgba(40,145,204,.2)] 2xl:mb-10 lg:mb-6 mb-4 last:mb-0 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <p class="title font-bold group-hover:text-[#2891CC] transition-all duration-300 text-[#252525] mb-2">Cần
                    chuẩn bị gì trước khi đăng ký gói dịch vụ?</p>
                <p class="desc lg:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien, nec morbi
                    mauris, turpis
                    fringilla condimentum urna sagittis est. Id tortor odio posuere a cursus netus massa.</p>
                </div>
        
            </div>
            </div>
            <a href="#" title="Đăng ký tư vấn" class="uppercase btn-orange flex w-fit mx-auto items-center justify-center py-3 px-5 rounded-3xl bg-gradient-to-b from-[#FFB469] to-[#E57709] text-white font-bold shadow-[0_8px_16px_rgba(229,119,9,.35)] wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="/theme/frontend/images/icon-note.png" alt="icon" class="icon mr-2">
            Đăng ký tư vấn</a>
        </div>
        </div>
    </section>
    <script>
        ${initWowJs}
    </script>
    `,
    media: `<div class="mx-auto text-center">
        <img src="/theme/frontend/images/note.png" alt="" />
    </div>`,
    activate: true,
    select: true,
};
