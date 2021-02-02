@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Έκθεση:'.'  '.$id_ekthesis) }}</strong>
                        <strong>{{ __('Λίστα Ανταλλακτικών Πρϋπάρχουσων Ζημιών') }}</strong>
                    </h4>
                </div>
                <form id="create_proiparx_ekth_form" method="post" action="{{ route('pragmatognomosines.store_proiparxouses',$id_ekthesis) }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                            <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="id_parts">{{ __('Ανταλλακτικό') }}<span style="color:red;font-weight:bold">*</span></label>
                                                <select class="form-control form-select" id="id_parts" name="id_parts" required >
                                                    <option selected value value=-1>{{ " Επιλέξτε Ανταλλακτικό " }}</option>
                                                        @foreach($parts as $part)
                                                            <option value="{{$part->id_parts}}" @if(old('id_parts') == $part->id_parts) selected @endif>{{ $part->part }}</option>
                                                        @endforeach
                                                </select>
                                                @if ($errors->has('id_parts'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_parts') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('id_categ') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_categ">{{ __(' Κατηγορία ') }}<span style="color:red;font-weight:bold">*</span> </label>
                                            <select class="form-control form-select" id="id_categ" name="id_categ" required>
                                                <option selected value value=-1>{{ " Επιλέξτε Κατηγορία " }}</option>
                                                <option value="1">Ανταλλακτικό</option>
                                                <option value="2">Αντικατάσταση</option>
                                                <option value="3">Επισκευή</option>
                                                <option value="4">Εξαγωγη και επανατοποθέτηση</option>
                                                <option value="5">Βαφές</option>
                                                <option value="6">Συνολικά</option>
                                            </select>
                                            @if ($errors->has('id_categ'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_categ') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('value') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="value">{{ __('Κόστος Εργασίας') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <input type="number" name="value" id="value"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                                   value="{{ old('value') }}"  autofocus required>
                                            @if ($errors->has('value'))
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('value') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                            <label class="form-control-label" for="diax_fr_b">{{ __(' Τύπος ') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="diax_fr_b" name="diax_fr_b" required >
                                                <option selected value value=-1>{{ " Επιλέξτε Τύπο " }}</option>
                                                <option value="Κ"> </option>
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





