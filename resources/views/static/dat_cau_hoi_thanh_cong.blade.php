@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="2xl:py-10 py-6">
    <div class="container">
        <div class="thankyou max-w-[900px] rounded-3xl mx-auto bg-[rgba(64,181,255,.16)] text-center 2xl:py-12 2xl:px-20 lg:py-6 lg:px-12 p-4">
            <p class="title title-all font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] text-[#014bb6] uppercase 2xl:mb-6 mb-4">{{$currentItem->vi_name}}</p>
            <p class="text-medium 2xl:text-[1.25rem] text-[0.875rem] uppercase text-[#0b5cc2] mb-4">Cảm ơn Quý khách đã gửi câu hỏi</p>
            <p class="text text-[#040404] mb-4">Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất. Chúc bạn một ngày tốt lành!</p>
            <a href="{{\VRoute::get("home")}}" title="Trang chủ" class="back-home inline-flex items-center justify-center lg:text-[0.875rem] py-2 px-4 rounded-xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">Trang chủ</a>
        </div>
    </div>
</section>
@endsection