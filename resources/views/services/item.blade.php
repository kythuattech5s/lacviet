<div class="item-service">

    <div class="img img__ block c-img pt-[100%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
        @if(isset($page) && $page == 'home')
            @include('image_loader.tiny',['itemImage'=>$item,'key'=>'img'])
        @else
            @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
        @endif

    </div>

    <h3 class="title text-center font-semibold text-[#028cde] uppercase text-[0.875rem] lg:text-[1.125rem] mb-2 line-clamp-2">
        <a href="{(item.slug)}" title="{{Support::show($item,'name')}}">{{Support::show($item,'name')}}</a>
    </h3>

    <div class="s-content s-content__service leading-[1.4]">

        {!!Support::show($item,'advantages')!!}

    </div>

</div>