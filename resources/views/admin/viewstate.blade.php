@extends('layout.admin.master')

@section('content')
<div class="row well" >

	<div class="col-md-8"><strong>View State</strong></div>
	<div class="col-md-4 text-right" >

	<form class="form-inline" action="{{ route('admin.states') }}">
		<div class="form-group input-group">
			<input class="form-control" type="search" name="search_text" id="search_text" placeholder="Search">
		</div>
		<button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
	</form>	

	</div>
	
</div>

<div class="row">	
<div class="well">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>State</th>
					<th>Districts</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
				@foreach ($states as $state)
				<tr>
					<td>{{$state->state_id}}</td>
					<td><a href="{{'/admin/statedetails/'.$state->state_id}}">{{$state->state_name}}</a></td>
					<td>{{$state->no_of_district}}</td>
					<td>{{$state->created_at}}</td>
					<td><a href="{{'/admin/updatestate/'.$state->state_id}}">edit</a></td>
				</tr>
				@endforeach 
			</table>
</div>			

<div class="well well-sm text-center">
{{ $states->links() }}
</div>
</div>		

@endsection