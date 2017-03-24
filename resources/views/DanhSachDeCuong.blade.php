@foreach($data as $val)
<ul>
	<li><a href="{!!url('downDeCuong')!!}">{!!$val['tendecuong']!!}</a></li>
</ul>
@endforeach