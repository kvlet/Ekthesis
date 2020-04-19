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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
{{--    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
{{--    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
{{--    <script src="assets/js/moment.js"></script>--}}
{{--    editor--}}
{{--        <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>--}}
        <script type="text/javascript" src="{{ URL::asset('js/nicEdit.js') }}"></script>
{{--    editor--}}

{{--    Styles--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
{{--    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--    fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap&subset=greek" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:500&display=swap" rel="stylesheet">
{{--    tables--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/cr-1.5.2/fc-3.3.0/datatables.min.css"/>--}}
{{--    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/cr-1.5.2/fc-3.3.0/datatables.min.js"></script>--}}
{{--    tables--}}
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
                    @if ((Request::is('pragmatognomosines/*') ||  (\Request::is('ereunes/*'))))
                        @yield('onoffrmenu')
                    @endif
                </div>
            </div>
            <div class="row flex-container">
                    <div class="col-md-2 d-none d-md-block p-1 flex-item flex-item-grow1" id="lmenu">
                        @yield('lmenu')
                    </div>
                    <div class="col-md-10 d-none d-md-block p-2 flex-item flex-item-grow2">
                        @yield('forms')
                    </div>
            </div>
        </div>
    </main>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>
