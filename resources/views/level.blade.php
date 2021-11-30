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


    <!-- start question section -->


    <section class="card_section">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <div class="card" >
          <h5 class="card-header">Question</h5>
          <div class="card-body">
            <h5 class="card-title">Ques 1: Trace the odd data type?</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">(A) Floats</label>
            </div>
                
              </div>
              <div class="col-md-12">
                <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">(B) Integers</label>
            </div>
              </div>
              <div class="col-md-12">
                <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">(C) Doubles</label>
            </div>
            
              </div>
            </div>
              
            
            
           
          </div>
          <div class="button-class" style="padding-bottom: 20px;">
          <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-3">
               <a href="#" class="d-none d-sm-block btn_3 home_page_btn" align="center" style="font-size: 18px;">next</a>
            </div>
            <div class="col-sm-1"></div>
          </div>
        </div>
        </div>
        </div>

        <div class="col-3"></div>
      </div>
      
      
    </section>

   <!--  end question section  -->

  



@endsection


