@extends('template')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Question Create From</h1>
  <a href="{{route('question.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Return </a>
    
</div>

<div class="card shadow mb-4">
	<div class="card-body">
		<!-- /resources/views/post/create.blade.php -->

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<!-- Create Post Form -->
		<form method="post" action="{{route('question.store')}}">
			@csrf
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Question</label>
				<div class="col-sm-10">
					<textarea type="text" name="question_name" placeholder="Question" class="form-control"></textarea>
				</div>
			</div>

			<div class="form-group row">
                <label class="col-sm-2 col-form-label">CategoryLevel</label>
                <select class="form-control w-25 ml-sm-3 col-sm-3" name="categorylevel" id="level">
                    <option>Choose CategoryLevel</option>
                 	
                    @foreach($categorylevels as $category)
                    	<option value="{{$category->id}}">{{$category->name}}</option>  
                    @endforeach    	
                    
                </select>
                
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Answer1</label>
				<div class="col-sm-10">
					<input type="text" name="answer1" placeholder="answer1" id="answer1" class="form-control">
				</div>
				
			</div>
            <div class="row form-group">
                <label class="col-sm-2 col-form-label">Answer2</label>
				<div class="col-sm-10">
					<input type="text" name="answer2" id="answer2" placeholder="answer2" class="form-control">
				</div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 col-form-label">Answer3</label>
				<div class="col-sm-10">
					<input type="text" name="answer3" id="answer3" placeholder="answer3" class="form-control">
				</div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Right Answer</label>
                <select class="form-control w-25 ml-sm-3 col-sm-3" name="rightanswer" id="rightanswer">
                    <option value="">Choose Right Answer</option>
                	<option value="1">Answer1</option>
                	<option value="2">Answer2</option>
                	<option value="3">Answer3</option>
                </select>
            </div>
			<button type="submit" class="btn btn-success">Save</button>
		</form>
	</div>
	
</div>


@endsection
