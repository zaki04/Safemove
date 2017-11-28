<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>
  </head>
  <body>

    <div class="header">

      @yield ('header')

    </div>

    <div class="container">

      @yield ('content')

    </div>

    <div class="footer">

      @yield ('footer')

    </div>

  </body>
</html>
