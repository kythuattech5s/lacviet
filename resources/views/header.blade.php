<header class="header fixed top-0 left-0 w-full z-50">
    @if (isset($isHome) && $isHome == 1)
    <h1 class="hidden">{[site_name]}</h1>
    @endif
    <div class="header-top bg-white relative py-2">
        <div class="h-lang hidden lg:flex items-center absolute top-1/2 right-4 -translate-y-1/2">
            <a href="javascript:void(0)" class="btn-change-lang-en" onclick="doGTranslate('vi|en');return false;" title="Tiếng anh">
                <img src="theme/frontend/images/en.png" alt="En icon">
            </a>
            <a href="javascript:void(0)" class="btn-change-lang-vi" onclick="restoDefaultLanguage();return false;" title="Vietnamese">
                <img src="theme/frontend/images/vn.png" alt="Vi icon">
            </a>
        </div>
        <div class="container flex items-center justify-between lg:justify-start gap-6 relative">
            <span class="show-menu-mobile text-[#028cde] text-[1.875rem] block lg:hidden">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
            <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="logo-header block">
                @include('image_loader.config.tiny',['config_key'=>'logo','noLazyLoad'=>1])
            </a>
            <form action="{{\VRoute::get("search")}}" method="get" class="form-search-header min-w-[290px] hidden lg:block relative flex-1" accept-charset="utf8">
                <input type="text" placeholder="Bạn cần tìm gì?" name="q" class="form-control lg:px-7 px-5 py-2 w-full bg-white rounded-3xl border-[1px] border-[#a2a2a2] border-solid">
                <button type="submit" class="btn-search absolute top-1/2 right-4 -translate-y-1/2 z-[1]">
                    <img src="theme/frontend/images/icon-search.png" alt="search">

                </button>
            </form>
            <div class="head-action hidden lg:flex items-center justify-end gap-x-4">
                <a href="tel:{[hotline]}" class="h-hotline flex items-center" title="Hotline">
                    <img src="theme/frontend/images/h-hotline.svg" class="w-12 h-12 object-contain mr-2" alt="hotline">
                    <p class="content">
                        <span class="title block font-semibold text-[#028cde] 2xl:text-[1.125rem]">Hotline</span>
                        <span class="phone font-bold text-[#f53632] 2xl:text-[1.125rem]">{[hotline]}</span>
                    </p>
                </a>
                <div class="flex flex-wrap gap-4 justify-end">
                    <a href="{{VRoute::get('orderExaminationSchedule')}}" title="Đăng ký khám" class=" btn-red font-bold inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        <svg width="25" height="24" class="mr-1 shrink-0" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0005 13.0005H16.5019" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.0005 13.0005H17.5024" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <rect x="3.49658" y="2.99634" width="18.0075" height="18.0075" rx="3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.5041 7.9985H3.49658" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.49826 1.99585V3.99668" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5022 1.99585V3.99668" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.49805 12.7265L8.41743 13.5549L10.2682 11.8882" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.0005 17.0022H17.5024" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.49805 16.728L8.41743 17.5563L10.2692 15.8896" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Đăng ký khám
                    </a>
                    <!-- <a href="{{VRoute::get('medicalRecordLookup')}}" title="Tra cứu bệnh án" class=" btn-blue inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        <svg width="24" height="24" class="mr-1 shrink-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0037 8.99884V4.99717C20.0037 3.89214 19.1079 2.99634 18.0028 2.99634H4.99742C3.89239 2.99634 2.99658 3.89214 2.99658 4.99717V19.003C2.99658 20.108 3.89239 21.0038 4.99742 21.0038H9.9995" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 6.99801H16.0018" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 10.9997H12.0001" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 15.0014H9.9993" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.0039 21.0039L19.3643 19.3643" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.726 13.0005C18.7836 13.0005 20.4516 14.6685 20.4516 16.726C20.4516 18.7836 18.7836 20.4516 16.726 20.4516C14.6685 20.4516 13.0005 18.7836 13.0005 16.726C13.0006 14.6685 14.6685 13.0006 16.726 13.0005" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Tra cứu bệnh án
                    </a> -->
                    <a href="jvascript:void(0)" title="Tra cứu bệnh án" onclick="MORE_FUNCTION.showModal(this);" data-modal="modal_look_up" class=" btn-blue font-bold inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        <svg width="24" height="24" class="mr-1 shrink-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0037 8.99884V4.99717C20.0037 3.89214 19.1079 2.99634 18.0028 2.99634H4.99742C3.89239 2.99634 2.99658 3.89214 2.99658 4.99717V19.003C2.99658 20.108 3.89239 21.0038 4.99742 21.0038H9.9995" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 6.99801H16.0018" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 10.9997H12.0001" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.99805 15.0014H9.9993" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.0039 21.0039L19.3643 19.3643" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.726 13.0005C18.7836 13.0005 20.4516 14.6685 20.4516 16.726C20.4516 18.7836 18.7836 20.4516 16.726 20.4516C14.6685 20.4516 13.0005 18.7836 13.0005 16.726C13.0006 14.6685 14.6685 13.0006 16.726 13.0005" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Tra cứu bệnh án
                    </a>
                </div>

            </div>
            <div class="button-action-mobile flex lg:hidden items-center gap-2">
                <a href="tel:{[hotline]}" class="hotline block" title="Hotline">
                    <img src="theme/frontend/images/h-hotline.svg" class="w-8 h-8 object-contain" alt="">
                </a>
                <span class="show-form-search">
                    <img src="theme/frontend/images/show-search.png" class="w-8 h-8 object-contain" alt="">
                </span>
            </div>
        </div>
    </div>
    <div class="header-nav bg-[#028cde]">
        <div class="container flex justify-between">
            <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="go-home hidden lg:flex items-center justify-center text-white text-[1.875rem] w-[53px] lg:mr-10">
                <i class="fa fa-home" aria-hidden="true"></i>
            </a>

            <div class="menu">
                <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="logo-mobile block lg:hidden mb-6">
                    @include('image_loader.config.tiny',['config_key'=>'logo','noLazyLoad'=>1])
                </a>

                @php
                $menus = Support::getMenuRecursive(1);
                @endphp
                {{Support::showMenuRecursive($menus,0)}}
                <form action="" method="" class="form relative mt-5 block lg:hidden">
                    <button class="btn-search absolute top-1/2 left-1 -translate-y-1/2">
                        <svg width="24" height="24" class="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0037 8.99884V4.99717C20.0037 3.89214 19.1079 2.99634 18.0028 2.99634H4.99742C3.89239 2.99634 2.99658 3.89214 2.99658 4.99717V19.003C2.99658 20.108 3.89239 21.0038 4.99742 21.0038H9.9995" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.99805 6.99801H16.0018" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.99805 10.9997H12.0001" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.99805 15.0014H9.9993" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M21.0039 21.0039L19.3643 19.3643" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M16.726 13.0005C18.7836 13.0005 20.4516 14.6685 20.4516 16.726C20.4516 18.7836 18.7836 20.4516 16.726 20.4516C14.6685 20.4516 13.0005 18.7836 13.0005 16.726C13.0006 14.6685 14.6685 13.0006 16.726 13.0005" stroke="#888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <input type="text" name="" placeholder="Tra cứu bệnh án" class="form-control pl-8 w-full p-1 border-[1px] border-solid border-[#c4c4c4] rounded">
                </form>
                <div class="h-lang flex lg:hidden mt-5 items-center">
                    <a href="javascript:void(0)" class="btn-change-lang-en" onclick="doGTranslate('vi|en');return false;" title="Tiếng anh">
                        <img src="theme/frontend/images/en.png" alt="En icon">
                    </a>
                    <a href="javascript:void(0)" class="btn-change-lang-vi" onclick="restoDefaultLanguage();return false;" title="Vietnamese">
                        <img src="theme/frontend/images/vn.png" alt="Vi icon">
                    </a>
                </div>

            </div>
            <div class="over-lay block lg:hidden fixed top-0 right-[-100%] transition-all duration-300 bg-[rgba(0,0,0,.6)] w-full h-full"></div>
        </div>
    </div>
    <div class="form-search-mobile fixed lg:hidden top-[-100%] left-0 w-full h-full bg-[rgba(0,0,0,.7)] z-50 flex items-center justify-center">
        <span class="close-form-search block"></span>
        <form action="{{\VRoute::get("search")}}" method="get" class="form-search flex items-center" accept-charset="utf8">
            <input type="text" name="q" placeholder="Nhập từ khóa..." id="input-search-header" class="form-control bg-transparent text-white placeholder:text-white p-3 outline-none border-b-[1px] border-solid border-white flex-1">
            <button type="submit" class="btn-search text-white text-[1.25rem]"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</header>

<div id="modal_look_up" modal class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="w-full bg-transparent p-6 max-w-[560px] h-full md:h-auto mx-auto relative">
        <!-- <buton class="btn-close absolute top-0 right-0 cursor-pointer z-[1] text-[1.25rem] text-white" data-modal-toggle="button_close_modal" button_close_modal="">
            <i class="fa fa-times" aria-hidden="true"></i>
        </buton> -->
        <form action="" method="" class="bg-white rounded overflow-hidden shadow-[6px_8px_40px_rgba(0,0,0,.2)]">
            <p class="title text-center p-3 border-b-[1px] border-solid border-[#ebebeb] font-semibold uppercase text-[#0557ac] 2xl:text-[25px] lg:text-[20px] text-[16px]">
                Tra cứu bệnh án
            </p>
            <div class="lg:p-8 p-4">
                <div class="relative rounded overflow-hidden ">
                    <input type="text" name="" placeholder="Mã bệnh án" class="form-control bg-[#f8fbfe] w-full border-[1px] border-solid border-[#dbeefa] p-3 rounded text-[#b1b1b1] placeholder:text-[#b1b1b1]">
                    <button class="btn-search absolute top-0 right-0 h-full w-[50px] flex items-center justify-center text-white bg-[#028cde]" type="button" onclick="MORE_FUNCTION.showModal(this);" data-modal="modal_result"><i class="fa fa-search text-[1.25rem]" aria-hidden="true"></i></button>
                </div>
            </div>

        </form>
    </div>
</div>
<div id="modal_result" modal class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="w-full bg-white py-10 max-w-[740px] h-full md:h-auto mx-auto relative">
        <!-- <buton class="btn-close absolute top-0 right-0 cursor-pointer z-[1] text-[1.25rem] text-white" data-modal-toggle="button_close_modal" button_close_modal="">
            <i class="fa fa-times" aria-hidden="true"></i>
        </buton> -->
        <div class="resut-content">
            <p class="head text-white font-bold text-center 2xl:text-[25px] lg:text-[20px] text-[18px] uppercase mb-4 p-1 bg-[#0557ac]">
                Kết quả tra cứu
            </p>
            <div class="content py-6 lg:px-10">
                <div class="box flex flex-wrap gap-1 border-[1px] border-solid border-[dceefb] rounded bg-[#f8fbfe] py-3 px-4 mb-2 ">
                    <span class="title text-[0.875rem]">Họ và tên:</span>
                    <span class="font-semibold text-[0.875rem] text-[#373737]">Nguyễn Văn A</span>
                </div>
                <div class="box flex flex-wrap gap-1 border-[1px] border-solid border-[dceefb] rounded bg-[#f8fbfe] py-3 px-4 mb-2 ">
                    <span class="title text-[0.875rem]">Ngày tháng năm sinh:</span>
                    <span class="font-semibold text-[0.875rem] text-[#373737]">19/05/1995</span>
                </div>
                <div class="box flex flex-wrap gap-1 border-[1px] border-solid border-[dceefb] rounded bg-[#f8fbfe] py-3 px-4 mb-2 ">
                    <span class="title text-[0.875rem] whitespace-nowrap">Nội dung bệnh án:</span>
                    <div class="result_detail img_full">
                        <img src="theme/frontend/images/img-result-4.jpg" alt="">
                    </div>
                </div>
                <div class="box flex flex-wrap gap-1 border-[1px] border-solid border-[dceefb] rounded bg-[#f8fbfe] py-3 px-4 mb-6 ">
                    <span class="title text-[0.875rem]">Lịch hẹn</span>
                    <span class="font-semibold text-[0.875rem] text-[#373737]">25/8/2022</span>
                </div>
                <a href="#" title="Đổi lịch hẹn" class=" btn-red font-bold 2xl:text-[20px] lg:text-[16px] flex w-fit mx-auto min-w-[200px] items-center justify-center  uppercase py-2 px-4 rounded-lg text-white bg-[#f43d3b] transition-all duration-300">Đổi lịch hẹn</a>
            </div>

        </div>
    </div>
</div>