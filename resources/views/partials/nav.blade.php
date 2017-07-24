<nav class="navbar navbar-default navbar-inverse">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('') }}">Univer-MiPC</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li class="{{ (Request::is('/') ? 'active' : '') }}">
                  <a href="{{ url('') }}"><i class="fa fa-home"></i> Inicio</a>
              </li>
              <li class="{{ (Request::is('alumnos') ? 'active' : '') }}">
                  <a href="{{ url('alumnos') }}">Alumnos</a>
              </li>
              <li class="{{ (Request::is('materias') ? 'active' : '') }}">
                  <a href="{{ url('materias') }}">Materias</a>
              </li>
          </ul>

      </div>
  </div>
</nav>