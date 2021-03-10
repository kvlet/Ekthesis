@extends('forms')

@section('formsdetails')
    <form id="edit_foto_ekth_form"  method="post" action="{{ route('pragmatognomosines.update_foto_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Φωτογραφίες Έκθεσης:') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <input name="id_foto" type="hidden" value="{{ $fotos->id_foto }}">
                                <input name="path" type="hidden" value="{{ $fotos->path }}">
                                <input name="file_name" type="hidden" value="{{ $fotos->file_name }}">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                           value="{{ $id_ekthesis }}" disabled autofocus>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-label{{ $errors->has('id_oximata') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_oximata">{{ __('Όχημα') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_oximata" name="id_oximata" required >
                                        @foreach($oximata_pathon as $oxima)
                                            <option value="{{$oxima->id_oximata}}" @if($fotos->id_oximata == $oxima->id_oximata) selected @endif>{{ $oxima->Ar_kyklo }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_oximata'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_oximata') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-label{{ $errors->has('id_person') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_person">{{ __('Άτομο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_person" name="id_person" required >
                                        @foreach($pathontes as $person)
                                            <option value="{{$person->id_person}}" @if($fotos->id_person == $person->id_person) selected @endif>{{ $person->L_name.' '.$person->F_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_person'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_person') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-label{{ $errors->has('print_group') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="print_group">{{ __('Σειρά εκτύπωσης') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="print_group" id="print_group"
                                           class="form-control form-input form-control-alternative{{ $errors->has('print_group') ? ' is-invalid' : '' }}"
                                           value="{{ $fotos->print_group }}"  autofocus >
                                    @if ($errors->has('print_group'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('print_group') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('notes') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="notes">{{ __('Παρατηρήσεις') }}<span style="color:red;font-weight:bold;height: 100px;">*</span></label>
                                    <input type="text" name="notes" id="notes"
                                           class="form-control form-input form-control-alternative{{ $errors->has('notes') ? ' is-invalid' : '' }}"
                                           value="{{ $fotos->notes }}"  autofocus>
                                    @if ($errors->has('notes'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('notes') }}</strong>
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
                            <div class="col-md-6">
                                <div id="grid">
                                    <div>
                                        <a href="{{ asset('/images/foto/'.$fotos->id_ekthesis.'/'.$fotos->file_name) }}"
                                           data-lightbox="image-1"
                                           data-title="{{'Φωτογραφία:'.' '.$fotos->file_name}}">
                                            <img src="{{ asset('/images/foto/'.$fotos->id_ekthesis.'/'.$fotos->file_name) }}"
                                                 width="400" height="400" alt="Επεξεργασία" class="img-thumbnail"/></a>
                                    </div>
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



