 @extends('frontend')
 @section('content')

 <section class="use_sasu padding_top">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($categories as $category)
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="single_feature">
                        <div class="single_feature_part">

                            <div class="row"></div>
                                  
                            <img src="{{$category->profile }}" alt="" class="img">

                            <h4>{{$category->name}}</h4>
                            
                           <a href="/frontlevel?category={{$category->id}}" class="btn btn-primary click"> Learning Now</a>
                            
                        </div>


                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <img src="img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_1 custom-animation1">
    </section>
   @endsection

   