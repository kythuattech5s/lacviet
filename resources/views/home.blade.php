@extends('index')
@section('content')
<h1 class="hidden">{[seo_title]}</h1>
	<div class="swiper-container slide-banner__index">
		<div class="swiper-wrapper">
			@foreach ($listBanner as $key => $itemBanner)
				<div class="swiper-slide">
					<a {!! Support::showNofollow($itemBanner) !!} class="link-banner" href="{{ $itemBanner->link != '' ? $itemBanner->link : 'javascript:void(0)' }}" title="{{ $itemBanner->name }}">
						@if (Support::isMobile())
							@if ($key == 0)
								@include('image_loader.big', ['itemImage' => $itemBanner, 'key' => 'img_mobile', 'noLazyLoad' => 1])
							@else
								@include('image_loader.big', ['itemImage' => $itemBanner, 'key' => 'img_mobile'])
							@endif
						@else
							@if ($key == 0)
								@include('image_loader.all', ['itemImage' => $itemBanner, 'key' => 'img', 'noLazyLoad' => 1])
							@else
								@include('image_loader.all', ['itemImage' => $itemBanner, 'key' => 'img'])
							@endif
						@endif
					</a>
				</div>
			@endforeach
		</div>
		<div
							class="button-banner banner-prev absolute top-1/2 left-[5%] z-[1] hidden h-10 w-10 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525] lg:flex lg:h-14 lg:w-14 2xl:h-20 2xl:w-20">
			<i aria-hidden="true" class="fa fa-angle-left"></i>
		</div>
		<div
							class="button-banner banner-next absolute top-1/2 right-[5%] z-[1] hidden h-10 w-10 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#fff] text-[2.5rem] text-white transition-all duration-300 hover:bg-white hover:text-[#252525] lg:flex lg:h-14 lg:w-14 2xl:h-20 2xl:w-20">
			<i aria-hidden="true" class="fa fa-angle-right"></i>
		</div>

	</div>
	<section class="py-6 lg:py-14 2xl:py-20">
		<div class="container">
			<h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:mb-14 lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_reson_choose_home]}</h2>
			<div class="grid grid-cols-2 gap-4 md:grid-cols-4 2xl:gap-6">
				@foreach ($listReasonChoose as $key => $itemReasonChoose)
					<div class="wow flipInY col-span-1 mb-4 sm:mb-0" data-wow-delay="{{ ($key + 1) * 0.1 }}s">
						<div class="item-reason rounded text-center">
							<span class="img img__ c-img lg::mb-4 mb-2 block overflow-hidden rounded-2xl pt-[100%] lg:pt-[108%]">
								@include('image_loader.big', ['itemImage' => $itemReasonChoose, 'key' => 'img'])
							</span>

							<h3 class="title mb-2 text-center text-[1rem] font-bold uppercase text-[#000] lg:mb-4 lg:text-[1.125rem]">{{ Support::show($itemReasonChoose, 'name') }}</h3>
							<div class="s-content text-justify leading-[1.5] lg:leading-[1.5]">{!! Support::show($itemReasonChoose, 'content') !!}</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section class="section-service__index relative bg-cover bg-no-repeat py-6 after:absolute after:top-0 after:left-0 after:z-[1] after:h-full after:w-full after:bg-[rgba(255,255,255,.5)] 2xl:py-10"
										style="background-image: url({Ibg_service_home.imgI});">
		<div class="container relative z-[2]">
			<h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:mb-24 lg:text-[1.5rem] 2xl:text-[2rem]">{[title_service_home]}</h2>

			@if (Support::isMobile())
				<div class="swiper-container slide-service__mobile">
					<div class="swiper-wrapper">
						@foreach ($listHotService as $key => $item)
							<div class="swiper-slide">
								@include('services.item')
							</div>
						@endforeach

					</div>
					<div
										class="button-banner service-prev absolute top-[27%] left-[7%] z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white sm:top-1/2 sm:left-[5%] md:h-10 md:w-10 lg:h-14 lg:w-14">
						<i aria-hidden="true" class="fa fa-angle-left"></i>
					</div>
					<div
										class="button-banner service-next absolute top-[27%] right-[7%] z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#74a6cb] text-[1.5rem] text-[#74a6cb] transition-all duration-300 hover:bg-[#74a6cb] hover:text-white sm:top-1/2 sm:right-[5%] md:h-10 md:w-10 lg:h-14 lg:w-14">
						<i aria-hidden="true" class="fa fa-angle-right"></i>
					</div>
				</div>
			@else
				<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 2xl:gap-6">
					@foreach ($listHotService as $key => $item)
						<div class="wow fadeInUp col-span-1" data-wow-delay="{{ ($key + 1) * 0.1 }}s">
							@include('services.item')
						</div>
					@endforeach
				</div>
			@endif
		</div>
	</section>
	@if (count($listQuestion) > 0)
		<section class="section-faq__index bg-cover bg-no-repeat py-14 lg:py-14 2xl:py-20" style="background-image: url({Ibg_frequent_question_home.imgI});">
			<div class="container">
				@php
					$bigItemQuestion = $listQuestion->first();
				@endphp
				<div class="grid grid-cols-1 gap-4 lg:grid-cols-5 lg:gap-8 2xl:gap-20">
					<div class="wow fadeInLeft col-span-1 lg:col-span-3">
						@if (isset($bigItemQuestion))
							<div class="item-new__main">
								<a class="img img__ c-img mb-4 block overflow-hidden rounded-2xl pt-[55%]" href="{{ Support::show($bigItemQuestion, 'slug') }}" title="{{ Support::show($bigItemQuestion, 'name') }}">
									@include('image_loader.all', ['itemImage' => $bigItemQuestion, 'key' => 'img'])
								</a>
								<h3>
									<a class="title line-clamp-2 mb-2 text-[1rem] font-bold uppercase text-white lg:text-[1.125rem] 2xl:mb-4" href="{{ Support::show($bigItemQuestion, 'slug') }}"
												title="{{ Support::show($bigItemQuestion, 'name') }}">{{ Support::show($bigItemQuestion, 'name') }}</a>
								</h3>
								<div class="short_content line-clamp-2 mb-2 flex-1 text-white 2xl:mb-4">{{ Support::show($bigItemQuestion, 'question') }}</div>

								<a class="btn-white inline-flex items-center justify-center rounded-3xl bg-white py-2 px-4 text-[#262626] shadow-[0_6px_8px_rgba(0,0,0,.17)] transition-all duration-300 lg:text-[0.875rem]"
											href="{{ Support::show($bigItemQuestion, 'slug') }}" title="Xem thêm">
									Xem thêm
									<i aria-hidden="true" class="fa fa-angle-double-right ml-2"></i>
								</a>
							</div>
						@endif
					</div>
					<div class="wow fadeInRight col-span-1 lg:col-span-2">
						<h2
									class="title-all relative mb-4 text-center text-[1.25rem] font-semibold uppercase text-white lg:pl-3 lg:text-left lg:text-[2rem] lg:before:absolute lg:before:left-0 lg:before:top-1/2 lg:before:h-[80%] lg:before:w-1 lg:before:-translate-y-1/2 lg:before:bg-white 2xl:mb-8 2xl:text-[2rem]">
							{[title_frequent_question_home]}</h2>
						<div class="module-faq lg:max-h-[415px] lg:overflow-y-auto 2xl:max-h-[530px]">
							@foreach ($listQuestion as $key => $itemSmallQuestion)
								@if ($key > 0)
									<div class="item-faq mb-4 last:mb-0 2xl:mb-5">
										<p class="question mb-3 text-[0.875rem] text-white 2xl:text-[1.125rem]">
											{{ Support::show($itemSmallQuestion, 'name') }}
										</p>
										<p class="time mb-2 font-medium italic text-white lg:text-[0.813rem] 2xl:mb-4">
											<i aria-hidden="true" class="fa fa-calendar mr-2"></i> 0707/2022
										</p>

										<a class="btn-white inline-flex items-center justify-center rounded-3xl bg-white py-2 px-6 text-[#262626] shadow-[0_6px_8px_rgba(0,0,0,.17)] transition-all duration-300 lg:text-[0.875rem]"
													href="{{ Support::show($itemSmallQuestion, 'slug') }}" title="Xem thêm">
											Trả lời
											<i aria-hidden="true" class="fa fa-angle-double-right ml-2"></i>
										</a>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
	<section class="section-system py-6 2xl:py-14">
		<div class="container">

			<h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_base_system_home]}</h2>
			<div class="boxslide wow fadeInUp relative px-12 lg:px-0">

				<div class="swiper-container slide-system">
					<div class="swiper-wrapper">
						@foreach ($listBranchSystem as $itemBranchSystem)
							<div class="swiper-slide">
								<div class="item-system">
									<span class="img c-img img__ block overflow-hidden rounded-xl pt-[100%]">
										@include('image_loader.big', ['itemImage' => $itemBranchSystem, 'key' => 'img'])
									</span>
									<div class="system-info p-4">
										<p class="item relative mb-3 pl-6 last:mb-0">

											<i aria-hidden="true" class="fa fa-map-marker absolute top-[2px] left-0 text-[1rem] text-[#028cde]"></i>
											<span class="text text-[#252525]">{{ Support::show($itemBranchSystem, 'full_address') }}</span>
										</p>
										<p class="item relative mb-3 pl-6 last:mb-0">
											<img alt="phone" class="absolute top-[2px] left-0 w-4 object-contain" src="theme/frontend/images/phone_blue.png">
											<a class="text font-bold font-bold text-[#252525]" href="tel:{{ Support::show($itemBranchSystem, 'phone') }}" title="hotline">{{ Support::show($itemBranchSystem, 'phone') }}</a>
										</p>
										<p class="item relative mb-3 pl-6 last:mb-0">
											<img alt="phone" class="absolute top-[2px] left-0 w-4 object-contain" src="theme/frontend/images/bell-blue.png">

											<span class="text text-[#252525]">
												Giờ mở cửa: <strong class="font-bold">{{ Support::show($itemBranchSystem, 'open_time') }}</strong>
											</span>
										</p>
										<p class="item relative mb-3 pl-6 last:mb-0">
											<i aria-hidden="true" class="fa fa-calendar absolute top-[2px] left-0 text-[1rem] text-[#028cde]"></i>
											<span class="text text-[#252525]">
												Ngày hoạt động: <strong class="font-bold">{{ Support::show($itemBranchSystem, 'day_word') }}</strong>
											</span>
										</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="pagination-all pagination-system hidden lg:block"></div>
				</div>
				<div
									class="button-circle button-circle__prev system_prev absolute top-[27%] left-0 z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#028cde] text-[1.5rem] text-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white sm:top-[30%] lg:-left-14 lg:flex 2xl:-left-32 2xl:h-20 2xl:w-20 2xl:text-[2.5rem]">
					<i aria-hidden="true" class="fa fa-angle-left relative left-[-1px] top-[-2px]"></i>
				</div>
				<div
									class="button-circle button-circle__next system_next absolute top-[27%] right-0 z-[1] flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full border-[1px] border-solid border-[#028cde] text-[1.5rem] text-[#028cde] transition-all duration-300 hover:bg-[#028cde] hover:text-white sm:top-[30%] lg:-right-14 lg:flex 2xl:-right-32 2xl:h-20 2xl:w-20 2xl:text-[2.5rem]">
					<i aria-hidden="true" class="fa fa-angle-right relative left-[1px] top-[-2px]"></i>
				</div>
			</div>
		</div>
	</section>
	@if (count($listHomeNews) > 0)
		<section class="section-new__index py-10 !pt-0 2xl:py-10">
			<div class="container">
				<h2 class="title-all mb-6 text-center text-[1.25rem] font-semibold uppercase text-[#028cde] lg:text-[1.5rem] 2xl:mb-10 2xl:text-[2rem]">{[title_new_home]}</h2>

				<div class="module-new__index grid grid-cols-1 gap-4 lg:grid-cols-2 2xl:gap-6">
					@if (isset($videoHome))
						<div class="wow fadeInLeft col-span-1">
							<div class="item-new__main">
								<a class="btn-play-video img img__ c-img mb-2 block overflow-hidden rounded-lg pt-[54%] lg:rounded-2xl 2xl:mb-4" data-fslightbox="video" href="{{ Support::show($videoHome, 'link_video') }}"
											title="{{ Support::show($videoHome, 'name') }}">
									@include('image_loader.all', ['itemImage' => $videoHome, 'key' => 'img'])
								</a>
								<h3>
									<a class="title line-clamp-2 mb-2 text-[1rem] font-bold uppercase text-[#262626] lg:text-[1.25rem] 2xl:mb-4" href="{{ Support::show($videoHome, 'link_video') }}"
												title="{{ Support::show($videoHome, 'name') }}">{{ Support::show($videoHome, 'name') }}</a>
								</h3>
								<div class="short_content line-clamp-2 mb-2">{{ Support::show($videoHome, 'content') }}</div>
								<a class="btn-white inline-flex items-center justify-center rounded-3xl border-[1px] border-solid border-[#028cde] bg-white py-1 px-3 text-[#262626] shadow-[0_6px_8px_rgba(0,0,0,.17)] transition-all duration-300 hover:bg-[#028cde] hover:text-white lg:py-2 lg:px-6 lg:text-[0.875rem]"
											href="{{ Support::show($videoHome, 'link_video') }}" title="Xem thêm">

									Xem thêm
									<i aria-hidden="true" class="fa fa-angle-double-right ml-2"></i>
								</a>
							</div>
						</div>
					@endif
					<div class="wow fadeInRight col-span-1">
						@foreach ($listHomeNews as $key => $itemSmall)
							<div class="list-new__item mb-4 flex gap-3 last:mb-0 2xl:mb-6">
								<a class="img img__ block h-[70px] w-[125px] shrink-0 overflow-hidden rounded sm:h-[100px] sm:w-[180px] lg:rounded-lg" href="{{ Support::show($itemSmall, 'slug') }}"
											title="{{ Support::show($itemSmall, 'name') }}">
									@include('image_loader.big', ['itemImage' => $itemSmall, 'key' => 'img'])
								</a>
								<div class="new-content">
									<h3>
										<a class="title line-clamp-2 font-bold uppercase 2xl:text-[1.125rem]" href="{{ Support::show($itemSmall, 'slug') }}"
													title="{{ Support::show($itemSmall, 'name') }}">{{ Support::show($itemSmall, 'name') }}</a>
									</h3>
									<div class="short_content line-clamp-2 mb-2">{{ Support::show($itemSmall, 'short_content') }}</div>

									<a class="btn-white ml-auto mr-0 flex w-fit items-center justify-center rounded-3xl border-[1px] border-solid border-[#028cde] bg-white py-1 px-3 text-[#262626] shadow-[0_6px_8px_rgba(0,0,0,.17)] transition-all duration-300 hover:bg-[#028cde] hover:text-white lg:py-2 lg:px-6 lg:text-[0.875rem]"
												href="{{ Support::show($itemSmall, 'slug') }}" title="Xem thêm">
										Xem thêm
										<i aria-hidden="true" class="fa fa-angle-double-right ml-2"></i>
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	@endif
	@if (isset($_GET['test']))
		<section class="section-booking bg-cover bg-no-repeat py-6 2xl:py-10" style="background-image: url(theme/frontend/images/back-20210723095120.jpg);">
			<div class="container">
				<div class="module-content mx-auto max-w-[700px]">
					<div class="main-img text-center">
						<img alt="" src="theme/frontend/images/2-20210723095120.png">
					</div>
					<div class="box-content overflow-hidden rounded-3xl bg-cover bg-no-repeat p-4 lg:rounded-[2.5rem] lg:p-8" style="background-image: url(theme/frontend/images/background1-20210723080452.jpg);">
						<p class="title title-gradient mb-2 text-center text-[1.25rem] font-semibold uppercase lg:text-[1.5rem] 2xl:text-[1.875rem]">
							ĐẶT LỊCH KHÁM MIỄN PHÍ CÙNG CHUYÊN GIA
						</p>
						<p class="mb-4 text-center uppercase text-white lg:text-[1.125rem]">
							NHẬN ƯU ĐÃI ĐẾN <span class="title-gradient text-[20px] md:text-[25px] lg:text-[38px]">40%</span>
							Trả góp
							<span class="title-gradient text-[20px] md:text-[25px] lg:text-[38px]">0%</span>
						</p>
						<div class="mb-4 text-center" data-end="__DATETIME_END__" data-start="__DATETIME_START__" rs-countdown-end="showNotify.sale" rs-countdown="sales">
							<div class="item mr-2 inline-flex h-10 w-10 flex-col items-center justify-center rounded bg-[#b4b4b4] text-center last:mr-0 lg:mr-4 lg:h-[65px] lg:min-w-[65px]">
								<span class="block text-[1rem] font-semibold text-[#985031] lg:text-[1.5rem]" item-of-rs-countdown="sales" type-of-rs-countdown="days">2</span>
								<span class="text text-white">Ngày</span>
							</div>
							<div class="item mr-2 inline-flex h-10 w-10 flex-col items-center justify-center rounded bg-[#b4b4b4] text-center last:mr-0 lg:mr-4 lg:h-[65px] lg:min-w-[65px]">
								<span class="block text-[1rem] font-semibold text-[#985031] lg:text-[1.5rem]" item-of-rs-countdown="sales" type-of-rs-countdown="hours">2</span>
								<span class="text text-white">Giờ</span>
							</div>
							<div class="item mr-2 inline-flex h-10 w-10 flex-col items-center justify-center rounded bg-[#b4b4b4] text-center last:mr-0 lg:mr-4 lg:h-[65px] lg:min-w-[65px]">
								<span class="block text-[1rem] font-semibold text-[#985031] lg:text-[1.5rem]" item-of-rs-countdown="sales" type-of-rs-countdown="minutes">2</span>
								<span class="text text-white">Phút</span>
							</div>
							<div class="item mr-2 inline-flex h-10 w-10 flex-col items-center justify-center rounded bg-[#b4b4b4] text-center last:mr-0 lg:mr-4 lg:h-[65px] lg:min-w-[65px]">
								<span class="block text-[1rem] font-semibold text-[#985031] lg:text-[1.5rem]" item-of-rs-countdown="sales" type-of-rs-countdown="second">2</span>
								<span class="text text-white">Giây</span>
							</div>
						</div>
						<form action="/dang-ky-thong-tin" class="form form-validate mx-auto max-w-[480px]" data-success="NOTIFICATION.showNotify" method="POST">
							@csrf
							<div class="grid grid-cols-1 gap-4 md:grid-cols-2">
								<div class="col-span-1">
									<input class="form-control w-full border-[1px] border-solid border-[#ebebeb] py-2 px-4 outline-none" name="" placeholder="Họ và tên" type="text">
								</div>
								<div class="col-span-1">
									<input class="form-control w-full border-[1px] border-solid border-[#ebebeb] py-2 px-4 outline-none" name="" placeholder="Số điện thoại" type="text">
								</div>
								<div class="col-span-1 md:col-span-2">
									<select class="form-control w-full border-[1px] border-solid border-[#ebebeb] py-2 px-4 outline-none">
										<option>Chọn dịch vụ</option>
									</select>
								</div>
								<div class="col-span 1 text-center md:col-span-2">
									<button class="btn inline-flex items-center justify-center bg-white py-2 px-4 text-[#c28d43] hover:bg-[#c28d43] hover:text-white">Đăng ký ngay</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	@endif
	<a class="callback fixed top-1/2 right-[10px] z-10 hidden -translate-y-1/2 items-center lg:flex" data-modal="modalRegis" href="javascript:void(0)" onclick="MORE_FUNCTION.showModal(this);"
				title="Yêu cầu gọi lại">
		<div class="box h-16 w-16 shrink-0 overflow-hidden rounded-full bg-[#028cde] p-2 2xl:h-20 2xl:w-20">
			<span class="ava block h-full w-full overflow-hidden rounded-full bg-white">
				<img alt="" src="theme/frontend/images/ava-call.png">
			</span>
			</d>
		</div>
		<div class="content-text -ml-2 bg-[#028cde] p-1 pl-4 text-white 2xl:p-2">
			<span class="text mr-2">Yêu cầu gọi lại
				<img alt="" class="inline-block h-8 w-8 object-contain" src="theme/frontend/images/h-hotline.svg">
			</span>
		</div>
	</a>
	<div aria-hidden="true" class="h-modal fixed top-0 right-0 left-0 z-50 w-full overflow-y-auto overflow-x-hidden md:inset-0 md:h-full" id="modalRegis" modal="" tabindex="-1">
		<div class="relative mx-auto h-full w-full max-w-[370px] rounded-[1.25rem] border-[1px] border-solid border-[#5e8fea] bg-white p-2 md:h-auto">
			<form action="" class="overflow-hidden rounded-[1.25rem] bg-white shadow-[6px_8px_40px_rgba(0,0,0,.2)]" method="">
				<div class="logo-modal p-4 text-center">
					<img alt="" class="inline-block" src="theme/frontend/images/logo.png">
				</div>
				<p class="head bg-[#028cde] p-4 text-center text-[18px] font-semibold uppercase text-white lg:text-[22px]">
					Đăng ký tư vấn
				</p>
				<div class="content py-3 px-4">
					<input class="mb-2 w-full bg-[#f2f2f2] p-3 text-[#767676] outline-none placeholder:text-[#767676]" name="" placeholder="Họ tên*:" type="text">
					<input class="mb-2 w-full bg-[#f2f2f2] p-3 text-[#767676] outline-none placeholder:text-[#767676]" name="" placeholder="Điện thoại*:" type="text">
					<input class="mb-2 w-full bg-[#f2f2f2] p-3 text-[#767676] outline-none placeholder:text-[#767676]" name="" placeholder="Dịch vụ:" type="text">
					<input class="mb-10 w-full bg-[#f2f2f2] p-3 text-[#767676] outline-none placeholder:text-[#767676]" name="" placeholder="Chọn khung giờ gọi lại:" type="text">

					<button
													class="btn-red mb-3 inline-flex w-full items-center justify-center bg-[#fb2317] py-2 px-4 text-[14px] font-semibold uppercase text-white transition-all duration-300 md:text-[18px] lg:text-[22px]">Hoàn
						tất</button>
					<p class="text-center font-semibold text-[#028cde] lg:text-[18px]">
						Bác sĩ sẽ liên hệ ngay với bạn!
					</p>
				</div>
			</form>
		</div>
	</div>
@endsection
