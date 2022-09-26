@php
    $listCate = \App\Models\QuestionCategory::act()->get();
@endphp
@if (count($listCate) > 0)
    <div class="nav-category">
        <span class="close-category block lg:hidden absolute top-1 right-1 z-[1] w-5 h-5"></span>
        <p class="title-category relative after:w-full lg:after:h-1 after:h-[2px] after:bg-[#028cde] after:block after:mt-1 font-bold text-[#028cde] uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] mb-4">Chủ đề</p>
        <ul class="nav-service">
            @foreach ($listCate as $itemCate)
                <li>
                    <a href="{{Support::show($itemCate,'slug')}}" title="{{Support::show($itemCate,'name')}}" class="block py-2 font-bold text-[#028cde] 2xl:text-[1.375rem] lg:text[1.125rem] text-[0.875rem]">{{Support::show($itemCate,'name')}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endif