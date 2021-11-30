@extends('template')
@section('content')
<!-- Page Heading-->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
        <a href="{{route('categorylevel.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Create Form</a>
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
				<form method="post" action="{{route('categorylevel.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<div  class="row">
							<div class="col-2"><label>Name:</label></div>
							<div class="col-10"><input type="text" name="name" class="form-control form-control-sm w-50" placeholder=""></div>
						</div>
					</div>

				<div class="form-group row">
                <label class="col-sm-2 col-form-label">Category</label>
                <select class="form-control w-25 ml-sm-3 col-sm-3" name="categoryid">
                    <option>Choose Category</option>
                 	
                    @foreach($categories as $category)
                    	<option value="{{$category->id}}">{{$category->name}}</option>  
                    @endforeach    	
                    
                </select>
                <label class="col-sm-1 col-form-label ml-sm-3">Level</label>
                <select class="form-control w-25 ml-sm-1 col-sm-3" name="levelid">
                    <option>Choose Level</option>
                 	
                    @foreach($levels as $level)
                    	<option value="{{$level->id}}">{{$level->name}}</option>  
                    @endforeach   
                    
                </select>

            </div>

					<div class="form-group">

			
	  						<input type="submit" value="Save" id="check" class="btn btn-secondary">
						
					</div>
				</form>
  			</form>
  		</div>
  	</div>
  	</div>
  	</div>
@endsection