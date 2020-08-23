@extends('layout.admin.master')

@section('content')

<?php
$title = "Add";
$button = "Add";
if(isset($action)) {
$title = "Edit";
$button = "Update";
}

$state_name = "";
$no_of_district = "";
if(isset($stat)) 
{
	$state_name = $stat->state_name;
	$no_of_district = $stat->no_of_district;
}
?>

<div class="row">
<div class="well"><strong>{{$title}} State</strong></div>
</div>

<div class="row">
<div class="well">
	<form role="form" action="@if(isset($action)) {{route('state.edit.submit')}} @else {{route('state.add.submit') }} @endif" method="POST">
	{{ csrf_field() }}
			<div class="form-group">
				<label for="state">Name:</label>
				<input class="form-control" type="text" name="state_name" id="state_name" value="{{$state_name}}" placeholder="Enter State Name" required>
			</div>

			<div class="form-group">
				<label for="state">Number Of Distrcts:</label>
				<input class="form-control" type="number" name="no_of_district" id="" value="{{$no_of_district}}" placeholder="Enter Number Of Distrcts" required>
			</div>
			@if(isset($id)) 
			<input type="hidden" name="id" value="{{$id}}">
			@endif
			<button type="submit" name="add" id="add" class="btn btn-primary">{{$button}}</button>
		</form>

       
</div>
</div>

		@if(count($errors)>0) 
		<div class="alert alert-warning">
			@foreach($errors->all() as $error)
				{{$error}}
			@endforeach
		</div>	
		@endif
		
@endsection