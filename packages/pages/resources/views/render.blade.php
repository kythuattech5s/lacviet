<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! vanhenry\helpers\helpers\SEOHelper::HEADER_SEO($currentItem,url($currentItem->slug)) !!}
    <title>{{ $currentItem->name }}</title>
    @php
        $styles = explode("\r\n", $currentItem->styles);
        $scripts = explode("\r\n", $currentItem->scripts);
    @endphp
    @if (is_array($styles) && count($styles) > 0)
        @php
            $newStyle = [];
            foreach ($styles as $style) {
                $newStyle[] = '/_grapes/assets/' . $style;
            }
        @endphp
        {!! vanhenry\helpers\helpers\SEOHelper::loadCSS($newStyle, 'page-custom/' . $currentItem->url . '_style.css') !!}
    @endif
    <style>
        {!! $data['pagesHtml'][0]['css'] !!}
    </style>
</head>
@if ($currentItem->use_header == 1)
    @include('header')
@endif
{!! $data['pagesHtml'][0]['html'] !!}
@if ($currentItem->use_footer == 1)
    @include('footer')
@endif
@if (is_array($scripts) && count($scripts) > 0)
    @php
        $newScript = [];
        foreach ($scripts as $script) {
            $newScript[] = '/_grapes/assets/' . $script;
        }
    @endphp
    {!! vanhenry\helpers\helpers\SEOHelper::loadJs($newScript, 'page-custom/' . $currentItem->url . '_script.js') !!}
@endif

</html>
