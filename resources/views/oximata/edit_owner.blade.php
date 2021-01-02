@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Ιδιοκτήτες οχήματος') }}</strong>
                    </h4>
                </div>
                <form id="edit_owner_form" method="post" action="{{ route('oximata.update_owner',$oxima->id_oximata) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input name="id_oximata" type="hidden" value="{{ $oxima->id_oximata }}">
                                        <div class="form-label{{ $errors->has('Ar_kyklo') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Ar_kyklo">{{ __('Όχημα') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Ar_kyklo" id="Ar_kyklo"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Ar_kyklo') ? ' is-invalid' : '' }}"
                                                   value="{{   $oxima->Ar_kyklo  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input name="Own_name" type="hidden" value="{{  $owner->Own_name }}">
                                        <div class="form-label{{ $errors->has('Own_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Own_name">{{ __('Ιδιοκτήτης') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Own_name" id="Own_name"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Own_name') ? ' is-invalid' : '' }}"
                                                   value="{{  $owner->Own_name  }}" autofocus required disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <input name="Transfer_date" type="hidden" value="{{  $owner->Transfer_date }}">
                                        <div class="form-label{{ $errors->has('Transfer_date') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Transfer_date">{{ __('Ημ/νια Ατυχήματος') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Transfer_date" id="Transfer_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Transfer_date') ? ' is-invalid' : '' }}"
                                                   value="{{ $owner->Transfer_date }}"  required autofocus disabled>
                                            <script type="text/javascript">
                                                $('#Transfer_date').datepicker({
                                                    autoclose: true,
                                                    format: 'dd-mm-yyyy',
                                                    language: 'el',
                                                    todayHighlight: true,
                                                });
                                            </script>
                                            @if ($errors->has('Transfer_date'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Transfer_date') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('Active') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Active">{{ __(' Κατάσταση') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Active" name="Active" required >
                                                <option value="Ενεργός" @if ($owner->Active=='Ενεργός') selected="selected" @endif>Ενεργός</option>
                                                <option value="Μη Ενεργός" @if ($owner->Active=='Μη Ενεργός') selected="selected" @endif>Μη Ενεργός</option>
                                            </select>
                                            @if ($errors->has('Active'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Active') }}</strong>
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
            </div>
        </div>
    </div>
@endsection




