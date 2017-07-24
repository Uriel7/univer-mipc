<h1> Resultado:</h1>
<p>
  <label>Nombre:</label>
  {{ $result->name }}<br>
  <label>Alumnos Inscritos:</label>
  {{ $students_enrolled }}
</p>
@if ($type == 'student')
  <p>
    <label>Apellidos:</label>
    {{ $result->surnames }}
  </p>
  <p>
    <label>Fecha de Nacimiento:</label>
    {{ $result->birthdate }}
  </p>
  @if (sizeof($student_subjects) >= 1)
    <label>Materias:</label><br/>
    <ul>
      @foreach($student_subjects as $subject)
        <li>
        <label>{{$subject['name']}}</label><br>
        Codigo: {{$subject['id']}}<br>
        <label>Calf:</label> {{$subject['qualification']}}</li>
       <a href="{{ action('ScoreController@edit', [$result->id, $subject['id']])}}" class="">Agregar Calificación</a> |
       <form action="{{ action('ScoreController@destroy', [$result->id, $subject['id']])}}" method="post">
          {{csrf_field()}}
         <input name="_method" type="hidden" value="DELETE">
         <a href="#" onclick="$(this).closest('form').submit()">Dar de baja</a>
       </form>
      @endforeach
    </ul>
  @else
    Sin Materias<br/>
  @endif
  <a href="{{ action('ScoreController@create', $result)}}" class="btn btn-success">Inscribir a Materia</a>
@endif
