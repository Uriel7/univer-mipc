@extends('master')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h1>Catálogo de Alumnos</h1>
      <a href="{{action('StudentController@create')}}" class="btn btn-success pull-right">Agregar Alumno</a>
    </div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha de nacimiento</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['surnames']}}</td>
        <td>{{$student['birthdate']}}</td>
        <td>
            <a href="{{ action('ScoreController@create', $student['id'])}}" class="btn btn-success">Inscribir a Materia</a>
            <a href="{{action('StudentController@edit', $student['id'])}}" class="btn btn-warning">Editar</a>
        </td>
        <td>
          <form action="{{action('StudentController@destroy', $student['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        </td>       
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection('content')