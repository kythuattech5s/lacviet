<div class="comment-box__content {{ config('cmrsc_comment.class') }}">
    {{-- <p class="mb-5 font-bold">Bài viết này có hữu ích không</p> --}}
    @if (config('cmrsc_comment.hasShowTotal'))
        <div class="box-percent-load">
            @include('commentRS::box_percent')
        </div>
    @endif

    @if (config('cmrsc_comment.hasFilter'))
        @include('commentRS::comment_filter', ['map_table' => $map_table])
    @endif

    @include('commentRS::form.' . strtolower(config('cmrsc_comment.form_type')), ['map_table' => $map_table])
    <div main-item>
        @include('commentRS::paginate.item')
    </div>
</div>
