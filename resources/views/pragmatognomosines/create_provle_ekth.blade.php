@extends('forms')

@section('formsdetails')
    <form id="create_provlepseis_ekth_form" method="post" action="{{ route('pragmatognomosines.store_provlep_ekth',$id_ekthesis) }}" autocomplete="off">
        @csrf
        <?php $count=0?>
        @foreach($provlepseis as $prov)
            <?php $count++ ?>
        @endforeach

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Πρόβλέψεις Έκθεσης:') }}</strong>
                            <strong>{{ __($id_ekthesis) }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                           value="{{ $id_ekthesis }}" disabled autofocus>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('id_provlepseis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_provlepseis">{{ __(' Πρόβλεψη ') }}<span style="color:red;font-weight:bold">*</span> </label>
                                        <select class="form-control form-select" id="id_provlepseis" name="id_provlepseis" required>
                                            <option selected value value=-1>{{ " Επιλέξτε Πρόβλεψη " }}</option>
                                            @if($count==0)
                                                <option value="1η Πρόβλεψη" selected="1η Πρόβλεψη">1η Πρόβλεψη</option>
                                            @elseif($count==1)
                                                <option value="2η Πρόβλεψη" selected="2η Πρόβλεψη">2η Πρόβλεψη</option>
                                            @else
                                                <option value="3η Πρόβλεψη" selected="3η Πρόβλεψη">3η Πρόβλεψη</option>
                                            @endif
                                        </select>
                                    @if ($errors->has('id_provlepseis'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('id_provlepseis') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Date_provl') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Date_provl">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Date_provl" id="Date_provl" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_provl') ? ' is-invalid' : '' }}"
                                           value="{{ old('Date_provl') }}" required >
                                    <script type="text/javascript">
                                        $('#Date_provl').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_provl'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_provl') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Amount">{{ __('Ποσό') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" name="Amount" id="Amount"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Amount') ? ' is-invalid' : '' }}"
                                           value="{{ old('Amount') }}" autofocus required>
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
                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
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



