<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{url('/style/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{url('/style/css/main.css')}}">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{url('/style/js/materialize.min.js')}}"></script>
</head>
<body>


    <div class="row no-margins">

        @include('header-with-left-menu')

        <main class="col gray-bg content">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>

    </div>

    @yield('footer')

    @include('partials.flash')

    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>