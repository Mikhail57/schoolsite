<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('/style/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{url('/style/css/main.css')}}">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{url('/style/js/materialize.min.js')}}"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>

</body>
</html>
