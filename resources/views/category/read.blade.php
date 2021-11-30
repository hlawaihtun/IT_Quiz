@extends('template')
@section('content')
<!-- Page Heading-->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category List</h1>
        <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
  	</div>
  	<!-- Table -->
    <div class="card shadow mb-4">
    <div class="card-body">
  	<div class="row">
  		<div class="col-12 col-6 col-2 table-responsive">
  			<table class="table table-hover">
  				<thead>
  					<tr>
              <th>No.</th>
  						<th>Name</th>
  						<th>Profile</th>
  					</tr>
  				</thead>
  				<tbody>
            @php
            $i=1;
            @endphp
            @foreach($categories as $category)
  					<tr>
	  					<td>{{ $i }}</td>
	  					<td>{{ $category->name }}</td>
              <td><img src="{{ $category->profile }}" width="50px" height="50px"></td>
				              <td><a href="{{route('category.show',$category->id)}}" class="btn btn-info">Detail</a></td>
				              <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a></td>
				             
				            <td> 
				              <form method="post" action="{{route('category.destroy',$category->id)}}" onclick="return myFunction();">
				                @csrf
				                @method('DELETE')
				                <button type="submit" class="btn btn-danger">Delete </button>
				              </form>
				            </td>
  					</tr>
            @php
            $i++;
            @endphp
            @endforeach

            <script>
                function myFunction(){
                  if(!confirm("Are You Sure to delete?"))
                    event.preventDefault();
                }
            </script>

  				</tbody>
  				
  			</table>
  			
  		</div>
  	</div>
    </div>
     </div>
@endsection