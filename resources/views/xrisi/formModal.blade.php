
<form id="create_xrisi_form_ajax" method="post" action="{{'xrisi.store.ajax'}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('id_xrisi') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_xrisi">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="id_xrisi" id="id_xrisi"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_xrisi') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_xrisi') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('xrisi') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="xrisi">{{ __(' Χρήση') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="xrisi" id="xrisi"
                                   class="form-control form-input form-control-alternative{{ $errors->has('xrisi') ? ' is-invalid' : '' }}"
                                   value="{{ old('xrisi') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-2">
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
                    <div class="row mt-4">
                        <div class="col d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




