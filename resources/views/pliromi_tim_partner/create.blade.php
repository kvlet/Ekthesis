@extends('forms')

@section('formsdetails')
    <form id="create_pliromi_tim_partner_form" method="post" action="{{ route('timol_partner.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Πληρωμή Τιμολογίου Συνεργάτη') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Ar_timologio_partner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Ar_timologio_partner">{{ __('Αρ. Τιμολ. Συνεργάτη') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text"  name="Ar_timologio_partner" id="Ar_timologio_partner"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_timologio_partner') ? ' is-invalid' : '' }}"
                                           value="{{ old('Ar_timologio_partner') }}" required>
                                    @if ($errors->has('Ar_timologio_partner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Ar_timologio_partner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_partner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_partner">{{ __('Συνεργάτης') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_partner" name="id_partner" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Συνεργάτη " }}</option>
                                        @foreach($pragmatognomones as $pragmat)
                                            <option value="{{$pragmat->id}}" @if(old('id_partner') == $pragmat->id) selected @endif>{{ $pragmat->L_name.' '.$pragmat->F_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_partner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_partner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_grafeio">{{ __('Γραφείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_grafeio" name="id_grafeio" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Γραφείο " }}</option>
                                        @foreach($grafeia as $grafeiο)
                                            <option value="{{$grafeiο->id_grafeio}}" @if(old('id_grafeio') == $grafeiο->id_grafeio) selected @endif>{{ $grafeiο->Name }}</option>
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
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Date_timol') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_timol">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="Date_timol" id="Date_timol" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_timol') ? ' is-invalid' : '' }}"
                                           value="{{ old('Date_timol') }}"  required>
                                    <script type="text/javascript">
                                        $('#Date_timol').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_timol'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_timol') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value">{{ __('Ποσό') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Value" id="Value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value') ? ' is-invalid' : '' }}"
                                           value="{{ old('Value') }}" required onchange="posofpa()">
                                    <script>
                                        function posofpa(){
                                            let fpa = document.getElementById("fpa").value;
                                            let poso = document.getElementById("Value").value;
                                            let pfpa=0;
                                            if (fpa != null){
                                                pfpa = (poso*fpa/100);

                                            }else{
                                                pfpa  = (poso*24/100);
                                            }
                                            document.getElementById("Value_me_fpa").value = parseFloat(poso)+parseFloat(pfpa);
                                        }
                                    </script>
                                    @if ($errors->has('Value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('fpa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fpa">{{ __('Φ.Π.Α.') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="fpa" id="fpa"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fpa') ? ' is-invalid' : '' }}"
                                           value="{{ old('fpa') }}" required onchange="posofpa()">
                                    @if ($errors->has('fpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Value_me_fpa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value_me_fpa">{{ __('Ποσό με Φ.Π.Α.') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Value_me_fpa" id="Value_me_fpa"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value_me_fpa') ? ' is-invalid' : '' }}"
                                           value="{{ old('Value_me_fpa') }}" required>
                                    @if ($errors->has('Value_me_fpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Value_me_fpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Valid">{{ __(' Έγκυρο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Valid" name="Valid" required disabled>
                                        <option value="true" selected="selected">Έγκυρο</option>
                                        <option value="false">Άκυρο</option>
                                    </select>
                                    @if ($errors->has('Valid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Valid') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Parakratisi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Parakratisi">{{ __(' Παρακράτηση') }} </label>
                                    <select class="form-control form-select" id="Parakratisi" name="Parakratisi" onchange="parakr()">
                                        <option value="true" selected="selected">Ναι</option>
                                        <option value="false">Όχι</option>
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
                        </div>
                        <div class="row">
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
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Notes') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Notes">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="Notes" type="hidden">
                                    <div id="editor_pliromi_partner" style="height: 150px">
                                        {{--                                        <p> </p>--}}
                                    </div>
                                    <script>
                                        var quill = new Quill('#editor_pliromi_partner', {
                                            modules: {
                                                toolbar: [
                                                    [{ 'size': ['small', false, 'large', 'huge'] }],
                                                    ['bold', 'italic', 'underline', 'strike'],
                                                    [{color: ['black', 'red', 'blue', 'yellow', 'orange', 'white']}],
                                                    [{ 'background': ['black', 'red', 'blue', 'yellow', 'orange', 'white'] }],
                                                    [{ 'align': ['', 'center', 'justify'] }],
                                                    ['link', 'image'],
                                                    [{ list: 'ordered' }, { list: 'bullet' }]
                                                ]
                                            },
                                            placeholder: 'Πληκτρολογίστε εδώ το κείμενο...',
                                            theme: 'snow'
                                        });

                                        var form = document.querySelector('form');
                                        form.onsubmit = function() {
                                            // Populate hidden form on submit
                                            var note = document.querySelector('input[name=Notes]');
                                            // note.value = JSON.stringify(quill.getContents());
                                            note.value = quill.container.firstChild.innerHTML;
                                        };
                                    </script>
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
                                <a href="{{  URL('timol_partner/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection



