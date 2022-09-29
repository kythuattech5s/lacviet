@php
    $listCate = \App\Models\QuestionCategory::act()->where('parent',0)->with(['child'=>function($q){
                                                        $q->act();
                                                    }])->get();
@endphp
@if (count($listCate) > 0)
    <div class="nav-category">
        <span class="close-category block lg:hidden absolute top-1 right-1 z-[1] w-5 h-5"></span>
        <p class="title-category relative after:w-full lg:after:h-1 after:h-[2px] after:bg-[#008EDF] after:block after:mt-1 font-bold text-[#252525] uppercase 2xl:text-[2rem] lg:text-[1.5rem] text-[1rem] mb-4">Danh mục</p>
        <ul class="nav-service">
            @foreach ($listCate as $itemCate)
                <li>
                    <a href="{{Support::show($itemCate,'slug')}}" title="{{Support::show($itemCate,'name')}}" class="block py-2 font-bold text-[#028cde] 2xl:text-[1.375rem] lg:text[1.125rem] text-[0.875rem]">{{Support::show($itemCate,'name')}}</a>
                    @if (count($itemCate->child) > 0)
                        <ul class="list-disc ml-8">
                            @foreach ($itemCate->child as $itemCateChild)
                                <li>
                                    <a href="{{Support::show($itemCateChild,'slug')}}" title="{{Support::show($itemCateChild,'name')}}" class="block py-2 font-semibold text-[#7e7e7e] 2xl:text-[1.125rem]">{{Support::show($itemCateChild,'name')}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endif