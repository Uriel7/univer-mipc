<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Univer MiPC</title>

        <!-- Fonts -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="{!! asset('/js/app.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/js/search.js') !!}"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    </head>
    <body>
      @include('partials.nav')
      <div class="container">
        @yield('content')
      </div>
    </body>
</html>


