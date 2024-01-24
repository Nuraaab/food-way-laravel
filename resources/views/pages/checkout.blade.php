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


      {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"> --}}

 		<!-- Bootstrap -->
 		{{-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> --}}

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('partials.header');
      
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{session('message')}}
          </div>
        @endif

      <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Checkout</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <form action="{{route('order.store')}}" method="POST">
                @csrf
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="full_name" placeholder="Full Name" value="{{$full_name}}">
                        </div>
                       
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email" value="{{$user_email}}">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="country" placeholder="Country" required>
                        </div>
                        
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone" required>
                        </div>
                        
                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                   
                    <!-- /Shiping Details -->

                    <!-- Order notes -->
                  
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>FOOD NAME</strong></div>
                            <div><strong>QUANTITY</strong></div>
                            <div><strong>PRICE</strong></div>
                        </div>
                        <div class="order-products">
                           @foreach ($carts as $cart)
                           <div class="order-col">
                            <div>{{$cart->food->name}}</div>
                            <div>{{$cart->quantity}}</div>
                            <div>ETB {{$cart->price}}</div>
                        </div>
                           @endforeach
                           
                        </div>
                       
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">ETB {{$total_price}}</strong></div>
                        </div>
                    </div>
                  
                    <button  class="primary-btn order-submit">Place order</button>
                </div>
                <!-- /Order Details -->
            </div>
        </form>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

      @include('partials.footer');
      <!-- footer end -->
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>



      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/nouislider.min.js"></script>
      <script src="js/jquery.zoom.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>