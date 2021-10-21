<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/homepage.css')}}" rel="stylesheet">
</head>

<body>

    @include('front.layouts._nav')


    <!-- Page Content -->
    <div class="container" id="">

        <div class="row">
            @include('front.layouts._sidebar')

            <div class="col-lg-9 text-right">
                @yield('content')
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @include('front.layouts._footer')
