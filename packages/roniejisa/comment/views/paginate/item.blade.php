<div class="comment-box__list" @if (config('cmrsc_comment.insertAfter')) after @endif>
    @include('commentRS::comment')
</div>

@if (config('cmrsc_comment.isPaginate'))
    {{ $comments->withQueryString()->links('vendor.pagination.pagination', ['class' => 'paginate-main rounded-full', 'attribute' => "map-table=$map_table map-id=$currentItem->id"]) }}
@else
    @if ($comments->lastPage() > $comments->currentPage())
        <button type="button" class="more-comment" page-table="{{ $map_table }}" page-id="{-currentItem.id-}" page-current="{{ $comments->currentPage() }}">Xem thêm</button>
    @endif
@endif
