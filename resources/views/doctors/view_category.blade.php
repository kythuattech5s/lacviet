@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('specialists',$currentItem)}}
    </div>
</div>
<section class="section-experts 2xl:py-10 py-6">
    <div class="container">
        <div class="head-flex flex items-center justify-between">
            <h1 class="title-all text-center 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#000] font-semibold">{{Support::show($currentItem,'name')}}</h1>
        </div>
        @if (count($listItems) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:gap-6 gap-4 px-8 sm:px-0">
                @foreach ($listItems as $item)
                    <div class="col-span-1">
                        @include('doctors.item_doctor')
                    </div>
                @endforeach
            </div>
            {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
        @else
            <p>Tạm thời chưa có bác sĩ nào</p>
        @endif
    </div>
</section>
@endsection