@extends('forms')

@section('formsdetails')
    <form id="create_involv_cars_ekth_form" method="post" action="{{ route('pragmatognomosines.store_involv_cars',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Εμπλεκόμενα οχήματα Έκθεσης') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <div class="form-label{{ $errors->has('id_oxima') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_oxima">{{ __('Όχημα') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_oxima" name="id_oxima" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Όχημα " }}</option>
                                        @foreach($oximata_pathon as $oxima)
                                            <option value="{{$oxima->id_oximata}}" @if(old('id_oxima') == $oxima->id_oximata) selected @endif>{{$oxima->Ar_kyklo }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_oxima'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_oxima') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_person') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_person">{{ __('Πρόσωπο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_person" name="id_person" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Πρόσωπο " }}</option>
                                        @foreach($pathontes as $pathon)
                                            <option value="{{$pathon->id_person}}" @if(old('id_person') == $pathon->id_person) selected @endif>{{ $pathon->L_name.' '.$pathon->F_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_person'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_person') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_company') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_company">{{ __('Εταιρεία') }}</label>
                                    <select class="form-control form-select" id="id_company" name="id_company">
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
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('xiliometra') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="xiliometra">{{ __('Χιλιόμετρα') }}</label>
                                    <input type="number" name="xiliometra" id="xiliometra"
                                           class="form-control form-input form-control-alternative{{ $errors->has('xiliometra') ? ' is-invalid' : '' }}"
                                           value="{{ old('xiliometra') }}" autofocus>
                                    @if ($errors->has('xiliometra'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('xiliometra') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('value_car') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="value_car">{{ __('Αξία οχήματος') }}</label>
                                    <input type="number" name="value_car" id="value_car"
                                           class="form-control form-input form-control-alternative{{ $errors->has('value_car') ? ' is-invalid' : '' }}"
                                           value="{{ old('value_car') }}" autofocus>
                                    @if ($errors->has('value_car'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('value_car') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('driver') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="driver">{{ __('Οδηγός') }}</label>
                                    <input type="text" name="driver" id="driver"
                                           class="form-control form-input form-control-alternative{{ $errors->has('driver') ? ' is-invalid' : '' }}"
                                           value="{{ old('driver') }}" autofocus>
                                    @if ($errors->has('driver'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('driver') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('note') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="note">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="note" type="hidden">
                                    <div id="editor_inv" style="height: 150px">
                                        <p> </p>
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
                                <a href="{{  URL('pragmatognomosines/'.$id_ekthesis) }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection


