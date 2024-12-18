<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'RA Honey - Admin Dashboard')</title>

  <link rel="stylesheet" href="{{ asset('skydash/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('skydash/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('skydash/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('skydash/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      @yield('content')
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 RA Honey. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with ❤️</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="{{ asset('skydash/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('skydash/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('skydash/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('skydash/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('skydash/js/off-canvas.js') }}"></script>
  <script src="{{ asset('skydash/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('skydash/js/template.js') }}"></script>
  <script src="{{ asset('skydash/js/settings.js') }}"></script>
  <script src="{{ asset('skydash/js/todolist.js') }}"></script>
  <script src="{{ asset('skydash/js/dashboard.js') }}"></script>
  <script src="{{ asset('skydash/js/Chart.roundedBarCharts.js') }}"></script>
</body>
</html>
