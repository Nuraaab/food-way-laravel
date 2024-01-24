<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a class="navbar-brand d-flex mb-4" href="{{route('dashboard')}}"><img width="150" src="images/logo.png" alt="#" /></a>
        <div class="d-flex align-items-center ms-4 mb-4">
            {{-- <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div> --}}
            {{-- <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                <span>{{Auth::user()->email}}</span>
            </div> --}}
        </div>
        <div class="navbar-nav w-100 d-flex mt-4">
            <a href="/redirect" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-laptop me-2"></i>Foods
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('/view_food')}}" class="dropdown-item">
                        <i class="fa fa-plus me-2"></i>Add Foods
                    </a>
                    <a href="{{url('/show_food')}}" class="dropdown-item">
                        <i class="fa fa-list me-2"></i>View Foods
                    </a>
                </div>
            </div>
            <div class="nav-item dropdown">
            <a href="widget.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >
                <i class="fa fa-th me-2"></i>Users</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{url('/view_user')}}" class="dropdown-item">
                    <i class="fa fa-plus me-2"></i>Add Users
                </a>
                <a href="{{url('/show_user')}}" class="dropdown-item">
                    <i class="fa fa-list me-2"></i>View Users
                </a>
            </div>
            </div>
            <a href="{{route('order.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Orders</a>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Catagories</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{url('/view_category')}}" class="dropdown-item">
                    <i class="fa fa-plus me-2"></i>Add Categories
                </a>
                <a href="{{url('/show_category')}}" class="dropdown-item">
                    <i class="fa fa-list me-2"></i>View Categories
                </a>
            </div>
            </div>
            {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>