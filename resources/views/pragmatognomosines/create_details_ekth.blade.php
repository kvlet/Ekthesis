@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
{{--                        @dd($ergasia)--}}
                        @foreach($ergasia as $erg)
                            @if ($erg->id_ergasies == $id_ergasia)
                                <strong>{{ __('Ανταλλακτικά'.' '.$erg->ergasia) }}</strong>
                            @endif
                        @endforeach
                    </h4>
                </div>
                <form id="create_detail_ekth_form" method="post" action="{{ route('pragmatognomosines.store_details_ekth',$id_ekthesis) }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input name="id_ergasies" type="hidden" value="{{ $id_ergasia }}">
                                        <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                        <div class="form-label{{ $errors->has('ergasia') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="ergasia">{{ __('Εργασία') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="ergasia" id="ergasia"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('ergasia') ? ' is-invalid' : '' }}"
                                                   value="{{  $erg->ergasia  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_parts">{{ __('Ανταλλακτικό') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_parts" name="id_parts" required >
                                                <option selected value value=-1>{{ " Επιλέξτε Ανταλλακτικό " }}</option>
                                                @foreach($erg->ergasies_in_parts as $part_erg)
{{--                                                @foreach($part_erg as $paerg)--}}
                                                    @foreach($parts as $part)
                                                        @if($part_erg->id_parts == $part->id_parts)
                                                            <option value="{{$part->id_parts}}" @if(old('id_parts') == $part->id_parts) selected @endif>{{ $part->part }}</option>
                                                        @endif
                                                   @endforeach
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_parts'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_parts') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('Cost_part') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Cost_part">{{ __('Κόστος Ανταλλακτικού') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <input type="number" name="Cost_part" id="Cost_part"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Cost_part') ? ' is-invalid' : '' }}"
                                                   value="{{ old('Cost_part') }}"  required autofocus>
                                            @if ($errors->has('Cost_part'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('Cost_part') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('fpa_part') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="fpa_part">{{ __(' Φ.Π.Α. Ανταλλακτικού') }} </label>
                                            <select class="form-control form-select" id="fpa_part" name="fpa_part" >
                                                <option value="0" selected="selected">Χωρίς Φ.Π.Α.</option>
                                                <option value="1" >Με Φ.Π.Α.</option>
                                            </select>
                                            @if ($errors->has('fpa_part'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fpa_part') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('Cost_job') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Cost_job">{{ __('Κόστος Εργασίας') }}</label>
                                            <input type="number" name="Cost_job" id="Cost_job"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Cost_job') ? ' is-invalid' : '' }}"
                                                   value="{{ old('Cost_job') }}"  utofocus>
                                            @if ($errors->has('Cost_job'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('Cost_job') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
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
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('quan') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="quan">{{ __('Ποσότητα') }}</label>
                                            <input type="number" name="quan" id="quan"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('quan') ? ' is-invalid' : '' }}"
                                                   value="{{ old('quan') }}"  utofocus>
                                            @if ($errors->has('quan'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('quan') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('Type') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Type">{{ __(' Τύπος ') }} </label>
                                            <select class="form-control form-select" id="Type" name="Type" >
                                                <option value=" " selected="selected"> </option>
                                                <option value="Γνήσιο">Γνήσιο</option>
                                                <option value="Μεταχειρισμένο">Μεταχειρισμένο</option>
                                                <option value="Μεταχειρισμένο Κομπλέ">Μεταχειρισμένο Κομπλέ</option>
                                                <option value="Ιμιτασιόν">Ιμιτασιόν</option>
                                            </select>
                                            @if ($errors->has('Type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Type') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
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
                                    <div class="col-md-5">
                                        <div class="form-label{{ $errors->has('prod_code') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="prod_code">{{ __('Κωδικός Αντιπροσώπου') }}</label>
                                            <input type="text" name="prod_code" id="prod_code"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('prod_code') ? ' is-invalid' : '' }}"
                                                   value="{{ old('prod_code') }}"  utofocus>
                                            @if ($errors->has('prod_code'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('prod_code') }}</strong>
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
@endsection




