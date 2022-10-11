@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="search-document 2xl:py-10 py-6 bg-[#f7f7f7]">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4 lg:flex">
            <div class="col-span-1 lg:col-span-3 lg:flex-1">
                <div class="box-content bg-white border-[1px] border-solid border-[#ebebeb] lg:rounded-2xl overflow-hidden">
                    <p class="head text-center font-bold text-white uppercase 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] bg-[#028cde] lg:p-3 p-2">
                        Tra cứu bệnh án</p>
                    <div class="content 2xl:p-14 lg:p-8 p-4">
                        <form action="{{\VRoute::get("medicalRecordLookup")}}" method="post" class="form-search-doc flex justify-between sm:justify-start sm:gap-4 gap-2 items-center 2xl:mb-8 mb-6">
                            @csrf
                            <div class="wrapper-form flex gap-3 max-w-[60%] sm:max-w-full items-center flex-1 lg:h-9 h-7 border-[1px] border-solid border-[#ebebeb] rounded-sm lg:rounded-lg px-4 lg:py-2 py-1">
                                <!-- <span class="text whitespace-nowrap text-[#373737] 2xl:text-[1.125rem]">
                                    Mã bệnh nhân:
                                </span> -->
                                <input type="text" name="patient_code" placeholder="Mã bệnh nhân:" required class="form-control flex-1 lg:pl-8  text-[#373737] placeholder:text-[#373737]" value="{{$patientCode ?? ''}}">
                            </div>
                            <button type="submit" class="btn-red whitespace-nowrap inline-flex lg:h-9 h-7 sm:mx-auto mr-0 font-semibold items-center justify-center lg:text-[0.875rem] uppercase lg:py-2 py-1 lg:px-10 px-6 rounded-sm lg:rounded-lg text-white bg-[#fb2317] transition-all duration-300">Tra cứu</button>
                        </form>
                        @if (isset($listLichKham))
                            <p class="title font-bold text-center uppercase 2xl:text-[1.5rem] lg:text-[1.25rem] text-[0.875rem] text-[#028cde] 2xl:mb-6 mb-4">Kết quả tra cứu bệnh án</p>
                            <div class="button-tabs tabs-search flex gap-4 mb-4">
                                <button class="tablinks font-bold lg:text-[0.875rem] text-center sm:p-4 p-2 active" data-electronic="tab-1">Nội dung điều trị</button>
                            </div>
                            <div class="wrapper_tabcontent 2xl:mb-8 mb-6">
                                <div class="tabcontent active" id="tab-1">
                                    <div class="table-result bg-[#f8fbfe] border-[1px] border-solid border-[#d7ecfa] rounded overflow-hidden">
                                        <div class="grid grid-cols-3">
                                            <div class="col-span-1">
                                                <div class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                    Ngày điều trị
                                                </div>
                                            </div>
                                            <div class="col-span-2">
                                                <div class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                    Nội dung điều trị
                                                </div>
                                            </div>
                                        </div>
                                        @foreach (array_reverse($listLichKham) as $item)
                                            @if ($item['NgayChiDinh'] != '')
                                                <div class="grid grid-cols-3 border-t-[1px] border-solid border-[#ebebeb]">
                                                    <div class="col-span-1">
                                                        <div class="item-table text-center 2xl:p-4 p-2 font-medium lg:text-[0.875rem] border-r-[1px] border-solid border-[#ebebeb]">
                                                            {{Str::substr(Support::show($item,'NgayChiDinh'),0,10)}}
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="item-table 2xl:p-4 p-2 font-medium lg:text-[0.875rem]">
                                                            {{Support::show($item,'TenDichVu')}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="bg-[#f8fbfe] border-[1px] border-solid border-[#d7ecfa] 2xl:p-4 p-2 text-[0.875rem] appointment 2xl:mb-8 mb-6">
                                Lịch hẹn: <strong class="font-bold">25/08/2022</strong>
                            </div>
                            <a href="#" title="Đổi lịch hẹn" class="btn-red flex w-fit mx-auto items-center justify-center lg:text-[0.875rem] uppercase lg:py-3 py-1 lg:px-8 px-4 rounded-sm lg:rounded-xl text-white bg-[#fb2317] transition-all duration-300 lg:shadow-[0_6px_8px_rgba(0,0,0,.17)]">
                            Đổi lịch hẹn
                            </a> --}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-span-1 px-8 sm:px-0 lg:w-[330px]">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection