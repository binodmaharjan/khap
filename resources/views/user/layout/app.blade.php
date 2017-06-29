<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>ललितपुर वडा कार्यालय</title>
    <!-- Comon JS File -->
{{--<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>--}}
<!--animation linke-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Regular CSS File -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('user/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{asset('user/jquery.bsPhotoGallery.css')}}" rel="stylesheet">
     <link href="{{asset('user/custome.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{asset('user/animation.min.css')}}" rel="stylesheet" type="text/css"  rel="stylesheet" media="all">

</head>
<body>
<header>
    <div class="modal fade bs-example-modal-sm" id="loginbox" tabindex="-1" role="dialog" aria-labelledby="loginboxModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

            </div>

        </div>
    </div>
    </div>

    @include('user.layout.header')

    @include('user.layout.menu')

</header>
@include('user.layout.breaking')


@include('user.message')


<!--slider start from here-->
<div class="margin"></div>
<!-- don't use this html this only for margin top remove this -->
@yield('content')


@include('user.layout.footer')



</body>
</html>