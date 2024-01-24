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
            <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item text-center">
                                    <h3>Your Profile</h3>
                                <img class="img-fluid rounded-circle mx-auto mb-4" src="Foods/{{Auth::user()->profile_photo_path}}" style="width: 100px; height: 100px;">
                                <h5 class="mb-1">Full  Name : {{Auth::user()->name}}</h5>
                                <p>Role: Admin</p>
                                <div>
                                    <form action="{{route('updateProfile', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                    <label for=" formFileLg " class="form-label">Browse</label>
                                    <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file" name="image" required>
                                    <button type="submit" class="btn btn-outline-primary m-2"><i class="fas fa-plus-circle me-2"></i>Update Profile</button>
                                </form>
                                </div>
                            </div>
                          
                        </div>
                    </div>
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