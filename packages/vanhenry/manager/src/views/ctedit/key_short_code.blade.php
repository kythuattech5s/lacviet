<?php 
$name = FCHelper::er($table,'name');
$default_code = FCHelper::er($table,'default_code');
$default_code = json_decode($default_code,true);
$default_code = @$default_code?$default_code:array();
$value ="";
if($actionType=='edit'||$actionType=='copy'){
	$value = FCHelper::er($dataItem,$name);
}
?>

<div class="form-group">
	<p class="form-title" for="">{{trans('db::link')}}</p>
	<p><input style="width:100%" {{FCHelper::ep($table,'require')==1?'required':''}} type="text" name="{{$name}}"  class="noborder" dt-type="{{FCHelper::ep($table,'type_show')}}" placeholder="{{FCHelper::er($table,'note')}}-{{trans('db::suggest_link')}}" value="{{$value}}" />
	</p>
	
</div>
<script type="text/javascript">
	$(function() {
		@foreach($default_code as $dc)
		$(document).on('input', "{{$dc['source']}}", function(event) {
			event.preventDefault();
			@if($dc['function']=='slug' && $actionType!='edit')
			var input = $(this).val();
			var output = TECH.replaceUrl(input);
			
			$("input[name={{$name}}]").val(output);
			$('a._{{$name}}').attr('href',output).text(output);
			@endif
		});
		@endforeach
		$('input[name={{$name}}]').dblclick(function(event) {
			$(this).removeClass('noborder').addClass('border');
		}).focusout(function(event) {
			$(this).removeClass('border').addClass('noborder');
		});
	});
</script>