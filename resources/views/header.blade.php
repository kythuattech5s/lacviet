<header class="header">
    @if (isset($isHome) && $isHome == 1)
        <h1 class="hidden">{[site_name]}</h1>
    @endif
    <div class="header-top bg-white relative 2xl:py-6 lg:py-4 py-2">
        <div class="h-lang hidden lg:flex items-center absolute top-1/2 2xl:left-[5%] left-4 -translate-y-1/2">
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
            <form action="{{\VRoute::get("search")}}" method="get" class="form-search-header hidden lg:block relative flex-1" accept-charset="utf8">
                <input type="text" placeholder="Bạn cần tìm gì?" name="q" class="form-control lg:py-3 lg:px-7 px-5 py-2 w-full bg-white rounded-3xl border-[1px] border-[#a2a2a2] border-solid">
                <button type="submit" class="btn-search absolute top-1/2 right-4 -translate-y-1/2 z-[1]">
                    <img src="theme/frontend/images/icon-search.png" alt="search">
                </button>
            </form>
            <div class="head-action hidden lg:flex items-center justify-end gap-x-4">
                <a href="tel:{[hotline]}" class="h-hotline flex items-center" title="Hotline">
                    <img src="theme/frontend/images/h-hotline.svg" class="w-10 h-10 object-contain mr-2" alt="hotline">
                    <p class="content">
                        <span class="title block font-semibold text-[#028cde] 2xl:text-[1.125rem]">Hotline</span>
                        <span class="phone font-bold text-[#f53632] 2xl:text-[1.125rem]">{[hotline]}</span>
                    </p>
                </a>
                <a href="{{VRoute::get('orderExaminationSchedule')}}" title="Đăng ký khám" class="btn-red inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                    Đăng ký khám
                </a>
                <a href="{{VRoute::get('medicalRecordLookup')}}" title="Tra cứu bệnh án" class="btn-blue inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                    Tra cứu bệnh án
                </a>
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
        <div class="container flex items-center justify-between">
            <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="go-home hidden lg:block text-white text-[1.875rem] lg:mr-10">
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
                <div class="h-lang flex lg:hidden mt-3 items-center px-4">
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
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "url": "{{url()->to('/')}}",
                "potentialAction": {
                  "@type": "SearchAction",
                  "target": "{{url()->to(\VRoute::get("search"))}}?q={query}",
                  "query": "required"
                }
            }
        </script>
    </div>
</header>