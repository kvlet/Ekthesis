@extends('forms')

@section('formsdetails')
    <form id="create_keimena_ekth_form" method="post" action="{{ route('pragmatognomosines.store_keimena_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Κείμενα Έκθεσης') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                           value="{{ $id_ekthesis }}" disabled autofocus>
                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_keimena') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_keimena">{{ __('Κείμενο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_keimena" name="id_keimena" required >
                                        <option selected value value=-1>{{ " Επιλέξτε Κείμενο " }}</option>
                                        @foreach($keimena as $keimeno)
                                            <option value="{{$keimeno->id_keimena}}" @if(old('id_keimena') == $keimeno->id_keimena) selected @endif>{{ $keimeno->Sort_descr }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_keimena'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_keimena') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Print') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Print">{{ __(' Εκτύπωση ') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Mark_del" name="Mark_del" required>
                                        <option selected value value=-1>{{ " Επιλέξτε " }}</option>
                                        <option value="Ναι" >Ναι</option>
                                        <option value="Όχι">Όχι</option>
                                    </select>
                                    @if ($errors->has('Print'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Print') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('print_group') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="print_group">{{ __(' Εκτύπωση ') }} </label>
                                    <select class="form-control form-select" id="Mark_del" name="print_group" >
                                        <option value=1 selected="selected">1</option>
                                        <option value=2>2</option>
                                    </select>
                                    @if ($errors->has('print_group'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('print_group') }}</strong>
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
                        <div class="row">
                            <div class="col">
                                <hr>
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
        </div>
        @include('errors')
    </form>
@endsection
