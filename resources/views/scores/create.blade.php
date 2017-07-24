@extends('master')
@section('content')
  <h1>Inscribir Materia a {{$student->name}} {{$student->surnames}}</h1>

  <form method="post" action= "{{ action('ScoreController@store', $student->id)}}">
    <div class="form-group row">
      {{csrf_field()}}
      <fieldset>
        <label form="subject" class="col-sm-2 col-form-label col-form-label-lg">Materia:</label>
        <select id="subject" name="subject" class="selectpicker" data-live-search="true">
          @foreach($subjects as $subject)
            <option data-tokens="{{$subject->name}}" value="{{$subject->id}}">{{$subject->name}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label col-form-label-lg">Calificación(opcional):</label>
      <input type="number" id="qualification" name="qualification" placeholder="Ej. 9.5" min="0" max="10" size="1" maxlength="2" step="any">
    </div>

    <div class="form-group row">
      <div class="col-sm-2"></div>
      <input type="submit" class="btn btn-primary" value="Guardar">
      <a class="btn btn-danger" href="{{ url('/alumnos')}}">Cancelar</a>
    </div>
    </fieldset>
  </form>
@endsection('content')