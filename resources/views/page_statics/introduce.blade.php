@extends('index')
@section('css')
<link href="theme/frontend/asset/css/jquery.fancybox.min.css" type="text/css" rel="stylesheet" />
@endsection
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('page_statics',$currentItem)}}
    </div>
</div>
<section class="section-about 2xl:py-10 py-6">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <h1 class="title-all mb-6 text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{{Support::show($currentItem,'name')}}</h1>
                <div class="image-about mb-4">
                    @include('image_loader.all',['itemImage'=>$currentItem,'key'=>'img'])
                </div>
                <ul class="text-[#737373] font-bold mb-6 flex items-center lg:gap-8 gap-3 flex-wrap">
                    <li class="inline-block">
                        <img src="theme/frontend/images/cal.png" class="inline-block lg:w-6 lg:h-6 w-5 h-5 object-contain mr-2" alt="icon">
                        {{Support::show($currentItem,'created_at')}}
                    </li>
                    <li class="inline-block">
                        <img src="theme/frontend/images/user.png" class="inline-block lg:w-6 lg:h-6 w-5 h-5 object-contain mr-2" alt="icon">
                        Tác giả: {{Support::show($currentItem,'publish_by')}}
                    </li>
                    <li class="inline-flex items-center">
                        <i class="fa fa-eye lg:text-[1.5rem] text-[1.25rem] mr-2" aria-hidden="true"></i>
                        {{Support::show($currentItem,'count')}} lượt xem
                    </li>
                </ul>
                <div class="s-content p-4 bg-[#e0f3ff] mb-6">
                    {!! Support::show($currentItem,'content') !!}
                </div>
                <?php $listDevelopmentHistory = Support::jsonDecode(SettingHelper::getSetting('development_history')); ?>
                @if(count($listDevelopmentHistory) > 0)
                <p class="title-all text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] mb-6 2xl:text-[2rem]">Lịch sử phát triển</p>
                <div class="grid grid-cols-3 lg:gap-4 gap-2 lg:pl-28 pl-10 mb-1">
                    @foreach($listDevelopmentHistory as $itemDevelopmentHistory)
                    <div class="col-span-1">
                        <div class="item-roadmap h-full bg-[#40b5ff] text-white lg:p-6 p-4 text-center">
                            <p class="year font-bold lg:text-[1.875rem] text-[1.5rem] w-fit mx-auto border-b-[2px] border-solid border-white mb-4">{{Support::show($itemDevelopmentHistory,'number')}}</p>
                            <p class="font-bold lg:text-[1.25rem] uppercase mb-3">{{Support::show($itemDevelopmentHistory,'province')}}</p>
                            <p class="text">{{Support::show($itemDevelopmentHistory,'address')}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="img-map img_full mb-6">
                    @include('image_loader.config.all',['config_key'=>'image_development_history'])
                </div>
                <?php 
                    $listContent = Support::jsonDecode(SettingHelper::getSetting('content_introduce'));
                ?>
                @foreach($listContent as $item)
                <p class="title-all text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] mb-4 2xl:text-[2rem]">{{Support::show($item,'title')}}</p>
                <div class="s-content mb-6">
                    {!! Support::show($item,'content') !!}
                </div>
                @endforeach
            </div>
            <div class="col-span-1 px-8 sm:px-0">
                @include('news.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection
@section('jsl')
<script src="theme/frontend/asset/js/jquery-3.4.0.min.js" defer></script>
<script src="theme/frontend/asset/js/jquery.fancybox.min.js" defer></script>
@endsection
@section('js')
<script src="theme/frontend/asset/js/script.js" defer></script>
@endsection