@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="section-new__category 2xl:py-10 py-6">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <h1 class="title-all uppercase 2xl:text-[1.75rem] lg:text-[1.4rem] text-[1rem] text-[#028cde] font-semibold 2xl:mb-6 mb-4">{{$currentItem->vi_name}}</h1>
                @if (count($listItems) > 0)
                    @foreach ($listItems as $item)
                        <div class="module-new__category py-5 border-b-[3px] border-solid border-[#028cde]">
                            @include('news.item')
                        </div>
                    @endforeach
                    {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
                @else
                    <p>Tạm thời chưa có tin tức nào</p>
                @endif
            </div>
            <div class="col-span-1">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection