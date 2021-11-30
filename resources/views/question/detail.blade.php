@extends('template')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Question Detail From</h1>
    <a href="{{route('question.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Return </a>  
</div>

        <div class="card shadow mb-3" >
  <div class="row no-gutters">

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Question: {{$question->question_name}}</h5>
        <p class="card-text">Category: {{$question->category_id}}</p>
        <p class="card-text">Level: {{$question->level_id}}</p>
      </div>

    </div>
  </div>


@endsection