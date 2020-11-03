@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('pragmatognomosines.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <div class="row">
                            <div class="col-md-10">
                                <?php $count=0?>
                                @foreach($pragmatognomosines as $pragmatognomosini)
                                    <?php $count++ ?>
                                @endforeach
                                <h4 class="heading-small text-center text-muted">
                                    <strong>{{ __('Αναζήτηση Έκθεσης'.' '.'('.$count.')') }}</strong>
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
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
    <table class="table table-bordered table-hover" id="pragma_view">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Αρ. Πρωτοκόλλου</th>
                <th scope="col">Αρ. Φακέλου</th>
                <th scope="col">Ημ/νια Ατυχήματος</th>
                <th scope="col">Εταιρεία Εντολέας</th>
                <th scope="col">Παθών</th>
                <th scope="col">Αρ. Κυκλ. Παθών</th>
                <th scope="col">Πραγμ/γνώμονας</th>
                <th scope="col">Τύπος</th>
                <th scope="col">Επεξεργασία</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pragmatognomosines as $pragmatognomosini)
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
            @endforeach
        </tbody>
    </table>
@endsection
