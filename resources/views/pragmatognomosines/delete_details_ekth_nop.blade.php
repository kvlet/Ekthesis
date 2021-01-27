@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Έκθεση:'.'  '.$id_ekthesis) }}</strong>
                        <strong>{{ __('Εργασίες χωρίς ανταλλακτικά') }}</strong>
                    </h4>
                </div>
                <form id="edit_detail_ekth_nop_form" method="post" action="{{ route('pragmatognomosines.destroy_details_ekth',$id_ekthesis) }}" autocomplete="off">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="id_parts" type="hidden" value="{{ $id_part }}">
                                        <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                        <input name="id_ergasies" type="hidden" value="{{ $detail->pivot->id_ergasies }}">
                                        <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_ergasies">{{ __('Εργασία') }}</label>
                                            <select class="form-control form-select" id="id_ergasies" name="id_ergasies" required disabled>
                                                @foreach($ergasies as $erg)
                                                    @if($detail->pivot->id_ergasies == $erg->id_ergasies)
                                                        <option value="{{$detail->pivot->id_ergasies}}" @if($detail->pivot->id_ergasies == $erg->id_ergasies) selected @endif>{{ $erg->ergasia }}</option>
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
                                                   value="{{ $detail->pivot->Cost_job }}"  autofocus disabled>
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
                                            <select class="form-control form-select" id="fpa_job" name="fpa_job" disabled>
                                                <option value="0" @if($detail->pivot->fpa_job==0)selected="selected" @endif>Χωρίς Φ.Π.Α.</option>
                                                <option value="1" @if($detail->pivot->fpa_job==1)selected="selected" @endif>Με Φ.Π.Α.</option>
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
                                                   value="{{ $detail->pivot->sint_fpa_job }}" autofocus placeholder="24.00" disabled>
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
                                            <select class="form-control form-select" id="diax_fr_b" name="diax_fr_b" disabled>
                                                <option value=" " selected="selected"> </option>
                                                <option value="Ε" @if($detail->pivot->diax_fr_b=='Ε') selected="selected" @endif>Ε</option>
                                                <option value="Ο" @if($detail->pivot->diax_fr_b=='Ο') selected="selected" @endif>Ο</option>
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
                                        <button type="submit" class="btn btn-danger">Διαγραφή</button>
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







