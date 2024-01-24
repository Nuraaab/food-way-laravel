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
<div class="container-fluid pt-4 px-4 custom-container">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">View Foods</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0 custom-table">
                <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($foods as $food)
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{$food->name}}</td>
                        <td>{{$food->price}}</td>
                        <td>{{$food->quantity}}</td>
                        <td>{{$food->catagory}}</td>
                        <td><img  src="Foods/{{$food->image}}" height="50px" width="50px"/></td>
                        <td> 
                        <form action="{{ route('delete_food', $food->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this food?');">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash-fill"></i> Delete
                            </button>
                        </form>
                        <a class="btn btn-sm btn-success" href="{{route('update_food', $food->id)}}">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </a>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
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