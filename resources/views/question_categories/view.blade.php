@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('question_category',$currentItem)}}
    </div>
</div>
<section class="section-qa 2xl:py-10 py-6 bg-[#fcfcfc]">
    <div class="container">
        <span class="show-category inline-block lg:hidden p-2 rounded-md bg-[#fb2317] cursor-pointer mb-4 text-white">Danh mục</span>
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1">
                @include('question_categories.sidebar')
            </div>
            <div class="col-span-1 lg:col-span-2">
                <div class="box-content bg-white border-[1px] border-solid border-[#ebebeb] 2xl:pt-12 lg:py-8 py-4">
                    <h1 class="title-qa text-center font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676]">{{$currentItem->name}}</h1>
                    @if (count($listItems) > 0)
                        <div class="module-content">
                            @foreach ($listItems as $item)
                                @include('questions.item')
                            @endforeach
                        </div>
                        {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
                    @else
                        <p class="px-4 text-center mt-4">Tạm thời chưa có câu hỏi nào</p>
                    @endif
                </div>
            </div>
            <div class="col-span-1">
                <a href="{{\VRoute::get("makeQuestion")}}" class="btn-blue text-center d-block text-white text-[1.25rem] bg-[#028cde] border-[1px] border-solid border-transparent rounded py-2 mb-5" title="Đặt câu hỏi">Đặt câu hỏi</a>
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection