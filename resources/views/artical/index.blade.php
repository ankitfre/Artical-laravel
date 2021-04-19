@extends('layout.app')
@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success">
			<ul>
                <li>{{ session('success') }}</li>
            </ul>
 		</div>
	@endif
	<div class="row">
		<div class="col-md-12 mb-2">
			<h1 class="text-center">Artical list</h1>
   		</div>
   		<div class="col-md-12 text-right">
			<a class="btn btn-primary" href="{{ url('add_artical') }}">Add New</a>
   		</div>
		<div class="col-md-12 mt-3">
			<table class="table mt-3">
				<tr>
					<th>S.No</th>
					<th>Image</th>
					<th>Title</th>
					<th>Body</th>
					<th>Category</th>
					<th>Edit</th>
				</tr>
				@if($artical && count($artical))
					@foreach($artical as $row)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td><img src="{{ asset('storage/'.$row->image)}}" width="80" height="70" /></td>
							<td>{{$row->title}}</td>
							<td>{{$row->body}}</td>
							<td>{{$row->category}}</td>
							<td><a href="{{ url('edit_artical') }}/{{encrypt($row->id)}}" class="btn btn-info">Edit</a></td>
						</tr>
					@endforeach
				@else
					<tr><td colspan="6" class="text-center">Not Artical found</td></tr>
				@endif
			</table>
		</div>
	</div>
</div>
@endsection
