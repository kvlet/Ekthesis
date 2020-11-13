<form id="create_companyPathonReal_form_ajax" method="post" action="{{ route('company.storeReal.ajax')}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rid_company') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rid_company">{{ __('Κωδικός') }} </label>
                            <input type="text" name="rid_company" id="rid_company"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rid_company') ? ' is-invalid' : '' }}"
                                   value="{{ old('rid_company') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rcomp_name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rcomp_name">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="rcomp_name" id="rcomp_name"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rcomp_name') ? ' is-invalid' : '' }}"
                                   value="{{ old('rcomp_name') }}" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rafm') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rafm">{{ __(' ΑΦΜ ') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="rafm" id="rafm"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rafm') ? ' is-invalid' : '' }}"
                                   value="{{ old('rafm') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('raddress') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="raddress">{{ __(' Διεύθυνση ') }} </label>
                            <input type="text" name="raddress" id="raddress"
                                   class="form-control form-input form-control-alternative{{ $errors->has('raddress') ? ' is-invalid' : '' }}"
                                   value="{{ old('raddress') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rtk') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rtk">{{ __(' Τ.Κ. ') }} </label>
                            <input type="text" name="rtk" id="rtk"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rtk') ? ' is-invalid' : '' }}"
                                   value="{{ old('rtk') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rFax') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rFax">{{ __(' Fax ') }} </label>
                            <input type="text" name="rFax" id="rFax"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rFax') ? ' is-invalid' : '' }}"
                                   value="{{ old('rFax') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rEmail') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rEmail">{{ __(' Email ') }} </label>
                            <input type="text" name="rEmail" id="rEmail"
                                   class="form-control form-input form-control-alternative{{ $errors->has('rEmail') ? ' is-invalid' : '' }}"
                                   value="{{ old('rEmail') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('rMark_del') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="rMark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                            <select class="form-control form-select" id="rMark_del" name="rMark_del" required disabled>
                                <option value="Ναι">Ναι</option>
                                <option value="Όχι" selected="selected">Όχι</option>
                            </select>
                            @if ($errors->has('rMark_del'))
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('rMark_del') }}</strong>
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

