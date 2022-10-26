<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content={{ csrf_token() }} name="csrf-token">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	{!! vanhenry\helpers\helpers\SEOHelper::HEADER_SEO($currentItem, url($currentItem->slug)) !!}
	<title>{{ $currentItem->name }}</title>
	@php
		$styles = explode("\r\n", $currentItem->styles);
		$scripts = explode("\r\n", $currentItem->scripts);
	@endphp
	@if (is_array($styles) && count($styles) > 0)
		@php
			$newStyle = [];
			foreach ($styles as $style) {
			    $newStyle[] = '/_grapes/assets/' . $style;
			}
			
			$newStyle[] = '/assets/css/toastify.css';
		@endphp
		@foreach ($newStyle as $style)
			<link href="{{ Support::asset($style) }}" rel="stylesheet">
		@endforeach
	@endif
	<style>
		{!! $data['pagesHtml'][0]['css'] !!}
	</style>
</head>
@if ($currentItem->use_header == 1)
	@include('header')
@endif
{!! str_replace('__MAP_ID__', $currentItem->id, str_replace('__MAP_TABLE__', 'pages', $data['pagesHtml'][0]['html'])) !!}
@if ($currentItem->use_footer == 1)
	@include('footer')
@endif
@if (is_array($scripts) && count($scripts) > 0)
	@php
		$newScript = [];
		foreach ($scripts as $script) {
		    $newScript[] = '/_grapes/assets/' . $script;
		}
		$newScript[] = '/assets/js/ValidateForm.js';
		$newScript[] = '/assets/js/toastify.js';
	@endphp
	@foreach ($newScript as $script)
		<script src="{{ Support::asset($script) }}" defer></script>
	@endforeach
@endif
@include('gg_js')
<script src="/theme/frontend/asset/js/base.js" defer></script>
<script>
	window.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('form').forEach(form => {
			if (form.querySelector('[name="_token"]')) {
				form.querySelector('[name="_token"]').value = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
			}
		});
	})
</script>

</html>
