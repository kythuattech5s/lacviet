<?php 
	$name = FCHelper::er($table,'name');
	$default_code = FCHelper::er($table,'default_code');
	$default_code = json_decode($default_code,true);
	$default_code = @$default_code?$default_code:array();
	$value ="";
	if($actionType=='edit'||$actionType=='copy'){
		if($name != 'price' && $name != 'price_sale')
		$value = FCHelper::er($dataItem,$name);
		else
		$value = $dataItem->$name;
	}
	$jsons = json_decode($value,true); $jsons = @$jsons?$jsons:[]; 
?>
	<div class="form-group" @if($tableMap=='orders' && $name=='val_order') style="display: none;" @endif>
		<p class="form-title" for="">{{FCHelper::er($table,'note')}} <span class="count"></span></p>
		<textarea class="hidden" name="{{$name}}"><?php echo $value;  ?></textarea>
		<div class="textv2-{{$name}}">
			@foreach($jsons as $key => $json)
			<div class="item">
				<div class="row">
					<div class="col-md-3">
					<label>Icon</label>
					</div>
					<div class="col-md-9">
						<div class="item_image">
							<img style="max-width: 50px;" src="{{array_key_exists('img', $json)?$json['img']:''}}" alt="" class="img-responsive">
							<input type="hidden" value="{{array_key_exists('img', $json)?$json['img']:''}}" class="ti_img" id="idxti{{$name}}{{$key}}" >
							<a href="{{$admincp}}/media/view?istiny=idxti{{$name}}{{$key}}" class="browseimage bgmain btn btn-primary iframe-btn" type="button">Chọn ảnh</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
					<label>Tiêu đề</label>
					</div>
					<div class="col-md-9">
						<input class="name-{{$name}}" value="{{isset($json['name'])?$json['name'] :''}}">
					</div>
				</div>
				<div class="text-right">
					<button type="button" class="delete btn_">Xóa</button>
				</div>
			</div>
			@endforeach
		</div>
		<div class="text-center" style="width: 100%;">
			<button type="button" class="add-{{$name}}">Thêm</button>
		</div>
	</div>
	<style type="text/css">
		.textv2-<?php echo $name; ?>{
		    border: 1px solid #00923f;
			width: 100%;
			margin: 10px 0px;
		}
		.textv2-<?php echo $name; ?> .item{
			margin: 10px;
    		border: 1px solid #ccc;
    		padding: 10px;
    		position: relative;
		}
		.textv2-<?php echo $name; ?> .item input, .textv2-<?php echo $name; ?> .item textarea{
			width: 100% !important; 
			padding: 5px;
    		border: 1px solid #00923f;
    		padding-right: 50px;
    		padding-left: 15px;
		}
		.textv2-<?php echo $name; ?> .btn_{
			background: #fff;
			padding: 5px;
			border: 1px solid #00923f;
			position: absolute;
		    top: 10px;
		    right: 10px;
		}
	</style>
	<script type="text/javascript">
		$(function() {
			function calculate<?php echo $name; ?>(){
				var textv2 = $(".textv2-<?php echo $name; ?> .item");
				var ret = [];
				for (var i = 0; i < textv2.length; i++) {
					var tmp = {};
					var textv22 =$(textv2[i]) ;
					var img = textv22.find(".ti_img");
					tmp.name = textv22.find('.name-<?php echo $name; ?>').val();
					try{
						var json = JSON.parse(img.val());
						tmp.img = json.path +json.file_name;
					}
					catch(e){
						tmp.img = img.val();
					}
					ret.push(tmp);	
				}
				$('textarea[name=<?php echo $name; ?>]').val(JSON.stringify(ret));
			}
			$(document).on('input', '.title-<?php echo $name; ?>,.content-<?php echo $name; ?>,.name-<?php echo $name; ?>', function(event) {
				event.preventDefault();
				calculate<?php echo $name; ?>();
			});
			$(document).on('input', '.textv2-{{$name}} .item .ti_img', function(event) {
				event.preventDefault();
				calculate{{$name}}();
			});
			$(document).on('click', '.textv2-<?php echo $name; ?> .item .delete', function(event) {
				event.preventDefault();
				$(this).parents('.item').remove();
				calculate<?php echo $name; ?>();
			});
			$(document).on('click', '.textv2-<?php echo $name; ?> .btndelete', function(event) {
				event.preventDefault();
				$(this).parent().parent().children('img').attr('src','theme/admin/images/noimage.png');
				$(this).parent().parent().children('input').val('theme/admin/images/noimage.png');
				calculate<?php echo $name; ?>();
				
			});
			
			$(".add-<?php echo $name; ?>").click(function(event) {
				event.preventDefault();
				var name = Math.random().toString(36).substring(7);
				var idxti = 'idxti<?php echo $name; ?>'+$(".textv2-{{$name}} .item").length;
				console.log(idxti);
				var str = '<div class="item">'
					+'<div class="item_image">'
						+'<img style="max-width: 50px;" src="" alt="" class="img-responsive">'
						+'<input type="hidden" value="" class="ti_img" id="'+idxti+'" >'
						+'<p>Icon</p>'
						+'<a href="{{$admincp}}/media/view?istiny='+idxti+'" class="browseimage bgmain btn btn-primary iframe-btn" type="button">Chọn ảnh</a>'
						+'<button style="margin-top: 15px;margin-left: 5px;" class="btndelete- bgmain btn btn-primary">Xóa ảnh</button>'
					+'</div>'
					+'<div class="row">'
						+'<div class="col-md-3">'
						+'<label>Tiêu đề</label>'
						+'</div>'
						+'<div class="col-md-9">'
						+'<input class="name-<?php echo $name ?>"/>'
						+'</div>'
					+'</div>'
					
					+'<div class="text-right">'
					+'<button type="button" class="delete btn_">Xóa</button>'
					+'</div>'
				+'</div>';
				$('.textv2-<?php echo $name ?>').append(str);
			});
		});
	</script>