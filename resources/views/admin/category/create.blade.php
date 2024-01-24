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
            <div class="d-flex justify-content-center mt-4">
                <div class="col-sm-12 col-xl-8">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Add Category</h6>
                        
                        <form method="POST" action="{{ route('category')}}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                                    <label for="floatingname">Category Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <button type="submit"  class="btn btn-outline-primary m-2"><i class="fas fa-plus-circle me-2"></i>Add Category</button>
                                </div>
                            </div>
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




