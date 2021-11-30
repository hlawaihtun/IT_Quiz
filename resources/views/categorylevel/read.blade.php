@extends('template')
@section('content')
<!-- Page Heading-->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category & Level List</h1>
        <a href="{{route('categorylevel.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
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
              <th>Level</th>
  						<th>Category</th>
  					</tr>
  				</thead>
  				<tbody>
            @php
            $i=1;
            @endphp

            @foreach($category_level as $category_level)
  					<tr>
	  					<td>{{ $i }}</td>
              <td>{{ $category_level->name}}</td>
              <td>{{ $category_level->level_id}}</td>
              <td>{{ $category_level->category_id}}</td>
               					
				              
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