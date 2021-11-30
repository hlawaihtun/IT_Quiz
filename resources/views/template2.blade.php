<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IT Test</title>
    <link rel="icon" href="{{asset('frondend/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frondend/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('frondend/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="index.html"> <img src="frondend/img/favicon.png" alt="logo"></a>
                        <a class="navbar-brand main_logo" href="index.html" style="color: white; font-size: 30px;">IT Test</a>
                        <a class="navbar-brand single_page_logo" href="index.html" > <img src="frondend/img/favicon.png" alt="logo" ><h2 style="margin-left: 40px; margin-top: 10px; color: white" >IT Test</h2></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent" style="margin-right: 150px;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost:8000/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="features.html">About Us</a>
                                </li>
                               
                              
                                    <li class="nav-item ">
                                    <a class="nav-link" href="http://localhost:8000/navcourse" >
                                        Courses
                                    </a>
                                   
                                    </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                
                    <li class="nav-item">
                  
                    
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item">
                            
                          <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                      <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="">
                                        @csrf
                                    </form>
                                </li>





                                    
                                
                           
                        @endguest
                    
                            </li>
                                

                            </ul>
                        </div>
                            
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <!--::banner part start::-->
  
    <!--::banner part start::-->

    <!--::use sasu part end::-->
   
    <!--::use sasu part end::-->
     <div class="container-fluid">

            @yield('content')
         
    </div>

  




 


   

    <!--::footer_part start::-->
 <footer class="footer_part" style="margin-top: 100px; background-image: url(frondend/img/foot14.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">

                 <div class="single_footer_part">
                
                <h5 class="text-uppercase">Contact us</h5>
                <ul class="list">
                    <li>
                        <p style="color: white">No.168, Ground Floor,
                            Baho Road (Between Maubin st and Phyar Pone St),<br>
                            Sanchaung Township, Yangon.
                        </p ></li>
                        <li>
                            <p style="color: white">Tel : 09 953 271 593</p>
                        </li>
                    </ul>
                </div>

            </div>    
                
                <hr class="clearfix w-100 d-md-none pb-3">
                
                <div class="col-md-3 mb-md-0 mb-3">

                    <div class="single_footer_part">
                    
                    <h5 class="text-uppercase">Information</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="http://localhost:8000/" style="color: white">Home</a>
                        </li>
                        <li>
                            <a href="#" style="color: white">About Us</a>
                        </li>
                        <li>
                            <a href="http://localhost:8000/navcourse" style="color: white">Courses</a>
                        </li>
                        <li>
                            <a href="#" style="color: white">Contact Us</a>
                        </li>
                       
                    </ul>

                    </div>
                </div>
  
             <hr class="clearfix w-100 d-md-none pb-3">
                
                <div class="col-md-3 mb-md-0 mb-3">

                     <div class="single_footer_part">
                    
                    <h5 class="text-uppercase">Social Link</h5>
                    <ul class="list-unstyled">
                       
                        <li>
                            <a href="https://www.facebook.com"><img src="frondend/img/f.svg" width="25" height="25" style="margin-bottom: 10px;"> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"><img src="frondend/img/i.svg" width="25" height="25" style="margin-bottom: 10px;"> </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"><img src="frondend/img/t.svg" width="25" height="25" style="margin-bottom: 10px;"> </a>
                            <!-- <a href="" class="navbar-brand nav-link"><img src="images/cart.svg" width="25" height="25" > </a>                                   -->
                        </li>
                    </ul>
                    </div>
                </div>
                
        </div>
    </footer>
   
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('frondend/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('frondend/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('frondend/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('frondend/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frondend/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('frondend/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('frondend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('frondend/js/slick.min.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frondend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frondend/js/contact.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.form.js')}}"></script>
    <script src="{{asset('frondend/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frondend/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('frondend/js/custom.js')}}"></script>

    <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    @yield('script')
</body>


</html>