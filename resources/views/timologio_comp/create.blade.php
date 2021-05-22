@extends('forms')

@section('formsdetails')
    <form id="create_tim_comp_form" method="post" action="{{ route('timol_compl.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Εισαγωγή Τιμολογίου Εταιρείας') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_grafeio">{{ __('Γραφείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_grafeio" name="id_grafeio" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Γραφείο " }}</option>
                                        @foreach($grafeia as $grafeio)
                                            <option value="{{$grafeio->id_grafeio}}" @if(old('id_grafeio') ==$grafeio->id_grafeio) selected @endif>{{ $grafeio->Name }}</option>
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
                                    <select class="form-control form-select" id="id_company" name="id_company" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Εταιρεία " }}</option>
                                        @foreach($companies as $comp)
                                            <option value="{{$comp->id_company}}" @if(old('id_company') == $comp->id_company) selected @endif>{{ $comp->comp_name }}</option>
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
                                           value="{{ old('Ar_timologiou') }}" required>
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
                                           value="{{ old('Date_ekdosis') }}"  required>
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
                                           value="{{ old('fpa') }}" placeholder="24">
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
                                    <select class="form-control form-select" id="Valid" name="Valid" required disabled>
                                        <option value="Ναι" selected="selected">Έγκυρο</option>
                                        <option value="Όχι">Άκυρο</option>
                                    </select>
                                    @if ($errors->has('Valid'))
                                        <span class="invalid-feedback" role="alert">
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
                                           value="{{ old('Geniko_synolo') }}" required >
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
                                           value="{{ old('Merikos_pliroteo') }}" required onchange="ypoloipo()">
                                    <script>
                                        function ypoloipo(){
                                            let merP = document.getElementById("Merikos_pliroteo").value;
                                            let eksodaTim = document.getElementById("Eksoda_timologion").value;
                                            document.getElementById("Ypoloipo").value = parseFloat(merP)+parseFloat(eksodaTim);
                                        }
                                    </script>
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
                                           value="{{ old('Eksoda_timologion') }}" required onchange="ypoloipo()">
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
                                    <select class="form-control form-select" id="Parakratisi" name="Parakratisi" onchange="parakr()">
                                        <option value="Ναι" selected="selected">Ναι</option>
                                        <option value="Όχι">Όχι</option>
                                    </select>
                                    <script>
                                        function parakr() {
                                            let x = document.getElementById("Parakratisi").value;
                                            if (x == 'true') {
                                                document.getElementById("Pososto_parakr").disabled = false;
                                                document.getElementById("Pososto_parakr").setAttribute("required","");
                                                document.getElementById("Poso_parakr").disabled = false;
                                                document.getElementById("Poso_parakr").required = true;
                                            } else {
                                                document.getElementById("Pososto_parakr").disabled = true;
                                                document.getElementById("Pososto_parakr").removeAttribute("required");
                                                document.getElementById("Poso_parakr").disabled = true;
                                                document.getElementById("Poso_parakr").required = false;
                                                document.getElementById("Pososto_parakr").value="";
                                                document.getElementById("Poso_parakr").value="";
                                            }
                                        }
                                    </script>
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
                                           value="{{ old('Pososto_parakr') }}"  >
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
                                           value="{{ old('Poso_parakr') }}" >
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
                                           value="{{ old('Ypoloipo') }}" disabled>
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
                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('timol_compl/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection




