@extends('index')
@section('content')
<section class="py-6">
    <div class="container text-center">
        <div>
            <img src="theme/frontend/images/404-error.jpg" alt="Error Page" class="mx-auto">
        </div>
        <p class="text-[1.25rem] my-4">Truy cập của bạn có thể bị lỗi hoặc không tìm thấy nội dung</p>
        <a href="{{url()->to('/')}}" class="btn-blue inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]" title="{[site_name]}">Quay về trang chủ</a>
    </div>
</section>
@stop