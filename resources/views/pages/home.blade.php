<!DOCTYPE html>
<html>
   <head>
      <base href="/public">
      <!-- Basic -->
      @include('partials.css')
      {{-- <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Food-Way</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" /> --}}
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('partials.header')
         @if (session('message'))
         <div class="alert alert-danger" role="alert">
            {{session('message')}}
          </div>
         @endif
        {{-- <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="/"><img width="250" src="images/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="/about">About</a></li>
                           <li><a href="/testimonial">Testimonial</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/food">Foods</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/blog">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                     </li>
                     @if(Route::has('login'))
                     @auth
                      <li class="nav-item">
                       <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="{{route('cart')}}">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                           <g>
                              <g>
                                 <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                    c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                    C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                    c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                    C457.728,97.71,450.56,86.958,439.296,84.91z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                    c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                              </g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                        </svg> {{$cartCount}}
                     </a>
                  </li>
                     @else
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    @if(Route::has('register'))
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                     
                     
                     <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </form>
                  </ul>
               </div>
            </nav>
         </div>
      </header> --}}
         <!-- end header section -->
         <!-- slider section -->
        {{-- @include('partials.slider'); --}}
        <x-slider  />
         <!-- end slider section -->
      </div>

      <div class="rope-divider"></div>
      <!-- why section -->
      @include('partials.why')
      <!-- end why section -->
      
      <!-- arrival section -->
     @include('partials.new_arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our Top Selling <span>Foods.</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($foods as $food)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <form action="{{route('add_to_cart', $food->id)}}" method="POST" class="d-flex flex-column">
                              @csrf

                              <input type="hidden" name="price" id="price" value="{{$food->price}}">
                              <input type="hidden" name="image" id="image" value="{{$food->image}}">
                              <input type="number" min="1" name="quantity" id="" required placeholder="Quantity">
                           <button type="submit" class="option1">
                           Add To Cart
                           </button>
                        </form>
                           <a href="{{route('cartDetail', $food->id)}}" class="option2">
                           View Details
                           </a>
                        </div>

                     </div>
                     <div class="img-box">
                        <img src="Foods/{{$food->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h6>
                           {{$food->name}}
                        </h6>
                        <h6>
                           ETB {{$food->price}}
                        </h6>
                     </div>
                  </div>
               </div>
               {{-- <h1>{{$food->name}}</h1> --}}
               {{-- <x-products : food = `$food` /> --}}
               @endforeach
            
            </div>

            <div class="mt-6 p-4">
               {{$foods->links()}}
            </div>
            {{-- <div class="btn-box">
               <a href="/food">
               View All Foods
               </a>
            </div> --}}
         </div>
      </section>   
      {{-- <x-products  /> --}}
      {{-- @include('partials.products'); --}}
      <!-- end product section -->

      <!-- subscribe section -->
     @include('partials.subscribe');
      <!-- end subscribe section -->
      <!-- client section -->
     {{-- @include('partials.testimonial'); --}}
     <section class="client_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Customer's Testimonial
            </h2>
         </div>
         <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-inner">
   @foreach ($comments as $index => $comment)
   <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
      <div class="box col-lg-10 mx-auto">
         <div class="img_container">
            <div class="img-box">
               <div class="img_box-inner">
                  <img src="Foods/{{$comment->avator}}" alt="">
               </div>
            </div>
         </div>
         <div class="detail-box">
            <h6>{{$comment->name}}</h6>
            <p>{{$comment->comment}}</p>
         </div>
      </div>
   </div>
   @endforeach
</div>
            <div class="carousel_btn_box">
               <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </section>
      <!-- end client section -->
      <!-- footer start -->
        @include('partials.homefooter');
      <!-- footer end -->
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>