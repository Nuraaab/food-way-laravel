<!DOCTYPE html>
<html lang="en">

<head>
   
   @include('admin.csstemplate')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
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

            <!-- Sale & Revenue Start -->
           @include('admin.sales')
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
           @include('admin.saleschart')
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            @include('admin.recentchart')
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
           {{-- @include('admin.widget') --}}
            <!-- Widgets End -->


            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@include('admin.script')
</body>

</html>