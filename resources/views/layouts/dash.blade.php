<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
 <meta charset="UTF-8">
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 <title>Otika - Admin Dashboard Template</title>
 <!-- General CSS Files -->

 <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/prism/prism.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">


 <!-- Template CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

 <!-- Custom style CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">

 <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
 @livewireStyles
</head>

<body>

 <div id="app">
  <div class="main-wrapper main-wrapper-1">
   @include('layouts.AdminLayouts.navbar')
   @include('layouts.AdminLayouts.sidebar')
   <!-- Main Content -->
   <div class="main-content">
    <section class="section">
     <div class="section-body">
      @yield('content')

     </div>
    </section>
    <!--  modal -->
    <livewire:modals>
     @include('layouts.AdminLayouts.settingSideBar')
   </div>
   @include('layouts.AdminLayouts.footer')
  </div>
 </div>
 <!-- General JS Scripts -->

 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('assets/js/app.min.js') }}"></script>

 <!-- JS Libraies -->

 <script src="{{ asset('assets/bundles/prism/prism.js') }}"></script>
 <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
 {{-- <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script> --}}
 <script src="{{ asset('assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
 <script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
 {{-- <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script> --}}
 {{-- <script src="{{ asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script> --}}
  {{-- <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script> --}}
  <script src="{{ asset('assets/bundles/sweetalert/sweetalert.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js') }}"></script>
  <script src="{{ asset('assets/js/page/sweetalert.js') }}"></script>

 <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
 <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
 <script src="{{ asset('assets/js/page/create-post.js') }}"></script>
 <!-- Template JS File -->
 <script src="{{ asset('assets/js/scripts.js') }}"></script>
 <!-- Custom JS File -->
 <script src="{{ asset('assets/js/custom.js') }}"></script>
 @if (session()->has('msg'))

<script>

    iziToast.success({
        title: 'operation completed!',
        message: 'success',
        position: 'bottomRight'
    });
</script>
    @endif

 @livewireScripts
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
