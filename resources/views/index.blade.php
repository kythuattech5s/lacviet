<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="vi">
<head>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	{!! \vanhenry\helpers\helpers\SEOHelper::HEADER_SEO(@$currentItem ? $currentItem : null) !!}
	<base href="{{ url('/') }}">
	<link href="{{ url()->current() }}" hreflang="vi-vn" rel="alternate" />
	<meta content="{{ csrf_token() }}" name="csrf-token">
	<link href="theme/frontend/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="theme/frontend/css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="theme/frontend/css/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
	<link href="theme/frontend/css/lightbox.css" rel="stylesheet" type="text/css" />
	<link href="theme/frontend/asset/css/toastify.css" rel="stylesheet" type="text/css" />
	<link href="theme/frontend/css/custom.css?v=1.1" rel="stylesheet" type="text/css" />
	@yield('cssl')
	<link href="theme/frontend/css/app.css?v={{ time() }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('./css/app.css?v=5.2') }}" rel="stylesheet">
	@if(!Support::isLightHouseSp())
		<script src="https://cdn.tailwindcss.com"></script>
	@endif
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
	<link href="theme/frontend/css/main.css?v={{ time() }}" rel="stylesheet" type="text/css" />
	@yield('css')
	<script type="text/javascript">
		var messageNotify = "{{ Session::get('messageNotify', '') }}";
		var typeNotify = "{{ Session::get('typeNotify', '') }}";
	</script>
	@if(!Support::isLightHouseSp())
		{[CMS_HEADER]}
		@include('schema_code')
	@endif
</head>
<body class="wrapper mx-auto overflow-x-hidden font-['Arial',sans-serif] text-[12px] leading-normal text-[#262626] sm:text-[14px] 2xl:text-[16px]">
	@if(!Support::isLightHouseSp())
		{[CMS_BODY]}
	@endif
	@if (!isset($onlyShowContent))
		@include('header')
	@endif
	@yield('content')
	@if (!isset($onlyShowContent))
		@include('footer')
	@endif
	@if(!Support::isLightHouseSp())
		@include('gg_js')
		{[CMS_FOOTER]}
		<div id="fb-root"></div>
		<script defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=480194903000973&autoLogAppEvents=1" nonce="sBHfRLsS"></script>
	@endif
	@yield('jsl')
	<script src="theme/frontend/asset/js/base.js" defer></script>
	<script src="theme/frontend/asset/js/toastify.js" defer></script>
	<script src="{{ asset('assets/js/ValidateForm.js') }}" defer></script>
	<script src="theme/frontend/asset/js/xhr.js" defer></script>
	<script src="theme/frontend/tech5s_js/tech5s_base.min.js" defer></script>
	<script src="theme/frontend/tech5s_js/libraries/Tech.js" defer></script>
	<script src="theme/frontend/tech5s_js/libraries/BackToTop.js" defer></script>
	<script src="theme/frontend/js/wow.min.js" defer></script>
	<script src="theme/frontend/js/fslightbox.js" defer></script>
	<script src="theme/frontend/js/modal.js" defer></script>
	@if(!Support::isLightHouseSp())
		<script src="theme/frontend/js/swiper-bundle.min.js" defer></script>
	@endif
	<script src="theme/frontend/js/slider.js" defer></script>
	<script src="{{ Support::asset('assets/plugins/countdown/countDownCustom.js') }}" defer></script>
	@yield('js')
	<script src="theme/frontend/js/script.js" defer></script>
</body>
</html>
