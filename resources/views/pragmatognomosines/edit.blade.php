@extends('forms')

@section('formsdetails')
    <div class="row">
        @if ((Request::is('pragmatognomosines/*')))
            <div class="col-2 menu-text-size">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab" aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
                    <a class="nav-link" id="v-pills-antikatastasis-tab" data-toggle="pill" href="#v-pills-antikatastasis" role="tab" aria-controls="v-pills-antikatastasis" aria-selected="false" >Αντικαταστάσεις</a>
                    <a class="nav-link" id="v-pills-epanafores-tab" data-toggle="pill" href="#v-pills-epanafores" role="tab" aria-controls="v-pills-epanafores" aria-selected="false" >Επαναφορές</a>
                    <a class="nav-link" id="v-pills-eksagogi-tab" data-toggle="pill" href="#v-pills-eksagogi" role="tab" aria-controls="v-pills-eksagogi" aria-selected="false" >Εξαγωγή/Επανατοποθέτηση</a>
                    <a class="nav-link" id="v-pills-bafes-tab" data-toggle="pill" href="#v-pills-bafes" role="tab" aria-controls="v-pills-bafes" aria-selected="false" >Βαφές</a>
                    <a class="nav-link" id="v-pills-ergasiesNoAntallaktika-tab" data-toggle="pill" href="#v-pills-ergasiesnoantallaktika" role="tab" aria-controls="v-pills-ergasiesnoantallaktika" aria-selected="false">Εργασίες χωρίς ανταλλακτικά</a>
                    <a class="nav-link" id="v-pills-proasfalistikos-tab" data-toggle="pill" href="#v-pills-proasfalistikos" role="tab" aria-controls="v-pills-proasfalistikos" aria-selected="false" >Προασφαλιστικός</a>
                    <a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
                    <a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false">Κατάσταση</a>
                    <a class="nav-link" id="v-pills-foto-tab" data-toggle="pill" href="#v-pills-foto" role="tab" aria-controls="v-pills-foto" aria-selected="false" style="color: red">Φωτογραφίες</a>
                    <a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false" >Έξοδα έκθεσεις</a>
                    <a class="nav-link" id="v-pills-proyparxouses-tab" data-toggle="pill" href="#v-pills-proyparxouses" role="tab" aria-controls="v-pills-proyparxouses" aria-selected="false" >Προυπάρχουσες</a>
                    <a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
                    <a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false">Προβλέψεις</a>
                    <a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false" >Πρακτορεία</a>
                    <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
                    <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Έξοδα συνεργάτη</a>
                    <a class="nav-link" id="v-pills-involv_cars-tab" data-toggle="pill" href="#v-pills-involv_cars" role="tab" aria-controls="v-pills-involv_cars" aria-selected="false" >Εμπλεκόμενα Οχήματα</a>
                    <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false" style="color: red">Εκτυπώσεις</a>
                </div>
            </div>
        @elseif ((\Request::is('ereunes/*')))
            <div class="col-2 menu-text-size">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab" aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
                    <a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
                    <a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false">Κατάσταση</a>
                    <a class="nav-link" id="v-pills-foto-tab" data-toggle="pill" href="#v-pills-foto" role="tab" aria-controls="v-pills-foto" aria-selected="false" style="color: red">Φωτογραφίες</a>
                    <a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false">Έξοδα έκθεσεις</a>
                    <a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
                    <a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false">Προβλέψεις</a>
                    <a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false" >Πρακτορεία</a>
                    <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
                    <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Έξοδα συνεργάτη</a>
                    <a class="nav-link" id="v-pills-involv_cars-tab" data-toggle="pill" href="#v-pills-involv_cars" role="tab" aria-controls="v-pills-involv_cars" aria-selected="false" >Εμπλεκόμενα Οχήματα</a>
                    <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false" style="color: red">Εκτυπώσεις</a>
                </div>
            </div>
        @endif
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-genika" role="tabpanel" aria-labelledby="v-pills-genika-tab">
                    <form method="post" action="{{ route('pragmatognomosines.update', $pragmatognomosini->id_ekthesis) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                            <strong>{{ __('Γενικά') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->id_ekthesis }}" disabled autofocus>
                                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_diakrisi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_diakrisi">{{ __('Τύπος Έκθεσης') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_diakrisi" name="id_diakrisi" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Τύπο Έκθεσης " }}</option>
                                                        @foreach($diakrisis as $diakrisi)
                                                            <option value="{{$diakrisi->id_diakrisi}}" @if($pragmatognomosini->id_diakrisi == $diakrisi->id_diakrisi) selected @endif>{{ $diakrisi->Diakrisi }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_diakrisi'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_diakrisi') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecdiak') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecdiak">{{ __(' Τύπος ') }} </label>
                                                    <div class="form-label{{ $errors->has('id_diakrisi') ? ' has-danger' : '' }}" style="margin: auto">
                                                        {{--                                                <label class="form-control-label" for="newrec">{{ __('Νέος Τύπος') }}</label>--}}
                                                        <button id="newrecdiak" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#diakrisisModal">
                                                            {{--                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Prot_bibliou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Prot_bibliou">{{ __('Αρ. Φακέλου') }}</label>
                                                    <input type="text" name="Prot_bibliou" id="Prot_bibliou"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Prot_bibliou') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Prot_bibliou }}" autofocus>
                                                    @if ($errors->has('Prot_bibliou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Prot_bibliou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_grafeio">{{ __('Γραφείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_grafeio" name="id_grafeio" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Γραφείο " }}</option>
                                                        @foreach($grafeia as $grafeio)
                                                            <option value="{{$grafeio->id_grafeio}}" @if($pragmatognomosini->id_grafeio == $grafeio->id_grafeio) selected @endif>{{ $grafeio->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_grafeio'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_grafeio') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Date_atiximatos') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_atiximatos">{{ __('Ημ/νια Ατυχήματος') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="Date_atiximatos" id="Date_atiximatos" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_atiximatos') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini-> Date_atiximatos }}" required autofocus>
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_nomoi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_nomoi">{{ __('Νομός') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_nomoi" name="id_nomoi" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Νομό " }}</option>
                                                        @foreach($nomoi as $nomos)
                                                            <option value="{{$nomos->id_nomoi}}" @if($pragmatognomosini->id_nomoi == $nomos->id_nomoi) selected @endif>{{ $nomos->Nomos}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_nomoi'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_nomoi') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecnom') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecnom">{{ __('Νομός') }}</label>
                                                    <div class="form-label{{ $errors->has('id_nomoi') ? ' has-danger' : '' }}" style="margin: auto">
                                                        {{--                                                <label class="form-control-label" for="newrec">{{ __('Νέος Τύπος') }}</label>--}}
                                                        <button id="newrecnom" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#nomoiModal">
                                                            {{--                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Date_eksetasis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_eksetasis">{{ __('Ημ/νια Εξέτασης') }}</label>
                                                    <input type="text" name="Date_eksetasis" id="Date_eksetasis" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_eksetasis') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Date_eksetasis }}" autofocus>
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_accedent_place') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_accedent_place">{{ __('Τόπος Εξέτασης') }}</label>
                                                    <select class="form-control form-select" id="id_accedent_place" name="id_accedent_place" >
                                                        <option selected value value=-1>{{ " Επιλέξτε Τόπο Εξέτασης " }}</option>
                                                        @foreach($accedent_places as $accedent_place)
                                                            <option value="{{$accedent_place->id_accident_place}}" @if($pragmatognomosini->id_accedent_place == $accedent_place->id_accident_place) selected @endif>{{ $accedent_place->Place}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_accedent_place'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_accedent_place') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecplace') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecplace">{{ __('Τόπος') }}</label>
                                                    <div class="form-label{{ $errors->has('id_accident_place') ? ' has-danger' : '' }}" style="margin: auto">
                                                        {{--                                                <label class="form-control-label" for="newrec">{{ __('Νέος Τύπος') }}</label>--}}
                                                        <button id="newrecplace" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#placeModal">
                                                            {{--                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Date_dikasimou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_dikasimou">{{ __('Ημ/νια Δικάσιμου') }}</label>
                                                    <input type="text" name="Date_dikasimou" id="Date_dikasimou" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_dikasimou') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Date_dikasimou }}" autofocus>
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_arxi_ekdosis_eggrafon">{{ __('Αρχή Εγγράφων') }}</label>
                                                    <select class="form-control form-select" id="id_arxi_ekdosis_eggrafon" name="id_arxi_ekdosis_eggrafon" >
                                                        <option selected value value=-1>{{ " Επιλέξτε Αρχή Εγγράφων " }}</option>
                                                        @foreach($arxes_ekdosis_eggrafon as $arxi_ekdosis_eggrafon)
                                                            <option value="{{$arxi_ekdosis_eggrafon->id_Arxi_ekdosis_eggrafon}}"  @if($pragmatognomosini->id_arxi_ekdosis_eggrafon == $arxi_ekdosis_eggrafon->id_Arxi_ekdosis_eggrafon) selected @endif>{{ $arxi_ekdosis_eggrafon->Arxi}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_arxi_ekdosis_eggrafon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_arxi_ekdosis_eggrafon') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecarxi') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecarxi">{{ __('Αρχή') }}</label>
                                                    <div class="form-label{{ $errors->has('id_Arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}" style="margin: auto">
                                                        {{--                                                <label class="form-control-label" for="newrec">{{ __('Νέος Τύπος') }}</label>--}}
                                                        <button id="newrecarxi" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#arxiModal">
                                                            {{--                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Date_paradosis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Date_paradosis">{{ __('Ημ/νια Παράδοσης') }}
                                                    </label>
                                                    <input type="text" name="Date_paradosis" id="Date_paradosis" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_paradosis') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Date_paradosis }}" autofocus>
                                                    <script type="text/javascript">
                                                        $('#Date_paradosis').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        });
                                                    </script>
                                                    @if ($errors->has('Date_paradosis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Date_paradosis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('File_position') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="File_position">{{ __('Θέση Αρχείων') }}</label>
                                                    <input type="text" name="File_position" id="File_position"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('File_position') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->File_position }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Simpliromatiki') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Simpliromatiki">{{ __('Συμπληρωματική') }}</label>
                                                    <select class="form-control form-select" id="Simpliromatiki" name="Simpliromatiki">
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('partially_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="partially_lock">{{ __('Μερικό κλείδωμα') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="partially_lock" name="partially_lock" disabled>
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Sap') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Sap">{{ __('Sap') }}</label>
                                                    <select class="form-control form-select" id="Sap" name="Sap">
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('total_lock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="total_lock">{{ __('Ολικό κλείδωμα') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="total_lock" name="total_lock" disabled >
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Valid">{{ __('Έγκυρη') }}</label>
                                                    <select class="form-control form-select" id="Valid" name="Valid">
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
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-label ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                            <strong>{{ __('Οικονομικά') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_timologio_etaireias') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_timologio_etaireias">{{ __('Αρ. Τιμολογίου') }}</label>
                                                    <input type="text" name="id_timologio_etaireias" id="id_timologio_etaireias"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_timologio_etaireias') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->id_timologio_etaireias }}" disabled autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ar_timologio_partner') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Ar_timologio_partner">{{ __('Αρ. Τιμολογίου Συνεργάτη') }}</label>
                                                    <input type="text" name="Ar_timologio_partner" id="Ar_timologio_partner"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_timologio_partner') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Ar_timologio_partner }}" disabled autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ekkatharistike') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Ekkatharistike">{{ __('Εκκαθαρίστηκε') }}</label>
                                                    <input type="text" name="Ekkatharistike" id="Ekkatharistike"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekkatharistike') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Ekkatharistike }}" disabled autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id">{{ __('Πραγματογνώμονας') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id" name="id" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Πραγματογνώμονα " }}</option>
                                                        @foreach($pragmatognomones as $pragmatognomonas)
                                                            <option value="{{$pragmatognomonas->id}}" @if($pragmatognomosini->id == $pragmatognomonas->id) selected @endif>{{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}</option>
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
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Fpa') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Fpa">{{ __('Φ.Π.Α.') }}</label>
                                                    <input type="number" name="Fpa" id="Fpa" class="form-control form-input form-control-alternative{{ $errors->has('Fpa') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Fpa }}" autofocus>
                                                    @if ($errors->has('Fpa'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Fpa') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_company_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_company_pathon">{{ __('Εντολέας Ασφλιστική') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_company_pathon" name="id_company_pathon" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Εντολέα Ασφαλιστική " }}</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id_company}}"  @if($pragmatognomosini->id_company_pathon == $company->id_company) selected @endif>{{$company->comp_name}}</option>
                                                        @endforeach
                                                        {{--<option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('id_company_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('id_company_pathon') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newreccomp') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newreccomp">{{ __('Εταιρεία') }}</label>
                                                    <div class="form-label{{ $errors->has('id_company') ? ' has-danger' : '' }}" style="margin: auto">
                                                        <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compPathonModal">

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ekpt_parts') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ekpt_parts">{{ __('Έκπτωση ανταλλακτικών') }}</label>
                                                    <input type="number" name="Ekpt_parts" id="Ekpt_parts"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekpt_parts') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Ekpt_parts }}" autofocus>
                                                    @if ($errors->has('Ekpt_parts'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Ekpt_parts') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label {{$errors->has('Ekpt_jobs') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ekpt_jobs">{{ __('Έκτπωση Εργασιών') }}</label>
                                                    <input type="number" name="Ekpt_jobs" id="Ekpt_jobs"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ekpt_jobs') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Ekpt_jobs }}" autofocus>
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
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-label ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                            <strong>{{ __('Παθών') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_pathon">{{ __('Παθών') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_pathon" name="id_pathon" required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Παθών " }}</option>
                                                        @foreach($pathontes as $pathon)
                                                            <option value="{{$pathon->id_person}}" @if($pragmatognomosini->id_pathon == $pathon->id_person) selected @endif>{{$pathon->L_name. ' '.$pathon->F_name}}</option>
                                                        @endforeach
                                                        {{--                                                    <option> <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Προσθήκη νέου</a> </option>--}}
                                                    </select>
                                                    @if ($errors->has('id_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('id_apthon') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecperson') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecperson">{{ __('Παθών') }}</label>
                                                    <div class="form-label{{ $errors->has('id_pathon') ? ' has-danger' : '' }}" style="margin: auto">
                                                        <button id="newrecperson" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#personModal">

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-label{{ $errors->has('id_oximatos_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_oximatos_pathon">{{ __('Αρ. Κυκλοφορίας') }}</label>
                                                    <select class="form-control form-select" id="id_oximatos_pathon" name="id_oximatos_pathon">
                                                        <option selected value value=-1>{{ " Επιλέξτε Όχημα Παθών " }}</option>
                                                        @foreach($oximata_pathon as $oxima_pathon)
                                                            <option value="{{$oxima_pathon->id_oximata}}" @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata) selected @endif>{{$oxima_pathon->Ar_kyklo}}</option>
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
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecoxima') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecoxima">{{ __('Όχημα') }}</label>
                                                    <div class="form-label{{ $errors->has('id_oximatos_pathon') ? ' has-danger' : '' }}" style="margin: auto">
                                                        <button id="newrecoxima" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#oximaModal">

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-label {{$errors->has('Object') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Object">{{ __('Αντικείμενο') }}</label>
                                                    <input type="text" name="Object" id="Object"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Object') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Object }}" autofocus>
                                                    @if ($errors->has('Object'))
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Object') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-label{{ $errors->has('id_company_pathon_real') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_company_pathon_real">{{ __('Ασφλιστική') }}</label>
                                                    <select class="form-control form-select" id="id_company_pathon_real" name="id_company_pathon_real">
                                                        <option selected value value=-1>{{ " Επιλέξτε Ασφαλιστική " }}</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id_company}}" @if($pragmatognomosini->id_company_pathon_real == $company->id_company) selected @endif>{{$company->comp_name}}</option>
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
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newreccomp') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newreccomp">{{ __('Εταιρεία') }}</label>
                                                    <div class="form-label{{ $errors->has('id_company_pathon_real') ? ' has-danger' : '' }}" style="margin: auto">
                                                        <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compPathonRealModal">

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-label {{$errors->has('Entoleas') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Entoleas">{{ __('Εντολέας') }}</label>
                                                    <input type="text" name="Entoleas" id="Entoleas"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Entoleas') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Entoleas }}" autofocus>
                                                    @if ($errors->has('Entoleas'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Entoleas') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-label {{$errors->has('Xiliometra') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Xiliometra">{{ __('Χιλιόμετρα') }}</label>
                                                    <input type="text" name="Xiliometra" id="Xiliometra"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Xiliometra') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->Xiliometra  }}" autofocus>
                                                    @if ($errors->has('Xiliometra'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Xiliometra') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-label {{$errors->has('value_car_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="value_car_pathon">{{ __('Εμπορική Αξία') }}</label>
                                                    <input type="number" name="value_car_pathon" id="value_car_pathon"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('value_car_pathon') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->value_car_pathon }}" autofocus>
                                                    @if ($errors->has('value_car_pathon'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('value_car_pathon') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-label {{$errors->has('driver_pathon') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="driver_pathon">{{ __('Οδηγός') }}</label>
                                                    <input type="text" name="driver_pathon" id="driver_pathon"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('driver_pathon') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->driver_pathon }}" autofocus>
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
                                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                                <strong>{{ __('Υπαίτιος') }}</strong>
                                                            </h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-label{{ $errors->has('id_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label" for="id_ypaitiou">{{ __('Υπαίτιος') }}</label>
                                                                        <select class="form-control form-select" id="id_ypaitiou" name="id_ypaitiou">
                                                                            <option selected value value=-1>{{ " Επιλέξτε Υπαίτιο " }}</option>
                                                                            @foreach($pathontes as $pathon)
                                                                                <option value="{{$pathon->id_person}}" @if($pragmatognomosini->id_ypaitiou == $pathon->id_person) selected @endif>{{$pathon->L_name. ' '.$pathon->F_name}}</option>
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
                                                                <div class="col-md-2">
                                                                    <div class="form-label{{ $errors->has('newrecperson') ? ' has-danger' : '' }}">
                                                                        <!-- Button trigger modal -->
                                                                        <label class="form-control-label" for="newrecperson">{{ __('Υπαίτιος') }}</label>
                                                                        <div class="form-label{{ $errors->has('id_ypaitiou') ? ' has-danger' : '' }}" style="margin: auto">
                                                                            <button id="newrecperson" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#personModal">

                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-label{{ $errors->has('id_oximatos_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="id_oximatos_ypaitiou">{{ __('Αρ. Κυκλοφορίας') }}</label>
                                                                        <select class="form-control form-select" id="id_oximatos_ypaitiou" name="id_oximatos_ypaitiou">
                                                                            <option selected value value=-1>{{ " Επιλέξτε Όχημα Υπαιτίου " }}</option>
                                                                            @foreach($oximata_pathon as $oxima_pathon)
                                                                                <option value="{{$oxima_pathon->id_oximata}}" @if($pragmatognomosini->id_oximatos_ypaitiou == $oxima_pathon->id_oximata) selected @endif>{{$oxima_pathon->Ar_kyklo}}</option>
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
                                                                <div class="col-md-2">
                                                                    <div class="form-label{{ $errors->has('newrecoxima') ? ' has-danger' : '' }}">
                                                                        <!-- Button trigger modal -->
                                                                        <label class="form-control-label" for="newrecoxima">{{ __('Όχημα') }}</label>
                                                                        <div class="form-label{{ $errors->has('id_oximatos_ypaitiou') ? ' has-danger' : '' }}" style="margin: auto">
                                                                            <button id="newrecoxima" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#oximaModal">

                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-label{{ $errors->has('id_company_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="id_company_ypaitiou">{{ __('Ασφλιστική') }}</label>
                                                                        <select class="form-control form-select" id="id_company_ypaitiou" name="id_company_ypaitiou">
                                                                            <option selected value value=-1>{{ " Επιλέξτε Ασφαλιστική " }}</option>
                                                                            @foreach($companies as $company)
                                                                                <option value="{{$company->id_company}}" @if($pragmatognomosini->id_company_ypaitiou == $company->id_company) selected @endif>{{$company->comp_name}}</option>
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
                                                                <div class="col-md-2">
                                                                    <div class="form-label{{ $errors->has('newreccomp') ? ' has-danger' : '' }}">
                                                                        <!-- Button trigger modal -->
                                                                        <label class="form-control-label" for="newreccomp">{{ __('Εταιρεία') }}</label>
                                                                        <div class="form-label{{ $errors->has('id_company_ypaitiou') ? ' has-danger' : '' }}" style="margin: auto">
                                                                            <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compYpaitiouModal">

                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-label {{$errors->has('Driver_ypaitiou') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label"
                                                                               for="Driver_ypaitiou">{{ __('Οδηγός') }}</label>
                                                                        <input type="text" name="Driver_ypaitiou" id="Driver_ypaitiou"
                                                                               class="form-control form-input form-control-alternative{{ $errors->has('Driver_ypaitiou') ? ' is-invalid' : '' }}"
                                                                               value="{{ $pragmatognomosini->Driver_ypaitiou }}" autofocus>
                                                                        @if ($errors->has('Driver_ypaitiou'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('Driver_ypaitiou') }}</strong>
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
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="text-center">
                                                                            <a href="{{ route('pragmatognomosines.store') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
                                                                    </div>
                                                                </div>
                                                                    <div class="col d-flex justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Αποθήκευση</button>
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
                <div class="tab-pane fade" id="v-pills-antikatastasis" role="tabpanel" aria-labelledby="v-pills-antikatastasis-tab">
                    <?php $id_ergasia=3;?>
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details/'.$id_ergasia) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                               @if ($ergasia->id_ergasies == 3)
                                                        <?php $count++ ?>
                                               @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Αντικαταστάσεις'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="ant_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#ant_foto_show").change(function() {
                                                        var e = document.getElementById("foto_ant");
                                                        if(!this.checked) {
                                                            $('#foto_ant').addClass('g-hide');
                                                        } else {
                                                            $('#foto_ant').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#ant_foto_show").change(function() {
                                                        var e = document.getElementById("antikat");
                                                        if(!this.checked) {
                                                            $('#antikat').removeClass('col-md-10');
                                                            $('#antikat').addClass('col-md-12');
                                                        } else {
                                                            $('#antikat').removeClass('col-md-12');
                                                            $('#antikat').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#ant_foto_show").change(function() {
                                                        var e = document.getElementById("parts_antikat");
                                                        if(!this.checked) {
                                                            $('#parts_antikat').removeClass('table-condensed');
                                                            $('#parts_antikat').addClass('table-sm');
                                                        } else {
                                                            $('#parts_antikat').removeClass('table-sm');
                                                            $('#parts_antikat').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                       {{ __('Κόστος Ανταλλακτικών: ')}}<strong>{{round($costPart3,2).('€')}}</strong>
                                       {{ __(' Κόστος Εργασιών:')}}<strong>{{round($costJob3,2).('€')}}</strong>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costJob3,2)+round($costPart3,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __('Φ.Π.Α. Ανταλλακτικών: ')}}<strong>{{round($fpaPart3,2).('€')}}</strong>
                                        {{ __(' Φ.Π.Α. Εργασιών:')}}<strong>{{round($fpaJob3,2).('€')}}</strong>
                                        {{ __(' Σύνολο Φ.Π.Α.:')}}<strong>{{round($fpaPart3,2)+round($fpaJob3,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($fpaPart3,2)+round($fpaJob3,2)+round($costJob3,2)+round($costPart3,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-md-12" id="antikat">
                                            <div class="table-responsive">
                                                <table id="parts_antikat" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλ/κό</th>
                                                        <th>Κόστος Ανταλ/κού</th>
                                                        <th>Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Συντ. Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Κόστος Εργασίας</th>
                                                        <th>Φ.Π.Α Εργασίας</th>
                                                        <th>Συντ. Φ.Π.Α Εργασίας</th>
                                                        <th>Τύπος</th>
                                                        <th>Ποσότητα</th>
                                                        <th>Ζημιά</th>
                                                        <th>Κωδικός Αντ/σώπου</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                            @if ($ergasia->id_ergasies ==3)
                                                                <tr>
                                                                    <td>
                                                                        @foreach($parts as $part)
                                                                            @if ($part->id_parts == $ergasia->pivot->id_parts)
                                                                                {{ $part->part }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td class="td-alnright">
                                                                        {{ round($ergasia->pivot->Cost_part,2).'€' }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($ergasia->pivot->fpa_part == 0)
                                                                            <input type="checkbox" disabled>
                                                                        @else
                                                                            <input type="checkbox" disabled checked>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->sint_fpa_part.'%' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->Cost_job.'€' }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($ergasia->pivot->fpa_job == 0)
                                                                            <input type="checkbox" disabled>
                                                                        @else
                                                                            <input type="checkbox" disabled checked>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->sint_fpa_job.'%' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->Type }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->quan }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->diax_fr_b }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $ergasia->pivot->prod_code }}
                                                                    </td>
                                                                    <td>
                                                                            <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                               target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                    </td>
                                                                    <td>
                                                                            <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                               target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_ant">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                           <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                              data-lightbox="image-ant"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                               <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                    width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-epanafores" role="tabpanel" aria-labelledby="v-pills-epanafores-tab">
                    <?php $id_ergasia=4;?>
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details/'.$id_ergasia) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                @if ($ergasia->id_ergasies == 4)
                                                    <?php $count++ ?>
                                                @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Επαναφορές'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="epanaf_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#epanaf_foto_show").change(function() {
                                                        var e = document.getElementById("foto_epanaf");
                                                        if(!this.checked) {
                                                            $('#foto_epanaf').addClass('g-hide');
                                                        } else {
                                                            $('#foto_epanaf').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#epanaf_foto_show").change(function() {
                                                        var e = document.getElementById("epanaf");
                                                        if(!this.checked) {
                                                            $('#epanaf').removeClass('col-md-10');
                                                            $('#epanaf').addClass('col-md-12');
                                                        } else {
                                                            $('#epanaf').removeClass('col-md-12');
                                                            $('#epanaf').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#epanaf_foto_show").change(function() {
                                                        var e = document.getElementById("parts_epanaf");
                                                        if(!this.checked) {
                                                            $('#parts_epanaf').removeClass('table-condensed');
                                                            $('#parts_epanaf').addClass('table-sm');
                                                        } else {
                                                            $('#parts_epanaf').removeClass('table-sm');
                                                            $('#parts_epanaf').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        {{ __('Κόστος Ανταλλακτικών: ')}}<strong>{{round($costPart4,2).('€')}}</strong>
                                        {{ __(' Κόστος Εργασιών:')}}<strong>{{round($costJob4,2).('€')}}</strong>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costJob4,2)+round($costPart4,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __('Φ.Π.Α. Ανταλλακτικών: ')}}<strong>{{round($fpaPart4,2).('€')}}</strong>
                                        {{ __(' Φ.Π.Α. Εργασιών:')}}<strong>{{round($fpaJob4,2).('€')}}</strong>
                                        {{ __(' Σύνολο Φ.Π.Α.:')}}<strong>{{round($fpaPart4,2)+round($fpaJob4,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($fpaPart4,2)+round($fpaJob4,2)+round($costJob4,2)+round($costPart4,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="epanaf">
                                            <div class="table-responsive">
                                                <table id="parts_epanaf" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλ/κό</th>
                                                        <th>Κόστος Ανταλ/κού</th>
                                                        <th>Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Συντ. Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Κόστος Εργασίας</th>
                                                        <th>Φ.Π.Α Εργασίας</th>
                                                        <th>Συντ. Φ.Π.Α Εργασίας</th>
                                                        <th>Τύπος</th>
                                                        <th>Ποσότητα</th>
                                                        <th>Ζημιά</th>
                                                        <th>Κωδικός Αντ/σώπου</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                        @if ($ergasia->id_ergasies == 4)
                                                            <tr>
                                                                <td>
                                                                    @foreach($parts as $part)
                                                                        @if ($part->id_parts == $ergasia->pivot->id_parts)
                                                                            {{ $part->part }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td class="td-alnright">
                                                                    {{ round($ergasia->pivot->Cost_part,2).'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_part == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_part.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Cost_job.'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_job == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_job.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Type }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->quan }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->diax_fr_b }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->prod_code }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_epanaf">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-epanaf"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-eksagogi" role="tabpanel" aria-labelledby="v-pills-eksagogi-tab">
                    <?php $id_ergasia=5;?>
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details/'.$id_ergasia) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                @if ($ergasia->id_ergasies == 5)
                                                    <?php $count++ ?>
                                                @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Εξαγωγή / Επανατοποθέτηση'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="eksag_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#eksag_foto_show").change(function() {
                                                        var e = document.getElementById("foto_eksag");
                                                        if(!this.checked) {
                                                            $('#foto_eksag').addClass('g-hide');
                                                        } else {
                                                            $('#foto_eksag').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#eksag_foto_show").change(function() {
                                                        var e = document.getElementById("eksag");
                                                        if(!this.checked) {
                                                            $('#eksag').removeClass('col-md-10');
                                                            $('#eksag').addClass('col-md-12');
                                                        } else {
                                                            $('#eksag').removeClass('col-md-12');
                                                            $('#eksag').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#eksag_foto_show").change(function() {
                                                        var e = document.getElementById("parts_eksag");
                                                        if(!this.checked) {
                                                            $('#parts_eksag').removeClass('table-condensed');
                                                            $('#parts_eksag').addClass('table-sm');
                                                        } else {
                                                            $('#parts_eksag').removeClass('table-sm');
                                                            $('#parts_eksag').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        {{ __('Κόστος Ανταλλακτικών: ')}}<strong>{{round($costPart5,2).('€')}}</strong>
                                        {{ __(' Κόστος Εργασιών:')}}<strong>{{round($costJob5,2).('€')}}</strong>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costJob5,2)+round($costPart5,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __('Φ.Π.Α. Ανταλλακτικών: ')}}<strong>{{round($fpaPart5,2).('€')}}</strong>
                                        {{ __(' Φ.Π.Α. Εργασιών:')}}<strong>{{round($fpaJob5,2).('€')}}</strong>
                                        {{ __(' Σύνολο Φ.Π.Α.:')}}<strong>{{round($fpaPart5,2)+round($fpaJob5,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($fpaPart5,2)+round($fpaJob5,2)+round($costJob5,2)+round($costPart5,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="eksag">
                                            <div class="table-responsive">
                                                <table id="parts_eksag" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλ/κό</th>
                                                        <th>Κόστος Ανταλ/κού</th>
                                                        <th>Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Συντ. Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Κόστος Εργασίας</th>
                                                        <th>Φ.Π.Α Εργασίας</th>
                                                        <th>Συντ. Φ.Π.Α Εργασίας</th>
                                                        <th>Τύπος</th>
                                                        <th>Ποσότητα</th>
                                                        <th>Ζημιά</th>
                                                        <th>Κωδικός Αντ/σώπου</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                        @if ($ergasia->id_ergasies == 5)
                                                            <tr>
                                                                <td>
                                                                    @foreach($parts as $part)
                                                                        @if ($part->id_parts == $ergasia->pivot->id_parts)
                                                                            {{ $part->part }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td class="td-alnright">
                                                                    {{ round($ergasia->pivot->Cost_part,2).'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_part == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_part.'%' }}
                                                                </td>
                                                                <td>
                                                                      {{ $ergasia->pivot->Cost_job.'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_job == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_job.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Type }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->quan }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->diax_fr_b }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->prod_code }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_eksag">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-eksag"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-bafes" role="tabpanel" aria-labelledby="v-pills-bafes-tab">
                    <?php $id_ergasia=6;?>
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details/'.$id_ergasia) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                @if ($ergasia->id_ergasies == 6)
                                                    <?php $count++ ?>
                                                @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Βαφές'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="bafes_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#bafes_foto_show").change(function() {
                                                        var e = document.getElementById("foto_bafes");
                                                        if(!this.checked) {
                                                            $('#foto_bafes').addClass('g-hide');
                                                        } else {
                                                            $('#foto_bafes').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#bafes_foto_show").change(function() {
                                                        var e = document.getElementById("bafes");
                                                        if(!this.checked) {
                                                            $('#bafes').removeClass('col-md-10');
                                                            $('#bafes').addClass('col-md-12');
                                                        } else {
                                                            $('#bafes').removeClass('col-md-12');
                                                            $('#bafes').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#bafes_foto_show").change(function() {
                                                        var e = document.getElementById("parts_bafes");
                                                        if(!this.checked) {
                                                            $('#parts_bafes').removeClass('table-condensed');
                                                            $('#parts_bafes').addClass('table-sm');
                                                        } else {
                                                            $('#parts_bafes').removeClass('table-sm');
                                                            $('#parts_bafes').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        {{ __('Κόστος Ανταλλακτικών: ')}}<strong>{{round($costPart6,2).('€')}}</strong>
                                        {{ __(' Κόστος Εργασιών:')}}<strong>{{round($costJob6,2).('€')}}</strong>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costJob6,2)+round($costPart6,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __('Φ.Π.Α. Ανταλλακτικών: ')}}<strong>{{round($fpaPart6,2).('€')}}</strong>
                                        {{ __(' Φ.Π.Α. Εργασιών:')}}<strong>{{round($fpaJob6,2).('€')}}</strong>
                                        {{ __(' Σύνολο Φ.Π.Α.:')}}<strong>{{round($fpaPart6,2)+round($fpaJob6,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($fpaPart6,2)+round($fpaJob6,2)+round($costJob6,2)+round($costPart6,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="bafes">
                                            <div class="table-responsive">
                                                <table id="parts_bafes" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλ/κό</th>
                                                        <th>Κόστος Ανταλ/κού</th>
                                                        <th>Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Συντ. Φ.Π.Α Ανταλ/κού</th>
                                                        <th>Κόστος Εργασίας</th>
                                                        <th>Φ.Π.Α Εργασίας</th>
                                                        <th>Συντ. Φ.Π.Α Εργασίας</th>
                                                        <th>Τύπος</th>
                                                        <th>Ποσότητα</th>
                                                        <th>Ζημιά</th>
                                                        <th>Κωδικός Αντ/σώπου</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                        @if ($ergasia->id_ergasies == 6)
                                                            <tr>
                                                                <td>
                                                                    @foreach($parts as $part)
                                                                        @if ($part->id_parts == $ergasia->pivot->id_parts)
                                                                            {{ $part->part }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td class="td-alnright">
                                                                    {{ round($ergasia->pivot->Cost_part,2).'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_part == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_part.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Cost_job.'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_job == 0)
                                                                        <input type="checkbox" dijobsabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_job.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Type }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->quan }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->diax_fr_b }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->prod_code }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_bafes">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-bafes"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-ergasiesnoantallaktika" role="tabpanel" aria-labelledby="v-pills-ergasiesnoantallaktika-tab">
                    <?php $id_part=1;?>
                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details_nop/'.$id_part) }}" target="" class="btn btn-primary">Προσθήκη Εργασίας</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                @if ($ergasia->id_ergasies != 3 && $ergasia->id_ergasies != 4 && $ergasia->id_ergasies != 5 && $ergasia->id_ergasies != 6 && $ergasia->id_ergasies != 55)
                                                    <?php $count++ ?>
                                                @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Εργασιών χωρίς ανταλλακτικά'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="job_no_part_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#job_no_part_foto_show").change(function() {
                                                        var e = document.getElementById("foto_no_part");
                                                        if(!this.checked) {
                                                            $('#foto_no_part').addClass('g-hide');
                                                        } else {
                                                            $('#foto_no_part').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#job_no_part_foto_show").change(function() {
                                                        var e = document.getElementById("j_no_part");
                                                        if(!this.checked) {
                                                            $('#j_no_part').removeClass('col-md-10');
                                                            $('#j_no_part').addClass('col-md-12');
                                                        } else {
                                                            $('#j_no_part').removeClass('col-md-12');
                                                            $('#j_no_part').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#job_no_part_foto_show").change(function() {
                                                        var e = document.getElementById("jobs_jobnopart");
                                                        if(!this.checked) {
                                                            $('#jobs_jobnopart').removeClass('table-condensed');
                                                            $('#jobs_jobnopart').addClass('table-sm');
                                                        } else {
                                                            $('#jobs_jobnopart').removeClass('table-sm');
                                                            $('#jobs_jobnopart').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        {{ __(' Κόστος Εργασιών:')}}<strong>{{round($costJobNoPart,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __(' Φ.Π.Α. Εργασιών:')}}<strong>{{round($fpaJobNoPart,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costJobNoPart,2)+round($fpaJobNoPart,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="j_no_part">
                                            <div class="table-responsive">
                                                <table id="jobs_jobnopart" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Εργασία</th>
                                                        <th>Κόστος Εργασίας</th>
                                                        <th>Φ.Π.Α Εργασίας</th>
                                                        <th>Συντ. Φ.Π.Α Εργασίας</th>
                                                        <th>Ζημιά</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                        @if ($ergasia->id_ergasies != 3 && $ergasia->id_ergasies != 4 && $ergasia->id_ergasies != 5 && $ergasia->id_ergasies != 6 && $ergasia->id_ergasies != 55)
                                                            <tr>
                                                                <td>
                                                                    @foreach($ergasies as $erg)
                                                                        @if ($erg->id_ergasies == $ergasia->pivot->id_ergasies)
                                                                            {{ $erg->ergasia }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->Cost_job.'€' }}
                                                                </td>
                                                                <td>
                                                                    @if ($ergasia->pivot->fpa_job == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->sint_fpa_job.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $ergasia->pivot->diax_fr_b }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_details_nop/'.$ergasia->pivot->id_ergasies.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details_nop/'.$ergasia->pivot->id_ergasies.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_no_part">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-nopart"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-proasfalistikos" role="tabpanel" aria-labelledby="v-pills-proasfalistikos-tab">
                    <?php $id_ergasia=55;?>
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_details/'.$id_ergasia) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                @if ($ergasia->id_ergasies == 55)
                                                    <?php $count++ ?>
                                                @endif
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Προασφαλιστικός'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="proasf_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#proasf_foto_show").change(function() {
                                                        var e = document.getElementById("foto_proasf");
                                                        if(!this.checked) {
                                                            $('#foto_proasf').addClass('g-hide');
                                                        } else {
                                                            $('#foto_proasf').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#proasf_foto_show").change(function() {
                                                        var e = document.getElementById("proasf");
                                                        if(!this.checked) {
                                                            $('#proasf').removeClass('col-md-10');
                                                            $('#proasf').addClass('col-md-12');
                                                        } else {
                                                            $('#proasf').removeClass('col-md-12');
                                                            $('#proasf').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#proasf_foto_show").change(function() {
                                                        var e = document.getElementById("parts_proasf");
                                                        if(!this.checked) {
                                                            $('#parts_proasf').removeClass('table-condensed');
                                                            $('#parts_proasf').addClass('table-sm');
                                                        } else {
                                                            $('#parts_proasf').removeClass('table-sm');
                                                            $('#parts_proasf').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="proasf">
                                            <div class="table-responsive">
                                                <table id="parts_proasf" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλλακτικό</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->parts_of_ergasies as $ergasia)
                                                        @if ($ergasia->id_ergasies == 55)
                                                            <tr>
                                                                <td>
                                                                    @foreach($parts as $part)
                                                                        @if ($part->id_parts == $ergasia->pivot->id_parts)
                                                                            {{ $part->part }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_details/'.$id_ergasia.'/'.$ergasia->pivot->id_parts) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_proasf">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-proasf"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-katastasi" role="tabpanel" aria-labelledby="v-pills-katastasi-tab">
                    @if($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                        <a href="{{URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_status') }}" target="" class="btn btn-primary">Προσθήκη Κατάστασης</a>
                    @else
                        <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_status') }}" target="" class="btn btn-primary">Προσθήκη Κατάστασης</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Κατάσταση') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-sm table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Κατάσταση</th>
                                                    <th>Ημερομηνία κατάστασης</th>
                                                    <th>Ημερομηνία διεκπαιρέωσης</th>
                                                    <th>Ενεργή</th>
                                                    <th>Παρατηρήσεις</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pragmatognomosini->status_of_ekth as $stat)
                                                    <tr @if($stat->pivot->Valid=='Όχι') style="background: grey" @endif>
                                                        <td>
                                                            @foreach($status as $sta)
                                                                @if ($sta->id_status == $stat->pivot->id_status)
                                                                    {{ $sta->Status }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td id="d1">{{$stat->pivot->Status_date}}
                                                            <script type="text/javascript">
                                                                $('#d1').datepicker({
                                                                    autoclose: true,
                                                                    format: 'dd-mm-yyyy',
                                                                    language: 'el',
                                                                    todayHighlight: true,
                                                                });
                                                            </script>
                                                        </td>
                                                        <td id="d2">{{$stat->pivot->Process_date}}
                                                            <script type="text/javascript">
                                                                $('#d2').datepicker({
                                                                    autoclose: true,
                                                                    format: 'dd-mm-yyyy',
                                                                    language: 'el',
                                                                    todayHighlight: true,
                                                                });
                                                            </script>
                                                        </td>
                                                        <td>
                                                            {{$stat->pivot->Valid}}
                                                        </td>
                                                        <td>
                                                            {{$stat->pivot->Notes}}
                                                        </td>
                                                        <td>
                                                            @if($stat->pivot->Valid=='Ναι')
                                                                @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_status/'.$stat->pivot->id_status) }}"
                                                                       target="" ><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @else
                                                                    <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_status/'.$stat->pivot->id_status) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($stat->pivot->Valid=='Ναι' && $stat->pivot->id_status >1 )
                                                                @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_status/'.$stat->pivot->id_status) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                @else
                                                                    <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_status/'.$stat->pivot->id_status) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                @endif
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-foto" role="tabpanel" aria-labelledby="v-pills-foto-tab">
                    @if ((Request::is('pragmatognomosines/*')))
                        <a href="{{route('pragmatognomosines.create_foto_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη φωτογραφιών</a>
                    @elseif ((\Request::is('ereunes/*')))
                        <a href="{{ route('pragmatognomosines.create_foto_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη φωτογραφιών</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($fotos as $foto)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Λίστα Φωτογραφιών'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="grid">
                                                @foreach($fotos as $index=>$foto)
                                                    <div>
                                                        @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                            <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_foto/'.$foto->id_foto) }}"
                                                               target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                        @else
                                                            <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_foto/'.$foto->id_foto) }}"
                                                               target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                        @endif
                                                        @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                            <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_foto/'.$foto->id_foto) }}"
                                                               target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                        @else
                                                            <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_foto/'.$foto->id_foto) }}"
                                                               target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                        @endif
                                                        <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                           data-lightbox="image-1"
                                                           data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                            <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                 width="400" height="400" alt="Επεξεργασία" class="img-thumbnail"/>{{ $foto->notes }}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-keimena" role="tabpanel" aria-labelledby="v-pills-keimena-tab">
                    @if ((Request::is('pragmatognomosines/*')))
                        <a href="{{route('pragmatognomosines.create_keimena_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη κειμένου</a>
                    @elseif ((\Request::is('ereunes/*')))
                        <a href="{{ route('pragmatognomosines.create_keimena_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη κειμένου</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Κειμένων') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="keimena_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#keimena_foto_show").change(function() {
                                                        var e = document.getElementById("foto_keimena");
                                                        if(!this.checked) {
                                                            $('#foto_keimena').addClass('g-hide');
                                                        } else {
                                                            $('#foto_keimena').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#keimena_foto_show").change(function() {
                                                        var e = document.getElementById("keimena");
                                                        if(!this.checked) {
                                                            $('#keimena').removeClass('col-md-10');
                                                            $('#keimena').addClass('col-md-12');
                                                        } else {
                                                            $('#keimena').removeClass('col-md-12');
                                                            $('#keimena').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#keimena_foto_show").change(function() {
                                                        var e = document.getElementById("keimena_list");
                                                        if(!this.checked) {
                                                            $('#keimena_list').removeClass('table-condensed');
                                                            $('#keimena_list').addClass('table-sm');
                                                        } else {
                                                            $('#keimena_list').removeClass('table-sm');
                                                            $('#keimena_list').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="keimena">
                                            <table id="keimena_list" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Κωδικός Κειμένου</th>
                                                    <th>Εκτύπωση</th>
                                                    <th>Σειρά εμφάνισης</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pragmatognomosini->keimena as $keimeno)
                                                    <tr>
                                                        <td>
                                                            @foreach($keimena as $keim)
                                                                @if ($keim->id_keimena == $keimeno->pivot->id_keimena)
                                                                    {{ $keim->Sort_descr }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td> {{ $keimeno->pivot->Print }} </td>
                                                        <td> {{ $keimeno->pivot->print_group }} </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_keimena/'.$keimeno->pivot->id_keimena) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_keimena/'.$keimeno->pivot->id_keimena) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_keimena/'.$keimeno->pivot->id_keimena) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_keimena/'.$keimeno->pivot->id_keimena) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_keimena">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-keimena"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-eksodaekthesis" role="tabpanel" aria-labelledby="v-pills-eksodaekthesis-tab">
                    @if($pragmatognomosini->id_diakrisi=="Π" || $pragmatognomosini->id_diakrisi=="ΠΕ")
                        <a href="{{route('pragmatognomosines.create_expen_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εξόδου</a>
                    @else
                        <a href="{{ route('pragmatognomosines.create_expen_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εξόδου</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosini->expen_ekth as $expen_ekth)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Λίστα Εξόδων'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-sm table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Έξοδο</th>
                                                    <th>Ποσότητα</th>
                                                    <th>Αξία</th>
                                                    <th>Αξία Φ.Π.Α.</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pragmatognomosini->expen_ekth as $expen_ekth)
                                                    <tr>
                                                        <td>
                                                            @foreach($expenses as $expen)
                                                                @if ($expen->id_expenses == $expen_ekth->pivot->id_expenses)
                                                                    {{ $expen->eksodo }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth->pivot->Quan}}
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth->pivot->Value.'€'}}
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth->pivot->Value_fpa.'€'}}
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_expen_ekth/'.$expen_ekth->pivot->id_expenses) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_expen_ekth/'.$expen_ekth->pivot->id_expenses) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_expen_ekth/'.$expen_ekth->pivot->id_expenses) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_expen_ekth/'.$expen_ekth->pivot->id_expenses) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-proyparxouses" role="tabpanel" aria-labelledby="v-pills-proyparxouses-tab">
                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/add_proiparxouses') }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php $count=0?>
                                            @foreach($pragmatognomosini->proiparxouses as $proip)
                                                <?php $count++ ?>
                                            @endforeach
                                            <h4 class="heading-small text-center text-muted">
                                                <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                                <strong>{{ __('Λίστα Ανταλλακτικών Πρϋπάρχουσων Ζημιών'.' '.'('.$count.')') }}</strong>
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                <li class="nav-item">
                                                    <input type="checkbox"  data-toggle="toggle" id="proip_foto_show" class="btn btn-sm btn-primary" style="margin: 4px;">
                                                </li>
                                                <script type="text/javascript">
                                                    $("#proip_foto_show").change(function() {
                                                        var e = document.getElementById("foto_proip");
                                                        if(!this.checked) {
                                                            $('#foto_proip').addClass('g-hide');
                                                        } else {
                                                            $('#foto_proip').removeClass('g-hide');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#proip_foto_show").change(function() {
                                                        var e = document.getElementById("proip");
                                                        if(!this.checked) {
                                                            $('#proip').removeClass('col-md-10');
                                                            $('#proip').addClass('col-md-12');
                                                        } else {
                                                            $('#proip').removeClass('col-md-12');
                                                            $('#proip').addClass('col-md-10');
                                                        }
                                                    });
                                                </script>
                                                <script type="text/javascript">
                                                    $("#proip_foto_show").change(function() {
                                                        var e = document.getElementById("parts_proip");
                                                        if(!this.checked) {
                                                            $('#parts_proip').removeClass('table-condensed');
                                                            $('#parts_proip').addClass('table-sm');
                                                        } else {
                                                            $('#parts_proip').removeClass('table-sm');
                                                            $('#parts_proip').addClass('table-condensed');
                                                        }
                                                    });
                                                </script>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6>
                                        {{ __('Κόστος Ανταλλακτικών / Εργασιών: ')}}<strong>{{round($costProiparx,2).('€')}}</strong>
                                    </h6>
                                    <h6>
                                        {{ __('Φ.Π.Α. Ανταλλακτικών / Εργασιών:: ')}}<strong>{{round($fpaProiparx,2).('€')}}</strong>
                                    </h6>
                                    <h5>
                                        {{ __(' Σύνολο:')}}<strong>{{round($costProiparx,2)+round($fpaProiparx,2).('€')}}</strong>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="proip">
                                            <div class="table-responsive">
                                                <table id="parts_proip" class="table-sm table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Ανταλ/κό</th>
                                                        <th>Κατηγορία</th>
                                                        <th>Φ.Π.Α</th>
                                                        <th>Κόστος</th>
                                                        <th>Συντ. Φ.Π.Α</th>
                                                        <th>Ποσότητα</th>
                                                        <th>Ζημιά</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->proiparxouses as $proip)
                                                            <tr>
                                                                <td>
                                                                    @foreach($parts as $part)
                                                                        @if ($part->id_parts == $proip->pivot->id_parts)
                                                                            {{ $part->part }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @if($proip->pivot->id_categ==1)
                                                                        {{ 'Ανταλλακτικό' }}
                                                                    @elseif($proip->pivot->id_categ==2)
                                                                        {{ 'Αντικατάσταση' }}
                                                                    @elseif($proip->pivot->id_categ==3)
                                                                        {{ 'Επισκευή' }}
                                                                    @elseif($proip->pivot->id_categ==4)
                                                                        {{ 'Εξαγωγή και επανατοποθέτηση' }}
                                                                    @elseif($proip->pivot->id_categ==5)
                                                                        {{ 'Βαφές' }}
                                                                    @elseif($proip->pivot->id_categ==6)
                                                                        {{ 'Συνολικά' }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if ($proip->pivot->fpa_job == 0)
                                                                        <input type="checkbox" disabled>
                                                                    @else
                                                                        <input type="checkbox" disabled checked>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ $proip->pivot->value.'€' }}
                                                                </td>
                                                                <td>
                                                                    {{ $proip->pivot->sint_fpa_job.'%' }}
                                                                </td>
                                                                <td>
                                                                    {{ $proip->pivot->quan }}
                                                                </td>
                                                                <td>
                                                                    @if ($proip->pivot->diax_fr_b != "Κ")
                                                                        {{ $proip->pivot->diax_fr_b }}
                                                                    @else
                                                                        {{ " " }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_proiparxouses/'.$proip->pivot->id_parts.'/'.$proip->pivot->id_categ.'/'.$proip->pivot->diax_fr_b) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_proiparxouses/'.$proip->pivot->id_parts.'/'.$proip->pivot->id_categ.'/'.$proip->pivot->diax_fr_b) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                </td>
                                                            </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-2 g-hide" id="foto_proip">
                                            <div class="row">
                                                <div id="grid_det">
                                                    @foreach($fotos as $foto)
                                                        <div>
                                                            <a href="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                               data-lightbox="image-proip"  data-title="{{'Φωτογραφία:'.' '.$foto->file_name}}">
                                                                <img src="{{ asset('/images/foto/'.$foto->id_ekthesis.'/'.$foto->file_name) }}"
                                                                     width="200" height="200" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-synergeia" role="tabpanel" aria-labelledby="v-pills-synergeia-tab">
                    @if($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
{{--                    @if ((Request::is('pragmatognomosines/*')))--}}
                        <a href="{{route('pragmatognomosines.create_synergeia_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη συνεργείου</a>
{{--                    @elseif ((\Request::is('ereunes/*')))--}}
                    @else
                        <a href="{{ route('pragmatognomosines.create_synergeia_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη συνεργείου</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosini->synergeia as $synergeio)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Λίστα Συνεργείων'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Συνεργείο</th>
                                                    <th>1η επίσκεψη</th>
                                                    <th>2η επίσκεψη</th>
                                                    <th>3η επίσκεψη</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pragmatognomosini->synergeia as $synergeio)
                                                    <tr>
                                                        <td>
                                                            @foreach($synergeia as $synerg)
                                                                @if ($synerg->id_synergeia == $synergeio->pivot->id_synergeia)
                                                                    {{ $synerg->Name_syner }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td id="d1">{{$synergeio->pivot->Date_episkepsis}}
                                                            <script type="text/javascript">
                                                                $('#d1').datepicker({
                                                                    autoclose: true,
                                                                    format: 'dd-mm-yyyy',
                                                                    language: 'el',
                                                                    todayHighlight: true,
                                                                });
                                                            </script>
                                                        </td>
                                                        <td id="d2">{{$synergeio->pivot->Date_episkepsis2}}
                                                            <script type="text/javascript">
                                                                $('#d2').datepicker({
                                                                    autoclose: true,
                                                                    format: 'dd-mm-yyyy',
                                                                    language: 'el',
                                                                    todayHighlight: true,
                                                                });
                                                            </script>
                                                        </td>
                                                        <td id="d3">{{$synergeio->pivot->Date_episkepsis3}}
                                                            <script type="text/javascript">
                                                                $('#d3').datepicker({
                                                                    autoclose: true,
                                                                    format: 'dd-mm-yyyy',
                                                                    language: 'el',
                                                                    todayHighlight: true,
                                                                });
                                                            </script>
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_synergeia/'.$synergeio->pivot->id_synergeia) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_synergeia/'.$synergeio->pivot->id_synergeia) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_synergeia/'.$synergeio->pivot->id_synergeia) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_synergeia/'.$synergeio->pivot->id_synergeia) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-provlepsis" role="tabpanel" aria-labelledby="v-pills-provlepsis-tab">
                    <?php $count=0?>
                    @foreach($provlepseis as $prov)
                       <?php $count++ ?>
                    @endforeach
                    @if ($count<3)
                        @if($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                            <a href="{{route('pragmatognomosines.create_provlep_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη πρόβλεψης</a>
                        @else
                            <a href="{{ route('pragmatognomosines.create_provlep_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη πρόβλεψης</a>
                        @endif
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Προβλέψεις') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-sm table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Πρόβλεψη</th>
                                                    <th>Ημερομηνία</th>
                                                    <th>Ποσό</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($provlepseis as $prov)
                                                    <tr>
                                                        <td>
                                                            {{ $prov->id_provlepseis }}
                                                        </td>
                                                        <td>
                                                            {{$prov->Date_provl}}
                                                        </td>
                                                        <td>
                                                            {{$prov->Amount.'€'}}
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_provlep/'.$prov->id_provlepseis) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_provlep/'.$prov->id_provlepseis) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_provlep/'.$prov->id_provlepseis) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_provlep/'.$prov->id_provlepseis) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-praktoreia" role="tabpanel" aria-labelledby="v-pills-praktoreia-tab">
                    @if ((Request::is('pragmatognomosines/*')))
                        <a href="{{route('pragmatognomosines.create_praktoreia_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη πρακτορείου</a>
                    @elseif ((\Request::is('ereunes/*')))
                        <a href="{{ route('pragmatognomosines.create_praktoreia_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη πρακτορείου</a>
                    @endif
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <?php $count=0?>
                                        @foreach($pragmatognomosini->praktoreia as $praktoreio)
                                            <?php $count++ ?>
                                        @endforeach
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                            <strong>{{ __('Λίστα Πρακτορείων'.' '.'('.$count.')') }}</strong>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="praktoreio" class="table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Πρακτορείο</th>
                                                        <th>Επεξεργασία</th>
                                                        <th>Διαγραφή</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosini->praktoreia as $praktoreio)
                                                        <tr>
                                                            <td>
                                                                @foreach($praktoreia as $prakt)
                                                                    @if ($prakt->id_praktoreio == $praktoreio->pivot->id_praktoreio)
                                                                        {{ $prakt->eponymia }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @else
                                                                    <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}"
                                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                    <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                @else
                                                                    <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}"
                                                                       target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">
                    <form method="post" action="{{ route('pragmatognomosines.update_note', $pragmatognomosini->id_ekthesis) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h6 class="heading-small text-center text-muted">
                                            <strong>{{ __('Παρατηρήσεις') }}</strong>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                                           value="{{ $pragmatognomosini->id_ekthesis }}" disabled autofocus>
                                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea id="Notes" name="Notes" style="width: 650px; height: 250px;">
                                                    {{ $pragmatognomosini->Notes }}
                                                </textarea>
                                                <script>
                                                    bkLib.onDomLoaded(function() {
                                                        // nicEditors.allTextAreas()
                                                        new nicEditor({iconsPath : '/js/nicEditorIcons.gif'}).panelInstance('Notes');
                                                    });
                                                </script>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-eksodasynergati" role="tabpanel" aria-labelledby="v-pills-eksodasynergati-tab">
                    @if($pragmatognomosini->id_diakrisi=="Π" || $pragmatognomosini->id_diakrisi=="ΠΕ")
                        <a href="{{route('pragmatognomosines.create_expen_partner_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εξόδου συνεργάτη</a>
                    @else
                        <a href="{{ route('pragmatognomosines.create_expen_partner_ekth',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εξόδου συνεργάτη</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosini->expen_ekth_partner as $expen_ekth_part)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Λίστα Εξόδων'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-sm table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Έξοδο</th>
                                                    <th>Συνεργάτης</th>
                                                    <th>Ποσότητα</th>
                                                    <th>Αξία</th>
                                                    <th>Αξία Φ.Π.Α.</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pragmatognomosini->expen_ekth_partner as $expen_ekth_part)
                                                    <tr>
                                                        <td>
                                                            @foreach($expenses as $expen)
                                                                @if ($expen->id_expenses == $expen_ekth_part->pivot->id_expenses)
                                                                    {{ $expen->eksodo }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($pragmatognomones as $pragm)
                                                                @if ($pragm->id == $expen_ekth_part->pivot->id_users)
                                                                    {{ $pragm->L_name.' '.$pragm->F_name }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth_part->pivot->quan}}
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth_part->pivot->value.'€'}}
                                                        </td>
                                                        <td>
                                                            {{$expen_ekth_part->pivot->value_fpa.'€'}}
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_expen_partner_ekth/'.$expen_ekth_part->pivot->id_expenses.'/'.$expen_ekth_part->pivot->id_users) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_expen_partner_ekth/'.$expen_ekth_part->pivot->id_expenses.'/'.$expen_ekth_part->pivot->id_users) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_expen_partner_ekth/'.$expen_ekth_part->pivot->id_expenses.'/'.$expen_ekth_part->pivot->id_users) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_expen_partner_ekth/'.$expen_ekth_part->pivot->id_expenses.'/'.$expen_ekth_part->pivot->id_users) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-involv_cars" role="tabpanel" aria-labelledby="v-pills-involv_cars-tab">
                    @if($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                        <a href="{{route('pragmatognomosines.create_involv_cars',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εμπλεκόμενου οχήματος</a>
                    @else
                        <a href="{{ route('pragmatognomosines.create_involv_cars',$pragmatognomosini->id_ekthesis) }}" target="" class="btn btn-primary">Προσθήκη εμπλεκόμενου οχήματος</a>
                    @endif
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Έκθεση:'.'  '.$pragmatognomosini->id_ekthesis) }}</strong>
                                        <strong>{{ __('Εμπλεκόμενα οχήματα') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="synergeio" class="table table-sm table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Όχημα</th>
                                                    <th>Εμπλεκόμενος</th>
                                                    <th>Εταιρεία</th>
                                                    <th>Χιλιόμετρα</th>
                                                    <th>Αξία</th>
                                                    <th>Οδηγός</th>
                                                    <th>Παρατηρήσεις</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($involv_cars as $inv_car)
                                                    <tr>
                                                        <td>
                                                            @foreach($oximata_pathon as $oxim)
                                                                @if($inv_car->id_oxima == $oxim->id_oximata )
                                                                    {{ $oxim->Ar_kyklo }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($pathontes as $person)
                                                                @if($inv_car->id_person == $person->id_person )
                                                                    {{ $person->L_name.' '.$person->F_name }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($companies as $comp)
                                                                @if($inv_car->id_company == $comp->id_company )
                                                                    {{ $comp->comp_name }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            {{ $inv_car->xiliometra }}
                                                        </td>
                                                        <td>
                                                            {{ $inv_car->value_car.'€' }}
                                                        </td>
                                                        <td>
                                                            {{ $inv_car->driver }}
                                                        </td>
                                                        <td>
                                                            {{ $inv_car->note }}
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_involv_cars/'.$inv_car->id_oxima.'/'.$inv_car->id_person) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_involv_cars/'.$inv_car->id_oxima.'/'.$inv_car->id_person) }}"
                                                                   target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($pragmatognomosini->id_diakrisi=='Π' || $pragmatognomosini->id_diakrisi=='ΠΕ')
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/delete_involv_cars/'.$inv_car->id_oxima.'/'.$inv_car->id_person) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/delete_involv_cars/'.$inv_car->id_oxima.'/'.$inv_car->id_person) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">...</div>
            </div>
        </div>
{{--        <div class="col-2" id="rmenu">--}}
{{--            @include('rmenu')--}}
{{--        </div>--}}
    </div>

    @include('_modals.diakrisisModal', [ 'diakrisis' => $diakrisis])
    @include('_modals.nomoiModal',['nomoi'=>$nomoi])
    @include('_modals.placeModal',['place'=> $accedent_places])
    @include('_modals.arxiModal',['arxi'=> $arxes_ekdosis_eggrafon])
    @include('_modals.compModalPathon',['company'=> $company])
    @include('_modals.compModalPathonReal',['company'=> $company])
    @include('_modals.compModalYpaitiou',['company'=> $company])


@endsection
