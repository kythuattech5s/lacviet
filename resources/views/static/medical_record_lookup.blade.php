@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="search-document 2xl:py-10 py-6 bg-[#f7f7f7]">
    <div class="container">

        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">

            <div class="col-span-1 lg:col-span-3">
                <div
                    class="box-content bg-white border-[1px] border-solid border-[#ebebeb] rounded-2xl overflow-hidden">
                    <p
                        class="head text-center text-white uppercase 2xl:text-[1.5rem] lg:text-[1.25rem] text-[0.875rem] bg-[#028cde] p-3">
                        Tra cứu bệnh án</p>
                    <div class="content 2xl:p-14 lg:p-8 p-4">
                        <form action="" method="" class="form-search-doc sm:flex gap-4 items-center 2xl:mb-8 mb-6">
                            <div
                                class="wrapper-form flex gap-3 items-center flex-1 h-9 border-[1px] border-solid border-[#ebebeb] rounded-lg px-4 py-2 mb-2 sm:mb-0">
                                <span class="text whitespace-nowrap text-[#373737] 2xl:text-[1.125rem]">
                                    Mã bệnh nhân:
                                </span>
                                <input type="text" name="" placeholder="" class="form-control flex-1">
                            </div>
                            <button
                                class="btn-red whitespace-nowrap inline-flex h-9 mx-auto font-semibold items-center justify-center lg:text-[0.875rem] uppercase py-2 px-10 rounded-lg text-white bg-[#fb2317] transition-all duration-300">
                                Tra cứu
                            </button>
                        </form>
                        <p
                            class="title font-bold text-center uppercase 2xl:text-[1.5rem] lg:text-[1.25rem] text-[0.875rem] text-[#028cde] 2xl:mb-6 mb-4">
                            Tra cứu bệnh án</p>
                        <div class="button-tabs tabs-search flex gap-4 mb-4">
                            <button class="tablinks font-bold lg:text-[0.875rem] text-center sm:p-4 p-2 active"
                                data-electronic="tab-1">Nội dung điều trị</button>
                            <button class="tablinks font-bold lg:text-[0.875rem] text-center sm:p-4 p-2"
                                data-electronic="tab-2">Phim X Quang</button>
                            <button class="tablinks font-bold lg:text-[0.875rem] text-center sm:p-4 p-2"
                                data-electronic="tab-3">Ảnh trước - sau</button>
                        </div>
                        <div class="wrapper_tabcontent 2xl:mb-8 mb-6">
                            <div class="tabcontent active" id="tab-1">
                                <div
                                    class="table-result bg-[#f8fbfe] border-[1px] border-solid border-[#d7ecfa] rounded overflow-hidden">
                                    <div class="grid grid-cols-3">
                                        <div class="col-span-1">
                                            <div
                                                class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                Ngày điều trị
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <div
                                                class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                Nội dung điều trị
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-table">
                                        <div class="grid grid-cols-3 border-t-[1px] border-solid border-[#ebebeb]">
                                            <div class="col-span-1">
                                                <div
                                                    class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                    10/02/2022
                                                </div>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="item-table 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                    Cấy ghép A)dqaf khau chỉ không tiêu đơn thuốc
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 border-t-[1px] border-solid border-[#ebebeb]">
                                            <div class="col-span-1">
                                                <div
                                                    class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                    10/02/2022
                                                </div>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="item-table 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                    Cấy ghép A)dqaf khau chỉ không tiêu đơn thuốc
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 border-t-[1px] border-solid border-[#ebebeb]">
                                            <div class="col-span-1">
                                                <div
                                                    class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                    10/02/2022
                                                </div>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="item-table 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                    Cấy ghép A)dqaf khau chỉ không tiêu đơn thuốc
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 border-t-[1px] border-solid border-[#ebebeb]">
                                            <div class="col-span-1">
                                                <div
                                                    class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                    10/02/2022
                                                </div>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="item-table 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                    Cấy ghép A)dqaf khau chỉ không tiêu đơn thuốc
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabcontent" id="tab-2">

                            </div>
                            <div class="tabcontent" id="tab-3">

                            </div>
                        </div>
                        <div class="bg-[#f8fbfe] border-[1px] border-solid border-[#d7ecfa] 2xl:p-4 p-2 text-[0.875rem] appointment 2xl:mb-8 mb-6">
                            Lịch hẹn: <strong class="font-bold">25/08/2022</strong>
                        </div>
                        <a href="#" title="Đổi lịch hẹn"
                        class="btn-red flex w-fit mx-auto items-center justify-center lg:text-[0.875rem] uppercase py-3 px-8 rounded-xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                        Đổi lịch hẹn
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <a href="#" title="" class="link-banner__sidebar hidden lg:block img__ mb-6">
                    <img src="theme/frontend/images/banner-sidebar.jpg" alt="">
                </a>
                <p
                    class="head-title__sidebar text-center font-semibold uppercase py-1 px-3 text-white bg-[#028cde] 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] 2xl:mb-6 mb-4">
                    Tin tức mới
                </p>
                <div class="list-new__side grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 mb-6">
                    <div class="col-span-1">
                        <div class="new-sidebar flex items-center">
                            <div class="image w-[100px] shrink-0 mr-2">
                                <a href="#" title="" class="img img__ block c-img pt-[53%]">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="#" title=""
                                        class="title line-clamp-2 font-semibold uppercase text-[0.75rem] mb-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscingi
                                    </a>
                                </h3>
                                <p class="count text-[0.625rem] italic">Lượt xem: 210003</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="new-sidebar flex items-center">
                            <div class="image w-[100px] shrink-0 mr-2">
                                <a href="#" title="" class="img img__ block c-img pt-[53%]">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="#" title=""
                                        class="title line-clamp-2 font-semibold uppercase text-[0.75rem] mb-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscingi
                                    </a>
                                </h3>
                                <p class="count text-[0.625rem] italic">Lượt xem: 210003</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="new-sidebar flex items-center">
                            <div class="image w-[100px] shrink-0 mr-2">
                                <a href="#" title="" class="img img__ block c-img pt-[53%]">
                                    <img src="theme/frontend/images/new-sidebar.jpg" alt="">
                                </a>
                            </div>
                            <div class="new-content">
                                <h3>
                                    <a href="#" title=""
                                        class="title line-clamp-2 font-semibold uppercase text-[0.75rem] mb-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscingi
                                    </a>
                                </h3>
                                <p class="count text-[0.625rem] italic">Lượt xem: 210003</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p
                    class="head-title__sidebar text-center font-semibold uppercase py-1 px-3 text-white bg-[#028cde] 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem]">
                    Câu hỏi liên quan
                </p>
                <div class="border-box border-[1px] border-solid border-[#028cde] 2xl:p-7 p-4 mb-6">
                    <a href="#" title=""
                        class="question-related relative font-semibold block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
                        <span
                            class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">1</span>

                        Chụp CT và MRI có gì khác nhau?
                    </a>
                    <a href="#" title=""
                        class="question-related relative  font-semibold block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
                        <span
                            class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">2</span>

                        Chỉ số CA 125 vượt ngưỡng thì có nguy cơ mắc
                    </a>
                    <a href="#" title=""
                        class="question-related relative  font-semibold block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
                        <span
                            class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">3</span>

                        Vảy tai kèm theo ngứa tai là biểu hiện của bệnh gì?
                    </a>
                    <a href="#" title=""
                        class="question-related relative  font-semibold block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
                        <span
                            class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">4</span>

                        Nội soi dạ dày đại tràng có được bảo hiểm y tế chi trả không?
                    </a>
                    <a href="#" title=""
                        class="question-related relative  font-semibold block text-[#131313] text-[0.875rem] mb-5 last:mb-0 pl-10">
                        <span
                            class="stt min-w-[26px] h-[26px] text-[0.625rem] text-white inline-flex items-center justify-center bg-[#028cde] absolute top-0 left-0">5</span>
                        Điều trị viêm đại tràng như thế nào?
                    </a>
                </div>
                <p
                    class="head-title__sidebar text-center font-semibold uppercase py-1 px-3 text-white bg-[#028cde] 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem]">
                    Đăng ký tư vấn
                </p>
                <div class="border-box border-[1px] border-solid border-[#028cde] p-4 mb-6">
                    <p class="text-center md:text-[0.875rem] 2xl:mb-6 mb-4">
                        Vui lòng để lại thông tin và nhu cầu
                        của Quý khách để được nhận tư vấn
                    </p>
                    <form action="" method="" class="form-regis-sidebar">
                        <input type="text" name="" placeholder="Họ và tên (*)"
                            class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
                        <input type="text" name="" placeholder="Số điện thoại (*)"
                            class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
                        <input type="text" name="" placeholder="Nơi đăng ký khám"
                            class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
                        <input type="text" name="" placeholder="Email"
                            class="form-control text-[#888] placeholder:text-[#888] w-full p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4">
                        <textarea name="" placeholder="Triệu chứng:"
                            class="form-control resize-none text-[#888] placeholder:text-[#888] w-full h-24 p-3 rounded-md outline-none border-[1px] border-solid border-[#bce0f6] mb-4"></textarea>
                        <button
                            class="btn-red flex w-fit mx-auto items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-3xl text-white bg-[#fb2317] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Đăng ký ngay
                        </button>
                    </form>
                </div>
                <a href="#" title="" class="link-banner__sidebar hidden lg:block img__ mb-2">
                    <img src="theme/frontend/images/fanpage.jpg" alt="">
                </a>
                <a href="#" title="" class="link-banner__sidebar hidden lg:block img__ mb-2">
                    <img src="theme/frontend/images/ytb.jpg" alt="">
                </a>
            </div>
        </div>

    </div>
</section>
@endsection