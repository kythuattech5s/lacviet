<div class="item-group" style="display: flex; flex-direction: column; gap: 4px; border: 1px solid rgb(0, 0, 0); padding: 6px; position: relative;"><i class="fa fa-times" style="position: absolute; top: 10px; right: 10px; cursor: pointer; padding: 8px; background-color: red; color: white;"></i>
    <label for="">Nhập thông tin</label>
    @foreach ($contentItem as $key => $value)
        @if ($key == 'tag')
            <input type="hidden" data-field="tag" value="input">
        @else
            <input type="text" placeholder="Vui lòng nhập {{ $key }}" data-field="{{ $key }}" value="{{ $value }}">
        @endif
    @endforeach
</div>
