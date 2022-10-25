@if (count($breadcrumbs))
    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach ($breadcrumbs as $k => $breadcrumb)
            @if($breadcrumb->url == url('/'))
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{$breadcrumb->url}}">
                    <span itemprop="name">{{trans('fdb::home')}}</span>
                </a>
                <meta itemprop="position" content="{{$k+1}}">
            </li>
            @elseif ($breadcrumb->url && !$loop->last)
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{ $breadcrumb->url }}">
                        <span itemprop="name">{{ $breadcrumb->title }}</span>
                    </a>
                    <meta itemprop="position" content="{{$k+1}}">
                </li>
            @else
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="javascript:void(0)" itemprop="item" title="{{ $breadcrumb->title }}">
                        <span itemprop="name">{{ $breadcrumb->title }}</span>
                    </a>
                    <meta itemprop="position" content="{{$k+1}}">
                </li>
            @endif
        @endforeach
    </ul>
@endif