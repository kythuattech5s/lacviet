@if (isset($listLichKham))
    @if(isset($listLichKham[0]['NgayChiDinh']) && ($listLichKham[0]['NgayChiDinh'] != null && $listLichKham[0]['NgayChiDinh']!= '') )
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
        {{-- <a href="#" title="Đổi lịch hẹn" class=" btn-red font-bold 2xl:text-[20px] lg:text-[16px] flex w-fit mx-auto min-w-[200px] items-center justify-center  
                uppercase py-2 px-4 rounded-lg text-white bg-[#f43d3b] transition-all duration-300">Đổi lịch hẹn</a> --}}
    @else
    <p>Không tìm thấy bệnh án</p>
    @endif
@endif
