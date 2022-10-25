@extends('index')
@section('content')
<div class="swiper-container slide-banner__index">
    <div class="swiper-wrapper">
        @foreach ($listBanner as $key => $itemBanner)
        <div class="swiper-slide">
            <a href="{{ $itemBanner->link != '' ? $itemBanner->link : 'javascript:void(0)' }}" {!! Support::showNofollow($itemBanner) !!} title="{{ $itemBanner->name }}" class="link-banner">
                @if (Support::isMobile())
                @if ($key == 0)
                @include('image_loader.big', ['itemImage' => $itemBanner, 'key' => 'img_mobile', 'noLazyLoad' => 1])
                @else
                @include('image_loader.big', ['itemImage' => $itemBanner, 'key' => 'img_mobile'])
                @endif
                @else
                @if ($key == 0)
                @include('image_loader.all', ['itemImage' => $itemBanner, 'key' => 'img', 'noLazyLoad' => 1])
                @else
                @include('image_loader.all', ['itemImage' => $itemBanner, 'key' => 'img'])
                @endif
                @endif
            </a>
        </div>
        @endforeach
    </div>
    <div class="button-banner banner-prev 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer left-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </div>
    <div class="button-banner banner-next 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer right-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>
</div>
<section class="py-6 lg:py-14 2xl:py-20">
    <div class="container">
        <p class="title-all lg:mb-14 mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_reson_choose_home]}</p>
        <div class="grid grid-cols-2 2xl:gap-6 gap-4 md:grid-cols-4">
            @foreach ($listReasonChoose as $key => $itemReasonChoose)
            <div class="wow flipInY col-span-1 mb-4 sm:mb-0" data-wow-delay="{{ ($key + 1) * 0.1 }}s">
                <div class="item-reason rounded text-center ">
                    <span class="img img__ block c-img pt-[100%] lg:pt-[108%] lg::mb-4 mb-2 rounded-2xl overflow-hidden">
                        @include('image_loader.big', ['itemImage' => $itemReasonChoose, 'key' => 'img'])
                    </span>

                    <p class="title lg:mb-4 mb-2 text-center font-bold uppercase text-[#000] lg:text-[1.125rem] text-[1rem]">{{ Support::show($itemReasonChoose, 'name') }}</p>
                    <div class="s-content text-justify leading-[1.5] lg:leading-[1.5]">{!! Support::show($itemReasonChoose, 'content') !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-service__index relative bg-cover bg-no-repeat py-6 after:absolute after:top-0 after:left-0 after:h-full after:z-[1] after:w-full after:bg-[rgba(255,255,255,.5)] 2xl:py-10" style="background-image: url({Ibg_service_home.imgI});">
    <div class="container relative z-[2]">
        <p class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:mb-24 lg:text-[1.5rem] 2xl:text-[2rem]">{[title_service_home]}</p>

        @if (Support::isMobile())
        <div class="swiper-container slide-service__mobile">
            <div class="swiper-wrapper">
                @foreach ($listHotService as $key => $item)
                <div class="swiper-slide">
                    @include('services.item')
                </div>
                @endforeach

            </div>
            <div class="button-banner service-prev absolute sm:top-1/2 top-[27%] sm:left-[5%] left-[7%] z-[1] flex md:h-10 md:w-10 w-8 h-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white lg:h-14 lg:w-14">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div class="button-banner service-next absolute sm:top-1/2 top-[27%] sm:right-[5%] right-[7%] z-[1] flex md:h-10 md:w-10 w-8 h-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white lg:h-14 lg:w-14">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
        </div>
        @else
        <div class=" grid-cols-1 2xl:gap-6 gap-4 sm:grid-cols-2 grid lg:grid-cols-4">
            @foreach ($listHotService as $key => $item)
            <div class="wow fadeInUp col-span-1" data-wow-delay="{{ ($key + 1) * 0.1 }}s">
                @include('services.item')
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@if (count($listQuestion) > 0)
<section class="section-faq__index bg-cover bg-no-repeat py-14 lg:py-14 2xl:py-20" style="background-image: url({Ibg_frequent_question_home.imgI});">
    <div class="container">
        @php
        $bigItemQuestion = $listQuestion->first();
        @endphp
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-5 lg:gap-8 2xl:gap-20">
            <div class="wow fadeInLeft col-span-1 lg:col-span-3">
                @if (isset($bigItemQuestion))
                <div class="item-new__main">
                    <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="{{ Support::show($bigItemQuestion, 'name') }}" class="img img__ c-img mb-4 block overflow-hidden rounded-2xl pt-[55%]">
                        @include('image_loader.all', ['itemImage' => $bigItemQuestion, 'key' => 'img'])
                    </a>
                    <h3>
                        <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="{{ Support::show($bigItemQuestion, 'name') }}" class="title line-clamp-2 mb-2 font-bold uppercase text-white lg:text-[1.125rem] text-[1rem] 2xl:mb-4">{{ Support::show($bigItemQuestion, 'name') }}</a>
                    </h3>
                    <div class="short_content line-clamp-2 flex-1 text-white 2xl:mb-4 mb-2">{{ Support::show($bigItemQuestion, 'question') }}</div>

                    <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-4 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        Xem thêm
                        <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
                @endif
            </div>
            <div class="wow fadeInRight col-span-1 lg:col-span-2">
                <p class="title-all relative mb-4 text-center text-[1.25rem] font-semibold uppercase text-white lg:pl-3 lg:text-left lg:text-[2rem] lg:before:absolute lg:before:left-0 lg:before:top-1/2 lg:before:h-[80%] lg:before:w-1 lg:before:-translate-y-1/2 lg:before:bg-white 2xl:mb-8 2xl:text-[2rem]">{[title_frequent_question_home]}</p>
                <div class="module-faq lg:max-h-[415px] lg:overflow-y-auto 2xl:max-h-[530px]">
                    @foreach ($listQuestion as $key => $itemSmallQuestion)
                    @if ($key > 0)
                    <div class="item-faq mb-4 last:mb-0 2xl:mb-5">
                        <p class="question mb-3 text-white 2xl:text-[1.125rem] text-[0.875rem]">
                            {{ Support::show($itemSmallQuestion, 'name') }}
                        </p>
                        <p class="time lg:text-[0.813rem] font-medium italic text-white 2xl:mb-4 mb-2">
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                        </p>

                        <a href="{{ Support::show($itemSmallQuestion, 'slug') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Trả lời
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section class="section-system py-6 2xl:py-14">
    <div class="container">

        <p class="title-all 2xl:mb-10 mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:text-[2rem]">{[title_base_system_home]}</p>
        <div class="boxslide wow fadeInUp relative px-12 lg:px-0">

            <div class="swiper-container slide-system">
                <div class="swiper-wrapper">
                    @foreach ($listBranchSystem as $itemBranchSystem)
                    <div class="swiper-slide">
                        <div class="item-system">
                            <span class="img c-img img__ block overflow-hidden rounded-xl pt-[100%]">
                                @include('image_loader.big', ['itemImage' => $itemBranchSystem, 'key' => 'img'])
                            </span>
                            <div class="system-info p-4">
                                <p class="item relative mb-3 pl-6 last:mb-0">

                                    <i class="fa fa-map-marker text-[#028cde] absolute top-[2px] text-[1rem] left-0" aria-hidden="true"></i>
                                    <span class="text text-[#252525]">{{ Support::show($itemBranchSystem, 'full_address') }}</span>
                                </p>
                                <p class="item relative mb-3 pl-6 last:mb-0">
                                    <img src="theme/frontend/images/phone_blue.png" class=" w-4 object-contain absolute top-[2px] left-0" alt="phone">
                                    <a href="tel:{{ Support::show($itemBranchSystem, 'phone') }}" title="hotline" class="text font-bold font-bold text-[#252525]">{{ Support::show($itemBranchSystem, 'phone') }}</a>
                                </p>
                                <p class="item relative mb-3 pl-6 last:mb-0">
                                    <img src="theme/frontend/images/bell-blue.png" class=" w-4 object-contain absolute top-[2px] left-0" alt="phone">

                                    <span class="text text-[#252525]">
                                        Giờ mở cửa: <strong class="font-bold">{{ Support::show($itemBranchSystem, 'open_time') }}</strong>
                                    </span>
                                </p>
                                <p class="item relative mb-3 pl-6 last:mb-0">
                                    <i class="fa fa-calendar text-[#028cde] absolute top-[2px] text-[1rem] left-0" aria-hidden="true"></i>
                                    <span class="text text-[#252525]">
                                        Ngày hoạt động: <strong class="font-bold">{{ Support::show($itemBranchSystem, 'day_word') }}</strong>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-all pagination-system hidden lg:block"></div>
            </div>
            <div class="button-circle button-circle__prev system_prev absolute sm:top-[30%] top-[27%] z-[1] flex 2xl:h-20 2xl:w-20 w-8 h-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#028cde] 2xl:text-[2.5rem] text-[1.5rem] text-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white 2xl:-left-32 lg:-left-14 lg:flex left-0">
                <i class="fa fa-angle-left relative left-[-1px] top-[-2px]" aria-hidden="true"></i>
            </div>
            <div class="button-circle button-circle__next system_next absolute sm:top-[30%] top-[27%] z-[1] flex 2xl:h-20 2xl:w-20 w-8 h-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#028cde] 2xl:text-[2.5rem] text-[1.5rem] text-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white 2xl:-right-32 lg:-right-14 lg:flex right-0">
                <i class="fa fa-angle-right relative left-[1px] top-[-2px]" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
@if (count($listHomeNews) > 0)
<section class="section-new__index py-10 2xl:py-10 !pt-0">
    <div class="container">
        <h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_new_home]}</h2>

        <div class="module-new__index grid grid-cols-1 gap-4 lg:grid-cols-2 2xl:gap-6">
            @if (isset($videoHome))
            <div class="wow fadeInLeft col-span-1">
                <div class="item-new__main">
                    <a href="{{ Support::show($videoHome, 'link_video') }}" title="{{ Support::show($videoHome, 'name') }}" data-fslightbox="video" class="btn-play-video img img__ c-img mb-2 block overflow-hidden lg:rounded-2xl rounded-lg pt-[54%] 2xl:mb-4">
                        @include('image_loader.all', ['itemImage' => $videoHome, 'key' => 'img'])
                    </a>
                    <h3>
                        <a href="{{ Support::show($videoHome, 'link_video') }}" title="{{ Support::show($videoHome, 'name') }}" class="title line-clamp-2 mb-2 font-bold uppercase text-[#262626] lg:text-[1.25rem] text-[1rem] 2xl:mb-4">{{ Support::show($videoHome, 'name') }}</a>
                    </h3>
                    <div class="short_content line-clamp-2 mb-2">{{ Support::show($videoHome, 'content') }}</div>
                    <a href="{{ Support::show($videoHome, 'link_video') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] lg:py-2 py-1 lg:px-6 px-3 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">

                        Xem thêm
                        <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            @endif
            <div class="wow fadeInRight col-span-1">
                @foreach ($listHomeNews as $key => $itemSmall)
                <div class="list-new__item mb-4 flex gap-3 last:mb-0 2xl:mb-6">
                    <a href="{{ Support::show($itemSmall, 'slug') }}" title="{{ Support::show($itemSmall, 'name') }}" class="img img__ block h-[70px] w-[125px] shrink-0 overflow-hidden lg:rounded-lg rounded sm:h-[100px] sm:w-[180px]">
                        @include('image_loader.big', ['itemImage' => $itemSmall, 'key' => 'img'])
                    </a>
                    <div class="new-content">
                        <h3>
                            <a href="{{ Support::show($itemSmall, 'slug') }}" title="{{ Support::show($itemSmall, 'name') }}" class="title line-clamp-2 font-bold 2xl:text-[1.125rem] uppercase">{{ Support::show($itemSmall, 'name') }}</a>
                        </h3>
                        <div class="short_content line-clamp-2 mb-2">{{ Support::show($itemSmall, 'short_content') }}</div>

                        <a href="{{ Support::show($itemSmall, 'slug') }}" title="Xem thêm" class="btn-white flex w-fit ml-auto mr-0 items-center justify-center lg:text-[0.875rem] lg:py-2 py-1 lg:px-6 px-3 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Xem thêm
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<a href="javascript:void(0)" title="Yêu cầu gọi lại" onclick="MORE_FUNCTION.showModal(this);" data-modal="modalRegis" class="callback hidden lg:flex items-center fixed top-1/2 right-[10px] z-10 -translate-y-1/2">
    <div class="box bg-[#028cde] p-2 2xl:w-20 2xl:h-20 w-16 h-16 rounded-full overflow-hidden shrink-0">
        <span class="ava block w-full h-full rounded-full bg-white overflow-hidden">
            <img src="theme/frontend/images/ava-call.png" alt="">
        </span>
        </d>
    </div>
    <div class="content-text pl-4 -ml-2 2xl:p-2 p-1 bg-[#028cde] text-white">
        <span class="text mr-2">Yêu cầu gọi lại
            <img src="theme/frontend/images/h-hotline.svg" class="w-8 h-8 inline-block object-contain" alt="">
        </span>
    </div>
</a>
<div id="modalRegis"  modal="" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full form-validate">
    <div class="w-full bg-white max-w-[370px] h-full md:h-auto mx-auto relative p-2 rounded-[1.25rem] border-[1px] border-solid border-[#5e8fea]">
        <form action="{{VRoute::get('resgisterAdvise')}}" method="post" class="bg-white rounded-[1.25rem] overflow-hidden shadow-[6px_8px_40px_rgba(0,0,0,.2)] form-validate" absolute data-success="NOTIFICATION.toastrMessageRedirect" accept-charset="utf8">
            <div class="logo-modal text-center p-4">
                <img src="theme/frontend/images/logo.png" class="inline-block" alt="">
            </div>
            <p class="head text-center p-4 font-semibold text-white uppercase lg:text-[22px] text-[18px] bg-[#028cde]">
                Đăng ký tư vấn
            </p>
            <div class="content py-3 px-4">
                @csrf
                <input type="hidden" name="type" value="1">
                <input type="text" name="fullname" placeholder="Họ tên*:" rules="required" class="w-full p-3 bg-[#f2f2f2] text-[#767676] placeholder:text-[#767676] mb-2 outline-none">
                <input type="text" name="phone" placeholder="Điện thoại*:" rules="required||phone" class="w-full p-3 bg-[#f2f2f2] text-[#767676] placeholder:text-[#767676] mb-2 outline-none">
                <?php $services = App\Models\Services::act()->get(); ?>
                <select name="service" class="w-full p-3 bg-[#f2f2f2] text-[#767676] placeholder:text-[#767676] mb-2 outline-none">
                    <option value="">Chọn dịch vụ</option>
                    @foreach($services as $itemService)
                    <option value="{{Support::show($itemService,'name')}}">{{Support::show($itemService,'name')}}</option>
                    @endforeach
                </select>
                <input type="text" name="time" placeholder="Nhập khung giờ gọi lại:" class="w-full p-3 bg-[#f2f2f2] text-[#767676] placeholder:text-[#767676] mb-10 outline-none">
                <button type="submit" class=" btn-red inline-flex w-full items-center justify-center uppercase py-2 px-4 text-white bg-[#fb2317] transition-all duration-300 font-semibold lg:text-[22px] md:text-[18px] text-[14px] mb-3">Hoàn tất</button>
                <p class="text-center font-semibold lg:text-[18px] text-[#028cde]">
                    Bác sĩ sẽ liên hệ ngay với bạn!
                </p>
            </div>
        </form>
    </div>
</div>
@endsection