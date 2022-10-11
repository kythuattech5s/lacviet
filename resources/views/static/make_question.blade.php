@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="make-question 2xl:py-10 py-6 bg-[#f7f7f7]">
    <div class="container">
     
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1">
                @include('question_categories.sidebar')
            </div>
            <div class="col-span-1 lg:col-span-2">
                <div class="box-content bg-white border-[1px] border-solid border-[#ebebeb] rounded-lg 2xl:p-8 lg:p-6 p-4">
                    <h1 class="title text-center uppercase 2xl:text-[1.62rem] text-[1.25rem] text-[#028cde] font-bold mb-4">{{$currentItem->vi_name}}</h1>
                    <form action="{{VRoute::get('send-question')}}" method="post" class="form-make-question form-validate" absolute data-success="NOTIFICATION.toastrMessageRedirect" accept-charset="utf8">
                        @csrf
                        <div class="relative mb-4">
                            <select name="parent" class="form-control appearance-none bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb]" rules="required">
                                <option value="">Chọn chuyên khoa (*)</option>
                                @foreach ($listQuestionCategory as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <img src="theme/frontend/images/down.png" class="absolute lg:w-[13px] lg:h-[14px] w-[8px] h-[9px] pointer-events-none top-1/2 right-3 -translate-y-1/2" alt="down">
                        </div>

                        <input type="text" name="fullname" placeholder="Họ tên (*)" class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb] mb-4" rules="required">
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="col-span-1">
                                <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb]" rules="required||phone">
                            </div>
                            <div class="col-span-1">
                                <input type="text" name="age" placeholder="Tuổi" class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb]">
                            </div>
                        </div>
                        <input type="email" name="email" placeholder="Email" class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb] mb-4">
                        <input type="text" name="title" placeholder="Tiêu đề (*)" class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb] mb-4" rules="required">
                        <textarea class="form-control text-[#373737] placeholder:text-[#373737] bg-white lg:py-3 px-3 py-1 rounded-md lg:rounded-lg w-full border-[1px] border-solid lg:border-[#e0eaf0] border-[#ebebeb] lg:min-h-[100px] min-h-[80px] resize-none mb-4" name="note" placeholder="Nội dung (*)" rules="required"></textarea>
                        <button type="submit" class=" btn-red flex w-fit mx-auto lg:font-semibold items-center justify-center lg:text-[0.875rem] uppercase lg:py-3 py-1 lg:px-7 px-3 rounded-lg lg:rounded-2xl text-white bg-[#f43d3b] transition-all duration-300">Gửi câu hỏi</button>
                    </form>
                </div>
            </div>
            <div class="col-span-1 hidden lg:block">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection