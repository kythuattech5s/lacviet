@php
    $table = $dataItem->table_name;
    switch ($dataItem->action ?? true) {
        case 'insert':
        $name_action = 'Thêm %s';
            break;
        case 'update':
        $name_action = 'Sửa %s';
            break;
        case 'trash':
        $name_action = 'Cho %s vào thùng rác';
            break;
        case 'restore':
        $name_action = 'Khôi phục %s';
            break;
        case 'delete':
        $name_action = 'Xóa %s';
            break;
        default:
        $name_action = '%s';
            break;
    }
    $tableShow = \DB::table('v_tables')->where('table_map',$table)->first();
    if(isset($tableShow)){
        $name_action = vsprintf($name_action, $tableShow->name);
    }
@endphp
<td style="text-align:left">
    @if (isset($tableShow))
        {{$name_action}}
    @endif
</td>