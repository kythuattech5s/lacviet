<footer class="footer bg-no-repeat bg-cover" style="background-image: url({Ibg_footer.imgI});">
    <div class="footer-top 2xl:pt-10 py-6">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:gap-12 gap-4">
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="logo-footer max-w-[300px] block 2xl:mb-12 mb-6">
                        @include('image_loader.config.all',['config_key'=>'logo_footer','noLazyLoad'=>1])
                    </a>
                    <div class="content-footer text-white mb-4 text-justify">{[footer_content]}</div>
                    <p class="item-info__footer relative pl-6 mb-4 last:mb-0">
                        <i class="fa fa-phone absolute top-[4px] left-0" aria-hidden="true"></i>
                        <a href="tel:{[hotline]}" title="hotline" class="text font-bold">{[hotline]}</a>
                    </p>
                    <p class="item-info__footer relative pl-6 mb-4 last:mb-0">
                        <i class="fa fa-bell absolute top-[4px] left-0" aria-hidden="true"></i>
                        <span class="text font-bold">
                            Giờ mở cửa: {[time_open]}
                        </span>
                    </p>
                    <p class="item-info__footer relative pl-6 mb-4 last:mb-0">
                        <i class="fa fa-calendar absolute top-[4px] left-0" aria-hidden="true"></i>
                        <span class="text font-bold">
                            Ngày hoạt động: {[time_work]}
                        </span>
                    </p>
                    @if (SettingHelper::getSetting('link_dky_bct') != '')
                        <div class="img-certifi hidden md:block 2xl:mt-10 mt-6">
                            <a href="{[link_dky_bct]}" target="_blank" rel="noopener" title="Đã đăng lý bộ công thương">
                                <img src="theme/frontend/images/bct.png" alt="Đã đăng lý bộ công thương">
                            </a>
                        </div>
                    @endif
                </div>
                <div class="col-span-1 lg:pt-12">
                    <p class="title-footer w-fit relative after:h-[2px] after:w-full after:bg-[#f7d274] after:block after:mt-2 font-semibold text-[#f7d274] uppercase 2xl:mb-6 mb-4">
                        Địa chỉ các chi nhánh
                    </p>
                    @php
                        $listBranchSystemProvince = \App\Models\Province::whereHas('branchSystem')->with('branchSystem')->get();
                    @endphp
                    @foreach ($listBranchSystemProvince as $itemBranchSystemProvince)
                        <p class="zone font-bold uppercase pl-6 relative text-[#f7d274] mb-4">
                            <i class="fa fa-map-marker absolute top-[4px] left-0" aria-hidden="true"></i>
                            {{Support::show($itemBranchSystemProvince,'name')}}
                        </p>
                        <ul class="list-branch mb-4 last:mb-0 ml-4">
                            @foreach ($itemBranchSystemProvince->branchSystem as $itemBranchSystem)
                                <li class="mb-4 text-white last:mb-0">{{Support::show($itemBranchSystem,'full_address')}}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="col-span-1 lg:pt-12">
                    <p class="title-footer w-fit relative after:h-[2px] after:w-full after:bg-[#f7d274] after:block after:mt-2 font-semibold text-[#f7d274] uppercase 2xl:mb-6 mb-4">Kết nối với chúng tôi</p>
                    <div class="mb-6">
                        <div class="fb-page" data-href="{[facebook]}" data-tabs="timeline" data-width="" data-height="120" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="{[facebook]}" class="fb-xfbml-parse-ignore"><a href="{[facebook]}">Facebook</a></blockquote></div>
                    </div>
                    <ul class="social-footer">
                        <li class="inline-block mr-5 last:mr-0">
                            <a href="{[facebook]}" title="Youtube" target="_blank" rel="noopener" class="flex items-center justify-center lg:w-10 lg:h-10 w-8 h-8 rounded-full bg-white text-[#044da8] lg:text-[1.25rem] text-[1rem] transition-all duration-300 border-[1px] border-solid border-[#fff] hover:bg-transparent hover:text-white"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                        <li class="inline-block mr-5 last:mr-0">
                            <a href="{[youtube]}" title="Facebook" target="_blank" rel="noopener" class="flex items-center justify-center lg:w-10 lg:h-10 w-8 h-8 rounded-full bg-white text-[#044da8] lg:text-[1.25rem] text-[1rem] transition-all duration-300 border-[1px] border-solid border-[#fff] hover:bg-transparent hover:text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    @if (SettingHelper::getSetting('link_dky_bct') != '')
                        <div class="img-certifi block md:hidden 2xl:mt-10 mt-6">
                            <a href="{[link_dky_bct]}" target="_blank" rel="noopener" title="Đã đăng lý bộ công thương">
                                <img src="theme/frontend/images/bct.png" alt="Đã đăng lý bộ công thương">
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-[#044b95] py-4 text-white">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="col-span-1">
                    <p class="copyright text-white text-center lg:text-left">{[copy_right]}</p>
                </div>
                <div class="col-span-1 hidden lg:block text-center">
                    @php
                        $menus = \App\Models\Menu::where('menu_category_id',2)->get();
                    @endphp
                    @foreach ($menus as $itemMenu)
                        <a href="{{$itemMenu->link == '' ? 'javascript:void(0)':trim($menu->link,'/').'/'}}" title="{{Support::show($itemMenu,'name')}}" class="link-footer text-white inline-block relative" {!!Support::showNofollow($itemMenu)!!}>{{Support::show($itemMenu,'name')}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
    <div class="nav-mobile flex lg:hidden gap-2 fixed bottom-0 left-0 w-full z-20">
        <a href="{{VRoute::get('medicalRecordLookup')}}" title="Tra cứu bệnh án" class="link leading-[1.1] inline-flex items-center justify-center flex-1 text-white rounded-t-xl py-2 px-4 bg-[#f43d3b]">
            <img src="theme/frontend/images/list-search.svg" class="inline-block mr-1 w-5 h-5 object-contain brightnes-[100]" alt="icon">
            Tra cứu bệnh án
        </a>
        <a href="{{VRoute::get('orderExaminationSchedule')}}" title="Đặt lịch khám" class="link leading-[1.1] inline-flex items-center justify-center flex-1 text-white rounded-t-xl py-2 px-4 bg-[#ed9f09]">
            <img src="theme/frontend/images/Calendar.svg" class="inline-block mr-1 w-5 h-5 object-contain brightnes-[100]" alt="icon">
            Đặt lịch
        </a>
        <a href="#" title="" class="link leading-[1.1] inline-flex items-center justify-center flex-1 text-white rounded-t-xl py-2 px-4 bg-[#028cde]">
            <img src="theme/frontend/images/icon-3.png" class="inline-block mr-1 w-5 h-5 object-contain brightnes-[100]" alt="icon">
            Chat ngay
        </a>
    </div>