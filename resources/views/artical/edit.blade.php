@extends('layout.app')
@section('content')

<div class="container">
	<div class="row container">
		<div class="col-md-12">
			<h1 class="text-success" >Update Artical</h1>
			{{-- <a class="btn btn-primary" href="{{ url('artical') }}">List</a>
			<a class="btn btn-primary" href="{{ url('add_artical') }}">Add New</a> --}}
		</div>	
		<div class="col-md-6">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			@if(session('success'))
			<div class="alert alert-success">
				<ul>       
					<li>{{ session('success') }}</li>
				</ul>
			</div>
			@endif
			<form action="{{url('update-artical')}}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="articalId" value="{{ encrypt($artical->id)}}">
				<div class="form-group">
					<label>Title</label>	
					<input type="text" class="form-control" value="{{ $artical->title }}" name="title" placeholder="Enter title">
				</div>
				<div class="form-group">
					<label>Body</label>	
					<textarea class="form-control" name="body"  >{{ $artical->body }}</textarea>
				</div>
				<div class="form-group">
					<label>Category</label>	
					<select class="form-control" name="category">
						<option value="" selected="">--please choose category--</option>
						<option @if($artical->category == 'Sports') {{'selected'}} @endif value="Sports">Sports</option>
						<option @if($artical->category == 'Science') {{'selected'}} @endif  value="Science">Science</option>
						<option @if($artical->category == 'Tech') {{'selected'}} @endif  value="Tech">Tech</option>
						<option @if($artical->category == 'Pop Culture') {{'selected'}} @endif  value="Pop Culture">Pop Culture</option>
					</select>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="{{asset('storage/'.$artical->image)}}" width="200px" height="200px" />
					</div>
				</div>	
				<div class="form-group">
					<label>Image</label>	
					<input type="file" class="form-control" name="image">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" />
					<a href="{{url('artical')}}" class="btn btn-danger">Back</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection