<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <title>@yield('title')</title>
    <style>
        .activo a{
            color: white;
            text-decoration:none;
        }
        .tabla{
            width: 100%;
        }
    </style>

</head>
<body>
    <nav>
    <table class="tabla">
        @include('partials.nav')
    </table>
    </nav>
    @yield('content')
</body>

</html>

