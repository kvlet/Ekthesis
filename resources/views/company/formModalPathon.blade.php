<form id="create_companyPathon_form_ajax" method="post" action="{{ route('company.store.ajax')}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('id_company') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_company">{{ __('Κωδικός') }} </label>
                            <input type="text" name="id_company" id="id_company"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_company') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_company') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('comp_name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="comp_name">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="comp_name" id="comp_name"
                                   class="form-control form-input form-control-alternative{{ $errors->has('comp_name') ? ' is-invalid' : '' }}"
                                   value="{{ old('comp_name') }}" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('afm') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="afm">{{ __(' ΑΦΜ ') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="afm" id="afm"
                                   class="form-control form-input form-control-alternative{{ $errors->has('afm') ? ' is-invalid' : '' }}"
                                   value="{{ old('afm') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('address') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="address">{{ __(' Διεύθυνση ') }} </label>
                            <input type="text" name="address" id="address"
                                   class="form-control form-input form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                   value="{{ old('address') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('tk') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="tk">{{ __(' Τ.Κ. ') }} </label>
                            <input type="text" name="tk" id="tk"
                                   class="form-control form-input form-control-alternative{{ $errors->has('tk') ? ' is-invalid' : '' }}"
                                   value="{{ old('tk') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('Fax') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Fax">{{ __(' Fax ') }} </label>
                            <input type="text" name="Fax" id="Fax"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Fax') ? ' is-invalid' : '' }}"
                                   value="{{ old('Fax') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('Email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Email">{{ __(' Email ') }} </label>
                            <input type="text" name="Email" id="Email"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                   value="{{ old('Email') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                <div class="row mt-4">
                    <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
