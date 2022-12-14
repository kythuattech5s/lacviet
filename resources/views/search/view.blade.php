@extends('index')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/comment.css')}}">
@endsection
@section('content')
<section class="main_breadcrumb">
    <div class="container">
        {{\Breadcrumbs::render('static','Tìm kiếm',VRoute::get('search'))}}
    </div>
</section>
<section class="pb-4 pb-xl-5">
    <div class="container main-search-module">
        <h1 class="text-uppercase fs-26-cv robotob wow fadeInUp">Kết quả tìm kiếm với từ khóa: <span class="clmain">{{$val}}</span></h1>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=news&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=service&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=question&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=specialist&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=doctor&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=disease_lookups&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=body_lookups&q={{$val}}">
            
        </div>
        <div class="module-paginate-ajax wow fadeInUp" data-action="{{VRoute::get('searchItem')}}?type=drug_lookups&q={{$val}}">
            
        </div>
    </div>
</section>
@stop