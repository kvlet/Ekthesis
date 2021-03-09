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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!-- Scripts -->

    {{--    datepicker--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    {{--    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>--}}
    <script src="{{ URL::asset('js/bootstrap-datepicker.js')}}"></script>
    {{--    datepicker--}}

    {{--    editor--}}
    <script type="text/javascript" src="{{ URL::asset('js/nicEdit.js') }}"></script>

    {{--                                Quiil editor                              --}}
    {{--                              Main Quill library                        --}}
{{--    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>--}}
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    {{--    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>--}}
    {{--                             Theme included stylesheets                 --}}
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    {{--          Core build with no theme, formatting, non-essential modules--}}
{{--    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">--}}
{{--    <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>--}}
    {{--                                Quiil editor                              --}}

    {{--    editor--}}

    {{--    tables--}}
    {{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">--}}
    {{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>--}}
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    {{--    tables--}}

    {{--    Styles--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    Styles--}}

    {{--    images--}}
    <link href="{{asset('node_modules/lightbox2/dist/css/lightbox.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('node_modules/lightbox2/dist/js/lightbox.min.js')}}"></script>
    {{--    images--}}

    {{--    fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap&subset=greek" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:500&display=swap" rel="stylesheet">
    {{--    fonts--}}
</head>

<body class="welcome-layout">

<div class="header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                @yield('logo')
            </div>
            <div>
                @include('nav')
            </div>
            <div>
                @yield('header-right')
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container-fluid">
        <div class="row flex-container">
{{--            <div class="col-md-2 d-none d-md-block p-1 flex-item flex-item-grow1" id="lmenu">--}}
{{--                @yield('lmenu')--}}
{{--            </div>--}}
            <div class="col-md-12 d-none d-md-block p-2 flex-item flex-item-grow2">
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
