@extends ('layouts.master')


@section ('title')

Grading

@endsection


@section ('header')

  @include ('layouts.header')

@endsection


@section ('content')

  <h1>GRADING</h1>

  <form method="POST" action="#">
    <div class="row">
      <div class="left">
        <span>
          <label for="param1">Parameter 1</label>
        </span>
      </div>
      <div class="right">
        <span>
          <label for="param1-low">Low</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group1" type="radio" id="param1-1" />
          <label for="param1-1">1</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group1" type="radio" id="param1-2" />
          <label for="param1-2">2</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group1" type="radio" id="param1-3" />
          <label for="param1-3">3</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group1" type="radio" id="param1-4" />
          <label for="param1-4">4</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group1" type="radio" id="param1-5" />
          <label for="param1-5">5</label>
        </span> &nbsp;
        <span> &nbsp;
          <label for="param1-high">High</label>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <span>
          <label for="test0">Parameter 2</label>
        </span>
      </div>
      <div class="right">
        <span>
          <label for="param1-low">Low</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group2" type="radio" id="param2-1" />
          <label for="param2-1">1</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group2" type="radio" id="param2-2" />
          <label for="param2-2">2</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group2" type="radio" id="param2-3" />
          <label for="param2-3">3</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group2" type="radio" id="param2-4" />
          <label for="param2-4">4</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group2" type="radio" id="param2-5" />
          <label for="param2-5">5</label>
        </span> &nbsp;
        <span> &nbsp;
          <label for="param1-high">High</label>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="left">
        <span>
          <label for="test0">Parameter 3</label>
        </span>
      </div>
      <div class="right">
        <span>
          <label for="param1-low">Low</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group3" type="radio" id="param3-1" />
          <label for="param3-1">1</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group3" type="radio" id="param3-2" />
          <label for="param3-2">2</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group3" type="radio" id="param3-3" />
          <label for="param3-3">3</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group3" type="radio" id="param3-4" />
          <label for="param3-4">4</label>
        </span> &nbsp;
        <span> &nbsp;
          <input class="with-gap" name="group3" type="radio" id="param3-5" />
          <label for="param3-5">5</label>
        </span> &nbsp;
        <span> &nbsp;
          <label for="param1-high">High</label>
        </span>
      </div>
    </div>
    <div class="row">
     <button type="submit" class="btn btn-primary right">Submit</button>
    </div>
  </form>


@endsection


@section ('footer')

  @include ('layouts.footer')

@endsection
