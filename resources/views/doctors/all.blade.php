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
            <h2 class="title-all text-center 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#000] font-semibold !mb-0">{{Support::show($itemSpecialist,'name')}}</h2>
            <a href="{{Support::show($itemSpecialist,'slug')}}" title="Xem thêm" class="readmore font-medium 2xl:text-[1.125rem] text-[#008EDF]">Xem thêm <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i></a>
        </div>
        @if (Support::isMobile())
        <div class="grid grid-cols-2 gap-2">
            @foreach ($listDoctor as $item)
            <div class="col-span-1">
                @include('doctors.item_doctor')
            </div>
            @endforeach
        </div>
        @else
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
            <div class="button-circle button-circle__prev experts_prev bg-white 2xl:w-12 2xl:h-12 h-8 w-8 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:left-[-80px] lg:-left-12 left-[-1.25rem] text-[1.5rem] text-[#0557ac] transition-all duration-300 hover:bg-[#0557ac] hover:text-white border-[1px] border-solid border-[#888] hover:border-[#0557ac]">
                <i class="fa fa-angle-left relative left-[-1px] top-[-2px]" aria-hidden="true"></i>
            </div>
            <div class="button-circle button-circle__next experts_next bg-white 2xl:w-12 2xl:h-12 h-8 w-8 rounded-full flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer 2xl:right-[-80px] lg:-right-12 right-[-1.25rem] text-[1.5rem] text-[#0557ac] transition-all duration-300  hover:bg-[#0557ac] hover:text-white border-[1px] border-solid border-[#888] hover:border-[#0557ac]">
                <i class="fa fa-angle-right relative left-[1px] top-[-2px]" aria-hidden="true"></i>
            </div>
        </div>
        @endif
     
       
        <hr class="line-experts opacity-100 w-full h-[1px] border-[#898989] 2xl:my-10 my-6">
        @endforeach
        @else
        <p>Tạm thời chưa có bác sĩ nào</p>
        @endif

    </div>
</section>
@endsection