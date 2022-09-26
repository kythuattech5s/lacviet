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
                    <p class="title-qa text-center font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676]">
                        Hỏi đáp chuyên gia
                    </p>
                    <div class="module-content">
                        <div
                            class="module-qa relative 2xl:p-8 lg:p-6 p-4 border-b-[1px] border-solid border-[#ebebeb] last:border-none ">

                            <div class="relative lg:pl-14 pl-11">
                                <span
                                    class="avatar-qa block lg:w-12 lg:h-12 w-9 h-9 rounded-full overflow-hidden absolute top-0 left-0">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </span>
                                <div class="head-qa flex gap-x-4 items-center justify-between flex-wrap">
                                    <div class="info flex gap-4 items-center flex-wrap lg:mb-4 mb-2">
                                        <span
                                            class="name font-semibold text-[#40b5ff] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">
                                            Phạm Thị Tình
                                        </span>
                                        <span
                                            class="examined font-semibold text-[0.75rem] text-white bg-[#028cde] rounded p-1">Chuẩn
                                            đoán hình ảnh</span>
                                    </div>
                                    <p class="time text-[0.75rem] lg:mb-4 mb-2">Đã hỏi: <span
                                            class="text-[#40b5ff] font-semibold">Ngày 27/01/2022</span></p>
                                </div>
                                <p
                                    class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">
                                    Trồng răng implant là gì?
                                </p>
                                <div class="question-content lg:text-[0.875rem] mb-4">
                                    Cấy ghép Implant là gì? Cấy ghép Implant hay còn gọi là trồng răng Implant là
                                    phương
                                    pháp sử dụng trụ Implant cấy vào xương hàm để thay thế cho răng thật đã mất.
                                </div>
                                <div
                                    class="bg-[#f0f0f0] lg:p-4 p-2 rounded flex gap-2 items-center justify-between flex-wrap">
                                    <div class="staits flex items-center gap-3">
                                        <span
                                            class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                            <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                                            1 Bình luận
                                        </span>
                                        <span
                                            class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            5.4678 Lượt xem
                                        </span>
                                    </div>
                                    <a href="" title=""
                                        class="item btn-blue text-white text-[0.75rem] bg-[#028cde] border-[1px] border-solid border-transparent rounded py-1 px-2">
                                        Xem câu trả lời
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div
                        class="module-qa relative 2xl:p-8 lg:p-6 p-4 border-b-[1px] border-solid border-[#ebebeb] last:border-none ">

                        <div class="relative lg:pl-14 pl-11">
                            <span
                                class="avatar-qa block lg:w-12 lg:h-12 w-9 h-9 rounded-full overflow-hidden absolute top-0 left-0">
                                <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                            </span>
                            <div class="head-qa flex gap-x-4 items-center justify-between flex-wrap">
                                <div class="info flex gap-4 items-center flex-wrap lg:mb-4 mb-2">
                                    <span
                                        class="name font-semibold text-[#40b5ff] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">
                                        Phạm Thị Tình
                                    </span>
                                    <span
                                        class="examined font-semibold text-[0.75rem] text-white bg-[#028cde] rounded p-1">Chuẩn
                                        đoán hình ảnh</span>
                                </div>
                                <p class="time text-[0.75rem] lg:mb-4 mb-2">Đã hỏi: <span
                                        class="text-[#40b5ff] font-semibold">Ngày 27/01/2022</span></p>
                            </div>
                            <p
                                class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">
                                Trồng răng implant là gì?
                            </p>
                            <div class="question-content lg:text-[0.875rem] mb-4">
                                Cấy ghép Implant là gì? Cấy ghép Implant hay còn gọi là trồng răng Implant là
                                phương
                                pháp sử dụng trụ Implant cấy vào xương hàm để thay thế cho răng thật đã mất.
                            </div>
                            <div
                                class="bg-[#f0f0f0] lg:p-4 p-2 rounded flex gap-2 items-center justify-between flex-wrap">
                                <div class="staits flex items-center gap-3">
                                    <span
                                        class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                        <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                                        1 Bình luận
                                    </span>
                                    <span
                                        class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        5.4678 Lượt xem
                                    </span>
                                </div>
                                <a href="" title=""
                                    class="item btn-blue text-white text-[0.75rem] bg-[#028cde] border-[1px] border-solid border-transparent rounded py-1 px-2">
                                    Xem câu trả lời
                                </a>
                            </div>
                        </div>

                    </div>
                    </div>
                    <div class="pagination">
                        <strong>1</strong>
                        <a href="">2</a>
                        <a href="">3</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection