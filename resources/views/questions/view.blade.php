@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('question',$currentItem,$parent)}}
    </div>
</div>
<section class="section-qa 2xl:py-10 py-6 bg-[#fcfcfc]">
    <div class="container">
        <span class="show-category inline-block lg:hidden p-2 rounded-md bg-[#fb2317] cursor-pointer mb-4 text-white">Câu hỏi theo chủ đề</span>
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1">
                @include('question_categories.sidebar')
            </div>
            <h1 class="hidden">{{Support::show($currentItem,'name')}}</h1>
            <div class="col-span-1 lg:col-span-2">
                <div class="box-content bg-white border-[1px] border-solid border-[#ebebeb] 2xl:pt-12 lg:py-8 py-4">
                    <p class="title-qa text-center font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676]">Hỏi đáp chuyên gia</p>
                    <div class="module-content">
                        <div class="module-qa relative 2xl:p-8 lg:p-6 p-4 border-b-[1px] border-solid border-[#ebebeb] last:border-none ">
                            <div class="relative lg:pl-14 pl-11">
                                <span class="avatar-qa block lg:w-12 lg:h-12 w-9 h-9 rounded-full overflow-hidden absolute top-0 left-0">
                                    <img src="theme/frontend/images/default_avatar.png" alt="User default">
                                </span>
                                <div class="head-qa flex gap-x-4 items-center justify-between flex-wrap">
                                    <div class="info flex gap-4 items-center flex-wrap lg:mb-4 mb-2">
                                        <span class="name font-semibold text-[#40b5ff] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">{{Support::show($currentItem,'customer_name')}}</span>
                                        <span class="examined font-semibold text-[0.75rem] text-white bg-[#028cde] rounded p-1">{{Support::show($parent,'name')}}</span>
                                    </div>
                                    <p class="time text-[0.75rem] lg:mb-4 mb-2">Đã hỏi: <span class="text-[#40b5ff] font-semibold">Ngày {{Support::showDateTime($currentItem->time_ask,'d/m/Y')}}</span></p>
                                </div>
                                <p class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">{{Support::show($currentItem,'name')}}</p>
                                <div class="question-content lg:text-[0.875rem] mb-4">{{Support::show($currentItem,'question')}}</div>
                                <div class="bg-[#f0f0f0] lg:p-4 p-2 rounded flex gap-2 items-center justify-between flex-wrap">
                                    <div class="staits flex items-center gap-3 ">
                                        <span class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                            <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                                            {{$currentItem->comments()->count()}} Bình luận
                                        </span>
                                        <span class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            {{$currentItem->count_view}} Lượt xem
                                        </span>
                                    </div>
                                </div>
                                <div class="form-answer 2xl:mt-7 mt-6">
                                    <div class="head-answer flex gap-x-4 justify-between flex-wrap mb-4">
                                        @if (isset($doctor))
                                            <div class="info lg:mb-4 mb-2">
                                                <span class="name block mb-2 font-semibold text-[#40b5ff] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">
                                                    Bác sĩ. {{Support::show($doctor,'name')}}
                                                </span>
                                                <span class="examined italic block text-[0.75rem] text-[#9c9c9c]">{{Support::show($parent,'name')}}</span>
                                            </div>
                                        @endif
                                        <p class="time text-[0.75rem] lg:mb-4 mb-2 mt-2">Đã trả lời: <span class="text-[#40b5ff] font-semibold">Ngày {{Support::showDateTime($currentItem->time_reply,'d/m/Y')}}</span></p>
                                    </div>
                                    <div class="answer-content s-content mb-4 lg:text-[0.875rem]">{!!Support::show($currentItem,'answer')!!}</div>
                                    <div class="favourite flex items-center justify-between">
                                        <a href="" title="Trả lời" class="reply text-[#9c9c9c] font-medium"><i class="fa fa-reply mr-1" aria-hidden="true"></i> Trả lời</a>
                                        <div class="favourite-action flex gap-x-2 items-center">
                                            <a href="" title="" class="btn-favourite text-[#767676] lg:text-[0.875rem] border-[1px] border-solid border-[#ebebeb] rounded py-1 px-2">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                <span class="count pl-2 ml-2 border-l-[1px] border-solid border-[#7b7b7b]">20</span>
                                            </a>
                                            <a href="" title="" class="btn-favourite text-[#767676] lg:text-[0.875rem] border-[1px] border-solid border-[#ebebeb] rounded py-1 px-2">
                                                <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                <span class="count pl-2 ml-2 border-l-[1px] border-solid border-[#7b7b7b]">0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <hr class="h-[2px] border-[#ebebeb] opacity-100 2xl:mb-7 mb-4">
                    <div class="module-comment 2xl:pt-12 lg:pt-8 pt-4 2xl:pl-[5.5rem] lg:pl-[4.25rem] pl-4 2xl:pr-8 pr-4 2xl:pb-8 pb-4">
                        <div class="item-comment relative lg:pl-14 pl-11 2xl:mb-6 mb-4 last:mb-0">
                            <span class="avatar absolute top-0 left-0 lg:w-12 lg:h-12 w-9 h-9 rounded-full block overflow-hidden"><img src="theme/frontend/images/new-sidebar.jpg" alt=""></span>
                            <p class="name font-bold text-[#7389b6] mb-4">
                                Đỗ Huế
                            </p>
                            <p class="content mb-4 lg:text-[0.875rem]">
                                Có nên tẩy lông mặt không chị em?
                            </p>
                            <div class="flex items-center gap-2">
                                <a href="" title="Trả lời" class="reply text-[#7389b6] lg:text-[0.875rem]">Trả
                                    lời</a>
                                <span class="time text-[#868b92] lg:text-[0.875rem]">2 phút trước</span>
                            </div>
                            <!-- Comment child -->
                            <div class="item-comment item-commnet__child mt-4 2xl:ml-9 ml-6 relative lg:pl-14 pl-11">
                                <span class="avatar absolute top-0 left-0 lg:w-12 lg:h-12 w-9 h-9 rounded-full block overflow-hidden"><img src="theme/frontend/images/new-sidebar.jpg" alt=""></span>
                                <p class="name font-bold text-[#7389b6] mb-4">
                                    Đỗ Huế
                                </p>
                                <p class="content mb-4 lg:text-[0.875rem]">
                                    Có nên tẩy lông mặt không chị em?
                                </p>
                                <div class="flex items-center gap-2">
                                    <a href="" title="Trả lời" class="reply text-[#7389b6] lg:text-[0.875rem]">Trả
                                        lời</a>
                                    <span class="time text-[#868b92] lg:text-[0.875rem]">2 phút trước</span>
                                </div>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="item-comment relative lg:pl-14 pl-11 2xl:mb-6 mb-4 last:mb-0">
                            <span class="avatar absolute top-0 left-0 lg:w-12 lg:h-12 w-9 h-9 rounded-full block overflow-hidden"><img src="theme/frontend/images/new-sidebar.jpg" alt=""></span>
                            <p class="name font-bold text-[#7389b6] mb-4">
                                Đỗ Huế
                            </p>
                            <p class="content mb-4 lg:text-[0.875rem]">
                                Có nên tẩy lông mặt không chị em?
                            </p>
                            <div class="flex items-center gap-2">
                                <a href="" title="Trả lời" class="reply text-[#7389b6] lg:text-[0.875rem]">Trả
                                    lời</a>
                                <span class="time text-[#868b92] lg:text-[0.875rem]">2 phút trước</span>
                            </div>

                        </div>
                    </div>
                    <div class="form-comment__box gap-4 flex py-3 px-4">
                        <div class="box-ava shrink-0 block lg:w-20 lg:h-20 w-14 h-14 rounded-full p-1 border-[1px] border-solid border-[#ebebeb]">
                            <span class="ava block w-full h-full rounded-full overflow-hidden">
                                <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                            </span>
                        </div>
                        <form action="" method="" class="flex-1 formcomment lg:mt-10 mt-7">
                            <textarea class="form-control w-full py-3 px-4 placeholder:italic border-[1px] border-solid border-[#ebebeb] rounded-md h-20 resize-none mb-4" name="" placeholder="Hãy để lại bình luận đầu tiên..."></textarea>
                            <button class="btn-red inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-3 px-8 rounded-3xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                                Bình luận ngay
                            </button>
                        </form>

                    </div>
                    <div class="pagination">
                        <strong>1</strong>
                        <a href="">2</a>
                        <a href="">3</a>
                    </div>
                    @if (count($questionRelateds) > 0)
                        <div class="question-related 2xl:pt-12 lg:pt-8 pt-4 2xl:pl-[5.5rem] lg:pl-[4.25rem] pl-4 2xl:pr-8 pr-4 2xl:pb-8 pb-4">
                            <p class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">
                                Câu hỏi liên quan
                            </p>
                            @foreach ($questionRelateds as $itemQuestionRelateds)
                                <div class="item-question__related 2xl:py-7 lg:py-4 py-2 border-b-[1px] border-solid border-[#ebebeb] last:border-none">
                                    <p class="question font-bold 2xl:text-[1.125rem] text-[#7b7b7b] text-[0.875rem] mb-2">
                                        <a href="{{Support::show($itemQuestionRelateds,'slug')}}" title="{{Support::show($itemQuestionRelateds,'name')}}">{{Support::show($itemQuestionRelateds,'name')}}</a>
                                    </p>
                                    <div class="s-content lg:text-[0.875rem]">{{Support::show($itemQuestionRelateds,'question')}}</div>
                                </div>
                            @endforeach
                        </div>
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