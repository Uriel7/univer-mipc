@extends('master')
@section('content')
<div class="container">
  <h1> Registrar Materia </h1>
  <form method="post" action="{{url('materias')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Nombre:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombre de materia" name="name" required>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" value="Guardar">
      <a class="btn btn-danger" href="{{ url('materias') }}">Cancelar</a>
    </div>
  </form>
  </form>
</div>
@endsection