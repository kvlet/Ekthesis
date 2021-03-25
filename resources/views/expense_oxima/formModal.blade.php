
<form id="create_expen_oxima_ajax_form" method="post" action="{{ route('expen_manage.store') }}" autocomplete="off">
    @csrf
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('id_expen_oxima') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="id_expen_oxima">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="id_expen_oxima" id="id_expen_oxima"
                                   class="form-control form-input form-control-alternative{{ $errors->has('id_expen_oxima') ? ' is-invalid' : '' }}"
                                   value="{{ old('id_expen_oxima') }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label{{ $errors->has('expen_oxima') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="expen_oxima">{{ __(' Έξοδο') }} <span style="color:red;font-weight:bold">*</span></label>
                            <input type="text" name="expen_oxima" id="expen_oxima"
                                   class="form-control form-input form-control-alternative{{ $errors->has('expen_oxima') ? ' is-invalid' : '' }}"
                                   value="{{ old('expen_oxima') }}" autofocus required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-label{{ $errors->has('mark_del') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                            <select class="form-control form-select" id="mark_del" name="mark_del" required disabled>
                                <option value="Ναι">Ναι</option>
                                <option value="Όχι" selected="selected">Όχι</option>
                            </select>
                            @if ($errors->has('mark_del'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mark_del') }}</strong>
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


