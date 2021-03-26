@extends('forms')

@section('formsdetails')
    <form id="create_expenses_oxima_form" method="post" action="{{ route('car_expen.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Έξοδα οχήματος') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_expenses_oxima') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_expenses_oxima">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_expenses_oxima" id="id_expenses_oxima"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_expenses_oxima') ? ' is-invalid' : '' }}"
                                           value="{{ old('id_expenses_oxima') }}" disabled autofocus>
                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('expen_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="expen_date">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="expen_date" id="expen_date" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('expen_date') ? ' is-invalid' : '' }}"
                                           value="{{ old('expen_date') }}" required>
                                    <script type="text/javascript">
                                        $('#expen_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('expen_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('expen_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_expen_oxima') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_expen_oxima">{{ __('Έξοδο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_expen_oxima" name="id_expen_oxima" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Έξοδο " }}</option>
                                        @foreach($expen as $exp)
                                            <option value="{{$exp->id_expen_oxima}}" @if(old('id_expen_oxima') == $exp->id_expen_oxima) selected @endif>{{ $exp->expen_oxima }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_expen_oxima'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_expen_oxima') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('km') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="km">{{ __('Χιλιόμετρα') }}</label>
                                    <input type="number" name="km" id="km"
                                           class="form-control form-input form-control-alternative{{ $errors->has('km') ? ' is-invalid' : '' }}"
                                           value="{{ old('km') }}" autofocus>
                                    @if ($errors->has('km'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('km') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('lt') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="lt">{{ __('Λίτρα') }}</label>
                                    <input type="number" name="lt" id="lt"
                                           class="form-control form-input form-control-alternative{{ $errors->has('lt') ? ' is-invalid' : '' }}"
                                           value="{{ old('lt') }}" autofocus>
                                    @if ($errors->has('lt'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lt') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="value">{{ __('Αξία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="value" id="value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                           value="{{ old('value') }}" autofocus required>
                                    @if ($errors->has('value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('mark_del') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="mark_del" name="mark_del" required disabled>
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
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('note') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="note">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="note" type="hidden">
                                    <div id="editor_inv" style="height: 150px">
{{--                                        <p> </p>--}}
                                    </div>
                                    <script>
                                        var quill = new Quill('#editor_inv', {
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
                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('car_expen/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection
