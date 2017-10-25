<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Area Rating</title>
  </head>

  <body>

    <h1>Area Rating</h1>

    <ul>

      @foreach ($user_rating as $rating)

        <li>{{ $rating->street_name }}</li>

      @endforeach

    </ul>

  </body>

</html>
