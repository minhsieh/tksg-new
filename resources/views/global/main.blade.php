<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>淡江大學童軍團 - Scouts Group of Tamkang University</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/magnific/magnific-popup.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('vendor/owl-carousel/css/owl.theme.css')}}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css')}}" media="screen" /><![endif]-->
<link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="{{url('colors/color8.css')}}" rel="stylesheet" type="text/css">

<!-- Additional CSS Styles -->
@section('add_css')
@show

<script src="{{url('js/modernizr.js')}}"></script><!-- Modernizr -->
</head>
<body class="home header-style2">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="#" class="default-logo"><img src="images/sticky-logo.png" alt="Logo"></a>
                    <a href="#" class="default-retina-logo"><img src="images/sticky-logo@2x.png" alt="Logo" width="199" height="30"></a>
                    <a href="#" class="sticky-logo"><img src="images/sticky-logo.png" alt="Logo"></a>
                    <a href="#" class="sticky-retina-logo"><img src="images/sticky-logo@2x.png" alt="Logo" width="199" height="30"></a>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                @include('global.menu')
            </div>
        </header>
    </div>
    <!-- Hero Area -->
    @section('content')
    @show
    <div class="spacer-50"></div>
    <!-- Site Footer -->
    @include('global.footer')
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>

<script src="{{url('js/jquery-2.1.3.min.js')}}"></script> <!-- Jquery Library Call -->
<script src="{{url('vendor/magnific/jquery.magnific-popup.min.js')}}"></script> <!-- Maginific Popup Plugin -->
<script src="{{url('js/ui-plugins.js')}}"></script> <!-- UI Plugins -->
<script src="{{url('js/helper-plugins.js')}}"></script> <!-- Helper Plugins -->
<script src="{{url('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script> <!-- Owl Carousel -->
<script src="{{url('js/bootstrap.js')}}"></script> <!-- UI -->
<script src="{{url('js/init.js')}}"></script> <!-- All Scripts -->
<script src="{{url('vendor/flexslider/js/jquery.flexslider.js')}}"></script> <!-- FlexSlider -->
<!--Additional JavaScript-->
@section('add_js')
@show
</body>
</html>