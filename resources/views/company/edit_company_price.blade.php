@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τιμοκατάλογος') }}</strong>
                    </h4>
                </div>
                <form id="edit_company_price_form" method="post" action="{{ route('company.update_company_price') }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="id_company" type="hidden" value="{{ $company->id_company }}">
                                        <div class="form-label{{ $errors->has('company') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="company">{{ __('Εταιρεία') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="company" id="company"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('company') ? ' is-invalid' : '' }}"
                                                   value="{{   $company->comp_name  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input name="id_expenses" type="hidden" value="{{ $expense->id_expenses }}">
                                        <div class="form-label{{ $errors->has('id_expenses') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_expenses">{{ __('Έξοδο') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_expenses" name="id_expenses" required disabled>
                                                <option value="{{$expense->id_expenses}}" @if(old('id_expenses') == $expense->id_expenses) selected @endif>{{ $expense->eksodo }}</option>
                                            </select>
                                            @if ($errors->has('id_expenses'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_expenses') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="price">{{ __('Τιμή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="price" id="price"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                   value="{{  $expense->pivot->price  }}" autofocus required>
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





