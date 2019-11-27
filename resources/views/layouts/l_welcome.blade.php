<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>@yield('title')</title>
    <style>
        body{
            position:relative;
            padding:0px;
            margin:0px;
            height: 100vh;
        }
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            background-color:azure;
            font-weight: bold;
            text-align: center;
        }
        .header{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            color: black;
            background-color:azure;
            font-weight: bold;
        }
        .header-left{
            text-align: left;
            float: left;
            width: 33%;
        }
        .header-center{
            text-align: center;
            float: left;
            width: 33%;
        }
        .header-right{
            text-align: right; 
            float: left;
            width: 33%;

        }
        .bg-ekthesis{
            background-image: url("/images/pragm.jpg");
            background-size: 100%;
            opacity: 0.5;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: fixed;
        }
    </style>

</head>
<body>
    <div class="bg-ekthesis">
        
    </div>

    <div class="header">
        <div class="header-left">
            @yield('header-left')
        </div>   
        <div class="header-center">
            @yield('header-center')
        </div>
        <div class="header-right">
            @yield('header-right')
        </div>
    </div>

    <div>
        @yield('content')
    </div>

    <div class="footer">
        @yield('footer')
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>