@php
$listCate = \App\Models\QuestionCategory::act()
    ->where('parent', 0)
    ->with([
        'child' => function ($q) {
            $q->act();
        },
    ])
    ->get();
@endphp
<!-- <span class="show-category mb-4 inline-block cursor-pointer rounded-md bg-[#fb2317] p-2 text-white lg:hidden">Danh mục</span> -->
<div class="box relative">
    <i class="fa fa-sort absolute top-1/2 right-4 -translate-y-1/2" aria-hidden="true"></i>
    <ul class="w-full appearance-none rounded bg-[#f5f5f5] py-2 px-4">
        <li><a href="javascript:void(0)">Tất cả</a></li>
        @foreach ($listCate as $itemCate)
            @if (count($itemCate->child) > 0)
                @foreach ($itemCate->child as $itemCateChild)
                    <li>
                        <a href="{{ Support::show($itemCateChild, 'slug') }}" title="{{ Support::show($itemCateChild, 'name') }}" class="block py-2 font-semibold text-[#7e7e7e] 2xl:text-[1.125rem]">{{ Support::show($itemCateChild, 'name') }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach
    </ul>
</div>
