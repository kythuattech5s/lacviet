<div class="item-new__sidebar flex mb-4 last:mb-0">
    <div class="image mr-4 shrink-0 w-[40%]">
        <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
            @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
        </a>
    </div>
    <div class="new-content">
        <h3>
            <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold 2xl:text-[1.25rem] text-[1rem] mb-2">{{Support::show($item,'name')}}</a>
        </h3>
        <div class="short_content lg:line-clamp-4 line-clamp-2 2xl:mb-4 mb-2">{{Support::show($item,'short_content')}}</div>
        <span class="date-time text-[0.75rem] text-[#b2b2b2]">
            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{Support::showDateTime($item->time_published,'d/m/Y')}}
        </span>
    </div>
</div>