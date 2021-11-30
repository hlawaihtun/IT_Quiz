@extends('template')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">IT Test Level Edit Form</h1>     
</div>

<div class="card shadow p-3 mb-5 bg-white rounded">
  <div class="card-body">


  	<form method="post" action="{{route('level.update',$level->id)}}">
      @csrf
      @method('PUT')
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Name</label>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-9">
      <input type="text" class="form-control" placeholder="Name" name="name" value="{{$level->name}}">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">Edit</button>
    </div>
  </div>
</form>

    
  </div>
</div>


@endsection