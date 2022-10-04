@extends('index')
@section('cssl')
<link rel="stylesheet" href="{{asset('assets/comment/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/comment/css/star.css')}}">
<link rel="stylesheet" href="{{asset('assets/comment/css/selectStar.css')}}">
<link rel="stylesheet" href="{{asset('assets/comment/style/app.css')}}">
@endsection
@section('css')
<link href="theme/frontend/asset/css/jquery.fancybox.min.css" type="text/css" rel="stylesheet" />
@endsection
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('news',$currentItem,$parent)}}
    </div>
</div>
<section class="section-new__detail 2xl:py-10 py-6">
    <div class="container">
        @php
        $bannerGdnTopNew = \App\Models\BannerGdn::where('group',1)->act()->first();
        @endphp
        @if (isset($bannerGdnTopNew))

        <div class="banner-new__detail lg:mb-6 mb-4">
            @if ($bannerGdnTopNew->use_code == 1)
            {!!$bannerGdnTopNew->banner_content!!}
            @else
            <a href="{{$bannerGdnTopNew->buidLink()}}" {{Support::showNofollow($bannerGdnTopNew)}} class="smooth" title="{{$bannerGdnTopNew->name}}">
                @include('image_loader.all',['itemImage'=>$bannerGdnTopNew,'key'=>'img'])
            </a>
            @endif

        </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <h1 class="title-new font-bold uppercase 2xl:text-[1.25rem] text-[1rem] 2xl:mb-6 mb-4 text-[#028cde]">{{Support::show($currentItem,'name')}}</h1>
                <div class="content-intro font-bold md:text-[0.875rem] s-content 2xl:p-5 lg:p-4 p-2 bg-[#e0f3ff] border-[1px] border-dashed border-[#a1a1a1] mb-6">
                    {{Support::show($currentItem,'short_content')}}
                </div>
                <div class="mb-4 toc-wrapper">
                    {!!$dataContent['toc']!!}
                </div>
                <div class="s-content mb-4">
                    {!!Support::showContentHasGallery($dataContent['content'],$currentItem->imgs_template)!!}
                </div>
                <ul class="author-new text-right lg:text-[0.875rem] mt-6 text-[#373737]">
                    @if (isset($author))
                    <li class="inline-block lg:mr-5 mr-3 last:mr-0">
                        Tác giả: <span class="text-[#028cde]">{{Support::show($author,'name')}}</span>
                    </li>
                    @endif
                    <li class="inline-block lg:mr-5 mr-3 last:mr-0">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Cập nhật ngày: {{Support::showDateTime($currentItem->time_published,'d/m/Y')}}
                    </li>
                </ul>
                <div class="text-right mt-2">
                    <div class="fb-like" data-href="{{url()->current()}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                </div>
                @if (count($tags) > 0)
                <div class="news-tag-header lg:text-[1.25rem] text-[1rem] mt-4">
                    <span class="icon text-[#028cde]"><i class="fa fa-tags" aria-hidden="true"></i></span>
                    <span class="font-semibold">Từ khóa: </span>
                </div>
                <div class="list-news-tag">
                    @foreach ($tags as $item)
                    <a href="{{Support::show($item, 'slug')}}" {{Support::showNofollow($item)}} class="item-tag mb-2 me-2" title="{{$item->name}}">{{$item->name}}</a>
                    @endforeach
                </div>
                @endif
                @php
                $doctor = $currentItem->getDoctor();
                @endphp
                @if (isset($doctor))
                <div class="box-info-author 2xl:my-20 lg:my-8 my-6 shadow-[0_0_8px_rgba(216,229,251,.8)] bg-white">
                    <!-- <p class="head text-center font-medium uppercase p-4 text-white bg-[#028cde]">
                            Bài viết được tư vấn chuyên môn bởi {{Support::show($doctor,'academic_rank')}} {{Support::show($doctor,'name')}}
                        </p> -->
                    <div class="content sm:p-4 p-2 flex 2xl:gap-8 lg:gap-6 sm:gap-4 gap-2">
                        <span class="img block shrink-0 w-[50%] md:w-[290px] h-auto">
                            @include('image_loader.all',['itemImage'=>$doctor,'key'=>'img'])
                        </span>
                        <div class="info-expert">
                            <p class="name 2xl:text-[2rem] lg:text-[1.5rem] md:text-[1.25rem] text-[0.875rem] text-[#0557ac] font-bold 2xl:mb-4 mb-2">{{Support::show($doctor,'name')}}</p>
                            <p class="role 2xl:text-[1.125rem] 2xl:mb-4 mb-2">{{Support::show($doctor,'academic_rank')}}</p>
                            @if (isset($doctor->specialist))
                            <a href="{{Support::show($doctor->specialist,'slug')}}" class="inline-block text-[#008EDF] 2xl:mb-4 mb-2" title="{{Support::show($doctor->specialist,'name')}}">{{Support::show($doctor->specialist,'name')}}</a>
                            @endif
                            <div class="flex items-center flex-wrap sm:gap-4 gap-2">
                                <a href="tel: {[hotline]}" title="Đăng ký khám" class="btn-border__blue inline-flex items-center justify-center lg:text-[0.875rem] py-3 px-4 text-[#F63937] bg-transparent transition-all duration-300 border-[1px] border-solid border-[#F63937] rounded">
                                    <svg width="22" height="22" class="mr-1" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_2021)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.17676 1.05222e-09H5.07402C4.89642 0.00564195 4.72114 0.0419859 4.55594 0.107422L4.5104 0.125469C3.79823 0.407473 1.69805 1.18461 1.18032 1.70242C0.407613 2.475 0.052648 3.43449 0.00538239 4.52005C-0.0473832 5.73306 0.294304 6.99574 0.745261 8.11143C1.88823 10.9392 4.03418 13.6817 6.1763 15.8239C8.31842 17.9661 11.0609 20.1122 13.8888 21.2551C14.9341 21.6777 16.097 22 17.2321 22C17.3149 22 17.3977 21.9983 17.4804 21.9948C18.5659 21.9475 19.5257 21.5925 20.298 20.82C20.8276 20.2904 21.5913 18.2183 21.8733 17.4948L21.891 17.4491C22.0275 17.107 22.0358 16.7272 21.9145 16.3795C21.7932 16.0318 21.5505 15.7397 21.2309 15.5567L17.4685 13.3848C17.1158 13.182 16.6972 13.1272 16.3042 13.2325C15.9112 13.3378 15.576 13.5946 15.372 13.9465C14.9998 14.5911 14.4362 15.1139 13.6876 15.2669C13.3357 15.3437 12.9713 15.3426 12.6199 15.2637C12.2685 15.1848 11.9386 15.0299 11.6534 14.81C10.8178 14.1829 10.0209 13.4556 9.28251 12.7174C8.54413 11.9792 7.81727 11.1824 7.19023 10.3469C6.97028 10.0617 6.8154 9.73181 6.73645 9.38039C6.6575 9.02897 6.65639 8.66454 6.73321 8.31265C6.88623 7.56435 7.40937 7.00047 8.05377 6.62827C8.40544 6.42399 8.66194 6.08879 8.76719 5.69595C8.87244 5.3031 8.81789 4.88457 8.61546 4.53183L6.44343 0.769527C6.31551 0.543828 6.13196 0.354624 5.91024 0.219925C5.68852 0.0852262 5.43601 0.0095156 5.17676 1.05222e-09V1.05222e-09ZM11.1593 0.877422C11.1593 0.762192 11.182 0.648091 11.2261 0.541634C11.2702 0.435177 11.3348 0.338449 11.4163 0.256973C11.4978 0.175497 11.5945 0.110868 11.701 0.0667766C11.8074 0.0226851 11.9215 -5.64182e-06 12.0368 1.05222e-09C13.345 -1.12855e-05 14.6405 0.257666 15.8491 0.758317C17.0578 1.25897 18.156 1.99279 19.0811 2.91788C20.0062 3.84297 20.74 4.94122 21.2406 6.1499C21.7412 7.35859 21.9989 8.65405 21.9988 9.96231C21.9988 10.195 21.9064 10.4182 21.7418 10.5827C21.5773 10.7473 21.3541 10.8397 21.1214 10.8397C20.8887 10.8397 20.6655 10.7473 20.501 10.5827C20.3364 10.4182 20.244 10.195 20.244 9.96231C20.244 8.88452 20.0317 7.81728 19.6193 6.82153C19.2069 5.82578 18.6024 4.92101 17.8403 4.15889C17.0782 3.39677 16.1734 2.79222 15.1777 2.37976C14.1819 1.96731 13.1147 1.75502 12.0369 1.75502C11.9217 1.75504 11.8075 1.73236 11.701 1.68827C11.5946 1.64418 11.4978 1.57954 11.4163 1.49804C11.3348 1.41655 11.2701 1.31979 11.226 1.2133C11.1819 1.10681 11.1592 0.992681 11.1593 0.877422ZM11.1593 4.43236C11.1592 4.31712 11.1819 4.20301 11.226 4.09654C11.2701 3.99007 11.3347 3.89333 11.4162 3.81184C11.4977 3.73035 11.5944 3.6657 11.7009 3.62159C11.8073 3.57748 11.9214 3.55477 12.0367 3.55476C12.8781 3.55472 13.7113 3.72043 14.4887 4.04241C15.2661 4.3644 15.9725 4.83636 16.5674 5.43135C17.1624 6.02634 17.6344 6.7327 17.9564 7.51009C18.2783 8.28749 18.444 9.1207 18.444 9.96213C18.4424 10.1938 18.3492 10.4154 18.1848 10.5786C18.0205 10.7419 17.7982 10.8335 17.5666 10.8335C17.3349 10.8335 17.1126 10.7419 16.9483 10.5786C16.7839 10.4154 16.6907 10.1938 16.6891 9.96213C16.6891 9.35117 16.5688 8.74619 16.335 8.18173C16.1012 7.61728 15.7585 7.1044 15.3265 6.67238C14.8945 6.24037 14.3816 5.89768 13.8172 5.66388C13.2527 5.43009 12.6477 5.30976 12.0368 5.30978C11.9215 5.30978 11.8074 5.28709 11.701 5.243C11.5945 5.19891 11.4978 5.13428 11.4163 5.0528C11.3348 4.97133 11.2702 4.8746 11.2261 4.76814C11.182 4.66169 11.1593 4.54759 11.1593 4.43236ZM11.1593 7.98707C11.1593 7.75436 11.2517 7.53119 11.4163 7.36665C11.5809 7.20211 11.8041 7.10968 12.0368 7.1097C12.4113 7.10968 12.7823 7.18345 13.1283 7.32679C13.4744 7.47013 13.7889 7.68024 14.0537 7.94512C14.3186 8.21 14.5287 8.52446 14.6721 8.87054C14.8154 9.21662 14.8891 9.58754 14.8891 9.96213C14.8891 10.1949 14.7967 10.418 14.6321 10.5826C14.4676 10.7472 14.2444 10.8396 14.0116 10.8396C13.7789 10.8396 13.5557 10.7472 13.3912 10.5826C13.2266 10.418 13.1342 10.1949 13.1342 9.96213C13.1342 9.818 13.1058 9.67527 13.0507 9.5421C12.9956 9.40893 12.9147 9.28793 12.8128 9.186C12.7109 9.08407 12.5899 9.00322 12.4568 8.94805C12.3236 8.89289 12.1809 8.8645 12.0368 8.8645C11.9215 8.8645 11.8074 8.84181 11.701 8.79772C11.5945 8.75363 11.4978 8.689 11.4163 8.60752C11.3348 8.52605 11.2702 8.42932 11.2261 8.32286C11.182 8.21641 11.1593 8.1023 11.1593 7.98707Z" fill="url(#paint0_linear_1_2021)" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_2021" x1="10.9999" y1="0" x2="10.9999" y2="22" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF6B69" />
                                                <stop offset="1" stop-color="#E20200" />
                                            </linearGradient>
                                            <clipPath id="clip0_1_2021">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <strong class="font-bold">{[hotline]}</strong>
                                </a>
                                <a href="{{Support::show($doctor,'slug')}}" title="Xem thêm thông tin bác sĩ" class="btn-border__yellow font-bold inline-flex items-center justify-center lg:text-[0.875rem] sm:py-3 sm:px-4 p-2 sm:text-[0.75rem] text-[0.625rem] text-[#008EDF] bg-transparent transition-all duration-300 border-[1px] border-solid border-[#008EDF] hover:bg-[#008EDF] hover:text-white">Xem thêm thông tin bác sĩ</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($saleSevice))
                <div class="box-endow p-4 2xl:my-20 lg:my-8 my-6 bg-[#f6f7f8] border-[1px] border-dashed border-[#f45654]">
                    <p class="head text-center w-fit mx-auto uppercase text-[#f43d3b] 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] font-bold mb-4">
                        Ưu đãi dịch vụ {{Support::show($saleSevice,'name')}}
                    </p>
                    <p class="text-center font-medium italic lg:text-[0.875rem] text-[#373737] mb-4">{{Support::show($saleSevice,'sale_title')}}</p>
                    <p class="head-table-endow text-center uppercase text-white bg-[#028cde] 2xl:text-[1.125rem] text-[1rem] p-3">
                        Ưu đãi dịch vụ {{Support::show($saleSevice,'name')}}</p>
                    <div class="table-endow border-[1px] border-solid border-[#c5c5c5] 2xl:mb-6 mb-4">
                        <div class="tr-endow grid grid-cols-2 border-b-[1px] border-solid border-[#c5c5c5] last:border-none">
                            <div class="col-span-1 td-endow lg:px-4 px-2 py-2 border-r-[1px] border-solid border-[#c5c5c5]">
                                <span class="text font-bold text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">Giá gốc</span>
                            </div>
                            <div class="col-span-1 td-endow lg:px-4 px-2 py-2">
                                <span class="text font-bold text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">Giá ưu đãi</span>
                            </div>
                        </div>
                        <div class="tr-endow grid grid-cols-2 border-b-[1px] border-solid border-[#c5c5c5] last:border-none">
                            <div class="col-span-1 td-endow lg:px-4 px-2 py-2 border-r-[1px] border-solid border-[#c5c5c5]">
                                <span class="text text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">{{Support::show($saleSevice,'price')}}</span>
                            </div>
                            <div class="col-span-1 td-endow lg:px-4 px-2 py-2">
                                <a href="{{Support::show($saleSevice,'link')}}" title="Click NGay để nhận ưu đãi" class="text text-[#f43d3b] 2xl:text-[1.125rem] lg:text-[1rem] uppercase"> Click ngay để nhận ưu đãi</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4 flex-wrap">
                        <a href="{{VRoute::get('orderExaminationSchedule')}}?service={{$saleSevice->id}}" title="Đăng ký ngay" class=" w-[200px] lg:min-w-[268px] inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-2xl text-white bg-gradient-to-b from-[#28B1FF] to-[#008EDF]  transition-all duration-300">
                            Đăng ký ngay
                        </a>
                        <a href="tel:{[hotline]}" title="Đăng ký ngay" class="btn-yellow w-[200px] lg:min-w-[268px] inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-2xl text-[#008EDF] border-[1px] border-solid border-[#008EDF] hover:bg-[#008EDF] hover:text-white transition-all duration-300">
                            <svg width="23" height="22" class="mr-1" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_2048)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67676 1.05222e-09H5.57402C5.39642 0.00564195 5.22114 0.0419859 5.05594 0.107422L5.0104 0.125469C4.29823 0.407473 2.19805 1.18461 1.68032 1.70242C0.907613 2.475 0.552648 3.43449 0.505382 4.52005C0.452617 5.73306 0.794304 6.99574 1.24526 8.11143C2.38823 10.9392 4.53418 13.6817 6.6763 15.8239C8.81842 17.9661 11.5609 20.1122 14.3888 21.2551C15.4341 21.6777 16.597 22 17.7321 22C17.8149 22 17.8977 21.9983 17.9804 21.9948C19.0659 21.9475 20.0257 21.5925 20.798 20.82C21.3276 20.2904 22.0913 18.2183 22.3733 17.4948L22.391 17.4491C22.5275 17.107 22.5358 16.7272 22.4145 16.3795C22.2932 16.0318 22.0505 15.7397 21.7309 15.5567L17.9685 13.3848C17.6158 13.182 17.1972 13.1272 16.8042 13.2325C16.4112 13.3378 16.076 13.5946 15.872 13.9465C15.4998 14.5911 14.9362 15.1139 14.1876 15.2669C13.8357 15.3437 13.4713 15.3426 13.1199 15.2637C12.7685 15.1848 12.4386 15.0299 12.1534 14.81C11.3178 14.1829 10.5209 13.4556 9.78251 12.7174C9.04413 11.9792 8.31727 11.1824 7.69023 10.3469C7.47028 10.0617 7.3154 9.73181 7.23645 9.38039C7.1575 9.02897 7.15639 8.66454 7.23321 8.31265C7.38623 7.56435 7.90937 7.00047 8.55377 6.62827C8.90544 6.42399 9.16194 6.08879 9.26719 5.69595C9.37244 5.3031 9.31789 4.88457 9.11546 4.53183L6.94343 0.769527C6.81551 0.543828 6.63196 0.354624 6.41024 0.219925C6.18852 0.0852262 5.93601 0.0095156 5.67676 1.05222e-09V1.05222e-09ZM11.6593 0.877422C11.6593 0.762192 11.682 0.648091 11.7261 0.541634C11.7702 0.435177 11.8348 0.338449 11.9163 0.256973C11.9978 0.175497 12.0945 0.110868 12.201 0.0667766C12.3074 0.0226851 12.4215 -5.64182e-06 12.5368 1.05222e-09C13.845 -1.12855e-05 15.1405 0.257666 16.3491 0.758317C17.5578 1.25897 18.656 1.99279 19.5811 2.91788C20.5062 3.84297 21.24 4.94122 21.7406 6.1499C22.2412 7.35859 22.4989 8.65405 22.4988 9.96231C22.4988 10.195 22.4064 10.4182 22.2418 10.5827C22.0773 10.7473 21.8541 10.8397 21.6214 10.8397C21.3887 10.8397 21.1655 10.7473 21.001 10.5827C20.8364 10.4182 20.744 10.195 20.744 9.96231C20.744 8.88452 20.5317 7.81728 20.1193 6.82153C19.7069 5.82578 19.1024 4.92101 18.3403 4.15889C17.5782 3.39677 16.6734 2.79222 15.6777 2.37976C14.6819 1.96731 13.6147 1.75502 12.5369 1.75502C12.4217 1.75504 12.3075 1.73236 12.201 1.68827C12.0946 1.64418 11.9978 1.57954 11.9163 1.49804C11.8348 1.41655 11.7701 1.31979 11.726 1.2133C11.6819 1.10681 11.6592 0.992681 11.6593 0.877422ZM11.6593 4.43236C11.6592 4.31712 11.6819 4.20301 11.726 4.09654C11.7701 3.99007 11.8347 3.89333 11.9162 3.81184C11.9977 3.73035 12.0944 3.6657 12.2009 3.62159C12.3073 3.57748 12.4214 3.55477 12.5367 3.55476C13.3781 3.55472 14.2113 3.72043 14.9887 4.04241C15.7661 4.3644 16.4725 4.83636 17.0674 5.43135C17.6624 6.02634 18.1344 6.7327 18.4564 7.51009C18.7783 8.28749 18.944 9.1207 18.944 9.96213C18.9424 10.1938 18.8492 10.4154 18.6848 10.5786C18.5205 10.7419 18.2982 10.8335 18.0666 10.8335C17.8349 10.8335 17.6126 10.7419 17.4483 10.5786C17.2839 10.4154 17.1907 10.1938 17.1891 9.96213C17.1891 9.35117 17.0688 8.74619 16.835 8.18173C16.6012 7.61728 16.2585 7.1044 15.8265 6.67238C15.3945 6.24037 14.8816 5.89768 14.3172 5.66388C13.7527 5.43009 13.1477 5.30976 12.5368 5.30978C12.4215 5.30978 12.3074 5.28709 12.201 5.243C12.0945 5.19891 11.9978 5.13428 11.9163 5.0528C11.8348 4.97133 11.7702 4.8746 11.7261 4.76814C11.682 4.66169 11.6593 4.54759 11.6593 4.43236ZM11.6593 7.98707C11.6593 7.75436 11.7517 7.53119 11.9163 7.36665C12.0809 7.20211 12.3041 7.10968 12.5368 7.1097C12.9113 7.10968 13.2823 7.18345 13.6283 7.32679C13.9744 7.47013 14.2889 7.68024 14.5537 7.94512C14.8186 8.21 15.0287 8.52446 15.1721 8.87054C15.3154 9.21662 15.3891 9.58754 15.3891 9.96213C15.3891 10.1949 15.2967 10.418 15.1321 10.5826C14.9676 10.7472 14.7444 10.8396 14.5116 10.8396C14.2789 10.8396 14.0557 10.7472 13.8912 10.5826C13.7266 10.418 13.6342 10.1949 13.6342 9.96213C13.6342 9.818 13.6058 9.67527 13.5507 9.5421C13.4956 9.40893 13.4147 9.28793 13.3128 9.186C13.2109 9.08407 13.0899 9.00322 12.9568 8.94805C12.8236 8.89289 12.6809 8.8645 12.5368 8.8645C12.4215 8.8645 12.3074 8.84181 12.201 8.79772C12.0945 8.75363 11.9978 8.689 11.9163 8.60752C11.8348 8.52605 11.7702 8.42932 11.7261 8.32286C11.682 8.21641 11.6593 8.1023 11.6593 7.98707Z" fill="url(#paint0_linear_1_2048)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1_2048" x1="11.4999" y1="0" x2="11.4999" y2="22" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#28B1FF" />
                                        <stop offset="1" stop-color="#008EDF" />
                                    </linearGradient>
                                    <clipPath id="clip0_1_2048">
                                        <rect width="22" height="22" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            {[hotline]}
                        </a>
                    </div>
                </div>
                @endif
                @if (count($listMostViewNews) > 0)
                <div class="box-new__hot 2xl:my-20 lg:my-8 my-6 rounded-3xl overflow-hidden">
                    <p class="head text-center 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] uppercase bg-[#028cde] text-white 2xl:p-5 p-3">Những bài viết đang được nhiều người quan tâm</p>
                    <div class="content bg-[#f6f7f8] 2xl:py-7 lg:px-16 lg:py-4 p-4">
                        @foreach ($listMostViewNews as $itemMostViewNews)
                        <div class="item-new__hot relative flex flex-col sm:flex-row sm:items-center justify-between sm:gap-4 gap-2 2xl:py-4 py-2 border-b-[1px] border-solid border-[#7cc1eb] last:border-dashed">
                            <a href="{{Support::show($itemMostViewNews,'slug')}}" title="{{Support::show($itemMostViewNews,'name')}}" class="title text-[#373737] uppercase 2xl:text-[1.125rem] lg:text-[1rem]">{{Support::show($itemMostViewNews,'name')}}</a>
                            <span class="count lg:text-[0.875rem] italic">{{Support::show($itemMostViewNews,'count_view')}} lượt xem</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="comment-box">
                    @include('commentRS::comment_box',['map_table'=>'news'])
                </div>
                @if (count($newsRelateds) > 0)
                <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Tin cùng chủ đề</p>
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:gap-8 lg:gap-6 gap-4 mb-6">
                    @foreach ($newsRelateds as $itemRelated)
                    <div class="col-span-1">
                        <div class="item-new__sidebar flex mb-4 last:mb-0">
                            <div class="image mr-4 shrink-0 w-[150px]">
                                <a href="{{Support::show($itemRelated,'slug')}}" title="{{Support::show($itemRelated,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
                                    @include('image_loader.tiny',['itemImage'=>$itemRelated,'key'=>'img'])
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="{{Support::show($itemRelated,'slug')}}" title="{{Support::show($itemRelated,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold mb-2">{{Support::show($itemRelated,'name')}}</a>
                                </h3>
                                <div class="short_content lg:text-[0.875rem] line-clamp-2">{{Support::show($itemRelated,'short_content')}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                @if (count($listHotNews) > 0)
                <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Tin không thể bỏ lỡ</p>
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:gap-8 lg:gap-6 gap-4 mb-6">
                    @foreach ($listHotNews as $itemHotNews)
                    <div class="col-span-1">
                        <div class="item-new__sidebar flex mb-4 last:mb-0">
                            <div class="image mr-4 shrink-0 w-[150px]">
                                <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
                                    @include('image_loader.tiny',['itemImage'=>$itemHotNews,'key'=>'img'])
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold mb-2">{{Support::show($itemHotNews,'name')}}</a>
                                </h3>
                                <div class="short_content lg:text-[0.875rem] line-clamp-2">{{Support::show($itemHotNews,'short_content')}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-span-1">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection
@section('jsl')
<script src="theme/frontend/asset/js/jquery-3.4.0.min.js" defer></script>
<script src="theme/frontend/asset/js/jquery.fancybox.min.js" defer></script>
@endsection
@section('js')
<script src="{{asset('assets/comment/js/comment.js')}}" defer></script>
<script src="theme/frontend/asset/js/script.js" defer></script>
@endsection