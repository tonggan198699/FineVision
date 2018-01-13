<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Data Entry Form</title>

    </head>
    <body>

      <div class="container">

        <form>
        @yield('content')
        </form>

      </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
