<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="vi">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {!! \vanhenry\helpers\helpers\SEOHelper::HEADER_SEO(@$currentItem ? $currentItem : null) !!}
    <base href="{{ url('/') }}">
    <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="theme/frontend/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/animate.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/swiper-bundle.min.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/css/lightbox.css" type="text/css" rel="stylesheet" />
    <link href="theme/frontend/asset/css/toastify.css" type="text/css" rel="stylesheet" />
    @yield('cssl')
    <link href="theme/frontend/css/app.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'Gilroy': ['"Gilroy"'],
                        'Every': ['"Every"'],
                        'Pleasent': ['"Pleasent"'],
                    },
                   
                    container: {
                        center: true,
                    },
                }
            }
        }
    </script>
    <link href="theme/frontend/css/main.css" type="text/css" rel="stylesheet" />
    @yield('css')
    <script type="text/javascript">
        var messageNotify = "{{ Session::get('messageNotify', '') }}";
        var typeNotify = "{{ Session::get('typeNotify', '') }}";
    </script>
    {[CMS_HEADER]}
    @include('schema_code')
</head>

<body class="wrapper mx-auto overflow-x-hidden font-['Gilroy',sans-serif] text-[12px] leading-snug text-[#262626] sm:text-[14px] 2xl:text-[16px]">
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
    <div id="fb-root"></div>
    <script defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=480194903000973&autoLogAppEvents=1" nonce="sBHfRLsS"></script>
    @yield('jsl')
    <script src="theme/frontend/asset/js/base.js" defer></script>
    <script src="theme/frontend/asset/js/toastify.js" defer></script>
    <script src="{{ asset('assets/js/ValidateForm.js') }}" defer></script>
    <script src="theme/frontend/asset/js/xhr.js" defer></script>
    <script src="theme/frontend/tech5s_js/tech5s_base.min.js" defer></script>
    <script src="theme/frontend/tech5s_js/libraries/Tech.js" defer></script>
    <script src="theme/frontend/tech5s_js/libraries/BackToTop.js" defer></script>
    <script src="theme/frontend/js/wow.min.js" defer></script>
    <script src="theme/frontend/js/swiper-bundle.min.js" defer></script>
    <script src="theme/frontend/js/slider.js" defer></script>
    @yield('js')
    <script src="theme/frontend/js/script.js" defer></script>
</body>

</html>
