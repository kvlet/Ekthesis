@extends('forms')

@section('formsdetails')
    <form id="edit_tim_comp_form" method="post" action="{{ route('timol_compl.update') }}" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Ακύρωση Τιμολογίου Εταιρείας') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input name="id_timologio" type="hidden" value="{{ $timologio->id_timologio }}">
                                <input name="Merikos_pliroteo" type="hidden" value="{{ $timologio->Merikos_pliroteo }}">
                                <input name="Eksoda_timologion" type="hidden" value="{{ $timologio->Eksoda_timologion }}">
                                <input name="id_company" type="hidden" value="{{ $timologio->id_company }}">
                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_grafeio">{{ __('Γραφείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_grafeio" name="id_grafeio" required disabled>
                                        @foreach($grafeia as $grafeio)
                                            <option value="{{$grafeio->id_grafeio}}" @if($timologio->id_grafeio ==$grafeio->id_grafeio) selected @endif>{{ $grafeio->Name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_grafeio'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_grafeio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_company') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_company">{{ __('Εταιρεία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_company" name="id_company" required disabled>
                                        @foreach($companies as $comp)
                                            <option value="{{$comp->id_company}}" @if($timologio->id_company == $comp->id_company) selected @endif>{{ $comp->comp_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_company'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Ar_timologiou') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Ar_timologiou">{{ __('Αριθμός Τιμολογίου') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text"  name="Ar_timologiou" id="Ar_timologiou"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_timologiou') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Ar_timologiou }}" required disabled>
                                    @if ($errors->has('Ar_timologiou'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Ar_timologiou') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Date_ekdosis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_ekdosis">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="Date_ekdosis" id="Date_ekdosis" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_ekdosis') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Date_ekdosis }}"  required disabled>
                                    <script type="text/javascript">
                                        $('#Date_ekdosis').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_ekdosis'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_ekdosis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('fpa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fpa">{{ __('Φ.Π.Α.') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="fpa" id="fpa"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fpa') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->fpa }}" disabled>
                                    @if ($errors->has('fpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Valid">{{ __(' Έγκυρο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Valid" name="Valid" required >
                                        <option value="Ναι" @if($timologio->Valid=='Ναι') selected="selected" @endif>Έγκυρο</option>
                                        <option value="Όχι" @if($timologio->Valid=='Όχι') selected="selected" @endif>Άκυρο</option>
                                    </select>
                                    @if ($errors->has('Valid'))
                                        <span class="invalid-feedback" role="alert">Ναι
                                            <strong>{{ $errors->first('Valid') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Geniko_synolo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Geniko_synolo">{{ __('Γενικό Σύνολο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Geniko_synolo" id="Geniko_synolo"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Geniko_synolo') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Geniko_synolo }}" required disabled>
                                    @if ($errors->has('Geniko_synolo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Geniko_synolo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Merikos_pliroteo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Merikos_pliroteo">{{ __('Μερικώς Πληρωτέο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Merikos_pliroteo" id="Merikos_pliroteo"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Merikos_pliroteo') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Merikos_pliroteo }}" required disabled>
                                    @if ($errors->has('Merikos_pliroteo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Merikos_pliroteo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Eksoda_timologion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Eksoda_timologion">{{ __('Έξοδα Τιμολίων') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Eksoda_timologion" id="Eksoda_timologion"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Eksoda_timologion') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Eksoda_timologion }}" required disabled>
                                    @if ($errors->has('Eksoda_timologion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Eksoda_timologion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Parakratisi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Parakratisi">{{ __(' Παρακράτηση') }} </label>
                                    <select class="form-control form-select" id="Parakratisi" name="Parakratisi" disabled >
                                        <option value="Ναι" @if($timologio->Parakratisi=='Ναι') selected="selected" @endif>Έγκυρο</option>
                                        <option value="Όχι" @if($timologio->Parakratisi=='Όχι') selected="selected" @endif>Άκυρο</option>
                                    </select>
                                    @if ($errors->has('Parakratisi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Parakratisi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Pososto_parakr') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Pososto_parakr">{{ __('Ποσοστό παρακράτησης') }}</label>
                                    <input type="number" step="0.01" name="Pososto_parakr" id="Pososto_parakr"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Pososto_parakr') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Pososto_parakr }}"  disabled>
                                    @if ($errors->has('Pososto_parakr'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Pososto_parakr') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Poso_parakr') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Poso_parakr">{{ __('Ποσό παρακράτησης') }}</label>
                                    <input type="number" step="0.01" name="Poso_parakr" id="Poso_parakr"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Poso_parakr') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Poso_parakr }}" disabled>
                                    @if ($errors->has('Poso_parakr'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Poso_parakr') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input name="Ypoloipo" type="hidden" value="{{ old('Ypoloipo') }}">
                                <div class="form-label{{ $errors->has('Ypoloipo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Ypoloipo">{{ __('Υπόλοιπο') }}</label>
                                    <input type="text"  name="Ypoloipo" id="Ypoloipo"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Ypoloipo') ? ' is-invalid' : '' }}"
                                           value="{{ $timologio->Ypoloipo }}" disabled>
                                    @if ($errors->has('Ypoloipo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Ypoloipo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('timol_compl/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-hover" id="ekth_for_timol_view">
                <thead class="thead-dark">
                <tr>
                    <th>Πραγματογνωμοσύνη</th>
                    <th>Ημ/νια Ατυχήματος</th>
                    <th>Παθών</th>
                    <th>Αρ. Κυκλοφορίας</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($pragma as $pragm)
                        <tr>
                            <td>
                                <input name="id_ekthesis[{{ $pragm->id_ekthesis }}]" type="hidden" id="ekthesis" class="form-control" value="{{ $pragm->id_ekthesis }}">
                                {{ $pragm->id_ekthesis }}
                            </td>
                            <td> {{ $pragm->Date_atiximatos }} </td>
                            <td>
                                @foreach($pathontes as $path)
                                    @if($path->id_person == $pragm->id_pathon )
                                        {{ $path->L_name.' '.$path->F_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @if ( $pragm->id_oximatos_pathon == 1)
                                    {{ $pragm->Object }}
                                @else
                                    @foreach($oximata as $oxim)
                                        @if($oxim->id_oximata == $pragm->id_oximatos_pathon )
                                            {{ $oxim->Ar_kyklo }}
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('errors')
    </form>
@endsection





