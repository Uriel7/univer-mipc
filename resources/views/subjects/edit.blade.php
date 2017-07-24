@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('SubjectController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      
      <label for="name" class="col-sm-2 col-form-label col-form-label-lg">Nombre:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombres(s)" name="name" value="{{$subject->name}}">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a class="btn btn-danger" href="{{ url('materias') }}">Cancelar</a>
    </div>
  </form>
</div>
@endsection