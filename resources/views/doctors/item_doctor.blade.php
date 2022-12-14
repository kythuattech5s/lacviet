<div class="item-experts h-full border-[1px] border-solid border-[#008EDF] p-2 rounded-xl overflow-hidden text-center shadow-[0_0_8px_rgba(216,229,251,.8)]">
    <a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="img img__ c-img pt-[94%] block 2xl:mb-4 mb-2">
        @include('image_loader.big',['itemImage'=>$item,'key'=>'img'])
    </a>
    <p class="text 2xl:text-[1.125em] 2xl:mb-4 mb-2">{{Support::show($item,'academic_rank')}}</p>
    <h3><a href="{{Support::show($item,'slug')}}" title="{{Support::show($item,'name')}}" class="name font-bold block 2xl:text-[1.25rem] text-[#028cde] lg:px-5">{{Support::show($item,'name')}}</a></h3>
    <hr class="line border-[#EFAB28] opacity-100 w-full h-[1px] 2xl:my-4 my-2">
    <p class="text font-bold lg:px-5">{{Support::show($item,'short_content')}}</p>
</div>