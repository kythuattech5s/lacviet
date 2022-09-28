@extends('vh::master')
@section('content')
    <input type="hidden" name="model" value="{{ request()->input('model') }}" />
    <input type="hidden" name="field_parent" value="{{ request()->input('field_parent') }}" />
    @foreach (request()->all() as $key => $input)
        @if (strpos('plus_') !== false)
            <input type="hidden" plus-param name="{{ str_replace('plus_') }}" value="{{ $input }}" />
        @endif
    @endif
    <input type="hidden" name="view" value="{{ request()->input('view') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('__commentRS/css/admin_comment.css') }}">
    <div class="card d-flex justify-content-between">
        <a href="esystem/view/questions" class="btn btn-red d-flex align-items-center justify-content-center">Quay lại</a>
        <p class="cart__title list-link">Chi tiết câu hỏi {{ $question->id }}</p>
    </div>
    <hr>
    @php
        $key = str_replace('s', '', $question->map_table);
        $item = $question->$key;
    @endphp
    @if ($item !== null)
        <div class="product-view">
            <a href="{{ $item->slug }}" class="product-view__img" target="_blank">
                <img src="{%IMGV2.item.img.390x0%}" alt="{%AIMGV2.item.img.alt%}" title="{%AIMGV2.item.img.title%}">
            </a>
            <div class="product-view__content">
                <a target="_blank" class="product-view__link" href="{{ $item->slug }}" title="">
                    {{ $item->name }}
                </a>
                <p class="product-view__price">{{ Currency::showMoney($item->price) }}</p>
            </div>
        </div>
    @endif
    <div class="comment-detail">
        @include('commentRS::comments.item', ['comment' => $question])
    </div>
@stop
@section('js')
    <script src="{'__commentRS/js/admin_comment.js'}" defer></script>
@endsection
