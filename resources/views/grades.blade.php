<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grades</title>
  </head>

  <body>

    <h1>Grades</h1>

    <ul>

      @foreach ($grades as $grade)

        <li>{{ $grade->street_name }}</li>

      @endforeach

    </ul>

  </body>

</html>
