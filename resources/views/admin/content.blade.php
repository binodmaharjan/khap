<div id="page-wrapper" style="margin-left: 260px;">
    @include('admin.nav')
    <div id="page-inner">
        @include('layouts.message')

        @yield('content')

    </div>
    <!-- /. PAGE INNER  -->

    <footer><p>All right reserved. {{date('Y')}}</p>


    </footer>

</div>


</div>