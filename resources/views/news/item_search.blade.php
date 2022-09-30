<div class="item-new__sidebar block sm:flex items-center mb-4 last:mb-0">
    <div class="image mb-2 sm:mb-0 sm:mr-4 shrink-0 w-full sm:w-[40%]">
        <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="img img__ block c-img pt-[60%] rounded-lg overflow-hidden">
            @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
        </a>
    </div>
    <div class="new-content">
        <h3>
            <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="title line-clamp-2 text-[#7b7b7b] font-bold 2xl:text-[1.125rem] lg:text-[1rem] uppercase mb-2">{{Support::show($item,'name')}}</a>
        </h3>
        <span class="date-time text-[0.75rem] text-[#b2b2b2] mb-2 inline-block">
            <i class="fa fa-calendar mr-2" aria-hidden="true"></i> 27/01/2022
        </span>
        <div class="short_content lg:line-clamp-3 line-clamp-2 ">{{Support::show($item,'short_content')}}</div>
        <!-- <a href="{{Support::show($item,'slug')}}" title="Xem thêm" class="read-more text-[0.75rem] italic">Xem thêm</a> -->
    </div>
</div>