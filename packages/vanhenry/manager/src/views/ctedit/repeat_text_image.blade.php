<?php 
$default_data = FCHelper::er($table,'default_data');
$default_data = json_decode($default_data,true);
$default_data = @$default_data?$default_data:array("field"=>["text"=>"Tiêu đề"]);
$default_data = $default_data["field"];
$name = FCHelper::er($table,'name');
$value ="";
$values=[];
$img = 'admin/images/noimage.png';
if($actionType=='edit'||$actionType=='copy'){
	$value = FCHelper::ep($dataItem,$name);
	$values = json_decode($value,true);
	$values = @$values?$values:[];
}
?>
<div class="row">
	<p class="des col-xs-12">{{FCHelper::ep(($tableMap=='configs'?$dataItem:$table),'note')}}</p>
	<div class="col-xs-12">
		<textarea placeholder="{{FCHelper::er($table,'note')}}"  class="hidden" name="{{$name}}" id="{{$name}}">{{$value}}</textarea>
		<div class="ti_lists_{{$name}}">
			@foreach($values as $kti=> $vti)
			<div class="ti_item">
				<button class="ti_delete btn btn-primary bgmain" type="button">Xóa</button>
				@foreach($default_data as $kdf=> $dfd)
				<p>{{$dfd}}</p>
				@if($kdf=='content')
					<textarea type="text" class="ti_input ti_{{$kdf}}" >{{isset($vti[$kdf])?$vti[$kdf]:''}}</textarea>
				@else
					<input type="text" class="ti_input ti_{{$kdf}}" value="{{isset($vti[$kdf])?$vti[$kdf]:''}}">
				@endif
				@endforeach
				<img style="max-width: 50px;" src="{{array_key_exists('img', $vti)?$vti['img']:''}}" alt="" class="img-responsive">
				<input type="hidden" value="{{array_key_exists('img', $vti)?$vti['img']:''}}" class="ti_img" id="idxti{{$name}}{{$kti}}" >
				<p>Hình ảnh</p>
				<a href="{{$admincp}}/media/view?istiny=idxti{{$name}}{{$kti}}" class="browseimage bgmain btn btn-primary iframe-btn" type="button">Chọn ảnh</a>
				<button style="margin-top: 15px;margin-left: 5px;" class="btndelete- bgmain btn btn-primary">Xóa ảnh</button>
			</div>
			@endforeach
		</div>
		<div class="text-center">
			<button class="button ti_add_{{$name}} bgmain btn btn-primary" type="button">Thêm</button>
		</div>
	</div>
</div>
<style type="text/css">
	.ti_lists_{{$name}}{
		max-height: 200px;
		overflow-y: scroll;
	    padding: 3px;
    	border: 1px solid #00923f;
	}
	.ti_lists_{{$name}} .ti_item .ti_input{
		width: 70%;
	}
	.ti_lists_{{$name}} .ti_item{
		position: relative;
	}
	.ti_lists_{{$name}} .ti_item button.ti_delete{
		position: absolute;
    right: 0;
	}
</style>
<script type="text/javascript">
	$(function() {
		function calculate{{$name}}(){
			var items = $(".ti_lists_{{$name}} .ti_item");
			var objs=[];
			for (var i = 0; i < items.length; i++) {
				var item = $(items[i]);
				
				var img = item.find(".ti_img");
				var tmm = {};
				@foreach($default_data as $kdf=> $dfd)
					var {{$kdf}} = item.find(".ti_{{$kdf}}");
					tmm.{{$kdf}} = {{$kdf}}.val();
				@endforeach
				try{
					var json = JSON.parse(img.val());
					tmm.img = json.path +json.file_name;
				}catch(e){
					tmm.img = img.val();
				}
				objs.push(tmm);
			}
			$("textarea[name={{$name}}]").val(JSON.stringify(objs));
		}
		$(".ti_add_{{$name}}").click(function(event) {
			var idxti = '{{$name}}'+$(".ti_lists_{{$name}} .ti_item").length;
			var str = '<div class="ti_item">'+
				'<button class="ti_delete btn btn-primary bgmain" type="button">Xóa</button>'+
				@foreach($default_data as $kdf=> $dfd)
					'<p>{{$dfd}}</p>'+
				@if($kdf=='content')
					'<textarea type="text" class="ti_input ti_{{$kdf}}"></textarea>'+
				@else
					'<input type="text" class="ti_input ti_{{$kdf}}" value="">'+
				@endif
				@endforeach
				'<img style="max-width: 50px;" src="" alt="" class="img-responsive">'+
				'<input type="hidden" value="" class="ti_img" id="'+idxti+'" >'+
				'<p>Hình ảnh</p>'+
				'<a href="{{$admincp}}/media/view?istiny='+idxti+'" class="browseimage bgmain btn btn-primary iframe-btn" type="button">Chọn ảnh</a>'+
				'<button style="margin-top: 15px;margin-left: 5px;" class="btndelete- bgmain btn btn-primary">Xóa ảnh</button>'+
			'</div>';
			$(".ti_lists_{{$name}}").append(str);
		});
		@foreach($default_data as $kdf=> $dfd)
		$(document).on('input', '.ti_lists_{{$name}} .ti_item .ti_{{$kdf}}', function(event) {
			event.preventDefault();
			calculate{{$name}}();
		});
		@endforeach
		$(document).on('input', '.ti_lists_{{$name}} .ti_item .ti_img', function(event) {
			event.preventDefault();
			calculate{{$name}}();
		});
		$(document).on('click', '.ti_lists_{{$name}} .ti_delete', function(event) {
			event.preventDefault();
			$(this).remove();
			calculate{{$name}}();
		});
	});
</script>