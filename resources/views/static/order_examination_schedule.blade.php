@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="search-booking 2xl:py-10 py-6">
    <div class="container">
        <h1 class="title-all text-center uppercase 2xl:text-[2.5rem] lg:text-[1.5rem] text-[1.25rem] text-[#252525] font-semibold mb-4">{{$currentItem->vi_name}}</h1>
        <p class="subtitle text-center 2xl:text-[1.25rem] 2xl:mb-10 mb-6">
            Vui lòng để lại thông tin, nha khoa sẽ liên hệ tư vấn trong thời gian sớm nhất
        </p>
        <div class="box-content max-w-[1028px] mx-auto">
            <form action="{{VRoute::get('bookApointment')}}" method="post" class="form-booking form-validate" absolute data-success="NOTIFICATION.toastrMessageRedirect" accept-charset="utf8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="col-span-1">
                        <input type="text" name="fullname" placeholder="Họ và tên (*)" class="form-control bg-white p-3 rounded-xl w-full border-[1px] border-solid border-[#e0eaf0]" rules="required">
                    </div>
                    <div class="col-span-1">
                        <input type="text" name="phone" placeholder="Số điện thoại (*)" class="form-control bg-white p-3 rounded-xl w-full border-[1px] border-solid border-[#e0eaf0]" rules="required||phone">
                    </div>
                </div>
                <input type="text" name="email" placeholder="Email" class="form-control bg-white p-3 rounded-xl w-full border-[1px] border-solid border-[#e0eaf0] mb-4">
                    <select name="service" class="flex-1 form-control bg-white p-3 rounded-xl w-full border-[1px] border-solid border-[#e0eaf0] mb-4">
                        <option value="">Vui lòng chọn dịch vụ</option>
                        @foreach (\App\Models\Services::act()->get() as $item)
                            <option value="{{$item->id}}" {{isset(request()->service) && request()->service == $item->id ? 'selected':''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                <textarea class="form-control bg-white p-3 rounded-xl w-full border-[1px] border-solid border-[#e0eaf0] min-h-[100px] resize-none mb-4" name="note" placeholder="Ghi chú"></textarea>
                <button type="submit" class="btn-red flex w-fit mx-auto font-semibold items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-2xl text-white bg-gradient-to-b from-[#28B1FF] to-[#008EDF] transition-all duration-300 mb-4">Đăng ký ngay</button>
                <p class="text-note text-center text-[#fc0c0f] italic font-semibold">
                    Tư vấn trực tiếp 24/7: <a href="tel:{[hotline]}" title="Hotline">{[hotline]}</a>
                </p>
            </form>
        </div>
    </div>
</section>
@endsection