@extends('index')
@section('content')
<h1 class="hidden">Bác sĩ/chuyên gia</h1>
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static','Bác sĩ/chuyên gia','bac-si-chuyen-gia')}}
    </div>
</div>
<section class="2xl:py-10 section-experts py-6">
    <div class="container">
        @if (count($listItems) > 0)
            @foreach ($listItems as $itemSpecialist)
                @php
                    $listDoctor = $itemSpecialist->doctor()->act()->limit(10)->get();
                @endphp
                <div class="head-flex flex items-center justify-between 2xl:mb-6 mb-4">
                    <h2 class="title-all text-center 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#000] font-semibold">{{Support::show($itemSpecialist,'name')}}</h2>
                    <a href="{{Support::show($itemSpecialist,'slug')}}" title="Xem thêm" class="readmore font-medium italic 2xl:text-[1.125rem] text-[#028cde]">Xem thêm <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i></a>
                </div>
                <div class="boxslide relative">
                    <div class="swiper-container slide-experts">
                        <div class="swiper-wrapper">
                            @foreach ($listDoctor as $item)
                                <div class="swiper-slide h-auto">
                                    @include('doctors.item_doctor')
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div
                        class="button-circle button-circle__prev experts_prev bg-white 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:left-[-180px] lg:left-[-28px] left-[-1.25rem] text-[2.5rem] text-[#0557ac] transition-all duration-300 shadow-[0_0_8px_rgba(216,229,251,.8)] hover:bg-[#0557ac] hover:text-white">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                    <div
                        class="button-circle button-circle__next experts_next bg-white 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:right-[-180px] lg:right-[-28px] right-[-1.25rem] text-[2.5rem] text-[#0557ac] transition-all duration-300  shadow-[0_0_8px_rgba(216,229,251,.8)] hover:bg-[#0557ac] hover:text-white">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
                <hr class="line-experts opacity-100 w-full h-[1px] border-[#898989] 2xl:my-10 my-6">
            @endforeach
        @else
            <p>Tạm thời chưa có bác sĩ nào</p>
        @endif
        
    </div>
</section>
@endsection