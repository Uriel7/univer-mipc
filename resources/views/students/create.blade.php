@extends('master')
@section('content')
<div class="container">
  <h1> Registrar Alumno </h1>
  <form method="post" action="{{url('alumnos')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Nombre:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombre(s)" name="name" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="surnames" class="col-sm-2 col-form-label col-form-label-lg">Apellidos:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="surnames" placeholder="Apellidoss" name="surnames" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="birthdate" class="col-sm-2 col-form-label col-form-label-lg">Fecha de nacimiento:</label>
      <div class="col-sm-6 date" data-provide="datepicker">
        <input type="date" class="form-control form-control-lg" id="birthdate" placeholder="Fecha de nacimiento" name="birthdate" required>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" value="Guardar">
      <a class="btn btn-danger" href="{{ url('alumnos') }}">Cancelar</a>
    </div>
  </form>
</div>
@endsection
