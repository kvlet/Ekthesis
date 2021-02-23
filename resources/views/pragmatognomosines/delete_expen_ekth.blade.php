@extends('forms')

@section('formsdetails')
    <form id="delete_expen_ekth_form" method="post" action="{{ route('pragmatognomosines.destroy_expen_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        {{ method_field('DELETE') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Έξοδα Έκθεσης:') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <input name="id_expenses" type="hidden" value="{{ $id_expenses }}">
                                <input name="Value_fpa" type="hidden" value="{{ $expen_ekth->pivot->Value_fpa }}">
                                <div class="form-label{{ $errors->has('id_expenses') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_expenses">{{ __('Έξοδο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_expenses" name="id_expenses" required disabled >
                                        @foreach($expenses as $expen)
                                            <option value="{{$expen->id_expenses}}" @if($expen_ekth->pivot->id_expenses == $expen->id_expenses) selected @endif>{{ $expen->eksodo }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_expenses'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_expenses') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value">{{ __('Αξία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="Value" id="Value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value') ? ' is-invalid' : '' }}"
                                           value="{{ $expen_ekth->pivot->Value }}"  autofocus required disabled>
                                    @if ($errors->has('Value'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('Value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Quan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Quan">{{ __('Ποσότητα') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="Quan" id="Quan"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Quan') ? ' is-invalid' : '' }}"
                                           value="{{ $expen_ekth->pivot->Quan }}"  autofocus placeholder="1" disabled>
                                    @if ($errors->has('Quan'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('Quan') }}</strong>
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
                                <button type="submit" class="btn btn-danger">Διαγραφή</button>
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





