
<form id="create_arxi_form" method="post" action="{{'arxi.store'}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('id_Arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_Arxi_ekdosis_eggrafon">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="id_Arxi_ekdosis_eggrafon" id="id_Arxi_ekdosis_eggrafon"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_Arxi_ekdosis_eggrafon') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_Arxi_ekdosis_eggrafon') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label{{ $errors->has('Arxi') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Arxi">{{ __(' Αρχή Εγγράφων') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="Arxi" id="Arxi"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Arxi') ? ' is-invalid' : '' }}"
                                   value="{{ old('Arxi') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('Tel1') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Tel1">{{ __(' Τηλέφωνο-1') }} </label>
                            <input type="text" name="Tel1" id="Tel1"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Arxi') ? ' is-invalid' : '' }}"
                                   value="{{ old('Arxi') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('Tel2') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Tel2">{{ __(' Τηλέφωνο-2') }}</label>
                            <input type="text" name="Tel2" id="Tel2"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Tel2') ? ' is-invalid' : '' }}"
                                   value="{{ old('Tel2') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                            <select class="form-control form-select" id="Mark_del" name="Mark_del" required>
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
                        <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

