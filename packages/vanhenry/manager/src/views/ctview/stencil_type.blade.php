<td data-title="{{$show->note}}">	<?php $value =FCHelper::ep($dataItem,$show->name); ?>	<span >{{array_key_exists($value,HaviHelper::$STELCIL_TYPES)?HaviHelper::$STELCIL_TYPES[$value][1]:''}}</span></td>