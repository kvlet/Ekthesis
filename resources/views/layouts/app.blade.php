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
                    @yield('lmenu')
                </div>
                <div class="col-md-8 d-none d-md-block p-0">
                    <div class="bg-wel-ekthesis"></div>
                </div>
                <div class="col-md-2">
                        <div class="row">
                                <div class="col-md-8">
                                     <p>Εδώ τον user</p>
                                </div>
                                <div class="col-md-4">
                                   <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                       {{-- Auth::user()->name --}} <span class="caret"></span>
                                    </a>-->

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                         </div>
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
