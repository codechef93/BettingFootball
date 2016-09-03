<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/butlar/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 07:03:06 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <title>Butlar - Sports Betting HTML Template</title>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
  <!-- flat icon css link -->
  <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- animate css link -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <!-- slick slider css link -->
  <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
  <!-- main style css link -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- responsive css file -->
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
  <style>
      .litext{
    width:150px   
        }
  </style>
</head>
<body>
<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->
<div class="custom-cursor"></div>
@include('layouts.header_client')

@yield('content')

@include('layouts.footer')
<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- main jquery library js file -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <!-- bootstrap js file -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- slick slider js file -->
  <script src="{{asset('assets/js/slick.min.js')}}"></script>
  <!-- lightcase js file -->
  <script src="{{asset('assets/js/lightcase.js')}}"></script>
  <!-- wow js file -->
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <!-- tweenmax js file -->
  <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
  <script src="{{asset('assets/js/switchery.min.js')}}"></script>
  <!-- main js file -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  
</body>

<!-- Mirrored from rexbd.net/html/butlar/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 07:03:08 GMT -->
</html>