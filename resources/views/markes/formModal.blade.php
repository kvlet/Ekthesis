
<form id="create_markes_form_ajax" method="post" action="{{'markes.store.ajax'}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('id_markes') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_markes">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="id_markes" id="id_markes"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_markes') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_markes') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('marka') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="marka">{{ __(' Μάρκα') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="marka" id="marka"
                                   class="form-control form-input form-control-alternative{{ $errors->has('marka') ? ' is-invalid' : '' }}"
                                   value="{{ old('marka') }}" autofocus required>
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



