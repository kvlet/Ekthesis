<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
                <div class="col-md-2 d-none d-md-block p-0">
                    @yield('onoffmenu')
                </div>
                <div class="col-md-8">
                    <p>Εδώ τον user</p>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary" style="margin: 4px">Αποσύνδεση</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 d-none d-md-block p-0" id="lmenou">
                    @yield('lmenu')
                </div>
                <div class="col-md-10 d-none d-md-block p-0">
                    @yield('forms')
                </div>
                <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                 @yield('rmenu')
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>

    <div class="footer">
        @yield('footer')
    </div>

</body>
</html>
