@extends('index')
@section('content')
<div class="swiper-container slide-banner__index">
    <div class="swiper-wrapper">
        @foreach ($listBanner as $key => $itemBanner)
        <div class="swiper-slide">
            <a href="{{$itemBanner->link != '' ? $itemBanner->link:'javascript:void(0)'}}" {!!Support::showNofollow($itemBanner)!!} title="{{$itemBanner->name}}" class="link-banner">
                @if ($key == 0)
                @include('image_loader.all',['itemImage'=>$itemBanner,'key'=>'img','noLazyLoad'=>1])
                @else
                @include('image_loader.all',['itemImage'=>$itemBanner,'key'=>'img'])
                @endif
            </a>
        </div>
        @endforeach
    </div>
    <!-- <div class="pagination-all pagination__index justify-center my-0 absolute bottom-2 left-0 z-[1] flex lg:hidden w-full">
    </div>
    <div class="button-banner banner-prev lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer left-[5%] border-[1px] border-solid border-[#fff] text-[1.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </div>
    <div class="button-banner banner-next lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer right-[5%] border-[1px] border-solid border-[#fff] text-[1.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525]">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div> -->
</div>
<section class="2xl:py-10 py-6">
    <div class="container">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#252525] font-semibold 2xl:mb-10 mb-6">{[title_reson_choose_home]}</p>
        <div class="grid grid-cols-2 md:grid-cols-4 sm:gap-4 gap-2">
            @foreach ($listReasonChoose as $key => $itemReasonChoose)
            <div class="col-span-1 wow flipInY" data-wow-delay="{{($key + 1)*0.1}}s">
                <div class="item-reason text-center p-2 rounded transition-all duration-300 hover:shadow-[0_4px_10px_rgba(0,0,0,.3)]">
                    <span class="img xl:w-14 xl:h-14 w-10 h-10 block mx-auto xl:mb-4 mb-2">
                        @include('image_loader.big',['itemImage'=>$itemReasonChoose,'key'=>'img'])
                    </span>
                    <p class="title text-center font-bold text-[#000] uppercase lg:text-[1.125rem] mb-2">{{Support::show($itemReasonChoose,'name')}}</p>
                    <div class="s-content text-justify">{!!Support::show($itemReasonChoose,'content')!!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-service__index 2xl:py-10 py-6 bg-no-repeat bg-cover relative after:bg-[rgba(255,255,255,.5)] after:absolute after:top-0 after:left-0 after:w-full after:h-full" style="background-image: url({Ibg_service_home.imgI});">
    <div class="container relative z-[1]">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#252525] font-semibold lg:mb-24 mb-6">{[title_service_home]}</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($listHotService as $key => $item)
            <div class="col-span-1 wow fadeInUp" data-wow-delay="{{($key + 1)*0.1}}s">
                @include('services.item')
            </div>
            @endforeach
        </div>
    </div>
</section>
@if (count($listQuestion) > 0)
<section class="section-faq__index 2xl:py-10 py-6 bg-no-repeat bg-cover" style="background-image: url({Ibg_frequent_question_home.imgI});">
    <div class="container">
        @php
        $bigItemQuestion = $listQuestion->first();
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-5 2xl:gap-6 gap-4">
            <div class="col-span-1 lg:col-span-3 wow fadeInLeft">
                @if (isset($bigItemQuestion))
                <div class="item-new__main">
                    <a href="{{Support::show($bigItemQuestion,'slug')}}" title="{{Support::show($bigItemQuestion,'name')}}" class="img img__ block c-img 2xl:pt-[66%] pt-[55%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                        @include('image_loader.all',['itemImage'=>$bigItemQuestion,'key'=>'img'])
                    </a>
                    <h3>
                        <a href="{{Support::show($bigItemQuestion,'slug')}}" title="{{Support::show($bigItemQuestion,'name')}}" class="title text-white font-bold lg:text-[1.125rem] uppercase line-clamp-2 2xl:mb-4 mb-2">{{Support::show($bigItemQuestion,'name')}}</a>
                    </h3>
                    <div class="flex gap-4 ">
                        <div class="short_content text-white line-clamp-2 flex-1">{{Support::show($bigItemQuestion,'question')}}</div>
                        <a href="{{Support::show($bigItemQuestion,'slug')}}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-4 rounded-3xl text-[#008EDF] bg-white transition-all duration-300 border-[1px] border-solid border-[#008EDF] hover:shadow-[0_4px_10px_rgba(0,0,0,.3)]">
                            Xem thêm
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>
                @endif
            </div>
            <div class="col-span-1 lg:col-span-2 wow fadeInRight">
                <p class="title-all relative lg:before:absolute lg:before:left-0 lg:before:w-1 lg:before:h-[80%] lg:before:top-1/2 lg:before:-translate-y-1/2 lg:before:bg-white uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-white font-semibold 2xl:mb-8 mb-4 lg:pl-3 text-center lg:text-left">{[title_frequent_question_home]}</p>
                <div class="module-faq 2xl:max-h-[530px] lg:max-h-[415px] lg:overflow-y-auto">
                    @foreach ($listQuestion as $key => $itemSmallQuestion)
                    @if ($key > 0)
                    <div class="item-faq 2xl:mb-5 last:mb-0 mb-4">
                        <p class="question text-white 2xl:text-[1.125rem] mb-3">
                            {{Support::show($itemSmallQuestion,'name')}}
                        </p>
                        <div class="flex items-center gap-4 flex-wrap justify-between">
                            <p class="time font-medium text-[0.813rem] text-white">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                            </p>
                            <a href="{{Support::show($itemSmallQuestion,'slug')}}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#008EDF] bg-white transition-all duration-300 hover:shadow-[0_4px_10px_rgba(0,0,0,.3)]">
                                Trả lời
                                <i class="fa fa-angle-double-right ml-2 relative top-[-1px]" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section class="section-system 2xl:py-10 py-6">
    <div class="container">
        <p class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#252525] font-semibold 2xl:mb-10 mb-6">{[title_base_system_home]}</p>
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
                                <p class="item relative pl-7 mb-3 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.116 14.187C5.562 14.655 3 15.96 3 17.5C3 19.433 7.029 21 12 21C16.971 21 21 19.433 21 17.5C21 15.96 18.438 14.655 14.884 14.187" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 7.833C18 4.612 15.314 2 12 2C8.686 2 6 4.612 6 7.833C6 12.208 12 17 12 17C12 17 18 12.208 18 7.833Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4142 6.58579C14.1953 7.36684 14.1953 8.63317 13.4142 9.41422C12.6332 10.1953 11.3668 10.1953 10.5858 9.41422C9.80474 8.63317 9.80474 7.36684 10.5858 6.58579C11.3668 5.80474 12.6332 5.80474 13.4142 6.58579" fill="white" />
                                        <path d="M13.4142 6.58579C14.1953 7.36684 14.1953 8.63317 13.4142 9.41422C12.6332 10.1953 11.3668 10.1953 10.5858 9.41422C9.80474 8.63317 9.80474 7.36684 10.5858 6.58579C11.3668 5.80474 12.6332 5.80474 13.4142 6.58579" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text text-[#252525] font-bold">{{Support::show($itemBranchSystem,'full_address')}}</span>
                                </p>
                                <p class="item relative pl-7 mb-3 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9645 16.61L17.7915 15.437C17.2055 14.851 16.2555 14.851 15.6705 15.437L14.7485 16.359C14.5425 16.565 14.2305 16.634 13.9645 16.517C12.6285 15.932 11.3085 15.045 10.1315 13.868C8.95954 12.696 8.07554 11.382 7.48954 10.051C7.36754 9.77597 7.43854 9.45297 7.65154 9.23997L8.47754 8.41397C9.14854 7.74297 9.14854 6.79397 8.56254 6.20797L7.38954 5.03497C6.60854 4.25397 5.34254 4.25397 4.56154 5.03497L3.90954 5.68597C3.16854 6.42697 2.85954 7.49597 3.05954 8.55597C3.55354 11.169 5.07154 14.03 7.52054 16.479C9.96954 18.928 12.8305 20.446 15.4435 20.94C16.5035 21.14 17.5725 20.831 18.3135 20.09L18.9645 19.439C19.7455 18.658 19.7455 17.392 18.9645 16.61V16.61Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13 6.99097C14.031 6.97697 15.067 7.35897 15.854 8.14597" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.682 5.31799C17.113 3.74899 15.056 2.96399 13 2.96399" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.0085 11C17.0225 9.969 16.6405 8.933 15.8535 8.146" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.6816 5.31799C20.2506 6.88699 21.0356 8.94399 21.0356 11" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <a href="tel:{{Support::show($itemBranchSystem,'phone')}}" title="hotline" class="text font-bold text-[#252525] font-bold">{{Support::show($itemBranchSystem,'phone')}}</a>
                                </p>
                                <p class="item relative pl-7 mb-3 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6004 20H10.4004" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 10.032V10V10C17 7.239 14.761 5 12 5V5C9.239 5 7 7.239 7 10V10V10.032V12.504C7 12.828 6.817 13.123 6.528 13.268L6.025 13.519C5.397 13.834 5 14.476 5 15.178V15.178C5 16.202 5.83 17.032 6.854 17.032H17.146C18.17 17.032 19 16.202 19 15.178V15.178C19 14.476 18.603 13.834 17.975 13.52L17.472 13.269C17.183 13.123 17 12.828 17 12.504V10.032Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.9512 6.04895C18.2392 4.79895 17.2012 3.76095 15.9512 3.04895" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.04883 6.04895C5.76083 4.79895 6.79883 3.76095 8.04883 3.04895" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text text-[#252525]">
                                        Giờ mở cửa: <strong class="font-bold ">{{Support::show($itemBranchSystem,'open_time')}}</strong>
                                    </span>
                                </p>
                                <p class="item relative pl-7 mb-3 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 13.0005H16.0015" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 13.0005H17.0019" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="2.99609" y="2.99622" width="18.0075" height="18.0075" rx="3" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.0036 7.99838H2.99609" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.9963 1.99585V3.99668" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.0022 1.99585V3.99668" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.99609 12.7263L7.91548 13.5546L9.76625 11.8879" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 17.002H17.0019" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.99609 16.728L7.91548 17.5563L9.76725 15.8896" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text text-[#252525]">
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
            <div class="button-circle button-circle__prev system_prev 2xl:w-10 2xl:h-10  h-8 w-8 rounded-full lg:flex hidden items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:-left-14 lg:left-[-28px] border-[1px] border-solid border-[#0557ac] text-[1.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white">
                <i class="fa fa-angle-left relative top-[-2px]" aria-hidden="true"></i>
            </div>
            <div class="button-circle button-circle__next system_next 2xl:w-10 2xl:h-10  h-8 w-8 rounded-full lg:flex hidden items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:-right-14 lg:right-[-28px] border-[1px] border-solid border-[#0557ac] text-[1.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white">
                <i class="fa fa-angle-right relative top-[-2px]" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
@if (count($listHomeNews) > 0)
<section class="section-new__index 2xl:py-10 py-6 bg-[#F5F5F5]">
    <div class="container">
        <h2 class="title-all text-center uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#252525] font-semibold 2xl:mb-10 mb-6">{[title_new_home]}</h2>
        @php
        $bigItemNews = $listHomeNews->first();
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-2 2xl:gap-6 gap-4 module-new__index">
            @if (isset($bigItemNews))
            <div class="col-span-1 wow fadeInLeft">
                <div class="item-new__main">
                    <a href="{{Support::show($bigItemNews,'slug')}}" title="{{Support::show($bigItemNews,'name')}}" class="img img__ block c-img pt-[54%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
                        @include('image_loader.all',['itemImage'=>$bigItemNews,'key'=>'img'])
                    </a>
                    <h3>
                        <a href="{{Support::show($bigItemNews,'slug')}}" title="{{Support::show($bigItemNews,'name')}}" class="title text-[#262626] font-bold lg:text-[1.125rem] line-clamp-2 2xl:mb-4 mb-2">{{Support::show($bigItemNews,'name')}}</a>
                    </h3>
                    <div class="short_content line-clamp-2">{{Support::show($bigItemNews,'short_content')}}</div>

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
                        <a href="{{Support::show($itemSmall,'slug')}}" title="Xem thêm" class=" lg:text-[0.875rem] text-[#008EDF] transition-all duration-300">
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