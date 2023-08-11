<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="style/images/favicon.png">
        <title>Hygge</title>
        <!-- Bootstrap core CSS -->
        <link href="style/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/css/plugins.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="style/css/color/green.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href="style/type/icons.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    @endsection
    @yield('head')
</head>
<body>

<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div class="body-wrapper">

    <nav class="navbar navbar-default default">
        <div class="container">
            <div class="navbar-header">
                <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                    <div class="navbar-brand"> <a href="index.html"><img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="style/images/logo-dark.png 1x, style/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a>
                    </div>
                    <!-- /.navbar-brand -->
                </div>
                <!-- /.basic-wrapper -->
            </div>
            <!-- /.navbar-header -->

    @yield('navbar')
    @yield('banner')
    @yield('text1')

    <!-- /.light-wrapper -->
@yield('img1')

    <!-- /.inverse-wrapper -->

            @yield('gallery')


            @yield('video1')

            @yield('news')
    <!-- /.light-wrapper -->

            @yield('about')

            @yield('process')

    <!-- /.light-wrapper -->

    @yield('footer')
<!--/.body-wrapper -->
            @section('script')
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="style/js/plugins.js"></script>
<script src="style/js/jquery.themepunch.tools.min.js"></script>
<script src="style/js/scripts.js"></script>
@show
</body>
</html>
