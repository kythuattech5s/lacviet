@if (count($listNews) > 0)
	<p class="title-result">Tin tức</p>
	@foreach ($listNews as $itemNews)
		<div class="item-auto-result align-items-start d-flex">
			<div class="img">
				<a href="{{Support::Show($itemNews,'slug')}}" class="smooth" title="{{Support::Show($itemNews,'name')}}">
					@include('image_loader.small',['itemImage'=>$itemNews])
				</a>
			</div>
			<div class="content">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemNews,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemNews,'name')}}">{{Support::Show($itemNews,'name')}}</a></p>
				{{-- <div class="text-right mt-2">
					<small>{{Support::Show($itemNews,'created_at')}}</small>
				</div> --}}
				<div class="small">
					{{Str::words($itemNews->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listServices) > 0)
	<p class="title-result">Dịch vụ</p>
	@foreach ($listServices as $itemServices)
		<div class="item-auto-result align-items-start d-flex">
			<div class="img">
				<a href="{{Support::Show($itemServices,'slug')}}" class="smooth" title="{{Support::Show($itemServices,'name')}}">
					@include('image_loader.small',['itemImage'=>$itemServices])
				</a>
			</div>
			<div class="content">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemServices,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemServices,'name')}}">{{Support::Show($itemServices,'name')}}</a></p>
				{{-- <div class="text-right mt-2">
					<small>{{Support::Show($itemServices,'created_at')}}</small>
				</div> --}}
				<div class="small">
					{{Str::words($itemServices->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listQuestion) > 0)
	<p class="title-result">Hỏi đáp chuyên gia</p>
	@foreach ($listQuestion as $itemQuestion)
		<div class="item-auto-result align-items-start d-flex">
			<div class="img">
				<a href="{{Support::Show($itemQuestion,'slug')}}" class="smooth" title="{{Support::Show($itemQuestion,'name')}}">
					@include('image_loader.small',['itemImage'=>$itemQuestion])
				</a>
			</div>
			<div class="content">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemQuestion,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemQuestion,'name')}}">{{Support::Show($itemQuestion,'name')}}</a></p>
				{{-- <div class="text-right mt-2">
					<small>{{Support::Show($itemQuestion,'created_at')}}</small>
				</div> --}}
			</div>
		</div>
	@endforeach
@endif
@if (count($listSpecialist) > 0)
	<p class="title-result">Chuyên khoa</p>
	@foreach ($listSpecialist as $itemSpecialist)
		<div class="item-auto-result align-items-start d-flex">
			<div class="img">
				<a href="{{Support::Show($itemSpecialist,'slug')}}" class="smooth" title="{{Support::Show($itemSpecialist,'name')}}">
					@include('image_loader.small',['itemImage'=>$itemSpecialist])
				</a>
			</div>
			<div class="content">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemSpecialist,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemSpecialist,'name')}}">{{Support::Show($itemSpecialist,'name')}}</a></p>
				{{-- <div class="text-right mt-2">
					<small>{{Support::Show($itemSpecialist,'created_at')}}</small>
				</div> --}}
				<div class="small">
					{{Str::words($itemSpecialist->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listDoctor) > 0)
	<p class="title-result">Bác sĩ</p>
	@foreach ($listDoctor as $itemDoctor)
		<div class="item-auto-result align-items-start d-flex">
			<div class="img">
				<div class="img-doctor">
					<a href="{{Support::Show($itemDoctor,'slug')}}" class="smooth" title="{{Support::Show($itemDoctor,'name')}}">
						@include('image_loader.small',['itemImage'=>$itemDoctor])
					</a>
				</div>
			</div>
			<div class="content">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemDoctor,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemDoctor,'name')}}">{{$itemDoctor->academic_rank}} {{Support::Show($itemDoctor,'name')}}</a></p>
				<p class="my-1">{{$itemDoctor->position}}</p>
				{{-- <div class="text-right">
					<small>{{Support::Show($itemDoctor,'created_at')}}</small>
				</div> --}}
				<div class="small">
					{{Str::words($itemDoctor->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listDiseaseLookup) > 0)
	<p class="title-result">Tra cứu bệnh</p>
	@foreach ($listDiseaseLookup as $itemDiseaseLookup)
		<div class="item-auto-result align-items-start d-flex">
			<div class="content w-100">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemDiseaseLookup,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemDiseaseLookup,'name')}}">{{$itemDiseaseLookup->academic_rank}} {{Support::Show($itemDiseaseLookup,'name')}}</a></p>
				<p class="my-1">{{$itemDiseaseLookup->position}}</p>
				<div class="small">
					{{Str::words($itemDiseaseLookup->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listBodyLookup) > 0)
	<p class="title-result">Tra cứu cơ thể</p>
	@foreach ($listBodyLookup as $itemBodyLookup)
		<div class="item-auto-result align-items-start d-flex">
			<div class="content w-100">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemBodyLookup,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemBodyLookup,'name')}}">{{$itemBodyLookup->academic_rank}} {{Support::Show($itemBodyLookup,'name')}}</a></p>
				<p class="my-1">{{$itemBodyLookup->position}}</p>
				<div class="small">
					{{Str::words($itemBodyLookup->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listDrugLookup) > 0)
	<p class="title-result">Tra cứu thuốc</p>
	@foreach ($listDrugLookup as $itemDrugLookup)
		<div class="item-auto-result align-items-start d-flex">
			<div class="content w-100">
				<p class="name robotob fs-16"><a href="{{Support::Show($itemDrugLookup,'slug')}}" class="smooth hv-sp" title="{{Support::Show($itemDrugLookup,'name')}}">{{$itemDrugLookup->academic_rank}} {{Support::Show($itemDrugLookup,'name')}}</a></p>
				<p class="my-1">{{$itemDrugLookup->position}}</p>
				<div class="small">
					{{Str::words($itemDrugLookup->seo_des,'25')}}
				</div>
			</div>
		</div>
	@endforeach
@endif
@if (count($listNews) == 0 && count($listServices) == 0 && count($listSpecialist) == 0 && count($listDoctor) == 0 && count($listQuestion) == 0 && count($listDiseaseLookup) == 0 && count($listBodyLookup) == 0 && count($listDrugLookup) == 0)
	<p class="text-center py-2">Không có kết quả nào được tìm thấy</p>
@else
	<a href="{{VRoute::get('search')}}?q={{$val}}" class="smooth view-all d-block" title="Xem tất cả kết quả">Xem tất cả kết quả</a>
@endif