@extends('layouts.app')
@include('layouts._partials.header')

@section('onoffmenu')
    <ul class="nav flex-column flex-nowrap overflow-hidden">
        <li class="nav-item">
            <input type="checkbox" onclick="myFunction()" checked data-toggle="toggle">
        </li>
        <script type="text/javascript">
            function myFunction() {
                var e = document.getElementById("lmenou");
                if(e.style.display == null || e.style.display == "none") {
                    e.style.display = "block";
                } else{
                    e.style.display = "none";
                }
            }
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

