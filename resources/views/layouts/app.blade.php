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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <ul class="nav flex-column flex-nowrap overflow-hidden">
                        <li class="nav-item">
                            <button type="button" onclick="myFunction()" class="btn btn-primary">Απόκρυψη/Επανεμφάνιση μενού</button>
                        </li>
                        <script>
                            function myFunction() {
                                var e = document.getElementById("lmenou");
                                if(e.style.display == null || e.style.display == "none") {
                                    e.style.display = "block";
                                } else {
                                    e.style.display = "none";
                                }
                            }
                        </script>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>Εδώ τον user</p>
                </div>
                <div class="col-md-2">
                    <p>Εδώ το logout</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 d-none d-md-block p-0" id="lmenou">
                    @yield('lmenu')
                </div>
                <div class="col-md-8 d-none d-md-block p-0">
                    <div class="bg-wel-ekthesis"></div>
                </div>
                <div class="col-md-2">
                        <!--<div class="row">
                                <div class="col-md-8">
                                     <p>Εδώ τον user</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Εδώ το logout</p>
                                </div>
                         </div>-->
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
