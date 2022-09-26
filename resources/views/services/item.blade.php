<div class="item-service">
    <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="img img__ block c-img pt-[80%] rounded-2xl overflow-hidden 2xl:mb-4 mb-2">
        @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
    </a>
    <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="title text-center font-bold text-[#028cde] uppercase lg:text-[1.125rem] mb-2 line-clamp-2">{{Support::show($item,'name')}}</a>
    @php
        $listAdvantages = Support::extractJson($item->advantages);
    @endphp
    @if (count($listAdvantages) > 0)
        <div class="s-content s-content__service">
            <ul>
                @foreach ($listAdvantages as $itemAdvantages)
                    <li>{{Support::show($itemAdvantages,'title')}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>