<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
     @include('partials.css')
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

      <section class="inner_page_head">
        <div class="container_fuild">
           <div class="row">
              <div class="col-md-12">
                 <div class="full">
                    <h3>Carts</h3>
                 </div>
              </div>
           </div>
        </div>
     </section>
<div class="container">
     <div class="cart-container">
      @php
      $total_price = 0;
      $total_foods =0;
  @endphp
        <h2>Your Cart</h2>
        <table class="cart-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($carts as $cart)
            <tr>
                <td>{{$cart->food->name}}</td>
                <td>{{$cart->price}}</td>
                <td>{{$cart->quantity}}</td>
                <td><img src="Foods/{{$cart->image}}" width="50px" height="50px" alt="Food Image"></td>
                @php
                    $total_price = $total_price + ($cart->price*$cart->quantity) ;
                    $total_foods = ($total_foods)+ $cart->quantity;
                @endphp
                <td>
                  <a onclick="return confirm('Are you sure you want to delete this cart?');" href="{{route('deleteCart', $cart->id)}}" class="btn btn-primary">
                     Remove
                 </a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="cart-summary">
          <p>Total Foods: {{$total_foods}}</p>
          <h3>Total Price: ETB {{$total_price}}</h3>
        </div>
        <div class="cart-buttons">
         <a href="/food"> <button class="cart-button">Continue Shopping</button></a>
          <form action="{{route('checkout')}}">
            @csrf
            <input type="hidden" name="total_price" value="{{$total_price}}">
            <input type="hidden" name="cart" value="{{$carts}}">
            <button type="submit" class="cart-button">Checkout</button>
          </form>
        </div>
      </div>
    </div>
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