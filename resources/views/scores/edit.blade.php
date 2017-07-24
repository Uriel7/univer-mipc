@extends('master')
@section('content')
<div class="container">
  <h1>Agregar Calificación a: </h1>
  <h2>Código: {{$student->id}}</h2>
  <h2>Alumno: {{$student->name}} {{$student->surnames}} </h2>
  <h2>Materia: {{$score->subject->name}}</h2>
  <form method="post" action="{{action('ScoreController@update', [$student->id,$score->id])}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      
      <label for="qualification" class="col-sm-2 col-form-label col-form-label-lg">Calificacion:</label>
      <div class="col-sm-6">
        <input type="number" id="qualification" name="qualification" value="{{$score->qualification}}" placeholder="Ej. 9.5" min="0" max="10" size="1" maxlength="2" step="any">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a class="btn btn-danger" href="{{ url('/') }}">Cancelar</a>
    </div>
  </form>
</div>
@endsection