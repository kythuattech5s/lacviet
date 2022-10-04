<div class="mx-auto max-w-[640px] border-[1px] border-dashed border-[#f45654] bg-[#f6f7f8] p-4">
    <p class="head-table-endow bg-[#028cde] p-3 text-center text-[1rem] uppercase text-white 2xl:text-[1.125rem]">{{ $data->name }}</p>
    <form action="dang-ky-thong-tin" class="form-validate" method="POST" absolute clear data-success="NOTIFICATION.toastrMessage">
        @csrf
        <input type="hidden" name="map_table" value="{{ $map_table }}">
        <input type="hidden" name="map_id" value="{{ $map_id }}">
        @foreach ($listInputs as $key => $input)
            <div>
                <label>{{ $input['label'] }}</label>
                <input class="w-full border p-3" rules="required" name="{{ $input['label'] }}" placeholder="{{ $input['placeholder'] }}">
            </div>
        @endforeach
        <button class="btn-red relative left-[50%] mt-3 inline-flex w-[200px] translate-x-[-50%] items-center justify-center rounded-2xl bg-[#f43d3b] py-3 px-4 uppercase text-white transition-all duration-300 lg:min-w-[268px] lg:text-[0.875rem]">Gửi</button>
    </form>
</div>
