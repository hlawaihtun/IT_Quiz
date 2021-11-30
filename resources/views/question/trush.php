$names = DB::table('category_level')->pluck('name','id');
        echo $names;
        foreach ($names as $id => $name) {
            echo $name;
        }



        $user = DB::table('category_level')->find(2);
        var_dump($user);


        $category_level = DB::table('category_level')->pluck('name', 'id');

        foreach ($category_level as $id => $name) {
            echo $name;
        }



        // Object change arr
        $groupsArr = json_decode(json_encode($groups), true);
        $nog = request('nog');

        $ramGroups = array_rand($groupsArr, $nog);
        if($nog>1){
            for($i=0; $i<count($ramGroups); $i++){

                $j = $ramGroups[$i];
                $group = Group::find($groupsArr[$j]['id']);

                $group->mentors()->attach(request('mentor'));

            }

        }else{
        // var_dump($ramGroups);
        $group = Group::find($groupsArr[$ramGroups]['id']);

        // var_dump($group);
        $group->mentors()->attach(request('mentor'));
        }

        return redirect()->back();
    }


    <td><a href="{{route('category.show',$category->id)}}" class="btn btn-info">Detail</a></td>
				              <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a></td>
				             
				            <td> 
				              <form method="post" action="{{route('category.destroy',$category->id)}}" onclick="return myFunction();">
				                @csrf
				                @method('DELETE')
				                <button type="submit" class="btn btn-danger">Delete </button>
				              </form>
				            </td>



				            @foreach($category_level as $key => $category_level)
                    <td>{{$category_level->name}}</td>
                @endforeach




                // var skill_count=$('#skill_count').val();
    // var array = {!!$array['skills']!!};

    // $("#add-skill").click(function(){
    //     skill_count++;            
    //     var skill='<div class="row skill"><div class="col-sm-4"><label for="name">Skill:</label><select name="skill['+skill_count+'][skill_name]" class="form-control">$.each( array, function( i, val ) {<option value="+ val.id +"> val.skill_name </option>})</select></div><div class="col-sm-4"><label for="name">Experience:</label><select name="skill['+skill_count+'][pivot][experience_year]"   class="form-control">for(i=1;i<=30;i++){<option value="+ i +">i</option>}</select><select name="skill['+skill_count+'][pivot][experience_month]"   class="form-control">for(i=1;i<=12;i++){<option value="+i+">i</option>}</select></div><div class="col-md-12"><a class="skill-remove pull-right">- Remove Skill</a></div></div>'
    //     $(".show-skill").before(skill);
    // });

$('#batch').change(function(){
      var bit = $(this).val();
     
      // alert(bit);`
      html="";
      $.post("{{route('getgroups')}}",{id:bit}, function(response){
          console.log(response);
          $.each(response, function(i, v){
              html+='<div class="col-md-3 my-3">'+
                      '<div class="card">'+
                      '<div class="card-body">'+
                      '<h5>'+v.name+'<h5>'+
                      '</div>'+
                      '</div>'+
                      '</div>';
          });
          $('#groups').html(html);
          if(response.length>1){
            $('#nog').prop('disable', false);
            $('#noglabel').html('<b class="text-danger"> [maxnumber -'+response.length+']</br>');
            $('#nog').prop('max', response.length);
          }else{
            $('#nog').prop('disabled', true);
            $('#noglabel').html('');
          }

          '<tr>'+
              '<td>'+v.i'</td>''+
              '<td>'+v.categorylevel_id'</td>''+
              '<td>'+v.question_name'</td>''+
              '<td>'+v.rightanswer'</td>''+

          '</tr>'



$.post("getstudentlist.php", function(data){
        console.log('upper');
        console.log(data);
        var student_list_obj=JSON.parse(data);
        console.log('under');
        console.log(student_list_obj);

        var html=''; var j=1;
        $.each(student_list_obj, function(i,v){
          console.log(i,v);

          html+=`<tr><td>${j++}</td><td>${v.name}</td><td>${v.city}</td>

          <td><i class="fas fa-pencil-alt btnedit" data-id=${i}></i></td><td><i class="fas fa-trash btndelete" data-id=${i}></i> </td></tr>`;

        })

        $("tbody").html(html);

      })


      $('.htmllevel').click(function(){
            console.log('OK!');
            var level = $(this).val();
            console.log(level);

            $.post("{{route('getlevels')}}",{id:level}, function(response){
                console.log(level);
             html="";

            });
            

             @foreach($category_level as $key => $category_level)
                {{$key=1}};
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{$category_level->name}}</td>
                </tr>
                echo "{{$key}} => {{$category_level->name}} ";
                @endforeach