<h1>for-if</h1>

@if($value > 100)
	<p>valor maior que $value</p>
@else
	<p>valor menor que $value</p>
@endif

@for($i = 0; $i < $value; $i++)
	- {{$i+1}}
@endfor

<hr>

@php $i = 0; @endphp
@while($i < $value)
- {{$i+1}}
@php $i++; @endphp
@endwhile

@foreach($myArray as $key => $value)
	<p>{{$loop->index.' '.$key.' -> '.$value}}</p>
@endforeach

@forelse([] as $key => $value)
<p>{{$loop->index.' '.$key.' -> '.$value}}</p>
@empty
	<p>Nenhum registro encontrado</p>
@endforelse
