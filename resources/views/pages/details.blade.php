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
                        <h3 class="breadcrumb-header">Food Details</h3>
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Home</a></li>
                            <li class="active">Food Details</li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="Foods/{{$food->image}}" alt="" class="card-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h1 class="card-title">Category : {{$food->catagory}}</h1>
                            <p class="card-text">Price: ETB {{$food->price}}</p>
        
                            <form action="{{route('add_to_cart', $food->id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="price" id="price" value="{{$food->price}}">
                               <input type="hidden" name="image" id="image" value="{{$food->image}}">
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control">
                                </div>
                                <button type="submit" class="cart-button">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="rope-divider"></div>

        <section class="product_section layout_padding">
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Related Foods
                  </h2>
               </div>
               <div class="row">
                  @foreach ($related_foods as $food)
   
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
            </div>
         </section> 
         
         <section class="subscribe_section">
            <div class="container-fuild">
               <div class="box">
                  <div class="row">
                     <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                           <div class="heading_container heading_center">
                              <h3>Comment Here</h3>
                           </div>
                           <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input style=" border-radius: 10px;
                              width: 500px;" type="text" placeholder="Enter Full Name" name="name">
                              <input style="border-radius: 10px;
                              width: 500px;" type="text" placeholder="Enter Your Comment" name="comment">
                              <input style="border-radius: 10px; text-align: center;
                              width: 500px;" type="file" placeholder="Browse" name="image">
                              <button type="submit" style="border-radius: 10px;
                              width: 500px;">
                              Send
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>


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
      </body>
   </html>