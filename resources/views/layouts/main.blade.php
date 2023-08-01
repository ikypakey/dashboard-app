<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Dashboard | IC Warehouse</title>
        <link href="{{ asset('dashboard-layout/assets/') }}" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="{{asset('dashboard-assets/assets/css/themenew.css')}}" rel="stylesheet" />    
      <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{asset('dashboard-assets/assets/img/favicons/ic-logo-dash.png')}}"
        />
    </head>

    <body>
      <body>
        <main class="main" id="top">
            <!-- navbar -->
            @include('layouts.navbar')
            <!-- End Navbar -->

            <!-- Header -->
          
            <!-- END HEADER -->

            <!-- Main Content Full -->

            <!-- Main Content -->
             @yield('content')
            <!-- End Of Main  -->

            <!-- ============================================-->
            <!-- <section> sponsor begin ============================-->

            <!-- <section> close ============================-->
            <!-- ============================================-->

              <!-- Slider -->


            <!--  End Slider -->

         
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <!-- Footer -->

        <!-- Footer End -->


      <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('dashboard-assets/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('dashboard-assets/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard-assets/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('dashboard-assets/assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">

   

    <div class="right-content"></div>

    </body>
</html>