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


        @yield('content')


      </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- jquery and jquery validate cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

    </body>
</html>
