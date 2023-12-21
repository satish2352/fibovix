
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | RPA Pilot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!--<link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    @yield('style')
    <style>
        .app-loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{asset('website/app-loader.svg')}}) 50% 50% no-repeat rgb(249,249,249);
            opacity:1;
        }
    </style>
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    
    
</head>
<body>
<div class="app-loader"></div>
@yield('header')
@yield('sidebar')
@yield('content')
@yield('footer')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('website/js/js-cookie.js')}}"></script>
{{--<script src="{{asset('website/js/js-shortcut.js')}}"></script>--}}
<script src="{{asset('website/js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{asset('src/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/dataTables.responsive.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/responsive.bootstrap4.js')}}"></script>
        <!-- buttons for Export datatable -->
        <script src="{{asset('src/plugins/datatables/media/js/button/dataTables.buttons.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/buttons.bootstrap4.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/buttons.print.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/buttons.html5.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/buttons.flash.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/pdfmake.min.js')}}"></script>
        <script src="{{asset('src/plugins/datatables/media/js/button/vfs_fonts.js')}}"></script>
<script>
    $(document).ready(function()
    {
        $('#pageDataTable').DataTable({searching: false,ordering: false,lengthChange: false,showNEntries: false});
    });
</script>
@include('website.layouts.messages')
@yield('script')


</html>

