@extends ('layouts.master')


@section ('title')

Grades

@endsection


@section ('content')

    <h1>Grades</h1>

    <ul>

      @foreach ($grades as $grade)
        <li>{{ $grade->street_name }}</li>
      @endforeach

    </ul>

@endsection
