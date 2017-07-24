@extends('master')
@section('content')
  <form id="form-search">
    {{ csrf_field() }}
    <fieldset>
      <legend>Buscar...</legend>
      <label>Tipo:</label>
        <select id="type" name="type" class="selectpicker" data-live-search="true">
          <option value="student">Alumno</option>
          <option value="subject">Materia</option>
      </select>
      <label>Código:</label>
      <input type="text" id="code", name="code" placeholder="Escribe el código…" required>

      <button type="submit" id="submit-search" class="btn btn-default" required>Buscar</button>
    </fieldset>
  </form>
  <p>
  <div id="search-result" class="page-header" hidden="true">    
  </div>
@endsection('content')