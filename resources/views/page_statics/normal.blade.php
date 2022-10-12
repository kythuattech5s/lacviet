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
<section class="section-new__detail 2xl:py-10 py-6">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <h1 class="title-new font-bold uppercase 2xl:text-[1.25rem] text-[1rem] 2xl:mb-6 mb-4 text-[#028cde]">{{Support::show($currentItem,'name')}}</h1>
                <div class="s-content mb-4">
                    {!!Support::showContentHasGallery($dataContent['content'],$currentItem->imgs_template)!!}
                </div>
                <?php $listDevelopmentHistory = Support::jsonDecode( Support::show($currentItem,'development_history')); ?>
                @if(count($listDevelopmentHistory) > 0)
                <p class="title-all text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:text-[1.5rem] mb-6 2xl:text-[2rem]">Lịch sử phát triển</p>
                <div class="grid grid-cols-3 lg:gap-4 gap-2 px-10 mb-1">
                    @foreach($listDevelopmentHistory as $itemDevelopmentHistory)
                    <div class="col-span-1">
                        <div class="item-roadmap h-full bg-[#40b5ff] text-white lg:p-6 p-2 text-center">
                            <p class="year font-bold lg:text-[1.875rem] text-[1.5rem] w-fit mx-auto border-b-[2px] border-solid border-white mb-4">{{Support::show($itemDevelopmentHistory,'number')}}</p>
                            <p class="font-bold lg:text-[1.25rem] text-[1rem] uppercase mb-3">{{Support::show($itemDevelopmentHistory,'province')}}</p>
                            <p class="text">{{Support::show($itemDevelopmentHistory,'address')}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="img-map img_full mb-6">
                    @include('image_loader.all',['itemImage'=>$currentItem,'key'=>'image_development_history'])
                </div>
                <?php 
                    $listContent = Support::jsonDecode(Support::show($currentItem,'content_introduce'));
                ?>
                @foreach($listContent as $item)
                <p class="title-all text-[1.25rem] font-semibold uppercase text-[#0557ac] lg:text-[1.5rem] mb-4 2xl:text-[2rem]">{{Support::show($item,'title')}}</p>
                <div class="s-content mb-6">
                    {!! Support::show($item,'content') !!}
                </div>
                @endforeach
            </div>
            <div class="col-span-1">
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