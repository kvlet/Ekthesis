
<form id="create_diakrisis_form" method="post" action="{{'diakrisis.store'}}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('id_diakrisis') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_diakrisis">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="id_diakrisis" id="id_diakrisis"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_diakrisis') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_diakrisis') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('Diakrisi') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Diakrisi">{{ __(' Τύπος Έκθεσης') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="Diakrisi" id="Diakrisi"
                                   class="form-control form-input form-control-alternative{{ $errors->has('Diakrisi') ? ' is-invalid' : '' }}"
                                   value="{{ old('Diakrisi') }}" autofocus required>
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
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('Group_diakr') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="Group_diakr">{{ __(' Προτεραιότητα') }} <span style="color:red;font-weight:bold">*</span></label>
                            <select class="form-control form-select" id="Group_diakr" name="Group_diakr" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected="selected">3</option>
                            </select>
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

