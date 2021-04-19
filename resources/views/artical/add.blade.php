@extends('layout.app')
@section('content')

<div class="container">
	<div class="row container">
		<div class="col-md-12">
			<h1 class="text-success" >Add New Artical</h1>
			{{-- <a class="btn btn-primary" href="{{ url('artical') }}">List</a> --}}
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
			<form action="{{url('store-artical')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Title</label>	
					<input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Enter title">
				</div>
				<div class="form-group">
					<label>Body</label>	
					<textarea class="form-control" name="body" value="{{old('body')}}" ></textarea>
				</div>
				<div class="form-group">
					<label>Category</label>	
					<select class="form-control" name="category">
						<option value="" selected="">--please choose category--</option>
						<option value="Sports">Sports</option>
						<option value="Science">Science</option>
						<option value="Tech">Tech</option>
						<option value="Pop Culture">Pop Culture</option>
					</select>
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