@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="section-qa 2xl:py-10 py-6 bg-[#fcfcfc]">
    <div class="container">
        <span class="show-category inline-block lg:hidden p-2 rounded-md bg-[#fb2317] cursor-pointer mb-4 text-white">Câu hỏi theo chủ đề</span>
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1">
                @include('question_categories.sidebar')
            </div>
            <div class="col-span-1 lg:col-span-2">
                <div class="box-content bg-white border-[1px] border-solid border-[#ebebeb] 2xl:pt-12 lg:py-8 py-4">
                    <h1 class="title-qa text-center font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676]">{{$currentItem->vi_name}}</h1>
                    @if (count($listItems) > 0)
                        <div class="module-content">
                            @foreach ($listItems as $item)
                                <div class="module-qa relative 2xl:p-8 lg:p-6 p-4 border-b-[1px] border-solid border-[#ebebeb] last:border-none ">
                                    <div class="relative lg:pl-14 pl-11">
                                        <span class="avatar-qa block lg:w-12 lg:h-12 w-9 h-9 rounded-full overflow-hidden absolute top-0 left-0">
                                            @include('image_loader.tiny',['itemImage'=>$item,'key'=>'img'])
                                        </span>
                                        <div class="head-qa flex gap-x-4 items-center justify-between flex-wrap">
                                            <div class="info flex gap-4 items-center flex-wrap lg:mb-4 mb-2">
                                                <span class="name font-semibold text-[#40b5ff] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">{{Support::show($item,'customer_name')}}</span>
                                                @if (isset($item->specialist))
                                                    <span class="examined font-semibold text-[0.75rem] text-white bg-[#028cde] rounded p-1">{{Support::show($item->specialist,'name')}}</span>
                                                @endif
                                            </div>
                                            <p class="time text-[0.75rem] lg:mb-4 mb-2">Đã hỏi: <span class="text-[#40b5ff] font-semibold">Ngày {{Support::showDateTime($item->time_ask,'d/m/Y')}}</span></p>
                                        </div>
                                        <p class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">{{Support::show($item,'name')}}</p>
                                        <div class="question-content lg:text-[0.875rem] mb-4">{{Support::show($item,'question')}}</div>
                                        <div class="bg-[#f0f0f0] lg:p-4 p-2 rounded flex gap-2 items-center justify-between flex-wrap">
                                            <div class="staits flex items-center gap-3">
                                                <span class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                                    <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                                                    {{$item->comments()->count()}} Bình luận
                                                </span>
                                                <span
                                                    class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    {{$item->count_view}} Lượt xem
                                                </span>
                                            </div>
                                            <a href="{{Support::show($item,'slug')}}" title="Xem câu trả lời" class="item btn-blue text-white text-[0.75rem] bg-[#028cde] border-[1px] border-solid border-transparent rounded py-1 px-2">Xem câu trả lời</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
                    @else
                        <p>Tạm thời chưa có câu hỏi nào</p>
                    @endif
                </div>
            </div>
            <div class="col-span-1">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection