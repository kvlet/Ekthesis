@extends('forms')

@section('formsdetails')
    <form id="edit_esoda_oxima_form" method="post" action="{{ route('car_income.update',$esodo_oxima->id_esoda_oximatos) }}" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Έσοδα οχήματος') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_esoda_oximatos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_esoda_oximatos">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_esoda_oximatos" id="id_esoda_oximatos"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_esoda_oximatos') ? ' is-invalid' : '' }}"
                                           value="{{ $esodo_oxima->id_esoda_oximatos }}" disabled autofocus>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('date_esoda') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="date_esoda">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="date_esoda" id="date_esoda" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('date_esoda') ? ' is-invalid' : '' }}"
                                           value="{{ $esodo_oxima->date_esoda }}"  required>
                                    <script type="text/javascript">
                                        $('#date_esoda').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('date_esoda'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_esoda') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_accident_place') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_accident_place">{{ __('Τόπος') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_accident_place" name="id_accident_place" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Τόπο " }}</option>
                                        @foreach($accedent_places as $place)
                                            <option value="{{$place->id_accident_place}}" @if($esodo_oxima->id_accident_place == $place->id_accident_place) selected @endif>{{ $place->Place }}</option>
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
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('km') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="km">{{ __('Χιλιόμετρα') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="km" id="km"
                                           class="form-control form-input form-control-alternative{{ $errors->has('km') ? ' is-invalid' : '' }}"
                                           value="{{ $esodo_oxima->km }}" required>
                                    @if ($errors->has('km'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('km') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="value">{{ __('Αξία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="value" id="value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                           value="{{ $esodo_oxima->value }}" required>
                                    @if ($errors->has('value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('value') }}</strong>
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
                                            <option value="{{$comp->id_company}}" @if($esodo_oxima->id_company == $comp->id_company) selected @endif>{{ $comp->comp_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_company'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Έκθεση') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_ekthesis" name="id_ekthesis" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Έκθεση " }}</option>
                                        @foreach($ekthesis as $ekth)
                                            <option value="{{$ekth->id_ekthesis}}" @if($esodo_oxima->id_ekthesis == $ekth->id_ekthesis) selected @endif>{{ $ekth->id_ekthesis }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_ekthesis'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_ekthesis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('mark_del') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="mark_del" name="mark_del" required>
                                        <option value="Ναι">Ναι</option>
                                        <option value="Όχι" selected="selected">Όχι</option>
                                    </select>
                                    @if ($errors->has('mark_del'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mark_del') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('notes') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="notes">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="notes" type="hidden">
                                    <div id="editor_esoda_ox" style="height: 150px">
                                        {{--                                        <p> </p>--}}
                                    </div>
                                    <script>
                                        var quill = new Quill('#editor_esoda_ox', {
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
                                            var note = document.querySelector('input[name=note]');
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
                                <a href="{{  URL('car_income/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection


