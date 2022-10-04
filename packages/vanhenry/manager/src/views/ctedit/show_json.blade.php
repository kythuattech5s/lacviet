<?php
$name = FCHelper::er($table, 'name');
$default_code = FCHelper::er($table, 'default_code');
$default_code = json_decode($default_code, true);
$default_code = @$default_code ? $default_code : [];
$value = '';
if ($actionType == 'edit' || $actionType == 'copy') {
    if ($name != 'price' && $name != 'price_sale') {
        $value = FCHelper::er($dataItem, $name);
    } else {
        $value = $dataItem->$name;
    }
    $listValues = json_decode($value, true);
}
?>
<div class="form-group" @if ($tableMap == 'orders' && $name == 'val_order') style="display: none;" @endif>
    <p class="form-title" for="">{{ FCHelper::er($table, 'note') }} <span class="count"></span></p>
    @foreach ($listValues as $key => $value)
        <p>{{ $key }}: {{ $value }}</p>
    @endforeach
</div>
