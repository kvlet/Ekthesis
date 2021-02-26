@extends('forms')

@section('formsdetails')
    <form id="create_synergeio_form" method="post" action="{{ route('synergeio.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Συνεργεία') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_synergeia') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_synergeia">{{ __('Κωδικός') }} </label>
                                    <input type="text" name="id_synergeia" id="id_synergeia"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_synergeia') ? ' is-invalid' : '' }}"
                                           value="{{ old('id_synergeia') }}"   autofocus disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Name_syner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Name_syner">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Name_syner" id="Name_syner"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Name_syner') ? ' is-invalid' : '' }}"
                                           value="{{ old('Name_syner') }}" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Addres') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Addres">{{ __('Διεύθυνση') }} </label>
                                    <input type="text" name="Addres" id="Addres"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Addres') ? ' is-invalid' : '' }}"
                                           value="{{ old('Addres') }}"   autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Phone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Phone">{{ __(' Τηλέφωνο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Phone" id="Phone"  pattern="[0-9]{10}" maxlength="10"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Phone') ? ' is-invalid' : '' }}"
                                           value="{{ old('Phone') }}" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Kinito') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Kinito">{{ __('Κινητό') }} </label>
                                    <input type="text" name="Kinito" id="Kinito" maxlength="10" pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Kinito') ? ' is-invalid' : '' }}"
                                           value="{{ old('Kinito') }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Fax') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Fax">{{ __(' Fax') }} </label>
                                    <input type="text" name="Fax" id="Fax" maxlength="10"  pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Fax') ? ' is-invalid' : '' }}"
                                           value="{{ old('Fax') }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Email">{{ __('Email') }} </label>
                                    <input type="email" name="Email" id="Email"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                           value="{{ old('Email') }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Respon') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Respon">{{ __(' Υπεύθυνος') }} </label>
                                    <input type="text" name="Respon" id="Respon" maxlength="50"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Respon') ? ' is-invalid' : '' }}"
                                           value="{{ old('Respon') }}" autofocus>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_typos_synergeiou') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_typos_synergeiou">{{ __(' Τύπος Συνεργείου') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_typos_synergeiou" name="id_typos_synergeiou" required>
                                        <option value="1" selected="selected">Φανοποιείο</option>
                                        <option value="2" >Ηλεκτρολογείο</option>
                                    </select>
                                    @if ($errors->has('id_typos_synergeiou'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_typos_synergeiou') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Mark_del" name="Mark_del" required disabled>
                                        <option value="Ναι">Ναι</option>
                                        <option value="Όχι" selected="selected">Όχι</option>
                                    </select>
                                    @if ($errors->has('Mark_del'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Mark_del') }}</strong>
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
                            <div class="col-md-6">
                                <textarea id="Note" name="Note" style="width: 650px; height: 200px;">
                                    {{ old('Note') }}
                                </textarea>
                                <script>
                                    bkLib.onDomLoaded(function() {
                                        // nicEditors.allTextAreas()
                                        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('Note');
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
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('synergeio/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection



