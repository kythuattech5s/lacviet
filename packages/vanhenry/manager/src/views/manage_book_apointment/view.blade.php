@extends('vh::master')
@section('content')
@include('vh::static.headertop')
<style>
    #main_view_order .title{
        font-size: 20px;
        text-transform: uppercase;
        font-family: robo;
        font-size: 18px;
        color: white!important;
        background-color: #087990!important;
        padding: 6px 12px;
    }
    #main_view_order .table-view-order,#main_view_order .table-view-order-customer{
        width: 100%;
        border: solid 1px #e1e1e1;
        border-radius: 0;
    }
    #main_view_order .table-view-order th,#main_view_order .table-view-order td,#main_view_order .table-view-order-customer th,#main_view_order .table-view-order-customer td{
        text-align: left;
        padding: 5px 8px;
    }
    #main_view_order .table-view-order td:not(:last-child),#main_view_order .table-view-order-customer td:not(:last-child){
        border-right: solid 1px #e1e1e1;
    }
    #main_view_order .table-view-order tbody tr:not(:last-child) td,#main_view_order .table-view-order-customer tbody tr:not(:last-child) td{
        border-bottom: solid 1px #e1e1e1;
    }
    #main_view_order .table-view-order td:first-child{
        background: #f9f9f9;
        max-width: 80px;
        font-weight: bold;
    }
    #main_view_order .table-view-order-customer th{
        color: #f8f9fa!important;
        background-color: #212529!important;
    }
    #main_view_order .table-view-order-customer th:not(:last-child){
        border-right: solid 1px #f8f9fa!important;
    }
    #main_view_order .table-view-order .select-value,#main_view_order .table-view-order-customer .select-value{
        display: block;
        background: #ebebeb;
        padding: 5px;
        font-weight: bold;
        border-radius: 5px;
    }
    #main_view_order .table-view-order-customer .status-success,#main_view_order .table-view-order-customer .status-faild{
        padding: 5px 15px;
        border-radius: 5px;
        color: white;
        display: block;
    }
    #main_view_order .table-view-order-customer .status-success{
        background: #198754!important;
    }
    #main_view_order .table-view-order-customer .status-faild{
        background: #dc3545!important
    }
    #main_view_order .total-info{
        margin: 15px 0px;
        padding: 8px 15px;
        background: #f9f9f9;
        box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.1);
    }
    #main_view_order .item-total{
        font-size: 18px;
    }
    #main_view_order .item-total:not(:last-child){
        margin-bottom: 8px;
    }
    #main_view_order .item-total span{
        font-weight: bold;
    }
    .form-sync-crm .item-input{
        margin-top: 10px;
    }
    .form-sync-crm .item-input .item-title{
        margin-bottom: 3px;
        font-weight: bold;
    }
    .form-sync-crm .item-input input,.form-sync-crm .item-input select{
        width: 100%;
        height: 32px;
        border: solid 1px #aaa;
        border-radius: 5px;
        padding: 0px 10px;
    }
</style>
<div class="header-top aclr">
	<div class="breadc pull-left">
		<ul class="aclr pull-left list-link">
			<li class="active"><a href="javascript:void(0)">Thông tin đăng ký lịch khám</a></li>
		</ul>
	</div>
	<div>
		<a class="pull-right bgmain1 viewsite" href="{{ url($admincp).'/view/'.$table }}">
			<i class="fa fa-backward" aria-hidden="true"></i>
			<span class="clfff">Back</span> 
		</a>
	</div>
</div>
<div id="maincontent">
	<div id="main_view_order">
        <div class="row" style="display: flex;flex-wrap: wrap;justify-content: center;">
            <div class="col-lg-4">
	    		<p class="title text-center">Thông tin đăng ký</p>
	    		<table class="table-view-order">
					<tbody>
						<tr>
							<td>Họ tên</td>
							<td>{{Support::show($bookApointment,'fullname')}}</td>
						</tr>
						<tr>
							<td>Số điện thoại</td>
							<td>{{Support::show($bookApointment,'phone')}}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{Support::show($bookApointment,'email')}}</td>
						</tr>
                        <tr>
							<td>Dịch vụ</td>
							<td>
                                <span class="select-value">
                                    {{Support::show($bookApointment->service,'name')}}
                                </span>
                            </td>
						</tr>
						<tr>
							<td>Ghi chú</td>
							<td>{{Support::show($bookApointment,'note')}}</td>
						</tr>
                        <tr>
							<td>Trạng thái</td>
							<td>
                                <select class="book-apointment-status select2" style="width: 100%;">
                                    @foreach ($listStatusBookApointment as $itemStatusBookApointment)
                                        <option value="{{Support::show($itemStatusBookApointment,'id')}}" {{$itemStatusBookApointment->id == $bookApointment->status ? 'selected':''}}>{{Support::show($itemStatusBookApointment,'name')}}</option>
                                    @endforeach
                                </select>
                            </td>
						</tr>
					</tbody>
	    		</table>
	    	</div>
            <div class="col-lg-4">
	    		<p class="title text-center">Nguồn</p>
	    		<table class="table-view-order">
					<tbody>
						<tr>
							<td>utm_source</td>
							<td>{{Support::show($bookApointment,'utm_source')}}</td>
						</tr>
                        <tr>
							<td>utm_medium</td>
							<td>{{Support::show($bookApointment,'utm_medium')}}</td>
						</tr>
                        <tr>
							<td>utm_campaign</td>
							<td>{{Support::show($bookApointment,'utm_campaign')}}</td>
						</tr>
                        <tr>
							<td>utm_content</td>
							<td>{{Support::show($bookApointment,'utm_content')}}</td>
						</tr>
                        <tr>
							<td>utm_term</td>
							<td>{{Support::show($bookApointment,'utm_term')}}</td>
						</tr>
					</tbody>
	    		</table>
	    	</div>
            <div class="col-lg-8" style="margin-top: 20px;padding-bottom: 100px;">
                <p class="title text-center">Đồng bộ thông tin</p>
                <form class="form-sync-crm" method="post" action="esystem/manage-book-apointments/action/sync-crm" accept-charset="utf8">
                    <input type="hidden" name="id" value="{{Support::show($bookApointment,'id')}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-input">
                                <p class="item-title">Tên bệnh nhân (<span class="text-danger">*</span>)</p>
                                <input type="text" name="TenBenhNhan" placeholder="Tên bệnh nhân (*)" value="{{Support::show($bookApointment,'fullname')}}">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Số điện thoại đặt lịch (<span class="text-danger">*</span>)</p>
                                <input type="text" name="SoDienThoai" placeholder="Số điện thoại đặt lịch (*)" value="{{Support::show($bookApointment,'phone')}}">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Giới tính (<span class="text-danger">*</span>)</p>
                                <select name="MaGioiTinh">
                                    <option value="">Vui lòng chọn giới tính</option>
                                    <option value="NA">Nam</option>
                                    <option value="N">Nữ</option>
                                </select>
                            </div>
                            <div class="item-input">
                                <p class="item-title">Nội dung đặt lịch (<span class="text-danger">*</span>)</p>
                                <input type="text" name="TieuDe" placeholder="Nội dung đặt lịch (*)">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Chi nhánh (<span class="text-danger">*</span>)</p>
                                <input type="text" name="MaChiNhanh" placeholder="Nội dung đặt lịch (*)">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Ngày đặt lịch (<span class="text-danger">*</span>)</p>
                                <input type="text" class="datepicker" name="NgayDatLich" placeholder="Ngày đặt lịch (*)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item-input">
                                <p class="item-title">Mã bệnh nhân (Nếu có)</p>
                                <input type="text" name="MaBenhNhan" placeholder="Nhập mã bệnh nhân (Nếu có)">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Ngày tháng sinh</p>
                                <input type="text" name="NgayThang" placeholder="Ngày tháng sinh. Vd: 01/01">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Năm sinh</p>
                                <input type="number" name="NamSinh" placeholder="Năm sinh">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Số lượng khách</p>
                                <input type="text" name="SoLuongKhach" placeholder="Số lượng khách">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Dịch vụ khám</p>
                                <input type="text" name="DichVuKham" placeholder="Dịch vụ khám">
                            </div>
                            <div class="item-input">
                                <p class="item-title">Mã bác sĩ</p>
                                <input type="text" name="MaBacSy" placeholder="Mã bác sĩ">
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-info">Xác nhận đồng bộ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.book-apointment-status').change(function(){
            $.ajax({
                url: 'esystem/manage-book-apointments/action/change-status',
                type: 'POST',
                dataType: 'json',
                data: {
                    status: $(this).val(),
                    id: {{$bookApointment->id}},
                }
            })
            .done(function(data) {
                alert(data.message);
                window.location.reload();
            })
        });
    });
</script>
@stop