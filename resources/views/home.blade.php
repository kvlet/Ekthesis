@extends('layouts.app')
@include('layouts._partials.header')

@section('lmenu')
         @include('lmenu')
@endsection

@section('forms')
{{--    <div class="bg-wel-ekthesis"></div>--}}
<table id="pragmList" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Αρ. Πρωτοκόλλου</th>
        <th>Ημ/νια Ατυχήματος</th>
        <th>Ενέργια</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pragmatognomosines as $pragmatognomosini)
            <tr>
                <td>{{$pragmatognomosini->id_ekthesis}}</td>
                <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                <td>
                    @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                        <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" class="btn btn-primary">Επεξεργασία</a>
                    @else
                        <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" class="btn btn-primary">Επεξεργασία</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection
