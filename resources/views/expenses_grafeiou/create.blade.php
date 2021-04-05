@extends('forms')

@section('formsdetails')
    <form id="create_eksoda_grafeiou_form" method="post" action="{{ route('graf_expen.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Έξοδα γραφείου') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_expenses') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_expenses">{{ __('Έξοδο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_expenses" name="id_expenses" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Έξοδο " }}</option>
                                        @foreach($expenses as $expen)
                                            <option value="{{$expen->id_expenses}}" @if(old('id_expenses') == $expen->id_expenses) selected @endif>{{ $expen->eksodo }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_expenses'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_expenses') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Date_expen') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_expen">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="Date_expen" id="Date_expen" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_expen') ? ' is-invalid' : '' }}"
                                           value="{{ old('Date_expen') }}"  required>
                                    <script type="text/javascript">
                                        $('#Date_expen').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_expen'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_expen') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Value_expen') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value_expen">{{ __('Αξία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Value_expen" id="Value_expen"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value_expen') ? ' is-invalid' : '' }}"
                                           value="{{ old('Value_expen') }}" required>
                                    @if ($errors->has('Value_expen'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Value_expen') }}</strong>
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
                                <div class="form-label{{ $errors->has('Note') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="notes">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="Note" type="hidden">
                                    <div id="editor_eksoda_grafeiou" style="height: 150px">
                                        {{--                                        <p> </p>--}}
                                    </div>
                                    <script>
                                        var quill = new Quill('#editor_eksoda_grafeiou', {
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
                                <a href="{{  URL('graf_expen/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection


