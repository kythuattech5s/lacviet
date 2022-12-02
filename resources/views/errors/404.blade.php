@extends('index',['meta_tile'=>'Page not found'])
@section('content')
<section class="py-6">
    <div class="container text-center">
        <div>
            <img src="theme/frontend/images/404-error.jpg" alt="Error Page" class="mx-auto">
        </div>
        <p class="text-[1.25rem] my-4">Page not found</p>
        <a href="{{url()->to('/')}}" class="btn-blue inline-flex items-center justify-center lg:text-[0.875rem] uppercase py-2 px-4 rounded-3xl text-white bg-[#028cde] transition-all duration-300 shadow-[0_6px_8px_rgba(0,0,0,.17)]" title="{[site_name]}" id="base">Quay về trang chủ (<span id="countdown" dt-value ="5">5</span>) </a>
    </div>
</section>
@stop

<script type="text/javascript">

var inter = setInterval(function(){

    var e = document.getElementById('countdown');

    var send = e.getAttribute("dt-value");

    if(send-2<0){

        clearInterval(inter);

        window.location.href = document.getElementById('base').getAttribute("href");

    }

    e.innerHTML = (send-1);

    e.setAttribute("dt-value",send-1);

},1000)

</script>