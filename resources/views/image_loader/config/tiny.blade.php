@php
	$itemImage = SettingHelper::getSetting($config_key);
	$itemImageShow = new \StdClass;
	$itemImageShow->img = $itemImage ?? null;
	$itemImageShow->name = SettingHelper::getSetting('site_name','Lạc Việt');
@endphp
@include('image_loader.default.tiny',['itemImageShow' => $itemImageShow,'noLazyLoad' => $noLazyLoad ?? 0])
@php
	unset($itemImageShow);
@endphp