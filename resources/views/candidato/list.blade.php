@extends('plantilla')
@section('content')
<style>
.uper {
margin-top: 40px;
}
</style>
<div class="uper">
@if(session()->get('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div><br />
@endif
<table class="table table-striped">
<thead>
<tr>
<td>ID</td>
<td>NOMBRE</td>
<td>FOTO</td>
<td>SEXO</td>
<td>PERFIL</td>
<td colspan="2">Action</td>
</tr>
</thead>
<tbody>
@foreach($candidatos as $candidato)
<tr>
<td>{{$candidato->id}}</td>
<td>{{$candidato->nombrecompleto}}</td>
<td><a href="{{ route('casilla.edit', $casilla->id)}}"
class="btn btn-primary">Edit</a></td>
<td>
<form action="{{ route('casilla.destroy', $casilla->id)}}"
method="post">
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit"
onclick="return confirm('Esta seguro de borrar {{$casilla->ubicacion}}')" >Del</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<div>
@endsection
