<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
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
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         @include('partials.header')
         @if (session('message'))
         <div class="alert alert-danger" role="alert">
            {{session('message')}}
          </div>
         @endif
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Our Foods</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
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
               <a href="">
               View All Foods
               </a>
            </div> --}}
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      @include('partials.footer')
      <!-- footer section -->
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