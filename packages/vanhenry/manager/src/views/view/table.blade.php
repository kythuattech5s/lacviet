@php
$has_delete = $tableData->get('has_delete', '') == 1;
$has_update = $tableData->get('has_update', '') == 1;
$has_copy = $tableData->get('has_copy', '') == 1;
$has_trash = $tableData->get('has_trash', '') == 1;
$has_history = $tableData->get('has_history', '') == 1;
@endphp
<div class="pagination">
    <span class="total">{{ trans('db::number_record') }}: <strong>{{ $listData->total() }}</strong></span>
    {{ $listData->withQueryString()->links('vendor.pagination.pagination') }}
</div>
<div id="no-more-tables" class="row m0">
    <div class="tablecontrol none">
        @php
            if (isset($check)) {
                $user = Auth::guard('h_users')
                    ->user()
                    ->with('hGroupUser')
                    ->find(Auth::guard('h_users')->id());
                if ($user->hGroupUser !== null && $user->hGroupUser->hActions->count() > 0) {
                    $deleted = $user->hGroupUser->hActions->filter(function ($v) {
                        return $v->key == 'DELETE';
                    });
            
                    $deleted_now = $user->hGroupUser->hActions->filter(function ($v) {
                        return $v->key == 'DELETE_NOW';
                    });
                }
            }
        @endphp
        @if (isset($check))
            @if (isset($deleted_now) && $deleted_now->count() > 0)
                <a class="_vh_action_all btn btn-danger" data-confirm="Bạn có thực sự muốn xóa?"
                   href="{{ $admincp }}/deleteAll/{{ $tableData->get('table_map', '') }}"
                   title="{{ trans('db::delete_all') }} {{ $tableData->get('name', '') }}"><i class="fa fa-trash"
                       aria-hidden="true"></i> {{ trans('db::delete_all') }}</a>
            @endif
        @else
            <a class="_vh_action_all btn btn-danger" data-confirm="Bạn có thực sự muốn xóa?"
               href="{{ $admincp }}/deleteAll/{{ $tableData->get('table_map', '') }}"
               title="{{ trans('db::delete_all') }} {{ $tableData->get('name', '') }}"><i class="fa fa-trash"
                   aria-hidden="true"></i> {{ trans('db::delete_all') }}</a>
        @endif
        @php
            $data_actions = $tableData->get('default_action_all', []);
            $data_actions = json_decode($data_actions, true);
        @endphp
        @if ($data_actions !== null && count($data_actions) > 0)
            @foreach ($data_actions as $action)
                @if ((isset($check) && isset($deleted_now) && $deleted_now->count() > 0) || (isset($action['permis']) && Str::lower($action['permis']) == 'all'))
                    <a class="_vh_action_all btn btn-danger" data-confirm="{{ $action['message'] }}"
                       href="{{ $admincp }}/{{ $action['href'] }}/{{ $tableData->get('table_map', '') }}"
                       tite="{{ $action['title'] }}">
                        {!! $action['icon'] !!}
                        {{ $action['title'] }}
                    </a>
                @endif
            @endforeach
        @endif
        @if ($tableData->get('table_parent', '') != '')
            <a href="#" data-toggle="modal" data-target="#addToParent" class="_vh_add_to_parent"
               title="Thêm vào danh mục cha"><i class="fa fa-puzzle-piece" aria-hidden="true">Thêm vào danh mục cha</i>
            </a>
            <a href="#" title="Xóa khỏi danh mục cha" data-toggle="modal" data-target="#addToParent"
               class="_vh_remove_from_parent"><i class="fa fa-chain-broken" aria-hidden="true">Xóa khỏi danh mục
                    cha</i></a>
        @endif
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.double-scroll').doubleScroll();
        });
    </script>
    <div class="main_table double-scroll">
        <table class="col-md-12 table-bordered table-striped table-condensed cf p0 table-data-view">
            <thead class="cf">
                <tr>
                    @if ($has_delete)
                        <th>
                            <div class="squaredTwo">
                                <input type="checkbox" class="all" value="None"
                                       id="squaredTwoall{{ @$dataKey ?? '' }}" name="check">
                                <label for="squaredTwoall{{ @$dataKey ?? '' }}"
                                       data-tab="{{ @$dataKey ?? '' }}"></label>
                            </div>
                        </th>
                    @endif
                    {%FILTER.simpleShow.filterShow.tableDetailData%}
                    <th>STT</th>
                    @foreach ($simpleShow as $show)
                        @php
                            $urlSorts = Support::buildUrlSort($show);
                        @endphp
                        @if ($show->hide !== 1)
                            <th class="{{ $urlSorts['cursor'] }}" data-href="{{ \Str::replaceFirst('/view/', '/search/', \Str::replaceFirst('?&', '?', $urlSorts['url_sort'])) }}">
                                {{ $show->note }}
                                @if ($urlSorts['ordervalue'] == 'asc')
                                    <i class="fa fa-sort-asc" aria-hidden="true"></i>
                                @elseif($urlSorts['ordervalue'] == 'desc')
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                @endif
                            </th>
                        @endif
                    @endforeach
                    @if ($has_delete || $has_update || $has_copy || $has_trash || $has_history)
                        <th>Chức năng</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <?php $urlFull = base64_encode(Request::fullUrl()); ?>
                @for ($i = 0; $i < $listData->count(); $i++)
                    <?php $itemMain = $listData->get($i); ?>
                    <tr>
                        @if ($has_delete)
                            <td data-title="#">
                                <div class="squaredTwo">
                                    <input type="checkbox" class="one"
                                           dt-id="{{ FCHelper::ep($itemMain, 'id') }}"
                                           id="squaredTwo{{ FCHelper::ep($itemMain, 'id') }}" name="check">
                                    <label for="squaredTwo{{ FCHelper::ep($itemMain, 'id') }}"></label>
                                </div>
                            </td>
                        @endif
                        <td data-title="STT">{{ $i + 1 }}</td>
                        @foreach ($simpleShow as $show)
                            @php
                                $viewView = 'vh::ctview.' . strtolower(FCHelper::er($show, 'type_show'));
                                $viewView = View::exists($viewView) ? $viewView : 'vh::ctview.base';
                            @endphp
                            @if ($show->hide !== 1)
                                @include($viewView, ['item' => $show, 'dataItem' => $itemMain])
                            @endif
                        @endforeach
                        @if ($has_copy || $has_update || $has_trash || $has_history || $has_delete)
                            <td data-title="{{ trans('db::function') }}" style="min-width: 130px;" class="action">
                                @if ($tableData->get('table_map') == 'book_apointments')
                                    <a href="{{ $admincp }}/manage-book-apointments?id={{ $itemMain->id }}" class="tooltipx {{ $tableData->get('table_map', '') }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span class="tooltiptext">Quản lý đăt lịch</span>
                                    </a>
                                @endif
                                @if ($tableData->get('table_map') == 'pages')
                                    <a href="gp/edit-page?id={{ $itemMain->id }}" class="tooltipx {{ $tableData->get('table_map', '') }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span class="tooltiptext">Sửa trang</span>
                                    </a>
                                @endif
                                @isset($itemMain->slug)
                                    <a href="{{ $itemMain->slug }}" target="_blank"
                                       class="{{ trans('db::edit') }} tooltipx {{ $tableData->get('table_map', '') }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span class="tooltiptext">Xem demo</span>
                                    </a>
                                @endisset
                                @if ($has_history)
                                    <a href="{{ $admincp }}/history/{{ $tableData->get('table_map', '') }}/{{ FCHelper::ep($itemMain, 'id') }}?returnurl={{ $urlFull }}"
                                       class="{{ trans('db::history') }} tooltipx {{ $tableData->get('table_map', '') }}">
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                        <span class="tooltiptext">Lịch sử thay đổi</span>
                                    </a>
                                @endif
                                @if ($has_copy)
                                    <a href="{{ $admincp }}/copy/{{ $tableData->get('table_map', '') }}/{{ FCHelper::ep($itemMain, 'id') }}?returnurl={{ $urlFull }}"
                                       class="{{ trans('db::edit') }} tooltipx {{ $tableData->get('table_map', '') }}"><i
                                           class="fa fa-copy" aria-hidden="true"></i>
                                        <span class="tooltiptext">Copy</span>
                                    </a>
                                @endif
                                @if ($has_update)
                                    <a href="{{ $admincp }}/edit/{{ $tableData->get('table_map', '') }}/{{ FCHelper::ep($itemMain, 'id') }}?returnurl={{ $urlFull }}"
                                       class="{{ trans('db::edit') }} tooltipx {{ $tableData->get('table_map', '') }}"><i
                                           class="fa fa-pencil" aria-hidden="true"></i>
                                        <span class="tooltiptext">Sửa</span>
                                    </a>
                                @endif
                                @if ($has_trash)
                                    <a href="{{ $admincp }}/{{ isset($trash) ? 'backtrash' : 'trash' }}/{{ $tableData->get('table_map', '') }}"
                                       class="_vh_{{ isset($trash) ? 'backtrash' : 'trash' }} tooltipx {{ trans('db::delete') }} {{ $tableData->get('table_map', '') }}"><i
                                           class="fa fa-{{ isset($trash) ? 'level-up' : 'trash' }}"
                                           aria-hidden="true"></i>
                                        <span
                                              class="tooltiptext">{{ isset($trash) ? 'Restore' : 'Thùng rác' }}</span>
                                    </a>
                                @endif
                                @include('vh::view.table.action_delete')
                            </td>
                        @endif
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <span class="total">{{ trans('db::number_record') }}:<strong>
                {{ $listData->total() }}</strong></span>
        {{ $listData->withQueryString()->links('vendor.pagination.pagination') }}
    </div>
</div>
