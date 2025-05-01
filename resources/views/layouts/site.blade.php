<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title',': HelpZone|| Creating Hopes')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="@yield('title',': Homepage')" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>Example@gmail.com</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+01234567890</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="{{route ('posts.index')}}" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">HelpZone</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ route('posts.index')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{ route('services')}}" class="nav-item nav-link">Services</a>
                            @guest
                            <div class="nav-item dropdown">
                                <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donate Now</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">    
                                    <a href="{{ route('login')}}" class="dropdown-item">Log In</a>
                                    <a href="{{route('register')}}" class="dropdown-item">Register to Join</a>    
                                </div>
                            </div>
                            <a href="{{ route('contact.form')}}" class="nav-item nav-link">Contact</a>
                            @endguest

                            @auth
                            <div class="nav-item dropdown">
                                <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hi {{ Auth()->user()->name }}</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">    
                                    <a href="{{ route('upload_dp')}}" class="dropdown-item">Change Profile picture</a>
                                    <a href="{{ route('profile.password.update')}}" class="dropdown-item">Change Password</a>
                                    <a href="{{ route('profile.delete')}}" class="dropdown-item">Delete My Account</a>
                                    <a class="dropdown-item" href="/dashboard">My Profile</a>
                                    <li> <form action="{{ route('logout')}}" method="post"> @csrf
                                        <button class="btn btn-danger">Log Out</button></form></li>    
                                </div>
                            </div>
                            <a href="{{ route('contact.form')}}" class="nav-item nav-link">Contact</a>
                            @endauth
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
        
       <!-- Carousel Start -->
       @yield('carousel')
        <!-- Carousel End -->

        <!-- Main Content-->
        <div class="container-fluid">
            @yield('main_content')
        </div>

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="{{ route('posts.index')}}"><i class="fas fa-copyright text-light me-2"></i>HelpZone</a>, All right reserved. (2025)</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="{{route('posts.index')}}" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="asset/lib/easing/easing.min.js"></script>
        <script src="asset/lib/waypoints/waypoints.min.js"></script>
        <script src="asset/lib/counterup/counterup.min.js"></script>
        <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="asset/lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="asset/js/main.js"></script>
        <script>
            setTimeout(function() {
                let alert = document.querySelector('div[style*="background-color: #d4edda"]');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 3000);
        </script>
        

    </body>

</html>