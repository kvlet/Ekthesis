<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>@yield('title')</title>
    <style>
        body{
            background-image: url("/images/pragm.jpg");
            background-size: cover;
        }
    </style>

</head>
<body>

    <div class="container">
        @yield('header')
    </div>
    <div class="dropdown-menu">
        @yield('menou')
    </div>

    <div class="container">
        @yield('content')
    </div>











    <div class="container">
        @yield('footer')
    </div>
    
</body>
</html>