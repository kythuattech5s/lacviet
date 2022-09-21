@php
	$itemImageShow = new \StdClass;
	$itemImageShow->img = '';
	if(is_object($itemImage)){
		$itemImageShow->img = $itemImage->$key;
		$itemImageShow->name = $itemImage->name ?? SettingHelper::getSetting('site_name','Lạc Việt');
	}
	if(is_array($itemImage)){
		$itemImageShow->img = $itemImage[$key];
		$itemImageShow->name = $itemImage['name'] ?? SettingHelper::getSetting('site_name','Lạc Việt');
	}
@endphp
@include('image_loader.default.big',['itemImageShow' => $itemImageShow,'noLazyLoad' => $noLazyLoad ?? 0])
@php
	unset($itemImageShow);
@endphp