@extends('forms')

@section('formsdetails')

	<div class="row">
		<div class="col-2 menu-text-size">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab"
				   aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
				{{--                <a class="nav-link" id="v-pills-antikatastasis-tab" data-toggle="pill" href="#v-pills-antikatastasis" role="tab" aria-controls="v-pills-antikatastasis" aria-selected="false">Αντικαταστάσεις</a>
								<a class="nav-link" id="v-pills-epanafores-tab" data-toggle="pill" href="#v-pills-epanafores" role="tab" aria-controls="v-pills-epanafores" aria-selected="false">Επαναφορές</a>
								<a class="nav-link" id="v-pills-eksagogi-tab" data-toggle="pill" href="#v-pills-eksagogi" role="tab" aria-controls="v-pills-eksagogi" aria-selected="false">Εξαγωγή/Επανατοποθέτηση</a>
								<a class="nav-link" id="v-pills-bafes-tab" data-toggle="pill" href="#v-pills-bafes" role="tab" aria-controls="v-pills-bafes" aria-selected="false">Βαφές</a>
								<a class="nav-link" id="v-pills-ergasiesNoAntallaktika-tab" data-toggle="pill" href="#v-pills-ergasiesnoantallaktika" role="tab" aria-controls="v-pills-ergasiesnoantallaktika" aria-selected="false">Εργασίες χωρίς ανταλλακτικά</a>
								<a class="nav-link" id="v-pills-proasfalistikos-tab" data-toggle="pill" href="#v-pills-proasfalistikos" role="tab" aria-controls="v-pills-proasfalistikos" aria-selected="false">Προασφαλιστικός</a>
								<a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false">Κατάσταση</a>
								<a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
								<a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false">Έξοδα έκθεσεις</a>
								<a class="nav-link" id="v-pills-proyparxouses-tab" data-toggle="pill" href="#v-pills-proyparxouses" role="tab" aria-controls="v-pills-proyparxouses" aria-selected="false">Προυπάρχουσες</a>
								<a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
								<a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false">Προβλέψεις</a>
								<a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false">Πρακτορεία</a>
								<a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
								<a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Έξοδα συνεργάτη</a>--}}
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
                                    <div class="card-header">
                                        <h6 class="heading-small text-center text-muted"><strong>{{ __('Γενικά') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                                    <input type="text" name="id_ekthesis" id="input-id_ekthesis"
                                                           class="form-control form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_diakrisi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_grafeio">{{ __('Τύπος Έκθεσης') }}</label>
                                                    <select class="form-control" id="diakrisi" required>
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
                                                <div class="form-group{{ $errors->has('Prot_bibliou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Prot_bibliou">{{ __('Αρ. Φακέλου') }}</label>
                                                    <input type="text" name="Prot_bibliou" id="input-Prot_bibliou"
                                                           class="form-control form-control-alternative{{ $errors->has('Prot_bibliou') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Prot_bibliou') }}" autofocus>
                                                    @if ($errors->has('Prot_bibliou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Prot_bibliou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_grafeio">{{ __('Γραφείο') }}</label>
                                                    <select class="form-control" id="grafeio" required>
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
                                                <div class="form-group{{ $errors->has('date_atiximatos') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-date_atiximatos">{{ __('Ημ/νια Ατυχήματος') }}</label>
                                                    <input type="date" name="date_atiximatos" id="input-date_atiximatos"
                                                           class="form-control form-control-alternative{{ $errors->has('date_atiximatos') ? ' is-invalid' : '' }}"
                                                           value="{{ old('date_atiximatos') }}" autofocus>
                                                    @if ($errors->has('date_atiximatos'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('date_atiximatos') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_nomoi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_nomoi">{{ __('Νομός') }}</label>
                                                    <select class="form-control" id="nomoi" required>
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
                                                <div class="form-group{{ $errors->has('date_eksetasis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-date_eksetasis">{{ __('Ημ/νια Εξέτασης') }}</label>
                                                    <input type="date" name="date_eksetasis" id="input-date_eksetasis"
                                                           class="form-control form-control-alternative{{ $errors->has('date_eksetasis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('date_eksetasis') }}" autofocus>
                                                    @if ($errors->has('date_eksetasis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('date_eksetasis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_accident_place') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_accident_place">{{ __('Τόπος Εξέτασης') }}</label>
                                                    <select class="form-control" id="accident_place" required>
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
                                                <div class="form-group{{ $errors->has('date_dikasimou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-date_dikasimou">{{ __('Ημ/νια Δικάσιμου') }}</label>
                                                    <input type="date" name="date_dikasimou" id="input-date_dikasimou"
                                                           class="form-control form-control-alternative{{ $errors->has('date_dikasimou') ? ' is-invalid' : '' }}"
                                                           value="{{ old('date_dikasimou') }}" autofocus>
                                                    @if ($errors->has('date_dikasimou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('date_dikasimou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_arxi_ekdosis_eggrafon">{{ __('Αρχή Εγγράφων') }}</label>
                                                    <select class="form-control" id="id_arxi_ekdosis_eggrafon" required>
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
                                                <div class="form-group{{ $errors->has('Date_paradosis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Date_paradosis">{{ __('Ημ/νια Παράδοσης') }}</label>
                                                    <input type="date" name="Date_paradosis" id="input-Date_paradosis"
                                                           class="form-control form-control-alternative{{ $errors->has('Date_paradosis') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Date_paradosis') }}" autofocus>
                                                    @if ($errors->has('Date_paradosis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_paradosis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('File_position') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-File_position">{{ __('Θέση Αρχείων') }}</label>
                                                    <input type="text" name="File_position" id="input-File_position"
                                                           class="form-control form-control-alternative{{ $errors->has('File_position') ? ' is-invalid' : '' }}"
                                                           value="{{ old('File_position') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('Simpliromatiki') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Simpliromatiki">{{ __('Συμπληρωματική') }}</label>
                                                    <select class="form-control" id="Simpliromatiki">
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
                                                <div class="form-group{{ $errors->has('partially_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-partially_lock">{{ __('Μερικό κλείδωμα') }}</label>
                                                    <select class="form-control" id="partially_lock">
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
                                                <div class="form-group{{ $errors->has('Sap') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Sap">{{ __('Sap') }}</label>
                                                    <select class="form-control" id="Sap">
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
                                                <div class="form-group{{ $errors->has('total_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-total_lock">{{ __('Ολικό κλείδωμα') }}</label>
                                                    <select class="form-control" id="total_lock">
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
                                                <div class="form-group{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Valid">{{ __('Έγκυρη') }}</label>
                                                    <select class="form-control" id="Valid">
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
                                    </div>
                                </div>
							</div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Οικονομικά') }}</strong></h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id_timologio_etaireias') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id_timologio_etaireias">{{ __('Αρ. Τιμολογίου') }}</label>
                                                    <input type="text" name="id_timologio_etaireias" id="input-id_timologio_etaireias"
                                                           class="form-control form-control-alternative{{ $errors->has('id_timologio_etaireias') ? ' is-invalid' : '' }}"
                                                           value="{{ old('id_timologio_etaireias') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('Ar_timologio_partner') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ar_timologio_partner">{{ __('Αρ. Τιμολογίου Συνεργάτη') }}</label>
                                                    <input type="text" name="Ar_timologio_partner" id="input-Ar_timologio_partner"
                                                           class="form-control form-control-alternative{{ $errors->has('Ar_timologio_partner') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ar_timologio_partner') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('Ekkatharistike') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-Ekkatharistike">{{ __('Εκκαθαρίστηκε') }}</label>
                                                    <input type="text" name="Ekkatharistike" id="input-Ekkatharistike"
                                                           class="form-control form-control-alternative{{ $errors->has('Ekkatharistike') ? ' is-invalid' : '' }}"
                                                           value="{{ old('Ekkatharistike') }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group{{ $errors->has('id') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="input-id">{{ __('Πραγματογνώμονας') }}</label>
                                                    <select class="form-control" id="id" required>
                                                        <option value="null">{{ " " }}</option>
{{--                                                        @foreach($prag as $pragmatognomonas)
                                                            <option value="{{$pragmatognomonas->id}}">{{ $pragmatognomonas->L_name}}</option>
                                                        @endforeach--}}
                                                    </select>
                                                    @if ($errors->has('id'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id') }}</strong>
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
                                    <div class="card-header">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Παθών - Υπαίτιος') }}</strong></h6>
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col">
							<div class="text-center">
								<button type="submit" class="btn btn-danger mt-4"
										style="margin: 4px">{{ __('Καταχώρηση') }} </button>
							</div>
						</div>
					</form>
				</div>
				{{--                <div class="tab-pane fade" id="v-pills-antikatastasis" role="tabpanel" aria-labelledby="v-pills-antikatastasis-tab">...</div>
								<div class="tab-pane fade" id="v-pills-epanafores" role="tabpanel" aria-labelledby="v-pills-epanafores-tab">...</div>
								<div class="tab-pane fade" id="v-pills-eksagogi" role="tabpanel" aria-labelledby="v-pills-eksagogi-tab">...</div>
								<div class="tab-pane fade" id="v-pills-bafes" role="tabpanel" aria-labelledby="v-pills-bafes-tab">...</div>
								<div class="tab-pane fade" id="v-pills-ergasiesnoantallaktika" role="tabpanel" aria-labelledby="v-pills-ergasiesnoantallaktika-tab">...</div>
								<div class="tab-pane fade" id="v-pills-proasfalistikos" role="tabpanel" aria-labelledby="v-pills-proasfalistikos-tab">...</div>
								<div class="tab-pane fade" id="v-pills-katastasi" role="tabpanel" aria-labelledby="v-pills-katastasi-tab">...</div>
								<div class="tab-pane fade" id="v-pills-keimena" role="tabpanel" aria-labelledby="v-pills-keimena-tab">...</div>
								<div class="tab-pane fade" id="v-pills-eksodaekthesis" role="tabpanel" aria-labelledby="v-pills-eksodaekthesis-tab">...</div>
								<div class="tab-pane fade" id="v-pills-proyparxouses" role="tabpanel" aria-labelledby="v-pills-proyparxouses-tab">...</div>
								<div class="tab-pane fade" id="v-pills-synergeia" role="tabpanel" aria-labelledby="v-pills-synergeia-tab">...</div>
								<div class="tab-pane fade" id="v-pills-provlepsis" role="tabpanel" aria-labelledby="v-pills-provlepsis-tab">...</div>
								<div class="tab-pane fade" id="v-pills-praktoreia" role="tabpanel" aria-labelledby="v-pills-praktoreia-tab">...</div>
								<div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">...</div>
								<div class="tab-pane fade" id="v-pills-eksodasynergati" role="tabpanel" aria-labelledby="v-pills-eksodasynergati-tab">...</div>--}}
			</div>
		</div>
	</div>


@endsection
