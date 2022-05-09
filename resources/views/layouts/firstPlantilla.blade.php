<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js\bootstrap.min.js')}}"></script>
    <title>Document</title>

</head>

<body>
    @include("layouts.navBar")
    @yield('content')
    </div>
    <div class="container">
        @yield('content1')
    </div>
    <div class="container">
        @yield('content2')
    </div>

</body>

</html>