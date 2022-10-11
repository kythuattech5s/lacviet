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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:gap-6 sm:gap-4 gap-6 sm:px-0">
            @foreach ($listItems as $k => $item)
            <div class="col-span-1">
                @include('doctors.item_doctor')
            </div>
            @if($k % 3 ===1)
            <hr class="col-span-3 hidden lg:block my-10 h-[3px] opacity-100 bg-[#c7ccce]">
            @endif
            @endforeach
        </div>
        {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
        @else
        <p>Tạm thời chưa có bác sĩ nào</p>
        @endif
        @if (Support::isMobile())
        <div class="mt-10 px-8 sm:px-0">
            <a href="{{ \VRoute::get('makeQuestion') }}" class="btn-blue d-block mb-4 uppercase border-[1px] border-solid border-transparent bg-[#028cde] py-2 text-center text-[1.25rem] text-white" title="Đặt câu hỏi">Đặt câu hỏi</a>
            <?php $listNewsNew = App\Models\News::act()->publish()->orderBy('time_published','desc')->limit(5)->get(); ?>
            @if(count($listNewsNew) > 0)
            <div class="border-[1px] border-solid border-[#7d7d7d] p-4 mb-4">
                <p class="title text-[#028cde] font-bold uppercase text-[1.25rem] after:h-[3px] after:bg-[#028cde] after:w-20 after:block after:mt-1 mb-6">
                    Tin tức mới
                </p>
                <div class="list-new__side grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 ">
                    @foreach($listNewsNew as $itemNewsNew)
                    <div class="col-span-1">
                        <div class="new-sidebar flex items-center">
                            <div class="image w-[100px] shrink-0 mr-2">
                                <a href="{{Support::show($itemNewsNew,'slug')}}" title="{{Support::show($itemNewsNew,'name')}}" class="img img__ block c-img pt-[53%]">
                                    @include('image_loader.tiny',['itemImage'=>$itemNewsNew,'key'=>'img'])
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="{{Support::show($itemNewsNew,'slug')}}" title="{{Support::show($itemNewsNew,'name')}}" class="title text-[#262626] line-clamp-2 font-semibold uppercase text-[0.75rem] mb-2">Giải đáp Nhổ răng khểnh có nguy hiểm không</a>
                                </h3>
                                <p class="count text-[0.625rem] text-[#262626] italic">Lượt xem: {{Support::show($itemNewsNew,'count')}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <?php $listQuestion = App\Models\Question::act()->orderBy('id','desc')->limit(4)->get(); ?>
            @if(count($listQuestion) > 0)
            <div class="border-[1px] border-solid border-[#7d7d7d] p-4 mb-4">
                <p class="text-center font-bold text-[#028cde] uppercase text-[1.25rem] mb-4">Câu hỏi mới nhất</p>
                @foreach($listQuestion as $key => $itemQuestion)
                <div class="item-question__new flex items-center gap-4 mb-4 lát:mb-0">
                    <span class="stt shrink-0 font-bold min-w-[28px] h-7 rounded-full flex items-center justify-center text-white bg-[#028cde]">
                        {{$key+1}}
                    </span>
                    <a href="{{Support::show($itemQuestion,'slug')}}" title="{{Support::show($itemQuestion,'name')}}" class="link text-[#262626]">{{Support::show($itemQuestion,'name')}}</a>
                </div>
                @endforeach
            </div>
            @endif
            <div class="border-[1px] border-solid border-[#7d7d7d] p-4 mb-4">
                <p class="text-center font-bold text-[#028cde] uppercase text-[1.25rem] mb-4">Đăng ký nhận tư vấn</p>
                <form action="{{VRoute::get('resgisterAdvise')}}" method="post" class="form-regis-sidebar form-validate" absolute data-success="NOTIFICATION.toastrMessageRedirect" accept-charset="utf8">
                    @csrf
                    <input type="hidden" name="type" value="1">
                    <input type="text" name="fullname" placeholder="Họ và tên (*)" class="form-control text-[#888] placeholder:text-[#888] w-full p-1 rounded outline-none border-[1px] border-solid border-[#79c2ee] mb-4" rules="required">
                    <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control text-[#888] placeholder:text-[#888] w-full p-1 rounded outline-none border-[1px] border-solid border-[#79c2ee] mb-4" rules="required||phone">
                    <input type="text" name="register_address" placeholder="Nơi đăng ký khám" class="form-control text-[#888] placeholder:text-[#888] w-full p-1 rounded outline-none border-[1px] border-solid border-[#79c2ee] mb-4">
                    <input type="text" name="email" placeholder="Email" class="form-control text-[#888] placeholder:text-[#888] w-full p-1 rounded outline-none border-[1px] border-solid border-[#79c2ee] mb-4">
                    <textarea name="note" placeholder="Triệu chứng:" class="form-control resize-none text-[#888] placeholder:text-[#888] w-full h-24 p-1 rounded outline-none border-[1px] border-solid border-[#79c2ee] mb-4"></textarea>
                    <button type="submit" class=" btn-red flex w-fit mx-auto items-center justify-center lg:text-[0.875rem] uppercase lg:py-3 py-1 lg:px-6 px-3 rounded text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">Đăng ký ngay</button>
                </form>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection