@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('StudentController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Nombre:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombres(s)" name="name" value="{{$student->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="surnames" class="col-sm-2 col-form-label col-form-label-sm">Apellidos:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="surnames" placeholder="Apellidos" name="surnames" value="{{$student->surnames}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="birthdate" class="col-sm-2 col-form-label col-form-label-sm">Fecha de nacimiento:</label>
      <div class="col-sm-6">
        <input type="date" class="form-control form-control-lg" id="birthdate" placeholder="Fecha de nacimiento" name="name" value="{{$student->birthdate}}">
      </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a class="btn btn-danger" href="{{ url('alumnos') }}">Cancelar</a>
    </div>
  </form>
</div>
@endsection