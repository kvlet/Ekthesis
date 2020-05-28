@extends('forms')

@section('formsdetails')
    <div class="row">
        @if ((Request::is('pragmatognomosines/*')))
            <div class="col-2 menu-text-size">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab" aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
                    <a class="nav-link" id="v-pills-antikatastasis-tab" data-toggle="pill" href="#v-pills-antikatastasis" role="tab" aria-controls="v-pills-antikatastasis" aria-selected="false" style="color: red">Αντικαταστάσεις</a>
                    <a class="nav-link" id="v-pills-epanafores-tab" data-toggle="pill" href="#v-pills-epanafores" role="tab" aria-controls="v-pills-epanafores" aria-selected="false" style="color: red">Επαναφορές</a>
                    <a class="nav-link" id="v-pills-eksagogi-tab" data-toggle="pill" href="#v-pills-eksagogi" role="tab" aria-controls="v-pills-eksagogi" aria-selected="false" style="color: red">Εξαγωγή/Επανατοποθέτηση</a>
                    <a class="nav-link" id="v-pills-bafes-tab" data-toggle="pill" href="#v-pills-bafes" role="tab" aria-controls="v-pills-bafes" aria-selected="false" style="color: red">Βαφές</a>
                    <a class="nav-link" id="v-pills-ergasiesNoAntallaktika-tab" data-toggle="pill" href="#v-pills-ergasiesnoantallaktika" role="tab" aria-controls="v-pills-ergasiesnoantallaktika" aria-selected="false" style="color: red">Εργασίες χωρίς ανταλλακτικά</a>
                    <a class="nav-link" id="v-pills-proasfalistikos-tab" data-toggle="pill" href="#v-pills-proasfalistikos" role="tab" aria-controls="v-pills-proasfalistikos" aria-selected="false" style="color: red">Προασφαλιστικός</a>
                    <a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
                    <a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false" style="color: black">Κατάσταση</a>
                    <a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false" style="color: red">Έξοδα έκθεσεις</a>
                    <a class="nav-link" id="v-pills-proyparxouses-tab" data-toggle="pill" href="#v-pills-proyparxouses" role="tab" aria-controls="v-pills-proyparxouses" aria-selected="false" style="color: red">Προυπάρχουσες</a>
                    <a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
                    <a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false">Προβλέψεις</a>
                    <a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false" >Πρακτορεία</a>
                    <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
                    <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false" style="color: red">Έξοδα συνεργάτη</a>
                </div>
            </div>
        @elseif ((\Request::is('ereunes/*')))
            <div class="col-2 menu-text-size">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab" aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
                    <a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
                    <a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false" style="color: black">Κατάσταση</a>
                    <a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false" style="color: red">Έξοδα έκθεσεις</a>
                    <a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
                    <a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false" style="color: red">Προβλέψεις</a>
                    <a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false" >Πρακτορεία</a>
                    <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
                    <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false" style="color: red">Έξοδα συνεργάτη</a>
                </div>
            </div>
        @endif
        <div class="col-8">
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
                                                    <select class="form-control form-select" id="id_accedent_place" name="id_accedent_place">
                                                        <option selected value value=-1>{{ " Επιλέξτε Τόπο Ατυχήματος " }}</option>
                                                        @foreach($accedent_places as $accedent_place)
                                                            <option value="{{$accedent_place->id_accedent_place}}" @if($pragmatognomosini->id_accedent_place == $accedent_place->id_accedent_place) selected @endif>{{ $accedent_place->Place}}</option>
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
                                                    <input type="text" name="date_dikasimou" id="Date_dikasimou" data-provide="datepicker" placeholder="HH-MM-YYYY"
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
                                                        <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compModal">

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
                                                        <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compModal">

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
                                                                            <button id="newreccomp" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#compModal">

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
                <div class="tab-pane fade" id="v-pills-antikatastasis" role="tabpanel" aria-labelledby="v-pills-antikatastasis-tab">...</div>
                <div class="tab-pane fade" id="v-pills-epanafores" role="tabpanel" aria-labelledby="v-pills-epanafores-tab">...</div>
                <div class="tab-pane fade" id="v-pills-eksagogi" role="tabpanel" aria-labelledby="v-pills-eksagogi-tab">...</div>
                <div class="tab-pane fade" id="v-pills-bafes" role="tabpanel" aria-labelledby="v-pills-bafes-tab">...</div>
                <div class="tab-pane fade" id="v-pills-ergasiesnoantallaktika" role="tabpanel" aria-labelledby="v-pills-ergasiesnoantallaktika-tab">...</div>
                <div class="tab-pane fade" id="v-pills-proasfalistikos" role="tabpanel" aria-labelledby="v-pills-proasfalistikos-tab">...</div>
                <div class="tab-pane fade" id="v-pills-katastasi" role="tabpanel" aria-labelledby="v-pills-katastasi-tab">...</div>
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
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Κειμένων') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="praktoreio" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Κωδικός Κειμένου</th>
                                                    <th>Εκτύπωση</th>
                                                    <th>Σειρά εμφάνισης</th>
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
                                                                <a href="{{  URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_keimena/'.$keimeno->pivot->id_keimena) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{  URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_keimena/'.$keimeno->pivot->id_keimena) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <form action=" " method="post">
{{--                                                            <form action=" {{ action('PragmController@destroy_keimena_ekth',['id_ekth'=>$pragmatognomosini->id_ekthesis,'id_keim'=>$keimeno->pivot->id_keimena]) }} " method="post">--}}
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger" style="background-color:transparent; border-color:transparent;">
                                                                    <img src="/images/delete.jpg" height="25"/>
                                                                </button>
                                                            </form>
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
                <div class="tab-pane fade" id="v-pills-eksodaekthesis" role="tabpanel" aria-labelledby="v-pills-eksodaekthesis-tab">...</div>
                <div class="tab-pane fade" id="v-pills-proyparxouses" role="tabpanel" aria-labelledby="v-pills-proyparxouses-tab">...</div>
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
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Συνεργείων') }}</strong>
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
                                                                <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_synergeia/'.$synergeio->pivot->id_synergeia) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @else
                                                                <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_synergeia/'.$synergeio->pivot->id_synergeia) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <form action=" " method="post">
                                                                {{--                                                            <form action=" {{ action('PragmController@destroy_keimena_ekth',['id_ekth'=>$pragmatognomosini->id_ekthesis,'id_keim'=>$keimeno->pivot->id_keimena]) }} " method="post">--}}
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger" style="background-color:transparent; border-color:transparent;">
                                                                    <img src="/images/delete.jpg" height="25"/>
                                                                </button>
                                                            </form>
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
                <div class="tab-pane fade" id="v-pills-provlepsis" role="tabpanel" aria-labelledby="v-pills-provlepsis-tab">...</div>
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
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Λίστα Πρακτορείων') }}</strong>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="praktoreio" class="table table-bordered table-hover" style="width:100%">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Πρακτορείο</th>
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
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis.'/edit_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @else
                                                                    <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis.'/edit_praktoreia/'.$praktoreio->pivot->id_praktoreio) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <form action=" " method="post">
                                                                    {{--                                                            <form action=" {{ action('PragmController@destroy_keimena_ekth',['id_ekth'=>$pragmatognomosini->id_ekthesis,'id_keim'=>$keimeno->pivot->id_keimena]) }} " method="post">--}}
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-danger" style="background-color:transparent; border-color:transparent;">
                                                                        <img src="/images/delete.jpg" height="25"/>
                                                                    </button>
                                                                </form>
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
                    <form method="post" action="{{ route('pragmatognomosines.update', $pragmatognomosini->id_ekthesis) }}" autocomplete="off">
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
                                                <textarea id="Note" name="Note" style="width: 650px; height: 250px;">
                                                    {{ $pragmatognomosini->Notes }}
                                                </textarea>
                                                <script>
                                                    bkLib.onDomLoaded(function() {
                                                        // nicEditors.allTextAreas()
                                                        new nicEditor({iconsPath : '/js/nicEditorIcons.gif'}).panelInstance('Note');
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
                                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-eksodasynergati" role="tabpanel" aria-labelledby="v-pills-eksodasynergati-tab">...</div>
            </div>
        </div>
        <div class="col-2" id="rmenu">
            @include('rmenu')
        </div>
    </div>

    @include('_modals.diakrisisModal', [ 'diakrisis' => $diakrisis])
    @include('_modals.nomoiModal',['nomoi'=>$nomoi])
    @include('_modals.placeModal',['place'=> $accedent_places])
    @include('_modals.arxiModal',['arxi'=> $arxes_ekdosis_eggrafon])
    @include('_modals.compModal',['company'=> $company])


@endsection
