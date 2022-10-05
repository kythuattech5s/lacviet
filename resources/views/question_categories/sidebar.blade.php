@php
if (!isset($listCate)) {
    $listCate = \App\Models\QuestionCategory::act()
        ->where('parent', 0)
        ->with([
            'child' => function ($q) {
                $q->act();
            },
        ])
        ->get();
}
@endphp
@if (count($listCate) > 0)
    <div class="nav-category">
        <span class="close-category absolute top-1 right-1 z-[1] block h-5 w-5 lg:hidden"></span>
        <p class="title-category relative mb-4 text-[1rem] font-bold uppercase text-[#008EDF] after:mt-1 after:block after:h-[2px] after:w-full after:bg-[#008EDF] lg:text-[1.5rem] lg:after:h-1 2xl:text-[2rem]">Danh mục</p>
        <ul class="nav-service">
            @foreach ($listCate as $itemCate)
                <li>
                    <a href="{{ Support::show($itemCate, 'slug') }}" title="{{ Support::show($itemCate, 'name') }}" class="2xl:text[1.6rem] text-[1rem] uppercase block py-2 font-bold text-[#028cde] 2xl:text-[1.375rem]">{{ Support::show($itemCate, 'name') }}</a>
                    @if (count($itemCate->child) > 0)
                        <ul class="">
                            @foreach ($itemCate->child as $itemCateChild)
                                <li>
                                    <a href="{{ Support::show($itemCateChild, 'slug') }}" title="{{ Support::show($itemCateChild, 'name') }}" class="block py-2 font-semibold text-[#7e7e7e] 2xl:text-[1.125rem]">{{ Support::show($itemCateChild, 'name') }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endif
