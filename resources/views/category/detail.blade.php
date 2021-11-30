@extends('template')
@section('content')
<!-- Page Heading-->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Detail Page</h1>
  </div>
   <div class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-lg-6 col-md-6 col-sm-12 table-responsive">
      <img src="{{$category->profile}}" width="120px" height="100px"  alt="...">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card-body">
        <h5 class="card-title">{{$category->name}}</h5>
    </div>
  </div>
</div>
@endsection