<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jockies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{ asset ('assets/images/favicon.ico') }}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/qanto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bauhaus93.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">   
    <!-- Modernizr JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    
<div id="main-wrapper">
   
    <!--Header section start-->
    <header class="header header-static bg-black header-sticky">
        <div class="default-header menu-right">
            <div class="container container-1520">
                <div class="row">
                    
                    <!--Logo start-->
                    <div class="col-12 col-md-3 col-lg-3 order-md-1 order-lg-1 mt-20 mb-20">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!--Logo end-->
                    
                    <!--Menu start-->
                    <div class="col-lg-6 col-12 order-md-3 order-lg-2 d-flex justify-content-center">
                        <nav class="main-menu menu-style-2">
                            <ul>
                                <li><a href="index.html">Home</a>                                        
                                </li>
                                <li><a href="games.html">games</a>
                                    <ul class="sub-menu">
                                        <li><a href="games.html">Games</a></li>
                                        <li><a href="games-details.html">Games Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-blog-left.html">Single Blog Left Sidebar</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/daftar">REGISTER</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Menu end-->
                    
                    <!--Header Right Wrap-->
                    <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3">
                        <div class="header-right-wrap">
                            <ul>
                                <li><a href="/login">LOGIN</a></li>
                                <li><a href="/daftar">REGISTER</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Header Right Wrap-->
                    
                </div>
                
                <!--Mobile Menu start-->
                <div class="row">
                    <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <!--Mobile Menu end-->
                
            </div>
        </div>
    </header>
    <!--Header section end-->
    
    @yield('content')

    <!--Footer section start-->
    <footer class="footer-section style-2 section bg-theme" style="background-image: url(assets/images/bg/footer-bg.jpg)">
       
        <!--Footer Top start-->
        <div class="footer-top section pt-80 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-80 pb-lg-70 pb-md-60 pb-sm-15 pb-xs-40">
            <div class="container container-1520">
                <div class="row justify-content-lg-between">
                    
                    <!--Footer Widget start-->
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="col-xl-6 col-lg-6 col-md-9">
                        <div class="footer-widget">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="#">forums</a></li>
                                        <li><a href="#">demo</a></li>
                                        <li><a href="#">support</a></li>
                                        <li><a href="#">terms & conditions</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="footer-widget">
                            <div class="footer-social">
                               <span>follow us:</span>
                                <ul>
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->    
                    
                </div>
            </div>
        </div>
        <!--Footer Top end-->
        
        <!--Footer bottom start-->
        <div class="footer-bottom border-color section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            <p>Copyright &copy;2020 <a  href="#">JOCKIES</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->
        
     </footer>
     <!--Footer section end-->
    
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>