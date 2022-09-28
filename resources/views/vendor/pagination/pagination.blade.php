@if ($paginator->hasPages())
    <div class="pagination {{ $class ?? '' }}" {{$attribute ?? ''}}>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <strong><i class="fa fa-angle-left" aria-hidden="true"></i></strong>
        @else
            <a href="{{ str_replace('?page', '/?page', $paginator->previousPageUrl()) }}" data-page="{{ $paginator->currentPage() - 1 }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            @if (!in_array($paginator->currentPage(), [1, 2]))
                <a href="{{ str_replace('?page', '/?page', $paginator->url(1)) }}" data-page="1">1</a></li>
                @if ($paginator->currentPage() !== 3)
                    <a style="pointer-events: none"> ... </a>
                @endif
            @endif
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $key => $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <strong>{{ $page }}</strong>
                    @elseif($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() - 1)
                        <a href="{{ str_replace('?page', '/?page', $url) }}" data-page="{{ $page }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if (!in_array($paginator->currentPage(), [$paginator->lastPage(), $paginator->lastPage() - 1]))
                @if ($paginator->currentPage() !== $paginator->lastPage() - 2)
                    <a style="pointer-events: none"> ... </a>
                @endif
                <a href="{{ str_replace('?page', '/?page', $paginator->url($paginator->lastPage())) }}" data-page="{{ $page }}">{{ $page }}</a></li>
            @endif
            <a href="{{ str_replace('?page', '/?page', $paginator->nextPageUrl()) }}" data-page="{{ $paginator->currentPage() + 1 }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        @else
            <strong><i class="fa fa-angle-right" aria-hidden="true"></i></strong>
        @endif
    </div>
@endif
