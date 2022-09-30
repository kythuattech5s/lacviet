<div class="module-qa relative 2xl:p-8 lg:p-6 p-4 border-b-[1px] border-solid border-[#ebebeb] last:border-none ">
    <div class="relative lg:pl-14 pl-11">
        <span class="avatar-qa block lg:w-12 lg:h-12 w-9 h-9 rounded-full overflow-hidden absolute top-0 left-0">
            <img src="theme/frontend/images/default_avatar.png" alt="User default">
        </span>
        <div class="head-qa flex gap-x-4 items-center justify-between flex-wrap">
            <div class="info flex gap-4 items-center flex-wrap lg:mb-4 mb-2">
                <span class="name font-semibold text-[#252525] 2xl:text-[1.25rem] lg:text-[1rem] text-[0.875rem] ">{{Support::show($item,'customer_name')}}</span>
                @if (isset($item->category))
                    <span class="examined font-semibold text-[0.75rem] text-[#888] bg-[#ebebeb] rounded p-1">{{Support::show($item->category,'name')}}</span>
                @endif
            </div>
            <p class="time text-[0.75rem] lg:mb-4 mb-2 text-[#888]">Đã hỏi: <span class="text-[#40b5ff] font-semibold">Ngày {{Support::showDateTime($item->time_ask,'d/m/Y')}}</span></p>
        </div>
        <p class="title-qa font-bold 2xl:text-[2rem] lg:text-[1.5rem] text-[1.125rem] text-[#767676] mb-4">{{Support::show($item,'name')}}</p>
        <div class="question-content lg:text-[0.875rem] mb-4">{{Support::show($item,'question')}}</div>
        <div class="bg-[#f0f0f0] lg:p-4 p-2 rounded flex gap-2 items-center justify-between flex-wrap">
            <div class="staits flex items-center gap-3">
                <span class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                    <i class="fa fa-commenting-o mr-1" aria-hidden="true"></i>
                    {{$item->comments()->count()}} Bình luận
                </span>
                <span
                    class="item text-[#767676] text-[0.75rem] bg-white border-[1px] border-solid border-[#ebebeb] rounded p-1">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    {{$item->count_view}} Lượt xem
                </span>
            </div>
            <a href="{{Support::show($item,'slug')}}" title="Xem câu trả lời" class="item btn-blue text-white text-[0.75rem] bg-[#028cde] border-[1px] border-solid border-transparent rounded py-1 px-2">Xem câu trả lời</a>
        </div>
    </div>
</div>