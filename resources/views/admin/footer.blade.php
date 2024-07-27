
<!-- /. PAGE WRAPPER  -->

<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
{{--<script src="./Marvel Free Bootstrap Admin Template_files/jquery-1.10.2.js"></script>--}}
<script src="{{asset('admin/js/jquery-1.10.2.js')}}"></script>

<!-- Bootstrap Js -->
{{--<script src="./Marvel Free Bootstrap Admin Template_files/bootstrap.min.js"></script>--}}
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Js -->
{{--<script src="./Marvel Free Bootstrap Admin Template_files/jquery.metisMenu.js"></script>--}}
<script src="{{asset('admin/js/jquery.metisMenu.js')}}"></script>
<!-- Morris Chart Js -->
{{--<script src="./Marvel Free Bootstrap Admin Template_files/raphael-2.1.0.min.js"></script>--}}
{{--<script src="./Marvel Free Bootstrap Admin Template_files/morris.js"></script>--}}
<script src="{{asset('admin/js/morris.js')}}"></script>




{{--<script src="./Marvel Free Bootstrap Admin Template_files/easypiechart.js"></script>--}}
<script src="{{asset('admin/js/easypiechart.js')}}"></script>


{{--<script src="./Marvel Free Bootstrap Admin Template_files/jquery.chart.js"></script>--}}
<script src="{{asset('admin/js/jquery.chart.js')}}"></script>

<!-- Custom Js -->
{{--<script src="./Marvel Free Bootstrap Admin Template_files/custom-scripts.js"></script>--}}
<script src="{{asset('admin/js/custom-scripts.js')}}"></script>
<script src="{{asset('admin/js/admin.js')}}">

</script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

{{--clipboard js--}}
<!-- clipboard Js -->


<!-- 2. Include library -->
<script src="{{asset('clipboard/dist/clipboard.min.js')}}"></script>

<!-- 3. Instantiate clipboard by passing a string selector -->
<script>
    var clipboard = new Clipboard('.clipboard');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
</script>
@yield('script')
<i title="Raphaël Colour Picker" style="display: none; color: gray;"></i></body></html>
