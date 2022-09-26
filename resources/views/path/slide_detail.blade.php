@if(count($galleryItem) > 0)
<div class="swiper-container mx-auto slide_detail_editor slide_detail_editor_{{$code}}" data-code="{{$code}}">
	<div class="swiper-wrapper">
		@foreach($galleryItem as $item)
			<?php
				$obj = new \stdClass;
				$obj->img = json_encode($item);
			?>
			<div class="swiper-slide">
				<a href="{%IMGV2.obj.img.-1%}" data-fancybox="gallery" class="image d-block">
	                <img src="{%IMGV2.obj.img.-1%}" alt="{%AIMGV2.obj.img.alt%}" title="{%AIMGV2.obj.img.title%}">
	            </a>
			</div>
		@endforeach
	</div>
	<div class="slider-controls">
		<div class="button-banner banner-prev 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer left-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525] slide_detail_editor_prev_{{$code}}">
			<i class="fa fa-angle-left" aria-hidden="true"></i>
		</div>
		<div class="button-banner banner-next 2xl:w-20 2xl:h-20 lg:h-14 lg:w-14 h-10 w-10 rounded-full hidden lg:flex items-center justify-center absolute top-1/2 -translate-y-1/2 z-[1] cursor-pointer right-[5%] border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525] slide_detail_editor_next_{{$code}}">
			<i class="fa fa-angle-right" aria-hidden="true"></i>
		</div>
	</div>
</div>
@endif