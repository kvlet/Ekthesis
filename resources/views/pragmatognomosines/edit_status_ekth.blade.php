@extends('forms')

@section('formsdetails')
    <form id="edit_status_ekth_form" method="post" action="{{ route('pragmatognomosines.update_status_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Κατάσταση Έκθεσης:') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <input name="id_status" type="hidden" value="{{ $status_ekth->pivot->id_status }}">
                                <input name="Status_date" type="hidden" value="{{ $status_ekth->pivot->Status_date }}">
                                <input name="Valid" type="hidden" value="{{ $status_ekth->pivot->Valid }}">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                           value="{{ $id_ekthesis }}" disabled autofocus>
                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('id_status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_status">{{ __('Κατάσταση') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_status" name="id_status" required disabled>
                                        @foreach($status as $stat)
                                            <option value="{{$status_ekth->pivot->id_status}}" @if($status_ekth->pivot->id_status == $stat->id_status) selected @endif>{{ $stat->Status }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Status_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Status_date">{{ __('Ημερομηνία κατάστασης') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Status_date" id="Status_date" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Status_date') ? ' is-invalid' : '' }}"
                                           value="{{ $status_ekth->pivot->Status_date }}" required disabled>
                                    <script type="text/javascript">
                                        $('#Status_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Status_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Status_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label{{ $errors->has('Process_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Process_date">{{ __('Ημερομηνία διεκπαιρέωσης') }}
                                    </label>
                                    <input type="text" name="Process_date" id="Process_date" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Process_date') ? ' is-invalid' : '' }}"
                                           value="{{ $status_ekth->pivot->Process_date }}" >
                                    <script type="text/javascript">
                                        $('#Process_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Process_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Process_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-label{{ $errors->has('Notes') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Notes">{{ __(' Παρατηρήσεις ') }}</label>
                                    <div id="Note">
                                        <textarea id="Notes" name="Notes" style="width: 500px; height: 200px;"
                                                  class="form-control form-input form-control-alternative{{ $errors->has('Notes') ? ' is-invalid' : '' }}">
                                                  {{ $status_ekth->pivot->Notes }}
                                        </textarea>
                                    </div>
                                    <script>
                                        var editor = new Quill('#Notes', {
                                            modules: { toolbar: '#toolbar' },
                                            theme: 'Snow'
                                        });
                                    </script>
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



