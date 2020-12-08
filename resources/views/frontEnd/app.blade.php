
<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Animate.css -->
    <link rel="stylesheet" href="frontEnd/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="frontEnd/css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="frontEnd/css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="frontEnd/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="frontEnd/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="frontEnd/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="frontEnd/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontEnd/css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="frontEnd/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="frontEnd/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="frontEnd/css/style.css">

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">

   @yield('navbar')

   @yield('gallery')

  @yield('content')

    @yield('footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="frontEnd/js/jquery.min.js"></script>
<!-- popper -->
<script src="frontEnd/js/popper.min.js"></script>
<!-- bootstrap 4.1 -->
<script src="frontEnd/js/bootstrap.min.js"></script>
<!-- jQuery easing -->
<script src="frontEnd/js/jquery.easing.1.3.js"></script>
<!-- Waypoints -->
<script src="frontEnd/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="frontEnd/js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="frontEnd/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="frontEnd/js/jquery.magnific-popup.min.js"></script>
<script src="frontEnd/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="frontEnd/js/bootstrap-datepicker.js"></script>
<!-- Stellar Parallax -->
<script src="frontEnd/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="frontEnd/js/main.js"></script>

</body>
</html>

