@foreach($data as $val)
<ul>
	<li><a href="{!!url('downBaoCao')!!}">{!!$val['tenfile']!!}</a></li>
</ul>
@endforeach