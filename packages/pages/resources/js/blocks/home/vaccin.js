import { initWowJs } from "../../plugins/wow";
export default {
    id: "vaccin",
    label: "Vaccin",
    category: "Trang chủ",
    media: `<div class="mx-auto text-center"> <img src="/theme/frontend/images/vaccin.png" alt="" /> </div>`,
    content: `
        <section class="section-all service-vaccin pb-6">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 gap-4 items-center">
                    <div class="col-span-1 relative z-[1]">
                        <h2 class="title-big font-bold 2xl:text-[3.75rem] lg:text-[2rem] text-[#252525] w-auto lg:mr-[-18.75rem] 2xl:mb-6 lg:mb-4 mb-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"> Dịch vụ Tiêm chủng Vắc-xin <br> Bảo vệ bản thân, bảo vệ mọi người </h2>
                        <div class="short_content 2xl:mb-12 lg:mb-6 mb-4 wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;"> Vắc-xin ra đời được coi là một trong những thành tựu vĩ đại của nhân loại. Nhờ có Vắc xin, hàng triệu người trên thế giới tránh được nguy cơ tử vong và những di chứng, dị tật suốt đời do các bệnh truyền nhiễm như sởi, quai bị, rubella, thủy đậu, uốn ván... </div>
                        <div class="block sm:flex items-center button-action 2xl:gap-x-6 gap-x-4 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <a href="#" title="Đăng ký tư vấn" class="uppercase btn-orange mb-2 sm:mb-0 w-full sm:w-auto inline-flex items-center justify-center py-3 px-5 rounded-3xl bg-gradient-to-b from-[#ffb469] to-[#E57709] text-white font-bold shadow-[0_8px_16px_rgba(229,119,9,.35)]"> <img src="/theme/frontend/images/icon-note.png" alt="icon" class="icon mr-2">
                                <p class="relative z-10">Đăng ký tư vấn</p>
                            </a> <a href="#" title="Quy trình tiêm chủng" class="uppercase btn-border__orange w-full sm:w-auto inline-flex items-center justify-center py-3 px-5 rounded-3xl border-[1px] border-solid border-[#E57709] text-[#E57709] font-bold transition-all duration-300 hover:bg-[#E57709] hover:text-white"> Quy trình tiêm chủng</a> </div>
                    </div>
                    <div class="col-span-1 img-banner relative order-first lg:order-last"> 
                    <img src="/theme/frontend/images/banner-vaxin.png" alt="" class="max-w-[unset] w-auto">
                        <div class="box-text-statis w-fit 2xl:ml-48 lg:ml-24 ml-12 lg:-mt-12 -mt-8 mr-auto flex items-center relative z-[1] bg-white shadow-[0_8px_40px_rgba(0,0,0,.15)] lg:p-4 p-2 lg:pr-10 pr-5 rounded-2xl wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> <span class="icon 2xl:w-20 2xl:h-20 lg:w-14 lg:h-14 w-12 h-12 shrink-0 mr-4"> <img src="/theme/frontend/images/head-blue.png" alt="icon"> </span>
                            <div class="text-ct">
                                <p class="count font-bold 2xl:text-[2.5rem] lg:text-[1.875rem] text-[1.25rem]"> 95% </p>
                                <p class="text">Hiệu quả, an toàn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            ${initWowJs}
        </script>
    `,
    // The component `image` is activatable (shows the Asset Manager).
    // We want to activate it once dropped in the canvas.
    activate: true,
    select: true,
    // select: true, // Default with `activate: true`
};
