@extends('forms')

@section('formsdetails')
    <form id="edit_synergeia_ekth_form" method="post" action="{{ route('pragmatognomosines.destroy_synergeia_ekth') }}" autocomplete="off">
        @csrf
        {{ method_field('DELETE') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Συνεργεία Έκθεσης') }}</strong>
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
                                <div class="form-label{{ $errors->has('id_synergeia') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_synergeia">{{ __('Συνεργείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_synergeia" name="id_synergeia" required  disabled>
                                        @foreach($synergeia as $syn)
                                            <option value="{{$synergeio->id_synergeia}}" @if($synergeio->id_synergeia == $syn->id_synergeia) selected @endif>{{ $syn->Name_syner }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_synergeia'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_synergeia') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Date_episkepsis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Date_episkepsis">{{ __('1η Επίσκεψη') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Date_episkepsis" id="Date_episkepsis" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_episkepsis') ? ' is-invalid' : '' }}"
                                           value="{{ $synergeio->pivot->Date_episkepsis }}" disabled >
                                    <script type="text/javascript">
                                        $('#Date_episkepsis').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_episkepsis'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_episkepsis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Date_episkepsis2') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_episkepsis2">{{ __('2η Επίσκεψη') }}
                                    </label>
                                    <input type="text" name="Date_episkepsis2" id="Date_episkepsis2" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_episkepsis2') ? ' is-invalid' : '' }}"
                                           value="{{ $synergeio->pivot->Date_episkepsis2 }}" disabled >
                                    <script type="text/javascript">
                                        $('#Date_episkepsis2').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_episkepsis2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_episkepsis2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Date_episkepsis3') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_episkepsis3">{{ __('3η Επίσκεψη') }}
                                    </label>
                                    <input type="text" name="Date_episkepsis3" id="Date_episkepsis3" data-provide="datepicker"  data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_episkepsis3') ? ' is-invalid' : '' }}"
                                           value="{{ $synergeio->pivot->Date_episkepsis3 }}" disabled >
                                    <script type="text/javascript">
                                        $('#Date_episkepsis3').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_episkepsis3'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_episkepsis3') }}</strong>
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
                                <textarea id="Note" name="Note" style="width: 650px; height: 200px;" disabled>
                                    {{ $synergeio->pivot->Note }}
                                 </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                        <input name="id_synergeia" type="hidden" value="{{ $synergeio->id_synergeia }}">
                        <input name="Note" type="hidden" value="{{ $synergeio->pivot->Note }}">
                        <input name="Date_episkepsis3" type="hidden" value="{{ $synergeio->pivot->Date_episkepsis3 }}">
                        <input name="Date_episkepsis2" type="hidden" value="{{ $synergeio->pivot->Date_episkepsis2 }}">
                        <input name="Date_episkepsis" type="hidden" value="{{ $synergeio->pivot->Date_episkepsis }}">
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger">Διαγραφή</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection



