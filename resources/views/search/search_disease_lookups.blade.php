@if (count($listItems) > 0)
	<p class="all-title-detail mt-3 mb-2 robotob wow fadeInUp">Tra cứu bệnh</p>
	<div class="row gx-2 gx-3">
		@foreach ($listItems as $key => $item)
			<div class="col-12">
		    	@include('lookup.item')
			</div>
		@endforeach
	</div>
	<div class="pagenigation d-flex justify-content-center mt-3 wow fadeInUp">
	    {{$listItems->withQueryString()->links('vendor.pagination.pagination')}}
	</div>
@endif