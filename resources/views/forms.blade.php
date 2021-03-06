@extends('layouts.app')
@include('layouts._partials.header')

@section('onofflmenu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        <li class="nav-item">
            <input type="checkbox" checked data-toggle="toggle" id="lmenu_toggle" class="btn btn-sm btn-primary" style="margin: 4px;">
        </li>
        <script type="text/javascript">
            $("#lmenu_toggle").change(function() {
                var e = document.getElementById("lmenu");

                if(!this.checked) {
                    $('#lmenu').addClass('g-hide');
                } else {
                    $('#lmenu').removeClass('g-hide');
                }
            });
        </script>
    </ul>
@endsection

@section('lmenu')
    @include('lmenu')
@endsection

@section('forms')
        @yield('formsdetails')
@endsection

@section('onoffrmenu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        <li class="nav-item">
            <input type="checkbox" checked data-toggle="toggle" id="rmenu_toggle">
        </li>
        <script type="text/javascript">
            $("#rmenu_toggle").change(function() {
                var e = document.getElementById("rmenu");

                if(!this.checked) {
                    $('#rmenu').addClass('g-hide');
                } else {
                    $('#rmenu').removeClass('g-hide');
                }
            });
        </script>
    </ul>
@endsection


