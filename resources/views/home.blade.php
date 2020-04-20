@extends('layouts.app')
@include('layouts._partials.header')

@section('lmenu')
         @include('lmenu')
@endsection

@section('forms')
{{--    <div class="bg-wel-ekthesis"></div>--}}
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="entoli-tab" data-toggle="tab" href="#entoli" role="tab" aria-controls="entoli" aria-selected="true">Εντολή Εταιρείας</a>
            <a class=" nav-item nav-link" id="anathesi-tab" data-toggle="tab" href="#anathesi" role="tab" aria-controls="anathesi" aria-selected="false">Ανάθεση σε συνεργάτη</a>
            <a class="nav-item nav-link" id="elegxo-tab" data-toggle="tab" href="#elegxo" role="tab" aria-controls="elegxo" aria-selected="false">Προς Έλεγχο</a>
            <a class="nav-item nav-link" id="apostoli-tab" data-toggle="tab" href="#apostoli" role="tab" aria-controls="apostoli" aria-selected="false">Προς Αποστολή</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="entoli" role="tabpanel" aria-labelledby="entoli-tab">
            <table id="entoli" class="table table-bordered table-hover display" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Αρ. Πρωτοκόλλου</th>
                        <th>Αρ. Φακέλου</th>
                        <th>Ημ/νια Ατυχήματος</th>
                        <th>Εταιρεία</th>
                        <th>Παθών</th>
                        <th>Αρ. Κυκλ.</th>
                        <th>Πραγματογνώμονας</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pragmatognomosines as $pragmatognomosini)
                        @foreach($status as $status_ekth)
                            @if ($pragmatognomosini->id_ekthesis == $status_ekth->id_ekthesis && $status_ekth->id_status==1)
                                <tr>
                                    <td>{{$pragmatognomosini->id_ekthesis}}</td>
                                    <td>{{ $pragmatognomosini->Prot_bibliou }}</td>
                                    <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                            @if($pragmatognomosini->id_company_pathon == $company->id_company)
                                                {{$company->comp_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($pathontes as $pathon)
                                            @if($pragmatognomosini->id_pathon == $pathon->id_person)
                                                {{$pathon->L_name. ' '.$pathon->F_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_oximatos_pathon != 1)
                                            @foreach($oximata_pathon as $oxima_pathon)
                                                @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata)
                                                    {{$oxima_pathon->Ar_kyklo}}
                                                @endif
                                            @endforeach
                                        @else
                                            {{$pragmatognomosini->Object}}
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($pragmatognomones as $pragmatognomonas)
                                            @if($pragmatognomosini->id == $pragmatognomonas->id)
                                                {{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                                            <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @else
                                            <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <script>
                $(document).ready(function() {
                    $('#entoli').DataTable();
                } );
            </script>
        </div>
        <div class="tab-pane fade" id="anathesi" role="tabpanel" aria-labelledby="anathesi-tab">
            <table id="anathesi" class="table table-bordered table-hover" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Αρ. Πρωτοκόλλου</th>
                        <th>Αρ. Φακέλου</th>
                        <th>Ημ/νια Ατυχήματος</th>
                        <th>Εταιρεία</th>
                        <th>Παθών</th>
                        <th>Αρ. Κυκλ.</th>
                        <th>Πραγματογνώμονας</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pragmatognomosines as $pragmatognomosini)
                        @foreach($status as $status_ekth)
                            @if ($pragmatognomosini->id_ekthesis == $status_ekth->id_ekthesis && $status_ekth->id_status==2)
                                <tr>
                                    <td>{{$pragmatognomosini->id_ekthesis}}</td>
                                    <td>{{ $pragmatognomosini->Prot_bibliou }}</td>
                                    <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                            @if($pragmatognomosini->id_company_pathon == $company->id_company)
                                                {{$company->comp_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($pathontes as $pathon)
                                            @if($pragmatognomosini->id_pathon == $pathon->id_person)
                                                {{$pathon->L_name. ' '.$pathon->F_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_oximatos_pathon != 1)
                                            @foreach($oximata_pathon as $oxima_pathon)
                                                @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata)
                                                    {{$oxima_pathon->Ar_kyklo}}
                                                @endif
                                            @endforeach
                                        @else
                                            {{$pragmatognomosini->Object}}
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($pragmatognomones as $pragmatognomonas)
                                            @if($pragmatognomosini->id == $pragmatognomonas->id)
                                                {{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                                            <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @else
                                            <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="elegxo" role="tabpanel" aria-labelledby="elegxo-tab">
            <table id="elegxo" class="table table-bordered table-hover dislpay" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Αρ. Πρωτοκόλλου</th>
                        <th>Αρ. Φακέλου</th>
                        <th>Ημ/νια Ατυχήματος</th>
                        <th>Εταιρεία</th>
                        <th>Παθών</th>
                        <th>Αρ. Κυκλ.</th>
                        <th>Πραγματογνώμονας</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pragmatognomosines as $pragmatognomosini)
                        @foreach($status as $status_ekth)
                            @if ($pragmatognomosini->id_ekthesis == $status_ekth->id_ekthesis && $status_ekth->id_status==3)
                                <tr>
                                    <td>{{$pragmatognomosini->id_ekthesis}}</td>
                                    <td>{{ $pragmatognomosini->Prot_bibliou }}</td>
                                    <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                            @if($pragmatognomosini->id_company_pathon == $company->id_company)
                                                {{$company->comp_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($pathontes as $pathon)
                                            @if($pragmatognomosini->id_pathon == $pathon->id_person)
                                                {{$pathon->L_name. ' '.$pathon->F_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_oximatos_pathon != 1)
                                            @foreach($oximata_pathon as $oxima_pathon)
                                                @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata)
                                                    {{$oxima_pathon->Ar_kyklo}}
                                                @endif
                                            @endforeach
                                        @else
                                            {{$pragmatognomosini->Object}}
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($pragmatognomones as $pragmatognomonas)
                                            @if($pragmatognomosini->id == $pragmatognomonas->id)
                                                {{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                                            <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @else
                                            <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#elegxo').DataTable();
                } );
            </script>
        </div>
        <div class="tab-pane fade" id="apostoli" role="tabpanel" aria-labelledby="apostoli-tab">
            <table id="apostoli" class="table table-bordered table-hover display" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Αρ. Πρωτοκόλλου</th>
                        <th>Αρ. Φακέλου</th>
                        <th>Ημ/νια Ατυχήματος</th>
                        <th>Εταιρεία</th>
                        <th>Παθών</th>
                        <th>Αρ. Κυκλ.</th>
                        <th>Πραγματογνώμονας</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pragmatognomosines as $pragmatognomosini)
                        @foreach($status as $status_ekth)
                            @if ($pragmatognomosini->id_ekthesis == $status_ekth->id_ekthesis && $status_ekth->id_status==4)
                                <tr>
                                    <td>{{$pragmatognomosini->id_ekthesis}}</td>
                                    <td>{{ $pragmatognomosini->Prot_bibliou }}</td>
                                    <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                                    <td>
                                        @foreach($companies as $company)
                                            @if($pragmatognomosini->id_company_pathon == $company->id_company)
                                                {{$company->comp_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($pathontes as $pathon)
                                            @if($pragmatognomosini->id_pathon == $pathon->id_person)
                                                {{$pathon->L_name. ' '.$pathon->F_name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_oximatos_pathon != 1)
                                            @foreach($oximata_pathon as $oxima_pathon)
                                                @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata)
                                                    {{$oxima_pathon->Ar_kyklo}}
                                                @endif
                                            @endforeach
                                        @else
                                            {{$pragmatognomosini->Object}}
                                        @endif
                                    </td>
                                    <td>
                                        @foreach($pragmatognomones as $pragmatognomonas)
                                            @if($pragmatognomosini->id == $pragmatognomonas->id)
                                                {{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                                            <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @else
                                            <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#apostoli').DataTable();
                } );
            </script>
        </div>
    </div>
@endsection
