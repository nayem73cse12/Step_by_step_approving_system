
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h4>Submitted applications</h4>
			
			<table class="table">
			<tr>
			    <td>SL</td>
				<td>Name</td>
				<td>Action</td>
			</tr>

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->name}}</td>
            <td>
            	<a href="{{route('details', $row->application_id)}}"  class="btn btn-warning">Details</a>
            	<a href="{{route('approve', $row->application_id)}}" class="btn btn-success">Approve</a>
            	
            </td>
            </tr>

            @endforeach
      
			</table>
			<a href="{{route('logout')}}" class="btn btn-default">Log out</a>
		</div>
	</div>
</div>
@endsection