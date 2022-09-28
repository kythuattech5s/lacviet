<form action="{{ url('cmrs/source/binh-luan') }}" method="POST" class="form-validate" absolute clear before="COMMENT.checkComment" check data-success="COMMENT.receivedComment" comment-form>
    @csrf
    <div class="flex items-center gap-3 mb-2">
        <p class="text-[1rem] font-bold uppercase text-[#028cde] 2xl:text-[1.25rem]">Bài viết này có hữu ích không?</p>
        @include('commentRS::selectStar', ['size' => '24px'])
    </div>
    <input type="hidden" name="map_id" value="{{ $currentItem->id }}">
    <input type="hidden" name="map_table" value="{{ $map_table }}">
    <textarea name="content" class="w-full rounded-md border p-2" clear cols="30" rows="3" placeholder="Thêm bình luận..." rules="required"></textarea>
    <div class="grid grid-cols-3 gap-3">
        <input type="text" class="col-span-1 rounded-md border p-2" clear name="plus_name" placeholder="Nhập tên" rules="required">
        <input type="text" class="col-span-1 rounded-md border p-2" clear name="plus_phone" placeholder="Số điện thoại" rules="required">
        <input type="text" class="col-span-1 rounded-md border p-2" clear name="plus_email" placeholder="Email" rules="required">
    </div>
    <div class="text-center">
        <button class="mt-3 rounded-md bg-[#028cde] px-10 py-1 text-center text-[1rem] uppercase text-white">Gửi</button>
    </div>
</form>
