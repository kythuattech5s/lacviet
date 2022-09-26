@extends('index')
@section('content')
<div class="swiper-container slide-banner__index">
    <div class="swiper-wrapper">
        @foreach ($listBanner as $itemBanner)
            <div class="swiper-slide">
                <a href="{{$itemBanner->link != '' ? $itemBanner->link:'javascript:void(0)'}}" {!!Support::showNofollow($itemBanner)!!} title="{{$itemBanner->name}}" class="link-banner">
                    @include('image_loader.all',['itemImage'=>$itemBanner,'key'=>'img'])
                </a>
            </div>
        @endforeach
    </div>
    <div class="pagination-all pagination__index justify-center my-0 absolute bottom-2 left-0 z-[1] flex lg:hidden w-full">
    </div>
    <div class="button-banner banner-prev 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer left-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </div>
    <div class="button-banner banner-next 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer right-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>
</div>
<section class="2xl:py-10 py-6">
    <div class="container">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#0557ac] font-semibold 2xl:mb-10 mb-6">{[title_reson_choose_home]}</p>
        <div class="grid grid-cols-2 md:grid-cols-4 sm:gap-4 gap-2">
            @foreach ($listReasonChoose as $key => $itemReasonChoose)
                <div class="col-span-1 wow flipInY" data-wow-delay="{{($key + 1)*0.02}}s">
                    <div class="item-reason">
                        <span class="img img__ block c-img pt-[80%] 2xl:mb-4 mb-2 rounded-2xl overflow-hidden">
                            @include('image_loader.big',['itemImage'=>$itemReasonChoose,'key'=>'img'])
                        </span>
                        <p class="title text-center font-bold text-[#000] uppercase lg:text-[1.125rem] mb-2">{{Support::show($itemReasonChoose,'name')}}</p>
                        <div class="s-content text-justify">{{Support::show($itemReasonChoose,'content')}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-service__index 2xl:py-10 py-6 bg-no-repeat bg-cover relative after:bg-[rgba(255,255,255,.5)] after:absolute after:top-0 after:left-0 after:w-full after:h-full" style="background-image: url({Ibg_service_home.imgI});">
    <div class="container relative z-[1]">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#0557ac] font-semibold lg:mb-24 mb-6">{[title_service_home]}</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($listHotService as $key => $item)
                <div class="col-span-1 wow fadeInUp" data-wow-delay="{{($key + 1)*0.02}}s">
                    @include('services.item')
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-faq__index 2xl:py-10 py-6 bg-no-repeat bg-cover" style="background-image: url({Ibg_frequent_question_home.imgI});">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 2xl:gap-6 gap-4">
            <div class="col-span-1 lg:col-span-3 wow fadeInLeft">
                <div class="item-new__main">
                    <a href="#" title=""
                        class="img img__ block c-img 2xl:pt-[66%] pt-[55%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                        <img src="theme/frontend/images/news-main.jpg" alt="">
                    </a>
                    <h3>
                        <a href="#" title=""
                            class="title text-white font-bold lg:text-[1.125rem] uppercase line-clamp-2 2xl:mb-4 mb-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                        </a>
                    </h3>
                    <div class="short_content text-white line-clamp-2 2xl:mb-4 mb-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nemo delectus optio aut nam
                        deleniti beatae,
                        reiciendis a dolor ut. At quidem iure dolores nihil distinctio earum, esse dolore quos.
                    </div>
                    <a href="#" title="Xem thêm"
                        class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-3 px-4 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        Xem thêm
                        <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-span-1 lg:col-span-2 wow fadeInRight">
                <p class="title-all relative lg:before:absolute lg:before:left-0 lg:before:w-1 lg:before:h-[80%] lg:before:top-1/2 lg:before:-translate-y-1/2 lg:before:bg-white uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-white font-semibold 2xl:mb-8 mb-4 lg:pl-3 text-center lg:text-left">{[title_frequent_question_home]}</p>
                <div class="module-faq 2xl:max-h-[530px] lg:max-h-[415px] lg:overflow-y-auto">
                    <div class="item-faq 2xl:mb-5 last:mb-0 mb-4">
                        <p class="question text-white 2xl:text-[1.125rem] mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscingiultrices gravida. Risus commodo viverra
                            maecenas
                            accumsan
                        </p>
                        <p class="time font-medium italic text-[0.813rem] mb-4 text-white">
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                        </p>
                        <a href="#" title="Xem thêm"
                            class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Trả lời
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="item-faq 2xl:mb-5 last:mb-0 mb-4">
                        <p class="question text-white 2xl:text-[1.125rem] mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscingiultrices gravida. Risus commodo viverra
                            maecenas
                            accumsan
                        </p>
                        <p class="time font-medium italic text-[0.813rem] mb-4 text-white">
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                        </p>
                        <a href="#" title="Xem thêm"
                            class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Trả lời
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="item-faq 2xl:mb-5 last:mb-0 mb-4">
                        <p class="question text-white 2xl:text-[1.125rem] mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscingiultrices gravida. Risus commodo viverra
                            maecenas
                            accumsan
                        </p>
                        <p class="time font-medium italic text-[0.813rem] mb-4 text-white">
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                        </p>
                        <a href="#" title="Xem thêm"
                            class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Trả lời
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-system 2xl:py-10 py-6">
    <div class="container">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#0557ac] font-semibold 2xl:mb-10 mb-6">{[title_base_system_home]}</p>
        <div class="boxslide relative wow fadeInUp">
            <div class="swiper-container slide-system">
                <div class="swiper-wrapper">
                    @foreach ($listBranchSystem as $itemBranchSystem)
                        <div class="swiper-slide">
                            <div class="item-system">
                                <span class="img block c-img img__ pt-[80%] rounded-xl overflow-hidden">
                                    @include('image_loader.big',['itemImage'=>$itemBranchSystem,'key'=>'img'])
                                </span>
                                <div class="system-info p-2">
                                    <p class="item relative pl-5 mb-2 last:mb-0">
                                        <i class="fa fa-map-marker text-[#028cde] absolute top-[2px] left-0" aria-hidden="true"></i>
                                        <span class="text text-[#262626]">{{Support::show($itemBranchSystem,'full_address')}}</span>
                                    </p>
                                    <p class="item relative pl-5 mb-2 last:mb-0">
                                        <i class="fa fa-phone text-[#028cde] absolute top-[2px] left-0" aria-hidden="true"></i>
                                        <a href="tel:{{Support::show($itemBranchSystem,'phone')}}" title="hotline" class="text font-bold text-[#262626]">{{Support::show($itemBranchSystem,'phone')}}</a>
                                    </p>
                                    <p class="item relative pl-5 mb-2 last:mb-0">
                                        <i class="fa fa-bell text-[#028cde] absolute top-[2px] left-0" aria-hidden="true"></i>
                                        <span class="text text-[#262626]">
                                            Giờ mở cửa: <strong class="font-bold">{{Support::show($itemBranchSystem,'open_time')}}</strong>
                                        </span>
                                    </p>
                                    <p class="item relative pl-5 mb-2 last:mb-0">
                                        <i class="fa fa-calendar text-[#028cde] absolute top-[2px] left-0" aria-hidden="true"></i>
                                        <span class="text text-[#262626]">
                                            Ngày hoạt động: <strong class="font-bold">{{Support::show($itemBranchSystem,'day_word')}}</strong>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-all pagination-system"></div>
            </div>
            <div
                class="button-circle button-circle__prev system_prev 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full lg:flex hidden items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:left-[-180px] lg:left-[-28px] border-[1px] border-solid border-[#0557ac] text-[2.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div
                class="button-circle button-circle__next system_next 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full lg:flex hidden items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:right-[-180px] lg:right-[-28px] border-[1px] border-solid border-[#0557ac] text-[2.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
@if (count($listHomeNews) > 0)
    <section class="section-new__index 2xl:py-10 py-6">
        <div class="container">
            <h2 class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#0557ac] font-semibold 2xl:mb-10 mb-6">{[title_new_home]}</h2>
            @php
                $bigItem = $listHomeNews->first();
            @endphp
            <div class="grid grid-cols-2 2xl:gap-6 gap-4 module-new__index">
                @if (isset($bigItem))
                    <div class="col-span-1 wow fadeInLeft">
                        <div class="item-new__main">
                            <a href="{{Support::show($bigItem,'slug')}}" title="{{Support::show($bigItem,'name')}}" class="img img__ block c-img pt-[54%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                                @include('image_loader.all',['itemImage'=>$bigItem,'key'=>'img'])
                            </a>
                            <h3>
                                <a href="{{Support::show($bigItem,'slug')}}" title="{{Support::show($bigItem,'name')}}" class="title text-[#262626] font-bold lg:text-[1.125rem] line-clamp-2 2xl:mb-4 mb-2">{{Support::show($bigItem,'name')}}</a>
                            </h3>
                            <div class="short_content line-clamp-2 2xl:mb-4 mb-2">{{Support::show($bigItem,'short_content')}}</div>
                            <a href="{{Support::show($bigItem,'slug')}}" title="Xem thêm"
                                class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                                Xem thêm
                                <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                @endif
                <div class="col-span-1 wow fadeInRight">
                    @foreach ($listHomeNews as $key => $itemSmall)
                        @if ($key > 0)
                            <div class="list-new__item flex gap-3 2xl:mb-6 mb-4 last:mb-0">
                                <a href="{{Support::show($itemSmall,'slug')}}" title="{{Support::show($itemSmall,'name')}}" class="img img__ block sm:w-[180px] sm:h-[100px] w-[100px] h-[60px] rounded-lg overflow-hidden shrink-0">
                                    @include('image_loader.big',['itemImage'=>$itemSmall,'key'=>'img'])
                                </a>
                                <div class="new-content">
                                    <h3>
                                        <a href="{{Support::show($itemSmall,'slug')}}" title="{{Support::show($itemSmall,'name')}}" class="title font-bold 2xl:text-[1.125rem] line-clamp-2">{{Support::show($itemSmall,'name')}}</a>
                                    </h3>
                                    <div class="short_content line-clamp-2 mb-2">{{Support::show($itemSmall,'short_content')}}</div>
                                    <a href="{{Support::show($itemSmall,'slug')}}" title="Xem thêm"
                                        class="btn-white flex w-fit ml-auto mr-0 items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                                        Xem thêm
                                        <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
@endsection