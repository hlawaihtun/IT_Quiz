@extends('template')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Question Create From</h1>
  <div class="dropdown">
  <a href="{{route('question.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Create Form </a>
    
</div>
</div>

<!--  Table  -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Question</th>
                    <th>Category & Level</th>
                    <th>Right Answer</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @php
                $i=1;
                @endphp
                                 
                @foreach($questions as $question)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$question->question_name}}</td>
                    <td>{{$question->categorylevel_id}}</td>
                    <td>{{$question->rightanswer}}</td>
                    <td><a href="{{route('question.show', $question->id)}}" class="btn btn-info">Detail</a></td>
                    <td><a href="{{route('question.edit', $question->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form method="post" action="{{route('question.destroy', $question->id)}}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete" onclick="return confirm('Are you sure');">Delete</button>
                        
                    </form> </td>
                    @php
                    
                    @endphp
                </tr>
                @php
    
                $i++;
                
                @endphp
                @endforeach
                
                
                
            </tbody>
            
        </table>
        
    </div>
</div>

@endsection


@section('script')


<script type="text/javascript">

    $(document).ready(function(){
      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


        
            
        
    
    });


    



    
  
</script>

  

@endsection

