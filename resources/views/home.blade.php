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
<section class="py-6 lg:py-14">
    <div class="container">
        <p class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_reson_choose_home]}</p>
        <div class="grid grid-cols-2 gap-2 sm:gap-4 md:grid-cols-4">
            @foreach ($listReasonChoose as $key => $itemReasonChoose)
            <div class="wow flipInY col-span-1" data-wow-delay="{{ ($key + 1) * 0.1 }}s">
                <div class="item-reason rounded text-center ">
                    <span class="img img__ block c-img pt-[80%] 2xl:mb-4 mb-2 rounded-2xl overflow-hidden">
                        @include('image_loader.big', ['itemImage' => $itemReasonChoose, 'key' => 'img'])
                    </span>

                    <p class="title mb-2 text-center font-bold uppercase text-[#000] lg:text-[1.125rem]">{{ Support::show($itemReasonChoose, 'name') }}</p>
                    <div class="s-content text-justify">{!! Support::show($itemReasonChoose, 'content') !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-service__index relative bg-cover bg-no-repeat py-6 after:absolute after:top-0 after:left-0 after:h-full after:z-[1] after:w-full after:bg-[rgba(255,255,255,.5)] 2xl:py-10" style="background-image: url({Ibg_service_home.imgI});">
    <div class="container relative z-[2]">
        <p class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:mb-24 lg:text-[1.5rem] 2xl:text-[2rem]">{[title_service_home]}</p>

        @if (Support::isMobile())
        <div class="swiper-container slide-service__mobile">
            <div class="swiper-wrapper">
                @foreach ($listHotService as $key => $item)
                <div class="swiper-slide">
                    @include('services.item')
                </div>
                @endforeach

            </div>
            <div class="button-banner service-prev absolute top-1/2 left-[5%] z-[1] flex h-10 w-10 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white lg:h-14 lg:w-14">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
            <div class="button-banner service-next absolute top-1/2 right-[5%] z-[1] flex h-10 w-10 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white lg:h-14 lg:w-14">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
        </div>
        @else
        <div class=" grid-cols-1 gap-4 sm:grid-cols-2 grid lg:grid-cols-4">
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
<section class="section-faq__index bg-cover bg-no-repeat py-6 2xl:py-10" style="background-image: url({Ibg_frequent_question_home.imgI});">
    <div class="container">
        @php
        $bigItemQuestion = $listQuestion->first();
        @endphp
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-5 2xl:gap-6">
            <div class="wow fadeInLeft col-span-1 lg:col-span-3">
                @if (isset($bigItemQuestion))
                <div class="item-new__main">
                    <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="{{ Support::show($bigItemQuestion, 'name') }}" class="img img__ c-img mb-2 block overflow-hidden rounded-2xl pt-[55%] 2xl:mb-4 2xl:pt-[66%]">
                        @include('image_loader.all', ['itemImage' => $bigItemQuestion, 'key' => 'img'])
                    </a>
                    <h3>
                        <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="{{ Support::show($bigItemQuestion, 'name') }}" class="title line-clamp-2 mb-2 font-bold uppercase text-white lg:text-[1.125rem] 2xl:mb-4">{{ Support::show($bigItemQuestion, 'name') }}</a>
                    </h3>
                    <div class="flex gap-4">
                        <div class="short_content line-clamp-2 flex-1 text-white">{{ Support::show($bigItemQuestion, 'question') }}</div>
                        <a href="{{ Support::show($bigItemQuestion, 'slug') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center rounded-3xl border-[1px] border-solid border-[#008EDF] bg-white py-2 px-4 text-[#008EDF] transition-all duration-300 hover:shadow-[0_4px_10px_rgba(0,0,0,.3)] lg:text-[0.875rem]">
                            Xem thêm
                            <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>
                @endif
            </div>
            <div class="wow fadeInRight col-span-1 lg:col-span-2">
                <p class="title-all relative mb-4 text-center text-[1.25rem] font-semibold uppercase text-white lg:pl-3 lg:text-left lg:text-[1.5rem] lg:before:absolute lg:before:left-0 lg:before:top-1/2 lg:before:h-[80%] lg:before:w-1 lg:before:-translate-y-1/2 lg:before:bg-white 2xl:mb-8 2xl:text-[2rem]">{[title_frequent_question_home]}</p>
                <div class="module-faq lg:max-h-[415px] lg:overflow-y-auto 2xl:max-h-[530px]">
                    @foreach ($listQuestion as $key => $itemSmallQuestion)
                    @if ($key > 0)
                    <div class="item-faq mb-4 last:mb-0 2xl:mb-5">
                        <p class="question mb-3 text-white 2xl:text-[1.125rem]">
                            {{ Support::show($itemSmallQuestion, 'name') }}
                        </p>
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <p class="time text-[0.813rem] font-medium text-white">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 0707/2022
                            </p>
                            <a href="{{ Support::show($itemSmallQuestion, 'slug') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center rounded-3xl bg-white py-2 px-6 text-[#008EDF] transition-all duration-300 hover:shadow-[0_4px_10px_rgba(0,0,0,.3)] lg:text-[0.875rem]">
                                Trả lời
                                <i class="fa fa-angle-double-right relative top-[-1px] ml-2" aria-hidden="true"></i>
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
<section class="section-system py-6 2xl:py-10">
    <div class="container">
        <p class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_base_system_home]}</p>
        <div class="boxslide wow fadeInUp relative px-10 lg:px-0">
            <div class="swiper-container slide-system">
                <div class="swiper-wrapper">
                    @foreach ($listBranchSystem as $itemBranchSystem)
                    <div class="swiper-slide">
                        <div class="item-system">
                            <span class="img c-img img__ block overflow-hidden rounded-xl pt-[80%]">
                                @include('image_loader.big', ['itemImage' => $itemBranchSystem, 'key' => 'img'])
                            </span>
                            <div class="system-info p-2">
                                <p class="item relative mb-3 pl-7 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.116 14.187C5.562 14.655 3 15.96 3 17.5C3 19.433 7.029 21 12 21C16.971 21 21 19.433 21 17.5C21 15.96 18.438 14.655 14.884 14.187" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 7.833C18 4.612 15.314 2 12 2C8.686 2 6 4.612 6 7.833C6 12.208 12 17 12 17C12 17 18 12.208 18 7.833Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4142 6.58579C14.1953 7.36684 14.1953 8.63317 13.4142 9.41422C12.6332 10.1953 11.3668 10.1953 10.5858 9.41422C9.80474 8.63317 9.80474 7.36684 10.5858 6.58579C11.3668 5.80474 12.6332 5.80474 13.4142 6.58579" fill="white" />
                                        <path d="M13.4142 6.58579C14.1953 7.36684 14.1953 8.63317 13.4142 9.41422C12.6332 10.1953 11.3668 10.1953 10.5858 9.41422C9.80474 8.63317 9.80474 7.36684 10.5858 6.58579C11.3668 5.80474 12.6332 5.80474 13.4142 6.58579" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text font-bold text-[#252525]">{{ Support::show($itemBranchSystem, 'full_address') }}</span>
                                </p>
                                <p class="item relative mb-3 pl-7 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9645 16.61L17.7915 15.437C17.2055 14.851 16.2555 14.851 15.6705 15.437L14.7485 16.359C14.5425 16.565 14.2305 16.634 13.9645 16.517C12.6285 15.932 11.3085 15.045 10.1315 13.868C8.95954 12.696 8.07554 11.382 7.48954 10.051C7.36754 9.77597 7.43854 9.45297 7.65154 9.23997L8.47754 8.41397C9.14854 7.74297 9.14854 6.79397 8.56254 6.20797L7.38954 5.03497C6.60854 4.25397 5.34254 4.25397 4.56154 5.03497L3.90954 5.68597C3.16854 6.42697 2.85954 7.49597 3.05954 8.55597C3.55354 11.169 5.07154 14.03 7.52054 16.479C9.96954 18.928 12.8305 20.446 15.4435 20.94C16.5035 21.14 17.5725 20.831 18.3135 20.09L18.9645 19.439C19.7455 18.658 19.7455 17.392 18.9645 16.61V16.61Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13 6.99097C14.031 6.97697 15.067 7.35897 15.854 8.14597" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.682 5.31799C17.113 3.74899 15.056 2.96399 13 2.96399" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.0085 11C17.0225 9.969 16.6405 8.933 15.8535 8.146" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.6816 5.31799C20.2506 6.88699 21.0356 8.94399 21.0356 11" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <a href="tel:{{ Support::show($itemBranchSystem, 'phone') }}" title="hotline" class="text font-bold font-bold text-[#252525]">{{ Support::show($itemBranchSystem, 'phone') }}</a>
                                </p>
                                <p class="item relative mb-3 pl-7 last:mb-0">
                                    <svg width="24" height="24" class="absolute top-0 left-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6004 20H10.4004" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 10.032V10V10C17 7.239 14.761 5 12 5V5C9.239 5 7 7.239 7 10V10V10.032V12.504C7 12.828 6.817 13.123 6.528 13.268L6.025 13.519C5.397 13.834 5 14.476 5 15.178V15.178C5 16.202 5.83 17.032 6.854 17.032H17.146C18.17 17.032 19 16.202 19 15.178V15.178C19 14.476 18.603 13.834 17.975 13.52L17.472 13.269C17.183 13.123 17 12.828 17 12.504V10.032Z" fill="white" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.9512 6.04895C18.2392 4.79895 17.2012 3.76095 15.9512 3.04895" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.04883 6.04895C5.76083 4.79895 6.79883 3.76095 8.04883 3.04895" stroke="#008EDF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text text-[#252525]">
                                        Giờ mở cửa: <strong class="font-bold">{{ Support::show($itemBranchSystem, 'open_time') }}</strong>
                                    </span>
                                </p>
                                <p class="item relative mb-3 pl-7 last:mb-0">
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
            <div class="button-circle button-circle__prev system_prev absolute top-1/2 z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#0557ac] text-[1.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white lg:-left-14 lg:flex 2xl:-left-14 left-0 2xl:h-10 2xl:w-10">
                <i class="fa fa-angle-left relative left-[-1px]" aria-hidden="true"></i>
            </div>
            <div class="button-circle button-circle__next system_next absolute top-1/2 z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#0557ac] text-[1.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white lg:-right-14 lg:flex 2xl:-right-14 right-0 2xl:h-10 2xl:w-10">
                <i class="fa fa-angle-right relative left-[1px]" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
@if (count($listHomeNews) > 0)
<section class="section-new__index bg-[#F5F5F5] py-6 2xl:py-10">
    <div class="container">
        <h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_new_home]}</h2>
        @php
        $bigItemNews = $listHomeNews->first();
        @endphp
        <div class="module-new__index grid grid-cols-1 gap-4 lg:grid-cols-2 2xl:gap-6">
            @if (isset($bigItemNews))
            <div class="wow fadeInLeft col-span-1">
                <div class="item-new__main">
                    <a href="{{ Support::show($bigItemNews, 'slug') }}" title="{{ Support::show($bigItemNews, 'name') }}" data-fslightbox="video" class="btn-play-video img img__ c-img mb-2 block overflow-hidden rounded-2xl pt-[54%] 2xl:mb-4">
                        @include('image_loader.all', ['itemImage' => $bigItemNews, 'key' => 'img'])
                    </a>
                    <h3>
                        <a href="{{ Support::show($bigItemNews, 'slug') }}" title="{{ Support::show($bigItemNews, 'name') }}" class="title line-clamp-2 mb-2 font-bold uppercase text-[#262626] lg:text-[1.125rem] 2xl:mb-4">{{ Support::show($bigItemNews, 'name') }}</a>
                    </h3>
                    <div class="short_content line-clamp-2 mb-2">{{ Support::show($bigItemNews, 'short_content') }}</div>
                    <a href="{{ Support::show($bigItemNews, 'slug') }}" title="Xem thêm" class="btn-white inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        Xem thêm
                        <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            @endif
            <div class="wow fadeInRight col-span-1">
                @foreach ($listHomeNews as $key => $itemSmall)
                @if ($key > 0)
                <div class="list-new__item mb-4 flex gap-3 last:mb-0 2xl:mb-6">
                    <a href="{{ Support::show($itemSmall, 'slug') }}" title="{{ Support::show($itemSmall, 'name') }}" class="img img__ block h-[60px] w-[100px] shrink-0 overflow-hidden rounded-lg sm:h-[100px] sm:w-[180px]">
                        @include('image_loader.big', ['itemImage' => $itemSmall, 'key' => 'img'])
                    </a>
                    <div class="new-content">
                        <h3>
                            <a href="{{ Support::show($itemSmall, 'slug') }}" title="{{ Support::show($itemSmall, 'name') }}" class="title line-clamp-2 font-bold 2xl:text-[1.125rem]">{{ Support::show($itemSmall, 'name') }}</a>
                        </h3>
                        <div class="short_content line-clamp-2 mb-2">{{ Support::show($itemSmall, 'short_content') }}</div>

                        <a href="{{ Support::show($itemSmall, 'slug') }}" title="Xem thêm" class="btn-white flex w-fit ml-auto mr-0 items-center justify-center lg:text-[0.875rem] py-2 px-6 rounded-3xl text-[#262626] bg-white border-[1px] border-solid border-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white shadow-[0_6px_8px_rgba(0,0,0,.17)]">
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