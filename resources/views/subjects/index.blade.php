@extends('master')
@section('content')
  <div class="row">
    <div class="col-sm-10">
    <h1>Catálogo de Materias</h1>
    <a href="{{action('SubjectController@create')}}" class="btn btn-success pull-right">Agregar Materia</a>
    </div>
  </div>
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Materia</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($subjects as $subject)
      <tr>
        <td>{{$subject['id']}}</td>
        <td>{{$subject['name']}}</td>
        <td><a href="{{action('SubjectController@edit', $subject['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('SubjectController@destroy', $subject['id'])}}" method="post">
          {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection('content')