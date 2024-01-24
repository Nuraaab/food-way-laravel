<!DOCTYPE html>
<html lang="en">

<head>
   
   @include('admin.csstemplate')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Sidebar Start -->
       @include('admin.sidebar')
        <!-- Sidebar End -->
 <!-- Content Start -->
 <div class="content">
    <!-- Navbar Start -->
   @include('admin.navbar')
    <!-- Navbar End -->
    @if (session('message'))
        <div class="alert alert-danger" role="alert">
          {{session('message')}}
        </div>
        @endif
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Orders</h6>
                    {{-- <a href="">Show All</a> --}}
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>{{$order->full_name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->city}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->food_name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td> 
                                    @if ($order->status == "1")
                                    Completed
                                    @else
                                    Pending...
                                    @endif
                                </td>
                                <td> <form action="{{ route('complete_order', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to alter this order?');">
                                    @csrf
                                    <input type="hidden" name="status" id="" value="{{$order->status}}">
                                    @if ($order->status == "1")
                                    <button type="submit" class="btn btn-sm btn-success">
                                        UnComplete
                                   </button>
                                  @else
                                  <button type="submit" class="btn btn-sm btn-success">
                                    Complete
                               </button>
                                    @endif
                                   
                                </form></td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
                <div class="mt-6 p-4">
                    {{$orders->links()}}
                </div>
            </div>
        </div>

</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('admin.script')
</body>

</html>