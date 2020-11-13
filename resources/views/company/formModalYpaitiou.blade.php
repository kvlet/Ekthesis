<form id="create_companyYpaitiou_form_ajax" method="post" action="{{ route('company.storeYpait.ajax')}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yid_company') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yid_company">{{ __('Κωδικός') }} </label>
                            <input type="text" name="yid_company" id="yid_company"
                                   class="form-control form-input form-control-alternative{{ $errors->has('yid_company') ? ' is-invalid' : '' }}"
                                   value="{{ old('yid_company') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('ycomp_name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="ycomp_name">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="ycomp_name" id="ycomp_name"
                                   class="form-control form-input form-control-alternative{{ $errors->has('ycomp_name') ? ' is-invalid' : '' }}"
                                   value="{{ old('ycomp_name') }}" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yafm') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yafm">{{ __(' ΑΦΜ ') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="yafm" id="yafm"
                                   class="form-control form-input form-control-alternative{{ $errors->has('yafm') ? ' is-invalid' : '' }}"
                                   value="{{ old('yafm') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yaddress') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yaddress">{{ __(' Διεύθυνση ') }} </label>
                            <input type="text" name="yaddress" id="yaddress"
                                   class="form-control form-input form-control-alternative{{ $errors->has('yaddress') ? ' is-invalid' : '' }}"
                                   value="{{ old('yaddress') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('ytk') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="ytk">{{ __(' Τ.Κ. ') }} </label>
                            <input type="text" name="ytk" id="ytk"
                                   class="form-control form-input form-control-alternative{{ $errors->has('ytk') ? ' is-invalid' : '' }}"
                                   value="{{ old('ytk') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yFax') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yFax">{{ __(' Fax ') }} </label>
                            <input type="text" name="yFax" id="yFax"
                                   class="form-control form-input form-control-alternative{{ $errors->has('yFax') ? ' is-invalid' : '' }}"
                                   value="{{ old('yFax') }}" autofocus>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yEmail') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yEmail">{{ __(' Email ') }} </label>
                            <input type="text" name="yEmail" id="yEmail"
                                   class="form-control form-input form-control-alternative{{ $errors->has('yEmail') ? ' is-invalid' : '' }}"
                                   value="{{ old('yEmail') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('yMark_del') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="yMark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                            <select class="form-control form-select" id="yMark_del" name="yMark_del" required disabled>
                                <option value="Ναι">Ναι</option>
                                <option value="Όχι" selected="selected">Όχι</option>
                            </select>
                            @if ($errors->has('yMark_del'))
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('yMark_del') }}</strong>
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


