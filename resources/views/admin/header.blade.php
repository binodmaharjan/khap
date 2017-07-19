<!DOCTYPE html>
<!-- saved from url=(0064)https://webthemez.com/demo/marvel-bootstrap-html-admin-template/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
    <!-- FontAwesome Styles-->
    {{--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">--}}

    <link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    {{--<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">--}}
<!-- Morris Chart Styles-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/morris-0.4.3.min.css" rel="stylesheet">--}}
    <link href="{{ asset('admin/css/morris-0.4.3.min.css') }}" rel="stylesheet">
    <!-- Custom Styles-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/custom-styles.css" rel="stylesheet">--}}
    <link href="{{ asset('admin/css/custom-styles.css') }}" rel="stylesheet">
    <!-- Google Fonts-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/css" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('admin/css/css') }}" rel="stylesheet" type="text/css" >
    {{--<link rel="stylesheet" href="./Marvel Free Bootstrap Admin Template_files/cssCharts.css">--}}
    <link href="{{ asset('admin/css/cssCharts.css') }}" rel="stylesheet"  >

    <script src="{{asset('editor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({ selector:'textarea',
            editor_deselector : "mceNoEditor",
            plugins: "link textcolor table ",
            toolbar: [
                'undo redo | styleselect | bold italic |  alignleft aligncenter alignright',
                'forecolor link table | sizeselect  |   fontsizeselect | fontselect'
            ],
            fontsize_formats: "8pt 10pt 11pt 12pt 14pt 18pt 24pt 36pt",
            font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Mercantile=mercantile ; Preeti=preeti',

            style_formats: [

                {title: 'Headers', items: [
                    {title: 'h1', block: 'h1'},
                    {title: 'h2', block: 'h2'},
                    {title: 'h3', block: 'h3'},
                    {title: 'h4', block: 'h4'},
                    {title: 'h5', block: 'h5'},
                    {title: 'h6', block: 'h6'}
                ]},


                { title: 'Inline Right', inline: 'span', styles: { float: 'right' } },
                { title: 'Inline Left',inline: 'span', styles: { float: 'left' } }


                ]


            });
        tinymce.remove('#remove');
    </script>

    <script src="{{asset('dropzone/dropzone.js')}}"></script>
    <link href="{{ asset('dropzone/basic.css') }}" rel="stylesheet">




</head>

<body>

@include('admin.top')
