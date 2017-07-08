@include('user.layout.head')
<body>

@if(Auth::check())
@include('admin.top')
@endif
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