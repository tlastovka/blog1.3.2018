@extends('layouts.app')

@section('content')


<form method="post" action={{action('CategoryController@store')}} class="form-horizontal">
  <div class="form-group">
    {!! csrf_field() !!}
    <label form="input" class="col-sm-2 control-label">Text</label>
    <div class="col-sm-10">
      <input type="textarea" name="text1" class="form-control" id="inputEmail3" placeholder="enter_your_text">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

@endsection