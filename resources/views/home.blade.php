@extends('layouts.app')
@include('layouts._partials.header')

@section('lmenu')
         @include('lmenu')
@endsection

@section('forms')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('search') }}" role="search" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header-cust">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Αναζήτηση Έκθεσης') }}</strong>
                                        </h4>
                                    </div>
                                    <div class="col-md-2">
                                        <ul class="nav flex-column flex-nowrap overflow-hidden">
                                            <li class="nav-item">
                                                <input type="checkbox"  data-toggle="toggle" id="body_toggle" class="btn btn-sm btn-primary" style="margin: 4px;">
                                            </li>
                                            <script type="text/javascript">
                                                $("#body_toggle").change(function() {
                                                    var e = document.getElementById("body");

                                                    if(!this.checked) {
                                                        $('#body').addClass('g-hide');
                                                    } else {
                                                        $('#body').removeClass('g-hide');
                                                    }
                                                });
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body g-hide" id="body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                            <label class="form-control-label"
                                                   for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                            <input type="text" name="id_ekthesis" id="id_ekthesis"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('Prot_bibliou') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Prot_bibliou">{{ __('Αρ. Φακέλου') }}</label>
                                            <input type="text" name="Prot_bibliou" id="Prot_bibliou"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Prot_bibliou') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('company') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="company">{{ __('Εταιρεία') }}</label>
                                            <input type="text" name="company" id="company"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('company') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('user') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="user">{{ __('Πραγματογνώμονας') }}</label>
                                            <input type="text" name="user" id="user"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('user') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('Ar_kyklo_p') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Ar_kyklo_p">{{ __('Αρ. Κυκλοφορίας Παθών') }}</label>
                                            <input type="text" name="Ar_kyklo_p" id="Ar_kyklo_p"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Ar_kyklo_p') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('pathon') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="pathon">{{ __('Παθών') }}</label>
                                            <input type="text" name="pathon" id="pathon"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('pathon') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('Ar_kyklo_y') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Ar_kyklo_y">{{ __('Αρ. Κυκλοφορίας Υπαίτιου') }}</label>
                                            <input type="text" name="Ar_kyklo_y" id="Ar_kyklo_y"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Ar_kyklo_y') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-label{{ $errors->has('ypaitios') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="ypaitios">{{ __('Υπαίτιος') }}</label>
                                            <input type="text" name="ypaitios" id="ypaitios"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('ypaitios') ? ' is-invalid' : '' }}">
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-label{{ $errors->has('sDate_atiximatos') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="sDate_atiximatos">{{ __('Αρχική Ημ/νια Ατυχήματος') }}</label>
                                                <input type="text" name="sDate_atiximatos" id="sDate_atiximatos" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('sDate_atiximatos') ? ' is-invalid' : '' }}">
                                                <script type="text/javascript">
                                                    $('#sDate_atiximatos').datepicker({
                                                        autoclose: true,
                                                        format: 'dd-mm-yyyy',
                                                        language: 'el',
                                                        todayHighlight: true,
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-label{{ $errors->has('eDate_atiximatos') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="eDate_atiximatos">{{ __('Τελική Ημ/νια Ατυχήματος') }}</label>
                                                <input type="text" name="eDate_atiximatos" id="eDate_atiximatos" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('eDate_atiximatos') ? ' is-invalid' : '' }}">
                                                <script type="text/javascript">
                                                    $('#eDate_atiximatos').datepicker({
                                                        autoclose: true,
                                                        format: 'dd-mm-yyyy',
                                                        language: 'el',
                                                        todayHighlight: true,
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col mt-4">
                                        <div class="col d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Αναζήτηση</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr/>
        </div>
    </div>
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
            <table id="entoli" class="table table-bordered table-hover" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Αρ. Πρωτοκόλλου</th>
                        <th scope="col">Αρ. Φακέλου</th>
                        <th scope="col">Ημ/νια Ατυχήματος</th>
                        <th scope="col">Εταιρεία</th>
                        <th scope="col">Παθών</th>
                        <th scope="col">Αρ. Κυκλ. Παθών</th>
                        <th scope="col">Πραγματογνώμονας</th>
                        <th scope="col">Τύπος έκθεσης</th>
                        <th scope="col">Επεξεργασία</th>
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
                                    <td>{{ $pragmatognomosini->id_diakrisi }}</td>
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
                    $('#entoli').DataTable();
                });
            </script>
        </div>
        <div class="tab-pane fade" id="anathesi" role="tabpanel" aria-labelledby="anathesi-tab">
            <table id="anathesi" class="table table-bordered table-hover" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Αρ. Πρωτοκόλλου</th>
                        <th scope="col">Αρ. Φακέλου</th>
                        <th scope="col">Ημ/νια Ατυχήματος</th>
                        <th scope="col">Εταιρεία</th>
                        <th scope="col">Παθών</th>
                        <th scope="col">Αρ. Κυκλ. Παθών</th>
                        <th scope="col">Πραγματογνώμονας</th>
                        <th scope="col">Τύπος έκθεσης</th>
                        <th scope="col">Επεξεργασία</th>
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
                                    <td>{{ $pragmatognomosini->id_diakrisi }}</td>
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
                        <th scope="col">Αρ. Πρωτοκόλλου</th>
                        <th scope="col">Αρ. Φακέλου</th>
                        <th scope="col">Ημ/νια Ατυχήματος</th>
                        <th scope="col">Εταιρεία</th>
                        <th scope="col">Παθών</th>
                        <th scope="col">Αρ. Κυκλ. Παθών</th>
                        <th scope="col">Πραγματογνώμονας</th>
                        <th scope="col">Τύπος έκθεσης</th>
                        <th scope="col">Επεξεργασία</th>
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
                                    <td>{{ $pragmatognomosini->id_diakrisi }}</td>
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
                        <th scope="col">Αρ. Πρωτοκόλλου</th>
                        <th scope="col">Αρ. Φακέλου</th>
                        <th scope="col">Ημ/νια Ατυχήματος</th>
                        <th scope="col">Εταιρεία</th>
                        <th scope="col">Παθών</th>
                        <th scope="col">Αρ. Κυκλ. Παθών</th>
                        <th scope="col">Πραγματογνώμονας</th>
                        <th scope="col">Τύπος έκθεσης</th>
                        <th scope="col">Επεξεργασία</th>
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
                                    <td>{{ $pragmatognomosini->id_diakrisi }}</td>
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

