@extends('index')
@section('content')
    <div class="main-breadcrumb my-4 border-t-[1px] border-b-[1px] border-solid border-[#3286be] py-3 lg:my-6 2xl:my-9">
        <div class="container">
            {{ \Breadcrumbs::render('question_category', $currentItem) }}
        </div>
    </div>
    <section class="section-qa bg-[#fcfcfc] py-6 2xl:py-10">
        <div class="container">
            @include('question_categories.select')
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 2xl:gap-8">
                <div class="col-span-1">
                    @include('question_categories.sidebar')
                </div>
                <div class="col-span-1 lg:col-span-2">
                    <div class="box-content border-[1px] border-solid border-[#ebebeb] bg-white py-4 lg:py-8 2xl:pt-12">
                        <h1 class="title-qa text-center text-[1.125rem] font-bold text-[#767676] lg:text-[1.5rem] 2xl:text-[2rem]">{{ $currentItem->name }}</h1>
                        @if (count($listItems) > 0)
                            <div class="module-content">
                                @foreach ($listItems as $item)
                                    @include('questions.item')
                                @endforeach
                            </div>
                            {{ $listItems->withQueryString()->links('vendor.pagination.pagination') }}
                        @else
                            <p class="mt-4 px-4 text-center">Tạm thời chưa có câu hỏi nào</p>
                        @endif
                    </div>
                </div>
                <div class="col-span-1">
                    <a href="{{ \VRoute::get('makeQuestion') }}" class="btn-blue d-block mb-5 rounded border-[1px] border-solid border-transparent bg-[#028cde] py-2 text-center text-[1.25rem] text-white" title="Đặt câu hỏi">Đặt câu hỏi</a>
                    @include('news.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
