@extends('forms')

@section('formsdetails')
	<div class="row">
		<div class="col-2 menu-text-size">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab"
				   aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
			</div>
		</div>
		<div class="col-10">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-genika" role="tabpanel"
					 aria-labelledby="v-pills-genika-tab">

					<form method="post" action="{{ route('pragmatognomosines.store') }}" autocomplete="off">
						@csrf
						<div class="row">
						    <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Γενικά') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                                    <input type="text" name="id_ekthesis" id="input-id_ekthesis"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_diakrisi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_diakrisi">{{ __('Τύπος Έκθεσης*') }}</label>
                                                    <select class="form-control form-select" id="id_diakrisi" required>
                                                        @foreach($diakrisis as $diakrisi)
                                                            <option value="{{$diakrisi->id_diakrisi}}">{{ $diakrisi->Diakrisi }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_diakrisi'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_diakrisi') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Prot_bibliou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Prot_bibliou">{{ __('Αρ. Φακέλου') }}</label>
                                                    <input type="text" name="Prot_bibliou" id="input-Prot_bibliou"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Prot_bibliou') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Prot_bibliou') }}" autofocus>
                                                    @if ($errors->has('Prot_bibliou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Prot_bibliou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_grafeio">{{ __('Γραφείο*') }}</label>
                                                    <select class="form-control form-select" id="id_grafeio" required>
                                                        @foreach($grafeia as $grafeio)
                                                            <option value="{{$grafeio->id_grafeio}}">{{ $grafeio->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_grafeio'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_grafeio') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Date_atiximatos') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_atiximatos">{{ __('Ημ/νια Ατυχήματος') }}</label>
                                                    <input type="text" name="Date_atiximatos" id="Date_atiximatos" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_atiximatos') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Date_atiximatos') }}" autofocus>
                                                    <script type="text/javascript">
                                                        $('#Date_atiximatos').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        });
                                                    </script>
                                                    @if ($errors->has('Date_atiximatos'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_atiximatos') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_nomoi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_nomoi">{{ __('Νομός*') }}</label>
                                                    <select class="form-control form-select" id="id_nomoi" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($nomoi as $nomos)
                                                            <option value="{{$nomos->id_nomoi}}">{{ $nomos->Nomos}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_nomoi'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_nomoi') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Date_eksetasis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_eksetasis">{{ __('Ημ/νια Εξέτασης') }}</label>
                                                    <input type="text" name="Date_eksetasis" id="Date_eksetasis" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_eksetasis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Date_eksetasis') }}" autofocus>
                                                    <script type="text/javascript">
                                                        $('#Date_eksetasis').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        });
                                                    </script>
                                                    @if ($errors->has('Date_eksetasis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_eksetasis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_accident_place') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_accident_place">{{ __('Τόπος Εξέτασης') }}</label>
                                                    <select class="form-control form-select" id="id_accident_place" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($accident_places as $accident_place)
                                                            <option value="{{$accident_place->id_accident_place}}">{{ $accident_place->Place}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_accident_place'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_accident_place') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Date_dikasimou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_dikasimou">{{ __('Ημ/νια Δικάσιμου') }}</label>
                                                    <input type="text" name="date_dikasimou" id="Date_dikasimou" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_dikasimou') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Date_dikasimou') }}" autofocus>
                                                    <script type="text/javascript">
                                                        $('#Date_dikasimou').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        });
                                                    </script>
                                                    @if ($errors->has('Date_dikasimou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_dikasimou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_arxi_ekdosis_eggrafon">{{ __('Αρχή Εγγράφων') }}</label>
                                                    <select class="form-control form-select" id="id_arxi_ekdosis_eggrafon" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($arxes_ekdosis_eggrafon as $arxi_ekdosis_eggrafon)
                                                            <option value="{{$arxi_ekdosis_eggrafon->id_Arxi_ekdosis_eggrafon}}">{{ $arxi_ekdosis_eggrafon->Arxi}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_arxi_ekdosis_eggrafon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_arxi_ekdosis_eggrafon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Date_paradosis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_paradosis">{{ __('Ημ/νια Παράδοσης') }}
                                                    </label>
                                                    <input type="text" name="Date_paradosis" id="Date_paradosis" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_paradosis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Date_paradosis') }}" autofocus>
                                                    <script type="text/javascript">
                                                        function f($jQuery_1_9_1) {(

                                                        $('#Date_paradosis').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        }));}
                                                    </script>
                                                    @if ($errors->has('Date_paradosis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_paradosis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('File_position') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-File_position">{{ __('Θέση Αρχείων') }}</label>
                                                    <input type="text" name="File_position" id="input-File_position"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('File_position') ? ' is-invalid' : '' }}"
                                                           value="{{ old('File_position') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Simpliromatiki') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Simpliromatiki">{{ __('Συμπληρωματική') }}</label>
                                                    <select class="form-control form-select" id="Simpliromatiki">
                                                        <option value="true">Ναι</option>
                                                        <option value="false" selected="selected">Όχι</option>
                                                    </select>
                                                    @if ($errors->has('Simpliromatiki'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Simpliromatiki') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('partially_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="partially_lock">{{ __('Μερικό κλείδωμα*') }}</label>
                                                    <select class="form-control form-select" id="partially_lock" disabled>
                                                        <option value="Ναι">Ναι</option>
                                                        <option value="Όχι" selected="selected">Όχι</option>
                                                    </select>
                                                    @if ($errors->has('partially_lock'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('partially_lock') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Sap') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Sap">{{ __('Sap') }}</label>
                                                    <select class="form-control form-select" id="Sap">
                                                        <option value="true">Ναι</option>
                                                        <option value="false" selected="selected">Όχι</option>
                                                    </select>
                                                    @if ($errors->has('Sap'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Sap') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('total_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="total_lock">{{ __('Ολικό κλείδωμα*') }}</label>
                                                    <select class="form-control form-select" id="total_lock" disabled >
                                                        <option value="Ναι">Ναι</option>
                                                        <option value="Όχι" selected="selected">Όχι</option>
                                                    </select>
                                                    @if ($errors->has('total_lock'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('total_lock') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Valid">{{ __('Έγκυρη') }}</label>
                                                    <select class="form-control form-select" id="Valid">
                                                        <option value="true" selected="selected">Ναι</option>
                                                        <option value="false">Όχι</option>
                                                    </select>
                                                    @if ($errors->has('Valid'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Valid') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-danger mt-4" src="/images/save2.png"
                                                            style="margin: 4px">{{ __('Καταχώρηση') }}
                                                    </button>
{{--                                                    <input type="image" width="50" value="submit" src="/images/add_rec.jpg" alt="Καταχώρηση" > --}}{{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Οικονομικά') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_timologio_etaireias') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_timologio_etaireias">{{ __('Αρ. Τιμολογίου') }}</label>
                                                    <input type="text" name="id_timologio_etaireias" id="input-id_timologio_etaireias"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_timologio_etaireias') ? ' is-invalid' : '' }}"
                                                           value="{{ old('id_timologio_etaireias') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Ar_timologio_partner') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ar_timologio_partner">{{ __('Αρ. Τιμολογίου Συνεργάτη') }}</label>
                                                    <input type="text" name="Ar_timologio_partner" id="input-Ar_timologio_partner"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_timologio_partner') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ar_timologio_partner') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Ekkatharistike') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ekkatharistike">{{ __('Εκκαθαρίστηκε') }}</label>
                                                    <input type="text" name="Ekkatharistike" id="input-Ekkatharistike"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekkatharistike') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ekkatharistike') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id">{{ __('Πραγματογνώμονας*') }}</label>
                                                    <select class="form-control form-select" id="id" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($pragmatognomones as $pragmatognomonas)
                                                            <option value="{{$pragmatognomonas->id}}">{{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_company_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_company_pathon">{{ __('Εντολέας Ασφλιστική*') }}</label>
                                                    <select class="form-control form-select" id="id_company_pathon" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id_company}}">{{$company->comp_name}}</option>
                                                        @endforeach
{{--                                                        <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('id_company_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_company_pathon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Fpa') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Fpa">{{ __('Φ.Π.Α.') }}</label>
                                                    <input type="number" name="Fpa" id="input-Fpa"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Fpa') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Fpa') }}" autofocus>
                                                    @if ($errors->has('Fpa'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Fpa') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('Ekpt_parts') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ekpt_parts">{{ __('Έκπτωση ανταλλακτικών') }}</label>
                                                    <input type="number" name="Ekpt_parts" id="input-Ekpt_parts"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekpt_parts') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ekpt_parts') }}" autofocus>
                                                    @if ($errors->has('Ekpt_parts'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Ekpt_parts') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('Ekpt_jobs') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ekpt_jobs">{{ __('Έκτπωση Εργασιών') }}</label>
                                                    <input type="number" name="Ekpt_jobs" id="input-Ekpt_jobs"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekpt_jobs') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ekpt_jobs') }}" autofocus>
                                                    @if ($errors->has('Ekpt_jobs'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Ekpt_jobs') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Παθών') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_pathon">{{ __('Παθών*') }}</label>
                                                    <select class="form-control form-select" id="id_pathon" required>
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($pathontes as $pathon)
                                                            <option value="{{$pathon->id_Person}}">{{$pathon->L_name. ' '.$pathon->F_name}}</option>
                                                        @endforeach
{{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('id_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_pathon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_oximatos_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_oximatos_pathon">{{ __('Αρ. Κυκλοφορίας') }}</label>
                                                    <select class="form-control form-select" id="id_oximatos_pathon">
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($oximata_pathon as $oxima_pathon)
                                                            <option value="{{$oxima_pathon->id_oximata}}">{{$oxima_pathon->Ar_kyklo}}</option>
                                                        @endforeach
{{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('$id_oximatos_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('$id_oximatos_pathon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('Object') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Object">{{ __('Αντικείμενο') }}</label>
                                                    <input type="text" name="Object" id="input-Object"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Object') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ekpt_jobs') }}" autofocus>
                                                    @if ($errors->has('Object'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Object') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label{{ $errors->has('id_company_pathon_real') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_company_pathon_real">{{ __('Ασφλιστική') }}</label>
                                                    <select class="form-control form-select" id="id_company_pathon_real">
                                                        <option value="null">{{ " " }}</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id_company}}">{{$company->comp_name}}</option>
                                                        @endforeach
{{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('id_company_pathon_real'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_company_pathon_real') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('Entoleas') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Entoleas">{{ __('Εντολέας') }}</label>
                                                    <input type="text" name="Entoleas" id="Entoleas"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Entoleas') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Entoleas') }}" autofocus>
                                                    @if ($errors->has('Entoleas'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Entoleas') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('Xiliometra') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Xiliometra">{{ __('Χιλιόμετρα') }}</label>
                                                    <input type="text" name="Xiliometra" id="input-Xiliometra"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Xiliometra') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Xiliometra') }}" autofocus>
                                                    @if ($errors->has('Xiliometra'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Xiliometra') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('value_car_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-value_car_pathon">{{ __('Εμπορική Αξία') }}</label>
                                                    <input type="number" name="value_car_pathon" id="input-value_car_pathon"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('value_car_pathon') ? ' is-invalid' : '' }}"
                                                           value="{{ old('value_car_pathon') }}" autofocus>
                                                    @if ($errors->has('value_car_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('value_car_pathon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label {{$errors->has('driver_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-driver_pathon">{{ __('Οδηγός') }}</label>
                                                    <input type="text" name="driver_pathon" id="input-driver_pathon"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('driver_pathon') ? ' is-invalid' : '' }}"
                                                           value="{{ old('driver_pathon') }}" autofocus>
                                                    @if ($errors->has('driver_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('driver_pathon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label ">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label ">
                                                    <div class="card">
                                                        <div class="card-header-cust">
                                                            <h6 class="heading-small text-center text-muted">
                                                                <strong>{{ __('Υπαίτιος') }}</strong>
                                                            </h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-label{{ $errors->has('id_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="id_ypaitiou">{{ __('Υπαίτιος') }}</label>
                                                                        <select class="form-control form-select" id="id_ypaitiou">
                                                                            <option value="null">{{ " " }}</option>
                                                                            @foreach($pathontes as $pathon)
                                                                                <option value="{{$pathon->id_Person}}">{{$pathon->L_name. ' '.$pathon->F_name}}</option>
                                                                            @endforeach
                   {{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                                        </select>
                                                                        @if ($errors->has('id_ypaitiou'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('id_ypaitiou') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-label{{ $errors->has('id_oximatos_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="id_oximatos_ypaitiou">{{ __('Αρ. Κυκλοφορίας') }}</label>
                                                                        <select class="form-control form-select" id="id_oximatos_ypaitiou">
                                                                            <option value="null">{{ " " }}</option>
                                                                            @foreach($oximata_pathon as $oxima_pathon)
                                                                                <option value="{{$oxima_pathon->id_oximata}}">{{$oxima_pathon->Ar_kyklo}}</option>
                                                                            @endforeach
                   {{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                                        </select>
                                                                        @if ($errors->has('$id_oximatos_ypaitiou'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('$id_oximatos_ypaitiou') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-label{{ $errors->has('id_company_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="id_company_ypaitiou">{{ __('Ασφλιστική') }}</label>
                                                                        <select class="form-control form-select" id="id_company_ypaitiou">
                                                                            <option value="null">{{ " " }}</option>
                                                                            @foreach($companies as $company)
                                                                                <option value="{{$company->id_company}}">{{$company->comp_name}}</option>
                                                                            @endforeach
                    {{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                                        </select>
                                                                        @if ($errors->has('id_company_ypaitiou'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('id_company_ypaitiou') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-label {{$errors->has('Driver_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="input-Driver_ypaitiou">{{ __('Οδηγός') }}</label>
                                                                        <input type="text" name="driver_pathon" id="input-Driver_ypaitiou"
                                                                               class="form-control form-input form-control-alternative{{ $errors->has('Driver_ypaitiou') ? ' is-invalid' : '' }}"
                                                                               value="{{ old('Driver_ypaitiou') }}" autofocus>
                                                                        @if ($errors->has('Driver_ypaitiou'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('Driver_ypaitiou') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
		</div>
	</div>


@endsection
