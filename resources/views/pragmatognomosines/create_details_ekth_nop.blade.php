@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Έκθεση:'.'  '.$id_ekthesis) }}</strong>
                        <strong>{{ __('Εργαίες χωρίς ανταλλακτικά') }}</strong>
                    </h4>
                </div>
                    <form id="create_detail_ekth_nop_form" method="post" action="{{ route('pragmatognomosines.store_details_ekth',$id_ekthesis) }}" autocomplete="off">
                        @csrf
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input name="id_parts" type="hidden" value="{{ $id_part }}">
                                            <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                            <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="id_ergasies">{{ __('Εργασία') }}<span style="color:red;font-weight:bold">*</span></label>
                                                <select class="form-control form-select" id="id_ergasies" name="id_ergasies" required >
                                                    <option selected value value=-1>{{ " Επιλέξτε Εργασία " }}</option>
                                                    @foreach($ergasies as $erg)
                                                        @if($erg->id_ergasies != 3 && $erg->id_ergasies != 4 && $erg->id_ergasies != 5 && $erg->id_ergasies != 6 && $erg->id_ergasies != 55)
                                                            <option value="{{$erg->id_ergasies}}" @if(old('id_ergasies') == $erg->id_ergasies) selected @endif>{{ $erg->ergasia }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('id_ergasies'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_ergasies') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('Cost_job') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Cost_job">{{ __('Κόστος Εργασίας') }}</label>
                                                <input type="number" name="Cost_job" id="Cost_job"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Cost_job') ? ' is-invalid' : '' }}"
                                                       value="{{ old('Cost_job') }}"  autofocus required>
                                                @if ($errors->has('Cost_job'))
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('Cost_job') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('fpa_job') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="fpa_job">{{ __(' Φ.Π.Α. Εργασίας') }} </label>
                                                <select class="form-control form-select" id="fpa_job" name="fpa_job" >
                                                    <option value="0" selected="selected">Χωρίς Φ.Π.Α.</option>
                                                    <option value="1" >Με Φ.Π.Α.</option>
                                                </select>
                                                @if ($errors->has('fpa_job'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fpa_job') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('sint_fpa_job') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="sint_fpa_job">{{ __(' Συντελεστής Φ.Π.Α. Εργασίας') }}</label>
                                                <input type="number" name="sint_fpa_job" id="sint_fpa_job"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('sint_fpa_job') ? ' is-invalid' : '' }}"
                                                       value="{{ old('sint_fpa_job') }}"  autofocus placeholder="24.00">
                                                @if ($errors->has('sint_fpa_job'))
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('sint_fpa_job') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('diax_fr_b') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="diax_fr_b">{{ __(' Τύπος ') }} </label>
                                                <select class="form-control form-select" id="diax_fr_b" name="diax_fr_b" >
                                                    <option value=" " selected="selected"> </option>
                                                    <option value="Ε">Ε</option>
                                                    <option value="Ο">Ο</option>
                                                </select>
                                                @if ($errors->has('diax_fr_b'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('diax_fr_b') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <a href="{{  URL('pragmatognomosines/'.$id_ekthesis) }}" class="btn btn-primary" role="button">Επιστροφή</a>
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





