@extends('template2')

@section('content')

  <!-- banner section -->

<section class="banner_img">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    
                        <img src="frondend/img/banner_img.png" alt="" class="backimg">
                 
                </div>
                <div class="col-lg-2">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                        	
                               <!--  <a href="#" class="d-none d-sm-block btn_3 home_page_btn">Beginner</a> -->
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                        	<!-- 
                               <a href="#" class="d-none d-sm-block btn_3 home_page_btn">Intermediate</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                        	
                               <!--  <a href="#" class="d-none d-sm-block btn_3 home_page_btn">Advance</a> -->
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </section>



    <!-- end banner section -->


    <!-- start card section -->

  <section class="card_part" style="padding-left: 50px;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-body">
                        <img src="frondend/img/beginner.jpg" class="card-img">
  
                      </div>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem; background-color: blue">
                      <div class="card-body">
                        <img src="frondend/img/advance4.jpg" class="card-img">
                        
                      </div>
                     
                    </div>
                    </div>

                <div class="col-lg-4 col-md-4">
                   
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-body">
                         <img src="frondend/img/advance5.jpg" class="card-img">
                      </div>
                       
                    </div>
                    </div>



                </div>

            </div>

       </section>     



    <section class="card_part" style="padding-left: 50px; margin-top: 0px">
        <div class="container">
            <div class="row ">
                @foreach($levels as $level)
                <div class="col-lg-4 col-md-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    
                        
                          
                            <a href="{{route('frontcourse')}}" class="btn btn-primary">{{$level->name}}</a>

                            
                          
                        
                    </div>
                </div>

             

                @endforeach

                </div>

            </div>

       </section>     

    <!--    End Card Section -->

      <!-- Button Section Start -->


<!-- 

 -->
       <!-- End Button Section    -->







               


    

   

  



@endsection


