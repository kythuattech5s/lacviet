<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="vi">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {!!\vanhenry\helpers\helpers\SEOHelper::HEADER_SEO(@$currentItem?$currentItem:NULL)!!}
    <base href="{{url('/')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="theme/frontend/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/animate.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/swiper-bundle.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/lightbox.css" type="text/css" rel="stylesheet" />
    @yield('cssl')
    <link href="theme/frontend/css/app.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/output.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/main.css" type="text/css" rel="stylesheet" />
    @yield('css')
    <script type="text/javascript">
        var messageNotify = "{{Session::get('messageNotify', '')}}";
        var typeNotify = "{{Session::get('typeNotify', '')}}";
    </script>
    {[CMS_HEADER]}
    @include('schema_code')
</head>
<body class="wrapper mx-auto 2xl:text-[16px] sm:text-[14px] text-[12px] text-[#262626] leading-snug font-['Gilroy',sans-serif] overflow-x-hidden">
    {[CMS_BODY]}
    @if (!isset($onlyShowContent))
        @include('header')
    @endif
    @yield('content')
    @if (!isset($onlyShowContent))
        @include('footer')
    @endif
    @include('gg_js')
    {[CMS_FOOTER]}
    @yield('jsl')
    <script src="theme/frontend/tech5s_js/tech5s_base.min.js" defer></script>
    <script src="theme/frontend/tech5s_js/libraries/Tech.js" defer></script>
    <script src="theme/frontend/tech5s_js/libraries/BackToTop.js" defer></script>
    <script src="theme/frontend/js/wow.min.js" defer></script>
    <script src="theme/frontend/js/fslightbox.js" defer></script>
    <script src="theme/frontend/js/swiper-bundle.min.js" defer></script>
    <script src="theme/frontend/js/slider.js" defer></script>
    @yield('js')
    <script src="theme/frontend/js/script.js" defer></script>
</body>
</html>
