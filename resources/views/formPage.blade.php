@extends('layouts.master')

@section('content')

  <div class="container">
   <a href="{{route('getLogin')}}" class="btn btn-default">Log in</a>

<form method="post" action="{{route('formSubmit')}}" class="form-horizontal" >

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    

  <fieldset>

    <legend>Application Submission</legend>


    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-4">
        <input class="form-control" name="name" type="text" required>
      </div>
    </div>
    

      <div class="form-group">
      <label class="col-lg-2 control-label">Father Name:</label>
      <div class="col-lg-4">
        <input class="form-control" name="fatherName" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mother Name:</label>
      <div class="col-lg-4">
        <input class="form-control" name="motherName" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Address:</label>
      <div class="col-lg-4">
        <input class="form-control" name="address" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Phone no:</label>
      <div class="col-lg-4">
        <input class="form-control" name="phoneNo" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-4">
        <input class="form-control" name="email" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Plot Area:</label>
      <div class="col-lg-4">
        <input class="form-control" name="area" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Floor amount:</label>
      <div class="col-lg-4">
        <input class="form-control" name="floorAmount" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>

  </fieldset>

</form>
</div>

@endsection



