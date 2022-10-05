@extends('index')
@section('cssl')
    <link rel="stylesheet" href="{{ asset('assets/comment/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/comment/css/star.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/comment/css/selectStar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/comment/style/app.css') }}">
@endsection
@section('content')
    <div class="main-breadcrumb my-4 border-t-[1px] border-b-[1px] border-solid border-[#3286be] py-3 lg:my-6 2xl:my-9">
        <div class="container">
            {{ \Breadcrumbs::render('question', $currentItem, $parent) }}
        </div>
    </div>
    <section class="section-qa bg-[#fcfcfc] py-6 2xl:py-10">
        <div class="container">
            @include('question_categories.select')

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 2xl:gap-8">
                <div class="col-span-1">
                    @include('question_categories.sidebar')
                </div>
                <h1 class="hidden">{{ Support::show($currentItem, 'name') }}</h1>
                <div class="col-span-1 lg:col-span-2">
                    <div class="box-content border-[1px] border-solid border-[#ebebeb] bg-white py-4 lg:py-8 2xl:pt-12">
                        <p class="title-qa text-center text-[1.3rem] font-bold text-[#028cde] sm:text-[#767676] lg:text-[1.5rem] 2xl:text-[2rem]">Hỏi đáp chuyên gia</p>
                        <div class="module-content">
                            <div class="module-qa relative border-b-[1px] border-solid border-[#ebebeb] p-4 last:border-none lg:p-6 2xl:p-8">
                                <div class="relative pl-11 lg:pl-14">
                                    <span class="avatar-qa absolute top-0 left-0 block h-9 w-9 overflow-hidden rounded-full lg:h-12 lg:w-12">
                                        <img src="theme/frontend/images/default_avatar.png" alt="User default">
                                    </span>
                                    <div class="head-qa flex flex-wrap items-center justify-between gap-x-4">
                                        <div class="info mb-2 flex flex-wrap items-center gap-4 lg:mb-4">
                                            <span class="name text-[0.875rem] font-semibold text-[#252525] lg:text-[1rem] 2xl:text-[1.25rem]">{{ Support::show($currentItem, 'customer_name') }}</span>
                                            <span class="examined rounded bg-[#028cde] p-1 text-[0.75rem] font-semibold text-white">{{ Support::show($parent, 'name') }}</span>
                                        </div>
                                        <p class="time mb-2 text-[0.75rem] lg:mb-4 text-[#888]">Đã hỏi: <span class="font-semibold text-[#40b5ff]">Ngày {{ Support::showDateTime($currentItem->time_ask, 'd/m/Y') }}</span></p>
                                    </div>
                                    <p class="title-qa mb-4 text-[1.125rem] font-bold text-[#767676] lg:text-[1.5rem] 2xl:text-[2rem]">{{ Support::show($currentItem, 'name') }}</p>
                                    <div class="question-content mb-4 lg:text-[0.875rem]">{{ Support::show($currentItem, 'question') }}</div>
                                    <div class="flex flex-wrap items-center justify-between gap-2 rounded bg-[#f0f0f0] p-2 lg:p-4">
                                        <div class="staits flex items-center gap-3">
                                            <span class="item rounded border-[1px] border-solid border-[#ebebeb] bg-white p-1 text-[0.75rem] text-[#767676]">
                                                <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                                                {{ $currentItem->comments()->count() }} Bình luận
                                            </span>
                                            <span class="item rounded border-[1px] border-solid border-[#ebebeb] bg-white p-1 text-[0.75rem] text-[#767676]">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                {{ $currentItem->count_view }} Lượt xem
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-answer mt-6 2xl:mt-7">
                                        <div class="head-answer mb-4 flex flex-wrap justify-between gap-x-4">
                                            @if (isset($doctor))
                                                <div class="info mb-2 lg:mb-4">
                                                    <span class="name mb-2 block text-[0.875rem] font-semibold text-[#40b5ff] lg:text-[1rem] 2xl:text-[1.25rem]">
                                                        Bác sĩ. {{ Support::show($doctor, 'name') }}
                                                    </span>
                                                    <span class="examined block text-[0.75rem] italic text-[#9c9c9c]">{{ Support::show($parent, 'name') }}</span>
                                                </div>
                                            @endif
                                            <p class="time mb-2 mt-2 text-[0.75rem] lg:mb-4">Đã trả lời: <span class="font-semibold text-[#40b5ff]">Ngày {{ Support::showDateTime($currentItem->time_reply, 'd/m/Y') }}</span></p>
                                        </div>
                                        <div class="answer-content s-content mb-4 lg:text-[0.875rem]">{!! Support::show($currentItem, 'answer') !!}</div>
                                        <div class="favourite flex items-center justify-between">
                                            <a href="javascript:void(0)" title="Trả lời" class="reply btn-reply-comment-question font-medium text-[#9c9c9c]"><i class="fa fa-reply mr-1" aria-hidden="true"></i> Trả lời</a>
                                            <div class="favourite-action flex items-center gap-x-2">
                                                <a href="javascript:void(0)" title="Hữu ích" class="btn-favourite like btn-favourite-question rounded border-[1px] border-solid border-[#ebebeb] py-1 px-2 text-[#767676] lg:text-[0.875rem]" data-type="like" data-id="{{Support::show($currentItem,'id')}}">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                    <span class="count ml-2 border-l-[1px] border-solid border-[#7b7b7b] pl-2 like-count">{{Support::show($currentItem,'like')}}</span>
                                                </a>
                                                <a href="javascript:void(0)" title="Không hữu ích" class="btn-favourite un-like btn-favourite-question rounded border-[1px] border-solid border-[#ebebeb] py-1 px-2 text-[#767676] lg:text-[0.875rem]" data-type="unlike" data-id="{{Support::show($currentItem,'id')}}">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                    <span class="count ml-2 border-l-[1px] border-solid border-[#7b7b7b] pl-2 unlike-count">{{Support::show($currentItem,'unlike')}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4 h-[2px] border-[#ebebeb] opacity-100 2xl:mb-7">
                        <div class="comment-box">
                            <div main-item>
                                <div class="comment-box__list" @if (config('cmrsc_comment.insertAfter')) after @endif>
                                    @include('commentRS::comment')
                                </div>
                            </div>
                        </div>
                        <div class="form-comment__box flex gap-4 py-3 px-4">
                            <form action="{{ url('cmrs/source/binh-luan') }}" method="POST" absolute clear class="form-validate flex-1" data-success="COMMENT.receivedComment">
                                @csrf
                                <input type="hidden" name="map_id" value="{{ $currentItem->id }}">
                                <input type="hidden" name="map_table" value="questions">
                                <textarea id="comment" rules="required" class="form-control mb-4 h-20 w-full resize-none rounded-md border-[1px] border-solid border-[#ebebeb] py-3 px-4 placeholder:italic" name="content" placeholder="Hãy để lại bình luận đầu tiên..."></textarea>
                                <div class="mt-2 grid grid-cols-3 gap-3">
                                    <input type="text" class="col-span-1 rounded-md border p-2" name="plus_name" placeholder="Nhập tên" rules="required">
                                    <input type="text" class="col-span-1 rounded-md border p-2" name="plus_phone" placeholder="Số điện thoại" rules="required">
                                    <input type="text" class="col-span-1 rounded-md border p-2" name="plus_email" placeholder="Email" rules="required">
                                </div>
                                <button type="submit" class="mt-2 inline-flex items-center justify-center rounded-3xl py-2 px-8 uppercase text-white bg-gradient-to-b from-[#28B1FF] to-[#008EDF] transition-all duration-300 lg:text-[0.875rem]">
                                    Bình luận ngay
                                </button>
                            </form>
                        </div>
                        {{ $comments->withQueryString()->links('vendor.pagination.pagination', ['class' => 'paginate-main rounded-full', 'attribute' => "map-table=questions map-id=$currentItem->id"]) }}
                        @if (count($questionRelateds) > 0)
                            <div class="question-related pt-4 pl-4 pr-4 pb-4 lg:pt-8 lg:pl-[4.25rem] 2xl:pt-12 2xl:pl-[5.5rem] 2xl:pr-8 2xl:pb-8">
                                <p class="title-qa mb-4 text-[1.125rem] font-bold text-[#767676] lg:text-[1.5rem] 2xl:text-[2rem]">
                                    Câu hỏi liên quan
                                </p>
                                @foreach ($questionRelateds as $itemQuestionRelateds)
                                    <div class="item-question__related border-b-[1px] border-solid border-[#ebebeb] py-2 last:border-none lg:py-4 2xl:py-7">
                                        <p class="question mb-2 text-[0.875rem] font-bold text-[#7b7b7b] 2xl:text-[1.125rem]">
                                            <a href="{{ Support::show($itemQuestionRelateds, 'slug') }}" title="{{ Support::show($itemQuestionRelateds, 'name') }}">{{ Support::show($itemQuestionRelateds, 'name') }}</a>
                                        </p>
                                        <div class="s-content lg:text-[0.875rem]">{{ Support::show($itemQuestionRelateds, 'question') }}</div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-span-1 px-8 sm:px-0">
                    <a href="{{ \VRoute::get('makeQuestion') }}" class="btn-blue d-block mb-5 rounded border-[1px] border-solid border-transparent bg-[#028cde] py-2 text-center text-[1.25rem] text-white" title="Đặt câu hỏi">Đặt câu hỏi</a>
                    @include('news.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('jsl')
    <script src="theme/frontend/asset/js/jquery-3.4.0.min.js" defer></script>
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/comment/js/tinymce.js') }}" defer></script>
    <script src="{{ asset('assets/comment/js/comment.js') }}" defer></script>
    <script src="theme/frontend/asset/js/script.js" defer></script>
@endsection
