@extends('layouts.app')
@include('layouts._partials.header')

@section('onoffmenu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        <li class="nav-item">
            <input type="checkbox" checked data-toggle="toggle" id="menu_toggle">
        </li>
        <script type="text/javascript">
            $("#menu_toggle").change(function() {
                var e = document.getElementById("lmenou");
                
                if(!this.checked) {
                    $('#lmenou').addClass('g-hide');
                } else {
                    $('#lmenou').removeClass('g-hide');
                }
            });
        </script>
    </ul>
@endsection
@section('lmenu')
    @include('lmenu')
@endsection

@section('forms')
    <div class="bg-form-ekthesis">
        @yield('formsdetails')
    </div>
@endsection

@section('rmenu')
    <p>Εδω τα κουμπια</p>
@endsection

