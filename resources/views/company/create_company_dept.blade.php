@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τμήματα Εταιρείας') }}</strong>
                    </h4>
                </div>
                <form id="create_company_dept_form" method="post" action="{{ route('company.store_company_dept',$company->id_company) }}" autocomplete="off">
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
                                        <div class="form-label{{ $errors->has('id_department') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_department">{{ __('Τμήμα') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_department" name="id_department" required >
                                                <option selected value value=-1>{{ " Επιλέξτε Τμήμα " }}</option>
                                                @foreach($department as $dept)
                                                    <option value="{{$dept->id_department}}" @if(old('id_department') == $dept->id_department) selected @endif>{{ $dept->dept }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_department'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_department') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('newrecdept') ? ' has-danger' : '' }}">
                                            <!-- Button trigger modal -->
                                            <label class="form-control-label" for="newrecdept">{{ __('Νέο Τμήμα') }}</label>
                                            <div class="form-label{{ $errors->has('id_department') ? ' has-danger' : '' }}" style="margin: auto">
                                                <button id="newrecdept" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#departmentsModal">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="phone">{{ __('Τηλέφωνο') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="phone" id="phone"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                   value="{{  old('phone')  }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Fax') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Fax">{{ __('Fax') }} </label>
                                            <input type="text" name="Fax" id="Fax"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Fax') ? ' is-invalid' : '' }}"
                                                   value="{{  old('Fax')  }}" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Email') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Email">{{ __('Email') }} </label>
                                            <input type="email" name="Email" id="Email"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                                   value="{{  old('Email')  }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Respon') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Respon">{{ __('Υπεύθυνος') }} <span style="color:red;font-weight:bold">*</span> </label>
                                            <input type="text" name="Respon" id="Respon"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Respon') ? ' is-invalid' : '' }}"
                                                   value="{{  old('Respon')  }}" autofocus required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
            </div>
        </div>
    </div>
    @include('_modals.departmentModal',['department'=> $department])
@endsection



