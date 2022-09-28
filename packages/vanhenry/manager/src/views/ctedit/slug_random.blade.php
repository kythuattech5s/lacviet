<?php
$name = FCHelper::er($table, 'name');
$nameNote = FCHelper::er($table, 'note');
$name_table = FCHelper::er($table, 'parent_name');
$default_code = FCHelper::er($table, 'default_code');
$default_code = json_decode($default_code, true);
$default_code = @$default_code ? $default_code : [];
$value = '';
if ($actionType == 'edit' || $actionType == 'copy') {
    $value = FCHelper::er($dataItem, $name);
}
$id = $dataItem->id ?? null;
$lang = \Session::get('_table_lang') != null ? \Session::get('_table_lang')[array_key_first(\Session::get('_table_lang'))] : Config::get('app.locale_origin');
if ($lang == 'en') {
    $langSlug = 'en/';
} else {
    $langSlug = '';
}
?>

<div class="form-group">
    <p class="form-title" for="">{{ $nameNote }} @if (FCHelper::ep($table, 'require') == 1)
            (<span style="font-size: 16px;color:red">*</span>)
        @endif
    </p>
    <p><input style="width:100%" {{ FCHelper::ep($table, 'require') == 1 ? 'required' : '' }} type="text" name="{{ $name }}" class="noborder" dt-type="{{ FCHelper::ep($table, 'type_show') }}" placeholder="{{ FCHelper::er($table, 'note') }}-{{ trans('db::suggest_link') }}" value="{{ $value }}" />
        <button type="button" class="bgmain clfff px-3 py-1" onclick="randomLink(`{{ $name }}`)">Random ID</button>
    </p>

</div>
<script type="text/javascript">
    function randomLink(name) {
        $.ajax({
            url: "/esystem/general-slug",
            method: "GET"
        }).then(res => {
            const input = document.querySelector(`input[name=${name}]`);
            document.querySelector(`input[name=${name}]`).value = res;
            $(input).trigger('change');
        })
    }
    @if ($actionType != 'edit')
        randomLink('{{ $name }}')
    @endif
    $(function() {
        @foreach ($default_code as $dc)
            $(document).on('input', "{{ $dc['source'] }}", function(event) {
                event.preventDefault();
                @if ($dc['function'] == 'slug' && $actionType != 'edit')
                    var input = $(this).val();
                    var output = TECH.replaceUrl(input);

                    $("input[name={{ $name }}]").val(output);
                    $('a._{{ $name }}').attr('href', output).text(output);
                @endif
            });
        @endforeach
        $('input[name={{ $name }}]').dblclick(function(event) {
            $(this).removeClass('noborder').addClass('border');
        }).focusout(function(event) {
            $(this).removeClass('border').addClass('noborder');
        });;

        $(".preview-{{ $name }}").click(function(event) {
            var win = window.open($('base').attr('href') + '<?php echo $langSlug; ?>' + $(this).prev().val(), '_blank');
            win.focus();
        });
    });


    $(function() {
        @foreach ($default_code as $dc)
            <?php
            $source = $dc['source'];
            $source = $source == 'this' ? "input[name=$name]" : $source;
            $message = $dc['message'];
            ?>
            $(document).on('input', "{{ $source }}", function(event) {
                event.preventDefault();
                @if ($dc['function'] == 'count')
                    var input = $(this).val();
                    $(this).parent().find('span.count').text(input.length + " Chars");
                @endif
                @if ($dc['function'] == 'seo_title')
                    $('input[name={{ $name }}]').val($(this).val());
                @endif
                @if ($dc['function'] == 'seo_desc')
                    $('input[name={{ $name }}]').val($(this).val());
                @endif
                @if ($dc['function'] == 'seo_key')
                    $('input[name={{ $name }}]').val($(this).val());
                @endif
            });

            $(document).on('change', "{{ $source }}", function(event) {
                event.preventDefault();
                _this = $(this);
                $.ajax({
                    url: "/esystem/check-duplicate-field/{{ $name_table }}",
                    method: "GET",
                    data: {
                        value: _this.val(),
                        name: "{{ $name }}",
                        @if (!is_null($id))
                            id: {{ $id }}
                        @endif
                    },
                    beforeSend: function() {
                        _this.attr('data-old', _this.val());
                        _this.val('');
                    }
                }).done(res => {
                    if (res.code === 100) {
                        $.simplyToast("{{ $message }}", 'danger');
                        _this.val('');
                        _this.removeAttr('data-old');
                    } else {
                        _this.val(_this.attr('data-old'));
                    }
                });
            });

            function checkFirst() {
                _this = $("{{ $source }}");
                @if (isset($actionType) && $actionType == 'copy' && $checkNameCoppy)
                    _this.val('')
                @endif
            }
            checkFirst()
        @endforeach
    });
</script>
