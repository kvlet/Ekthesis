@extends('forms')

@section('formsdetails')
    <form id="edit_expen_partner_ekth_form" method="post" action="{{ route('pragmatognomosines.update_expen_partner_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Έξοδα Συνεργάτη Έκθεσης:') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <input name="id_expenses" type="hidden" value="{{ $id_expenses }}">
                                <input name="id_users" type="hidden" value="{{ $id_users }}">
                                <input name="value_fpa" type="hidden" value="{{ $expen_ekth_part->value_fpa }}">
                                <div class="form-label{{ $errors->has('id_expenses') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_expenses">{{ __('Έξοδο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_expenses" name="id_expenses" required disabled >
                                        @foreach($expenses as $expen)
                                            <option value="{{$expen->id_expenses}}" @if($expen_ekth_part->id_expenses == $expen->id_expenses) selected @endif>{{ $expen->eksodo }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_expenses'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_expenses') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('id_users') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_users">{{ __('Συνεργάτης') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_users" name="id_users" required disabled>
                                        @foreach($pragmatognomones as $pragm)
                                            <option value="{{$pragm->id}}" @if($expen_ekth_part->id_users == $pragm->id) selected @endif>{{ $pragm->L_name.' '.$pragm->F_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_users'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_users') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="value">{{ __('Αξία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="value" id="value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                           value="{{ $expen_ekth_part->value }}"  autofocus required>
                                    @if ($errors->has('value'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('') }}<value/strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('quan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="quan">{{ __('Ποσότητα') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="quan" id="quan"
                                           class="form-control form-input form-control-alternative{{ $errors->has('quan') ? ' is-invalid' : '' }}"
                                           value="{{ $expen_ekth_part->quan }}"  autofocus placeholder="1">
                                    @if ($errors->has('quan'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('quan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('pragmatognomosines/'.$id_ekthesis) }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection





