@extends("layouts.firstPlantilla")
@section('content')
<p>Galeria.</p>
<img src="data:image/png;base64,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" alt="">
@stop
@section('content1')
<p>Galeria.</p>
<!-- <img src="data:image/png;base64,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" alt=""> -->
@if((count($alumnos))>0)
<table class="table table-striped table-hover">
    <th>Name1</th>
    <th>Name1</th>
    <th>Name1</th>
    @for($i=0;$i<(count($alumnos)); $i++) <tr>
        <td>{{$alumnos[$i]}}</td>
        <td>{{$alumnos[$i]}}</td>
        <td>{{$alumnos[$i]}}</td>
        </tr>
        @endfor
</table>
@else
{{'No has introducido nada en el arais alumno'}}
@endif
@stop
@section('content2')
@include("layouts.card")
<h1>En esta parte debe ir el pie de la pagina</h1>
@stop