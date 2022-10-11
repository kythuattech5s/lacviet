@extends('index')
@section('content')
<section class="search-new 2xl:py-10 py-6">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="col-span-1 lg:col-span-3">
                @if (count($listItems) > 0)
                    <p class="result 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] mb-4 text-center">
                        {{$listItems->total()}} KẾT QUẢ TÌM KIẾM "<span class="keywork">{{$val}}</span>"
                    </p>
                    <form action="{{\VRoute::get("search")}}" method="get" class="form-search-new relative max-w-[725px] mx-auto 2xl:mb-9 mb-6  overflow-hidden" accept-charset="utf8">
                        <input type="text" name="q" value="{{$val}}" class="form-control w-full py-2 px-4 h-9 border-[1px] border-solid border-[#aaa] rounded-md  pr-10">
                        <button class="btn-search flex w-9 h-9 rounded bg-[#028cde] text-white items-center justify-center absolute top-0  right-0 z-[1]">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    @foreach ($listItems as $item)
                        <div class="module-new__search p-4 bg-[#fafafa] 2xl:mb-6 mb-4">
                            @include('news.item_search')
                        </div>
                    @endforeach
                    {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
                @else
                    <p class="result 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] mb-4 text-center">
                        KHÔNG CÓ KẾT QUẢ TÌM KIẾM "<span class="keywork">{{$val}}</span>"
                    </p>
                    <form action="{{\VRoute::get("search")}}" method="get" class="form-search-new relative max-w-[725px] mx-auto 2xl:mb-9 mb-6  overflow-hidden" accept-charset="utf8">
                        <input type="text" name="q" placeholder="" class="form-control w-full py-2 px-4 h-9 border-[1px] border-solid border-[#aaa] rounded-md  pr-10">
                        <button class="btn-search flex w-9 h-9 rounded bg-[#028cde] text-white items-center justify-center absolute top-0  right-0 z-[1]">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <p class="text uppercase 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] mb-4 text-center">Có thể bạn quan tâm</p>
                    @foreach ($listHotNews as $item)
                        <div class="module-new__search p-4 bg-[#fafafa] 2xl:mb-6 mb-4">
                            @include('news.item_search')
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-span-1 px-8 sm:px-0">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@stop