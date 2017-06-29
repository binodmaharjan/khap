


<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .fit { /* set relative picture size */
            max-width: 100%;
            max-height: 100%;
        }
        .center {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>

{{--<img class="center fit" src="pic.jpg" >--}}
<a href="{{url('/second')}}"> <img  class="center fit" src="{{asset('src/nepal-7-state.jpg')}}"/>
</a>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" language="JavaScript">
    function set_body_height() { // set body height = window height
        $('body').height($(window).height());
    }
    $(document).ready(function() {
        $(window).bind('resize', set_body_height);
        set_body_height();
    });

//    $(function(){
//        $('#pic').toggle(
//            function() { $(this).animate({width: "100%"}, 500)},
//            function() { $(this).animate({width: "50px"}, 500); }
//        );
//    });
</script>

</body>
</html>