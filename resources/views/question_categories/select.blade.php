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
<div class="box relative show-category block lg:hidden">
    <span class="block rounded bg-[#f5f5f5] py-2 px-4">{{ $currentItem->name }}</span>
    <i class="fa fa-sort absolute top-2 right-4" aria-hidden="true"></i>
    <ul class="w-full rounded bg-[#f5f5f5] py-2 px-4 absolute top-[100%] left-[0] z-[1]">
        <li><a href="hoi-dap-chuyen-gia">Tất cả</a></li>
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
