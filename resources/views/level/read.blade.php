@extends('template')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">IT Test Level </h1>
        <a href="{{route('level.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add Level </a>
</div>

<div class="card shadow p-3 mb-5 bg-white rounded">
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-6 col-2 table-responsive">
				<table class="table thead-light t">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php
                        	$i=1;
                        @endphp
						@foreach($levels as $level)
						<tr>
							<td>{{$i}}</td>
							<td>{{$level->name}}</td>
							<td><a href="{{route('level.edit',$level->id)}}" class="btn btn-warning">Edit</a> </td>
							<td>
								<form method="post" action="{{route('level.destroy',$level->id)}}" onclick="return delFunction();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                        
                                    </form>
							</td>
						</tr>
						 @php
                             $i++;
                        @endphp
                        @endforeach

                        <script>
                            function delFunction() {
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