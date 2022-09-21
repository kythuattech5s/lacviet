@php
	$imageInfo = \Support::analysisItemImage($itemImageShow);
@endphp
<picture>
	<source media="(min-width:0px)" data-srcset="{%IMGV2.itemImageShow.img.350x0%}" srcset="{%IMGV2.itemImageShow.img.350x0%}">
	<img loading="{{isset($noLazyLoad) && $noLazyLoad == 1 ? 'auto':'lazy'}}" src="{%IMGV2.itemImageShow.img.350x0%}" data-src="{%IMGV2.itemImageShow.img.350x0%}" title="{{$imageInfo['title']}}" alt="{{$imageInfo['alt']}}" class="img-fluid">
</picture>