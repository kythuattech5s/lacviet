@extends('index')
@section('cssl')
    <link rel="stylesheet" href="{{asset('assets/comment/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/comment/css/star.css')}}">
    <link rel="stylesheet" href="{{asset('assets/comment/css/selectStar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/comment/style/app.css')}}">
@endsection
@section('css')
    <link href="theme/frontend/asset/css/jquery.fancybox.min.css" type="text/css" rel="stylesheet" />
@endsection
@section('content')
<div class="main-breadcrumb 2xl:my-9 lg:my-6 my-4 py-3 border-t-[1px] border-b-[1px] border-solid border-[#3286be]">
    <div class="container">
        {{\Breadcrumbs::render('news',$currentItem,$parent)}}
    </div>
</div>
<section class="section-new__detail 2xl:py-10 py-6">
    <div class="container">
        @php
            $bannerGdnTopNew = \App\Models\BannerGdn::where('group',1)->act()->first();
        @endphp
        @if (isset($bannerGdnTopNew))
       
            <div class="banner-new__detail lg:mb-6 mb-4">
                @if ($bannerGdnTopNew->use_code == 1)
                    {!!$bannerGdnTopNew->banner_content!!}
                @else
                    <a href="{{$bannerGdnTopNew->buidLink()}}" {{Support::showNofollow($bannerGdnTopNew)}} class="smooth" title="{{$bannerGdnTopNew->name}}">
                        @include('image_loader.all',['itemImage'=>$bannerGdnTopNew,'key'=>'img'])
                    </a>
                @endif
                
            </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-4 2xl:gap-8 gap-4">
            <div class="col-span-1 lg:col-span-3">
                <h1 class="title-new font-bold uppercase 2xl:text-[1.25rem] text-[1rem] 2xl:mb-6 mb-4 text-[#028cde]">{{Support::show($currentItem,'name')}}</h1>
                <div class="content-intro font-bold md:text-[0.875rem] s-content 2xl:p-5 lg:p-4 p-2 bg-[#e0f3ff] border-[1px] border-dashed border-[#a1a1a1] mb-6">
                    {{Support::show($currentItem,'short_content')}}
                </div>
                <div class="mb-4 toc-wrapper">
                    {!!$dataContent['toc']!!}
                </div> 
                <div class="s-content mb-4">
                    {!!Support::showContentHasForm(Support::showContentHasGallery($dataContent['content'],$currentItem->imgs_template), 'news', $currentItem->id)!!}
                </div>
                <ul class="author-new text-right lg:text-[0.875rem] mt-6 text-[#373737]">
                    @if (isset($author))
                        <li class="inline-block lg:mr-5 mr-3 last:mr-0">
                            Tác giả: <span class="text-[#028cde]">{{Support::show($author,'name')}}</span>
                        </li>
                    @endif
                    <li class="inline-block lg:mr-5 mr-3 last:mr-0">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Cập nhật ngày: {{Support::showDateTime($currentItem->time_published,'d/m/Y')}}
                    </li>
                </ul>
                <div class="text-right mt-2">
                    <div class="fb-like" data-href="{{url()->current()}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                </div>
                @if (count($tags) > 0)
                    <div class="news-tag-header lg:text-[1.25rem] text-[1rem] mt-4">
                        <span class="icon text-[#028cde]"><i class="fa fa-tags" aria-hidden="true"></i></span>
                        <span class="font-semibold">Từ khóa: </span>
                    </div>
                    <div class="list-news-tag">
                        @foreach ($tags as $item)
                            <a href="{{Support::show($item, 'slug')}}" {{Support::showNofollow($item)}} class="item-tag mb-2 me-2" title="{{$item->name}}">{{$item->name}}</a>
                        @endforeach
                    </div>
                @endif
                @php
                    $doctor = $currentItem->getDoctor();
                @endphp
                @if (isset($doctor))
                    <div class="box-info-author 2xl:my-20 lg:my-8 my-6 shadow-[0_0_8px_rgba(216,229,251,.8)] bg-white">
                        <!-- <p class="head text-center font-medium uppercase p-4 text-white bg-[#028cde]">
                            Bài viết được tư vấn chuyên môn bởi {{Support::show($doctor,'academic_rank')}} {{Support::show($doctor,'name')}}
                        </p> -->
                        <div class="content p-4 flex flex-col sm:flex-row 2xl:gap-8 lg:gap-6 gap-4">
                            <span class="img block shrink-0 w-[290px] h-auto">
                                @include('image_loader.all',['itemImage'=>$doctor,'key'=>'img'])
                            </span>
                            <div class="info-expert">
                                <p class="name 2xl:text-[2rem] lg:text-[1.5rem] text-[1.25rem] text-[#0557ac] font-bold 2xl:mb-4 mb-2">{{Support::show($doctor,'name')}}</p>
                                <p class="role text-[#373737] font-bold 2xl:text-[1.125rem] 2xl:mb-4 mb-2">{{Support::show($doctor,'academic_rank')}}</p>
                                @if (isset($doctor->specialist))
                                    <a href="{{Support::show($doctor->specialist,'slug')}}" class="inline-block p-3 bg-[#f43d3b] text-white rounded 2xl:mb-4 mb-2" title="{{Support::show($doctor->specialist,'name')}}">{{Support::show($doctor->specialist,'name')}}</a>
                                @endif
                                <div class="flex items-center flex-wrap gap-4">
                                    <a href="tel: {[hotline]}" title="Đăng ký khám"
                                        class="btn-border__blue inline-flex items-center justify-center lg:text-[0.875rem] py-3 px-4 text-[#333] bg-transparent transition-all duration-300 border-[1px] border-solid border-[#028cde]">
                                        <span class="mr-1">Tổng đài</span> 
                                        <strong class="font-bold">{[hotline]}</strong>
                                    </a>
                                    <a href="{{Support::show($doctor,'slug')}}" title="Xem thêm thông tin bác sĩ" class="btn-border__yellow inline-flex items-center justify-center lg:text-[0.875rem] py-3 px-4 text-[#333] bg-transparent transition-all duration-300 border-[1px] border-solid border-[#eea517] hover:bg-[#eea517] hover:text-white">Xem thêm thông tin bác sĩ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (isset($saleSevice))
                    <div class="box-endow p-4 2xl:my-20 lg:my-8 my-6 bg-[#f6f7f8] border-[1px] border-dashed border-[#f45654]">
                        <p class="head text-center w-fit mx-auto uppercase text-[#f43d3b] 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] font-bold mb-4">
                            Ưu đãi dịch vụ {{Support::show($saleSevice,'name')}}
                        </p>
                        <p class="text-center font-medium italic lg:text-[0.875rem] text-[#373737] mb-4">{{Support::show($saleSevice,'sale_title')}}</p>
                        <p class="head-table-endow text-center uppercase text-white bg-[#028cde] 2xl:text-[1.125rem] text-[1rem] p-3">
                            Ưu đãi dịch vụ {{Support::show($saleSevice,'name')}}</p>
                        <div class="table-endow border-[1px] border-solid border-[#c5c5c5] 2xl:mb-6 mb-4">
                            <div class="tr-endow grid grid-cols-2 border-b-[1px] border-solid border-[#c5c5c5] last:border-none">
                                <div class="col-span-1 td-endow lg:px-4 px-2 py-2 border-r-[1px] border-solid border-[#c5c5c5]">
                                    <span class="text font-bold text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">Giá gốc</span>
                                </div>
                                <div class="col-span-1 td-endow lg:px-4 px-2 py-2">
                                    <span class="text font-bold text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">Giá ưu đãi</span>
                                </div>
                            </div>
                            <div class="tr-endow grid grid-cols-2 border-b-[1px] border-solid border-[#c5c5c5] last:border-none">
                                <div class="col-span-1 td-endow lg:px-4 px-2 py-2 border-r-[1px] border-solid border-[#c5c5c5]">
                                    <span class="text text-[#373737] 2xl:text-[1.125rem] lg:text-[1rem] uppercase">{{Support::show($saleSevice,'price')}}</span>
                                </div>
                                <div class="col-span-1 td-endow lg:px-4 px-2 py-2">
                                    <a href="{{Support::show($saleSevice,'link')}}" title="Click NGay để nhận ưu đãi" class="text text-[#f43d3b] 2xl:text-[1.125rem] lg:text-[1rem] uppercase"> Click ngay để nhận ưu đãi</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center gap-4 flex-wrap">
                            <a href="{{VRoute::get('orderExaminationSchedule')}}?service={{$saleSevice->id}}" title="Đăng ký ngay"
                                class="btn-red w-[200px] lg:min-w-[268px] inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-2xl text-white bg-[#f43d3b] transition-all duration-300">
                                Đăng ký ngay
                            </a>
                            <a href="tel:{[hotline]}" title="Đăng ký ngay"
                                class="btn-yellow w-[200px] lg:min-w-[268px] inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-3 px-4 rounded-2xl text-white bg-[#ed9f09] transition-all duration-300">
                                {[hotline]}
                            </a>
                        </div>
                    </div>
                @endif
                @if (count($listMostViewNews) > 0)
                    <div class="box-new__hot 2xl:my-20 lg:my-8 my-6 rounded-3xl overflow-hidden">
                        <p class="head text-center 2xl:text-[1.5rem] lg:text-[1.25rem] text-[1rem] uppercase bg-[#028cde] text-white 2xl:p-5 p-3">Những bài viết đang được nhiều người quan tâm</p>
                        <div class="content bg-[#f6f7f8] 2xl:py-7 lg:px-16 lg:py-4 p-4">
                            @foreach ($listMostViewNews as $itemMostViewNews)
                                <div class="item-new__hot relative flex flex-col sm:flex-row sm:items-center justify-between sm:gap-4 gap-2 2xl:py-4 py-2 border-b-[1px] border-solid border-[#7cc1eb] last:border-dashed">
                                    <a href="{{Support::show($itemMostViewNews,'slug')}}" title="{{Support::show($itemMostViewNews,'name')}}" class="title text-[#373737] uppercase 2xl:text-[1.125rem] lg:text-[1rem]">{{Support::show($itemMostViewNews,'name')}}</a>
                                    <span class="count lg:text-[0.875rem] italic">{{Support::show($itemMostViewNews,'count_view')}} lượt xem</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="comment-box">
                    @include('commentRS::comment_box',['map_table'=>'news'])
                </div>
                @if (count($newsRelateds) > 0)
                    <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Tin cùng chủ đề</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 2xl:gap-8 lg:gap-6 gap-4 mb-6">
                        @foreach ($newsRelateds as $itemRelated)
                            <div class="col-span-1">
                                <div class="item-new__sidebar flex mb-4 last:mb-0">
                                    <div class="image mr-4 shrink-0 w-[150px]">
                                        <a href="{{Support::show($itemRelated,'slug')}}" title="{{Support::show($itemRelated,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
                                            @include('image_loader.tiny',['itemImage'=>$itemRelated,'key'=>'img'])
                                        </a>
                                    </div>
                                    <div class="new-content">
                                        <h3>
                                            <a href="{{Support::show($itemRelated,'slug')}}" title="{{Support::show($itemRelated,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold mb-2">{{Support::show($itemRelated,'name')}}</a>
                                        </h3>
                                        <div class="short_content lg:text-[0.875rem] line-clamp-2">{{Support::show($itemRelated,'short_content')}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if (count($listHotNews) > 0)
                    <p class="title-new__pages relative 2xl:after:h-1 after:h-[2px] after:w-20 after:bg-[#ed9f09] after:block after:mt-2 mb-4 uppercase font-bold text-[#028cde] 2xl:text-[1.25rem] text-[1rem]">Tin không thể bỏ lỡ</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 2xl:gap-8 lg:gap-6 gap-4 mb-6">
                        @foreach ($listHotNews as $itemHotNews)
                            <div class="col-span-1">
                                <div class="item-new__sidebar flex mb-4 last:mb-0">
                                    <div class="image mr-4 shrink-0 w-[150px]">
                                        <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
                                            @include('image_loader.tiny',['itemImage'=>$itemHotNews,'key'=>'img'])
                                        </a>
                                    </div>
                                    <div class="new-content">
                                        <h3>
                                            <a href="{{Support::show($itemHotNews,'slug')}}" title="{{Support::show($itemHotNews,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold mb-2">{{Support::show($itemHotNews,'name')}}</a>
                                        </h3>
                                        <div class="short_content lg:text-[0.875rem] line-clamp-2">{{Support::show($itemHotNews,'short_content')}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
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
    <script src="{{asset('assets/comment/js/comment.js')}}" defer></script>
    <script src="theme/frontend/asset/js/script.js" defer></script>
@endsection