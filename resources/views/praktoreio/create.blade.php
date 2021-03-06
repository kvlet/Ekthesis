@extends('forms')

@section('formsdetails')
    <form id="create_praktoreio_form" method="post" action="{{ route('praktoreio.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Πρακτορεία') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_praktoreio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_praktoreio">{{ __('Κωδικός') }} </label>
                                    <input type="text" name="id_praktoreio" id="id_praktoreio"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_praktoreio') ? ' is-invalid' : '' }}"
                                           value="{{ old('id_praktoreio') }}"   autofocus disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('eponymia') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="eponymia">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="eponymia" id="eponymia"
                                           class="form-control form-input form-control-alternative{{ $errors->has('eponymia') ? ' is-invalid' : '' }}"
                                           value="{{ old('eponymia') }}" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="address">{{ __('Διεύθυνση') }} </label>
                                    <input type="text" name="address" id="address"
                                           class="form-control form-input form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           value="{{ old('address') }}"   autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tel">{{ __(' Τηλέφωνο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="tel" id="tel"  pattern="[0-9]{10}" maxlength="10"
                                           class="form-control form-input form-control-alternative{{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                           value="{{ old('tel') }}" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('kinito') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kinito">{{ __('Κινητό') }} </label>
                                    <input type="text" name="kinito" id="kinito" maxlength="10" pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('kinito') ? ' is-invalid' : '' }}"
                                           value="{{ old('kinito') }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('fax') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fax">{{ __(' Fax') }} </label>
                                    <input type="text" name="fax" id="fax" maxlength="10"  pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fax') ? ' is-invalid' : '' }}"
                                           value="{{ old('fax') }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Email') }} </label>
                                    <input type="email" name="email" id="email"
                                           class="form-control form-input form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           value="{{ old('email') }}"   autofocus>
                                </div>
                            </div>
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
                            <div class="col-md-12">
                                <textarea id="note" name="note" style="width: 650px; height: 200px;">
                                    {{ old('note') }}
                                </textarea>
                                <script>
                                    bkLib.onDomLoaded(function() {
                                        // nicEditors.allTextAreas()
                                        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('note');
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
                                <a href="{{  URL('praktoreiο/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection



