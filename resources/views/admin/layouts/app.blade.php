<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Deco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets2/img/favicon.png') }}" rel="icon">
  <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    @include('admin.layouts.navbar')

  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    @include('admin.layouts.sidebar')
  </aside><!-- End Sidebar-->

<!-- End #main -->
     <main id="main" class="main">
     @yield('content')
     </main>
<!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('admin.layouts.footer')
  </footer>
  <!-- End Footer -->
  @yield('js')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets2/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets2/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets2/js/main.js') }}"></script>

</body>

</html>
