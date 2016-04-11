
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
    <legend>Application  Details </legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Apply ID:</label>
      <div class="col-lg-10">
        <p>{{$data->application_id}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-10">
        <p>{{$data->name}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Fathers Name:</label>
      <div class="col-lg-10">
        <p>{{$data->father_name}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Mothers Name:</label>
      <div class="col-lg-10">
        <p>{{$data->mother_name}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone No:</label>
      <div class="col-lg-10">
        <p>{{$data->phone_no}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-10">
        <p>{{$data->email}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Location:</label>
      <div class="col-lg-10">
        <p>{{$data->address}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Area:</label>
      <div class="col-lg-10">
        <p>{{$data->plot_area}}</p>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Floor Amount:</label>
      <div class="col-lg-10">
        <p>{{$data->floor_amount}}</p>
      </div>
    </div>
   
    <a href="" class="btn btn-default">Approve</a>
		</div>
	</div>
</div>
@endsection
