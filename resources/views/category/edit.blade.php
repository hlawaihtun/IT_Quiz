
@extends('template')
@section('content')
<!-- Page Heading-->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Edit List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Edit Form</a>
  	</div>

  	<div class="card shadow mb-4">
  		<div class="card-body">
  	
  	<div class="row">
  		<div class="col-12 col-6 col-2 table-responsive">
  			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data" >
					@csrf
					@method('PUT')
					<div class="form-group">
						<div  class="row">
							<div class="col-2"><label>Name:</label></div>
							<div class="col-10"><input type="text" name="name" class="form-control form-control-sm w-50" placeholder="" value="{{$category->name}}"></div>
						</div>
					</div>
					
					<div class="form-group">
					<div class="row">
						<div class="col-2"><label>Profile:</label></div>
						<div class="col-10"><input type="file" name="profile" class="form-control-file form-control-sm w-50" >
							<input type="hidden" name="oldprofile" value="{{$category->profile}}">
							<img src="{{$category->profile}}" class="img-fluid">
						</div>
					</div>

						<div class="form-group my-2">
	  						<input type="submit" value="Save" id="check" class="btn btn-secondary">
						</div>
					</div>
				</form>
  			</form>
  		</div>
  	</div>
  	</div>
  	</div>
@endsection