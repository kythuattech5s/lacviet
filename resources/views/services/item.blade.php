<div class="item-service">
    <div class="img img__ block c-img pt-[100%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
        @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
    </div>
    <div class="title lg:min-h-[50px] text-center font-semibold text-[#028cde] uppercase lg:text-[1.125rem] mb-2 line-clamp-2">{{Support::show($item,'name')}}</div>
    <div class="s-content s-content__service leading-[1.6] px-5 sm:px-0">
        {!!Support::show($item,'advantages')!!}
    </div>
</div>