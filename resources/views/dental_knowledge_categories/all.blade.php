@extends('index')
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('static',$currentItem->vi_name,$currentItem->vi_link)}}
    </div>
</div>
<section class="section-new__category 2xl:py-10 py-6">
    <div class="container">
        <div class="module-new__hot">
            <div class="head-flex flex items-center justify-between mb-4">
                <h1 class="title-all uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#028cde] font-semibold">{{$currentItem->vi_name}}</h1>
                <a href="{{\VRoute::get("allNews")}}" title="Xem thêm" class="readmore hidden sm:block text-[#262626]">Xem thêm <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i></a>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 2xl:gap-8 gap-4">
                @php
                $itemNewsHotBig = $listHotNews->first();
                @endphp
                @if (isset($itemNewsHotBig))
                <div class="col-span-1 lg:col-span-2">
                    <div class="item-new__main pb-2 sm:pb-0 border-b-[1px] border-solid border-[#ebebeb] sm:border-none">
                        <div class="relative image 2xl:mb-4 mb-2 pb-3">
                            <a href="{{Support::show($itemNewsHotBig,'slug')}}" title="{{Support::show($itemNewsHotBig,'name')}}" class="img img__ c-img block sm:rounded-2xl rounded overflow-hidden pt-[60%]">
                                @include('image_loader.all',['itemImage'=>$itemNewsHotBig,'key'=>'img'])
                            </a>
                            <span class="date-time hidden sm:block z-[1] py-1 px-4 rounded-[2.5rem] bg-[#028cde] text-white font-semibold text-[0.75rem] absolute bottom-0 left-10">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($itemNewsHotBig->time_published,'d/m/Y')}}
                            </span>
                        </div>
                        <h3>
                            <a href="{{Support::show($itemNewsHotBig,'slug')}}" title="{{Support::show($itemNewsHotBig,'name')}}" class="title line-clamp-2 text-[#373737] sm:text-[#7b7b7b] font-bold 2xl:text-[1.25rem] text-[1rem] mb-2">{{Support::show($itemNewsHotBig,'name')}}</a>
                        </h3>
                        <div class="short_content line-clamp-2 mb-1 sm:mb-0">{{Support::show($itemNewsHotBig,'short_content')}}</div>
                        <span class="date-time block sm:hidden font-semibold text-[0.75rem] text-[#b2b2b2] italic mt-2">
                                    <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($itemNewsHotBig->time_published,'d/m/Y')}}
                                </span>
                    </div>
                </div>
                @endif
                <div class="col-span-1 new-small-list">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 lg:gap-6 gap-2">
                        @foreach ($listHotNews as $key => $itemHotNews)
                        @if ($key > 0)
                        <div class="col-span-1">
                            <div class="item-new__main flex gap-2 sm:block pb-2 sm:pb-0 border-b-[1px] border-solid border-[#ebebeb] sm:border-none">
                                <div class="relative shrink-0 sm:w-full w-[120px] image 2xl:mb-4 sm:mb-2 sm:pb-3">
                                    <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="img img__ c-img block rounded-2xl overflow-hidden pt-[60%]">
                                        @include('image_loader.big',['itemImage'=>$itemHotNews,'key'=>'img'])
                                    </a>
                                    <span class="date-time hidden sm:block z-[1] py-1 px-4 rounded-[2.5rem] bg-[#028cde] text-white font-semibold text-[0.75rem] absolute bottom-0 left-10">
                                        <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($itemHotNews->time_published,'d/m/Y')}}
                                    </span>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="title line-clamp-2 text-[#373737] sm:text-[#7b7b7b] font-bold 2xl:text-[1.125rem] mb-2">{{Support::show($itemHotNews,'name')}}</a>
                                    </h3>
                                    <div class="short_content line-clamp-2">{{Support::showDateTime($itemHotNews->time_published,'d/m/Y')}}</div>
                                    <span class="date-time block sm:hidden font-semibold text-[0.75rem] text-[#b2b2b2] italic mt-2">
                                    <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 23/09/2022
                                </span>
                                </div>
                            
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <a href="{{\VRoute::get("allNews")}}" title="Xem thêm" class="btn-readmore mt-2 flex sm:hidden w-fit ml-auto mr-auto lg:mr-0 items-center justify-center lg:text-[0.875rem] py-1 px-3 rounded-3xl bg-transparent transition-all duration-300 border-[1px] border-solid border-[#028cde] hover:bg-[#028cde] hover:text-white">
                                Xem thêm <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                            </a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 lg:flex">
            <div class="col-span-1 lg:col-span-3 lg:flex-1">
                @foreach ($listCateChild as $itemCateChild)
                @php
                $listItemNews = $itemCateChild->dentalKnowledge()->act()->orderBy('time_published','desc')->limit(5)->get();
                $bigItem = $listItemNews->first();
                @endphp
                <div class="module-new__category 2xl:pt-14 lg:pt-10 lg:pb-7 lg:py-5 py-2 lg:border-b-[3px] border-solid border-[#028cde]">
                    <h2 class="title-all uppercase 2xl:text-[1.75rem] lg:text-[1.4rem] text-[1rem] text-[#028cde] font-semibold 2xl:mb-6 mb-4">{{Support::show($itemCateChild,'name')}}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-4 gap-2">
                        @if (isset($bigItem))
                        <div class="col-span-1">
                        <div class="item-new__category pb-2 sm:pb-0 border-b-[1px] border-solid border-[#ebebeb] sm:border-none">
                                <div class="image">
                                    <a href="{{Support::show($bigItem,'slug')}}" title="{{Support::show($bigItem,'name')}}" class="img img__ rounded sm:rounded-xl overflow-hidden block c-img pt-[75%] 2xl:mb-4 mb-2">
                                        @include('image_loader.all',['itemImage'=>$bigItem,'key'=>'img'])
                                    </a>
                                </div>
                                <h3>
                                    <a href="{{Support::show($bigItem,'slug')}}" title="{{Support::show($bigItem,'name')}}" class="title line-clamp-2 text-[#373737] sm:text-[#7b7b7b] font-semibold 2xl:text-[1.25rem] text-[1rem] mb-2">{{Support::show($bigItem,'name')}}</a>
                                </h3>
                                <div class="short_content lg:line-clamp-4 line-clamp-2 2xl:mb-6 mb-3">{{Support::show($bigItem,'short_content')}}</div>
                                <span class="date-time font-semibold text-[0.75rem] text-[#b2b2b2] italic">
                                    <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($bigItem->time_published,'d/m/Y')}}
                                </span>
                            </div>
                        </div>
                        @endif
                        <div class="col-span-1">
                        <div class="list-new">
                                @foreach ($listItemNews as $key => $itemSmall)
                                @if ($key > 0)
                                <div class="item-new__sidebar flex sm:mb-4 mb-2 pb-2 sm:pb-0 border-b-[1px] border-solid border-[#ebebeb] sm:border-none last:mb-0">
                                    <div class="image mr-4 shrink-0 sm:w-[150px] w-[120px]">
                                        <a href="{{Support::show($itemSmall,'slug')}}" title="{{Support::show($itemSmall,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
                                            @include('image_loader.tiny',['itemImage'=>$itemSmall,'key'=>'img'])
                                        </a>
                                    </div>
                                    <div class="new-content">
                                        <h3>
                                            <a href="{{Support::show($itemSmall,'slug')}}" title="{{Support::show($itemSmall,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-semibold 2xl:text-[1.125rem] mb-2">{{Support::show($itemSmall,'name')}}</a>
                                        </h3>
                                        <span class="date-time font-semibold text-[0.75rem] text-[#b2b2b2] italic">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($itemSmall->time_published,'d/m/Y')}}
                                        </span>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <a href="{{Support::show($itemCateChild,'slug')}}" title="Xem thêm" class="btn-readmore mt-4 flex w-fit ml-auto mr-auto lg:mr-0 items-center justify-center lg:text-[0.875rem] lg:py-3 py-1 sm:px-4 px-3 rounded-3xl bg-transparent transition-all duration-300 border-[1px] border-solid border-[#028cde] hover:bg-[#028cde] hover:text-white">
                                Xem thêm <i class="fa fa-angle-double-right ml-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-span-1 px-8 sm:px-0 lg:w-[330px]">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection