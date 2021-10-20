
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@stack('cmstitle')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/app.min.css ')}}">

  <link rel="stylesheet" href="{{ asset('assets/cms/assets/bundles/prism/prism.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/style.css ')}}">
  <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/components.css ')}}">
  <!-- Custom style CSS -->

  @stack('cmscss')
  <link rel="stylesheet" href="{{ asset('assets/cms/assets/css/custom.css ')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/cms/assets/img/favicon.ico ')}}" />

</head>

<body class="layout-3">
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper container-fluid">
      <div class="navbar-bg"></div>
        @include('cms.layouts.navbar')

        @include('cms.layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('cmscontent')
        </section>
      </div>
      <div class="container-fluid">
        @include('cms.layouts.footer')
      </div>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/cms/assets/js/app.min.js') }}"></script>
  @stack('cmsjs')

  <script src="{{ asset('assets/cms/assets/bundles/prism/prism.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/cms/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/cms/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/cms/assets/js/custom.js') }}"></script>

</body>

</html>
