<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Bán Cây Cảnh</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="upload/images/avt.jpg">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="/front/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="/front/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="/front/css/font-awesome.css">
	<!-- Fancybox -->
    <link rel="stylesheet" href="/front/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="/front/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="/front/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="/front/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="/front/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="/front/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="/front/css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="/front/css/reset.css">
	<link rel="stylesheet" href="/front/style.css">
    <link rel="stylesheet" href="/front/css/responsive.css">
    <link rel="stylesheet" href="/front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/style.css" type="text/css">
    <style>
        *{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            
        }
    </style>



</head>
<body class="js">
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        @include("head")
        <!--/ End Header Inner -->
    
    <!--/ End Header -->

	@yield('content')
	<!-- /End Footer Area -->
    @include("modal")
    @include("footer")
	<!-- Jquery -->
    <script src="/front/js/jquery.min.js"></script>
    <script src="/front/js/jquery-migrate-3.0.0.js"></script>
	<script src="/front/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="/front/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/front/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="/front/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="/front/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="/front/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="/front/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="/front/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="/front/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="/front/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="/front/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="/front/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="/front/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="/front/js/easing.js"></script>
	<!-- Active JS -->
	<script src="/front/js/active.js"></script>
</body>
</html>
