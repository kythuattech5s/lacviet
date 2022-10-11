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