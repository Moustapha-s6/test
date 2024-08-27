<!doctype html>
<html lang="en" class="semi-dark">
@include('Back/head')
<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    @include('Back/sidebar')
    <!--end sidebar -->

    <!--start top header-->
    @include('Back/header')
    <!--end top header-->


    <!-- start page content wrapper-->
    @include('Back/content')
      <!-- start page content-->
      
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    @include('Back/footer')
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    @include('Back/switcher')
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->
   @include('Back/js')

  <!-- JS Files-->


</body>

</html>