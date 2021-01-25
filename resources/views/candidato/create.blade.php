@extends('plantilla')
@section('content')
<style>
.uper {
	margin-top: 40px;
}
</style>
<div class="card uper">
<div class="card-header">
Agregar Candidatos
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div><br />
@endif
<form method="post" action="{{ route('candidato.store') }} " enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
@csrf
<label for="nombre Completo">Nombre completo:</label>
<input type="text" class="form-control" name="nombre"/>
<br>
<label for="foto">Foto:</label>
<input class="form-control" type="file" accept="image/*">

<br>
<label for="sexo">SEXO:</label>
<select class="form-control" name="sexo">
	<option value="1">Masculino</option>
    <option value="2">Femenino</option>
</select>
<br>
<label for="Perfil">Perfil:</label>
<input class="form-control" type="file" accept=".pdf">
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</div>
@endsection