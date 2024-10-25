<!DOCTYPE html>
<html lang="en">

<head>
    
    
    @yield('head')

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('adm/img/favicon.ico') }} " rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('adm/lib/owlcarousel/assets/owl.carousel.min.css') }} " rel="stylesheet">
    <link href="{{ asset('adm/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css' ) }} " rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('adm/css/bootstrap.min.css' ) }}" rel="stylesheet">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adm/plugins/summernote/summernote-bs4.min.css' ) }}">

    <!-- Template Stylesheet -->
    <link href="{{ asset('adm/css/style.css') }}" rel="stylesheet">
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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/" class="navbar-brand mx-4 mb-3">
                    <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i> IG Software Nig </h5>
                </a>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i> Dashboard </a>
                    <a href="/addblog" class="nav-item nav-link"><i class="fa fa-passport me-2"></i> Add Blog </a>
                    <!-- <a href="/createblog.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i> Create Posts </a> -->
                    <a href="/manageblog" class="nav-item nav-link"><i class="fa fa-pen me-2"></i> Edit/Delete Blog </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">                        
                        </div>
                        <div class="nav-item dropdown">
                        </div>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="{{ asset('adm/img/user.jpeg' )}}" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex"> IG Software Nig </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <a href="" class="dropdown-item"> Admin</a>
                                <a href="" class="dropdown-item">Settings</a>
                                <a href="" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
            </nav>
                <!-- Navbar End -->

                @yield('content')

                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
        </div>
            <!-- Content End -->
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
 

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('adm/lib/chart/chart.min.js' ) }}"></script>
    <script src="{{ asset('adm/lib/easing/easing.min.js' ) }}"></script>
    <script src="{{ asset('adm/lib/waypoints/waypoints.min.js' ) }}"></script>
    <script src="{{ asset('adm/lib/owlcarousel/owl.carousel.min.js' ) }} "></script>
    <script src="{{ asset('adm/lib/tempusdominus/js/moment.min.js' ) }}"></script>
    <script src="{{ asset('adm/lib/tempusdominus/js/moment-timezone.min.js' ) }}"></script>
    <script src="{{ asset('adm/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js' ) }}"></script>
    <script src="{{ asset('adm/plugins/summernote/summernote-bs4.min.js' ) }}"></script>
    <script src="{{asset ('coza/vendor/sweetalert/sweetalert.min.js')}}"></script>
        @if(session('status'))
                <script>
                    swal("{{ session('status') }}" );
                </script>
        @endif

    <!-- Template Javascript -->
    <script src="{{ asset('adm/js/main.js' ) }}"></script>
   @yield('scripts')
</body>
</html>