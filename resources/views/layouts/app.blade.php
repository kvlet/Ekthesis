<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        var $jQuery_1_9_1 = jQuery.noConflict(true);
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" type="text/javascript"></script>
    <script type="text/javascript">
        var $jQuery_3_4_1 = $.noConflict(true);
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">


</head>

<body class="welcome-layout">

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-left">
                    @yield('logo')
                    @yield('header-left')
                </div>
                <div class="col-md-4 text-center">
                    @yield('header-center')
                </div>
                <div class="col-md-4 text-right">
                    @yield('header-right')
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 d-none d-md-block p-0">
                    @yield('onofflmenu')
                </div>
                <div class="col-md-8">
                    <h6> Χρήστης: <strong> {{ Auth::user()->F_name }} {{ Auth::user()->L_name }}</strong></h6>
                </div>
                <div class="col-md-2">
                    <!--<button type="submit" class="btn btn-sm btn-primary" style="margin: 4px">Αποσύνδεση</button>-->
                    <a class="btn btn-sm btn-primary" style="margin: 4px" href="{{ url('/logout') }}"> Αποσύνδεση </a>
                </div>
                <div class="col-md-1 d-none d-md-block p-1">
                    @yield('onoffrmenu')
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 d-none d-md-block p-1" id="lmenu">
                    @yield('lmenu')
                </div>
                <div class="col-md-9 d-none d-md-block p-1">
                    @yield('forms')
                </div>
                <div class="col-md-1 d-none d-md-block p-1" id="rmenu">
                    @yield('rmenu')
                </div>
            </div>
        </div>
    </main>

    <div class="footer">
        @yield('footer')
    </div>

</body>
</html>
