@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('car_expen.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Εξόδων Οχήματος') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('sexpen_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="sexpen_date">{{ __('Από') }}</label>
                                    <input type="text" name="sexpen_date" id="sexpen_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('sexpen_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#sexpen_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('fexpen_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fexpen_date">{{ __('Έως ') }}</label>
                                    <input type="text" name="fexpen_date" id="fexpen_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fexpen_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#fexpen_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Αναζήτηση</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <?php $count=0?>
                    @foreach($expens_oxima as $expenoxima)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Εξόδων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="expen_oxima_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Ημερομηνία</th>
                                        <th>Έξοδο</th>
                                        <th>Χιλιόμετρα</th>
                                        <th>Λίτρα</th>
                                        <th>Αξία</th>
                                        <th>Παρατηρήσεις</th>
                                        <th>Διαγραφή</th>
                                        <th>Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($expens_oxima as $expenoxima)
                                        <tr>
                                            <td> {{ $expenoxima->expen_date }} </td>
                                            <td>
                                                @foreach($expen as $exp)
                                                    @if($expenoxima->id_expen_oxima == $exp->id_expen_oxima )
                                                        {{ $exp->expen_oxima }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $expenoxima->km }} </td>
                                            <td> {{ $expenoxima->lt }} </td>
                                            <td> {{ $expenoxima->value }} </td>
                                            <td> {{ $expenoxima->note }} </td>
                                            <td> {{ $expenoxima->mark_del }} </td>
                                            <td>
                                                <a href="{{ URL('car_expen/'.$expenoxima->id_expenses_oxima) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




