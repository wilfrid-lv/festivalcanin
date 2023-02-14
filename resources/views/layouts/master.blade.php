<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/aos/aos.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">


</head>

<body>



<div class = "container">


    @yield("content")


</div> <!-- end of container -->

<script src="{{asset('template/assets/vendor/aos/aos.js') }}"></script>
<script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('template/assets/js/main.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assetsvendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assetsvendor/glightbox/css/glightbox.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="" href="{{ asset('js/main.js') }}" /><!--Recommended-->

</head>

<body>



<div class = "container">


  @yield("content")

 </div> <!-- end of container -->


<script src="{{asset('template/assets/vendor/aos/aos.js') }}"></script>
<script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('template/assets/js/main.js')}}"></script>

</body>

</html>
