@extends('index')
@section('css')
    <link href="theme/frontend/asset/css/jquery.fancybox.min.css" type="text/css" rel="stylesheet" />
@endsection
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('doctors',$currentItem,$currentItem->specialist)}}
    </div>
</div>
<section class="section-experts__detail 2xl:py-10 py-6">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <div class="box-info-author lg:mb-6 mb-2  bg-white">
                    <div class="content sm:p-4 !pt-0 flex 2xl:gap-8 lg:gap-6 md:gap-4 gap-2">
                        <span class="img block shrink-0 w-[50%] md:w-[290px] h-auto shadow-[0_0_8px_rgba(216,229,251,.8)] p-2 rounded-lg overflow-hidden">
                            @include('image_loader.big',['itemImage'=>$currentItem,'key'=>'img'])
                        </span>
                        <div class="info-expert">
                            <h1 class="name 2xl:text-[2rem] lg:text-[1.5rem] md:text-[1.25rem] text-[0.875rem] text-[#028cde] font-bold 2xl:mb-4 mb-2">{{Support::show($currentItem,'name')}}</h1>
                            <p class="role text-[#373737] font-bold 2xl:text-[1.125rem] 2xl:mb-4 mb-2">{{Support::show($currentItem,'academic_rank')}} 
                            </p>
                            @if (isset($currentItem->specialist))
                            <span class="inline-block sm:px-3 sm:py-2 p-1 bg-[#f43d3b] text-white sm:rounded rounded-sm 2xl:mb-4 mb-2">
                            {{Support::show($currentItem->specialist,'name')}}
                            </span>
                            @endif
                            <div class="flex items-center flex-wrap gap-4">
                                <a href="tel:{[hotline]}" title="Đăng ký khám"
                                    class=" btn-border__blue inline-flex items-center sm:min-w-[180px] justify-center lg:text-[0.875rem] lg:py-2 py-1 sm:px-4 px-3 text-[#333] bg-transparent transition-all duration-300 border-[1px] border-solid border-[#028cde]">
                                    Tổng đài: <strong class="font-bold">{[hotline]}</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.5rem] text-[1rem]">Thông tin bác sĩ</p>
                <div class="s-content 2xl:mb-10 mb-6">
                    {!!Support::show($dataContent,'content')!!}
                </div>
                @if (count($listDoctorNews) > 0)
                    <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#0557ac] 2xl:text-[1.25rem] text-[1rem]">Bài viết của bác sĩ</p>
                    <ul class="list-new__experts list-disc mb-6">
                        @foreach ($listDoctorNews as $itemDoctorNews)
                            <li class="ml-4 lg:py-4 py-2 border-b-[1px] border-solid border-[#f6cf84]">
                                <a href="{{Support::show($itemDoctorNews,'slug')}}" title="{{Support::show($itemDoctorNews,'name')}}" class="italic text-[#62a3ff] 2xl:text-[1.25rem]">{{Support::show($itemDoctorNews,'name')}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if (count($listNewCustomer) > 0)
                    <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-14 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Khách hàng nói gì về bác sĩ</p>
                    <ul class="list-new__experts list-disc mb-6">
                        @foreach ($listNewCustomer as $itemDoctorNews)
                            <li class="ml-4 lg:py-4 py-2 border-b-[1px] border-solid border-[#f6cf84]">
                                <a href="{{Support::show($itemDoctorNews,'slug')}}" title="{{Support::show($itemDoctorNews,'name')}}" class="italic text-[#62a3ff] 2xl:text-[1.25rem]">{{Support::show($itemDoctorNews,'name')}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if (count($listNewMagazine) > 0)
                    <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-14 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Báo chi, truyền hình</p>
                    <ul class="list-new__experts list-disc mb-6">
                        @foreach ($listNewMagazine as $itemDoctorNews)
                            <li class="ml-4 lg:py-4 py-2 border-b-[1px] border-solid border-[#f6cf84]">
                                <a href="{{Support::show($itemDoctorNews,'slug')}}" title="{{Support::show($itemDoctorNews,'name')}}" class="italic text-[#62a3ff] 2xl:text-[1.25rem]">{{Support::show($itemDoctorNews,'name')}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if (count($listRelateDoctor) > 0)
                    <p class="title-all 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#000] font-semibold mb-6">Xem thêm chuyên gia</p>
                    <div class="boxslide relative">
                        <div class="swiper-container slide-experts">
                            <div class="swiper-wrapper">
                                @foreach ($listRelateDoctor as $item)
                                    <div class="swiper-slide h-auto">
                                        @include('doctors.item_doctor')
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-all pagination-experts"></div>
                        </div>
                        <div
                            class="button-circle button-circle__prev experts_prev bg-white lg:h-14 lg:w-14 h-10 w-10 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer lg:left-[-28px] left-[-1.25rem] text-[1.5rem] text-[#028cde] transition-all duration-300 shadow-[0_0_8px_rgba(216,229,251,.8)] hover:bg-[#0557ac] hover:text-white">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div
                            class="button-circle button-circle__next experts_next bg-white lg:h-14 lg:w-14 h-10 w-10 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer lg:right-[-28px] right-[-1.25rem] text-[1.5rem] text-[#028cde] transition-all duration-300  shadow-[0_0_8px_rgba(216,229,251,.8)] hover:bg-[#0557ac] hover:text-white">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-span-1 px-8 sm:px-0">
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