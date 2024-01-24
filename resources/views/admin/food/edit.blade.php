<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
            <div class="d-flex justify-content-center mt-4">
                <div class="col-sm-12 col-xl-8">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Update Food</h6>
                        <form action="{{route('edit_food', $food->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingname" name="name" placeholder="Food Name" value="{{$food->name}}">
                                    <label for="floatingname">Food Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingprice" name="price" placeholder="Price" value="{{$food->price}}">
                                    <label for="floatingprice">Price</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput2" name="description" placeholder="Description" value="{{$food->description}}">
                                    <label for="floatingInput2">Description</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect " data-fouce name="category"
                                        aria-label="Floating label select example">
                                        <option selected>{{$food->catagory}}</option>
                                        @foreach ($category as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingprice" name="quantity" placeholder="Quantity" value="{{$food->quantity}}">
                            <label for="floatingprice">Quantity</label>
                        </div>
                        <div>
                            <div class="bg-secondary rounded text-center">
                                <p style="font-family: Arial, sans-serif; color: #bdafaf;">Previous image</p>
                                <img src="Foods/{{$food->image}}" width="100px" height="100px"/>
                            </div>
                            <label for="formFileLg" class="form-label">Update Food Image</label>
                            <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file" name="image">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="button" class="btn btn-outline-primary m-2"><i class="fas fa-times-circle me-2"></i>Cancel</button>
                            <button type="submit" class="btn btn-outline-primary m-2"><i class="fas fa-plus-circle me-2"></i>Update Food</button>
                        </div>

                    </form>
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




