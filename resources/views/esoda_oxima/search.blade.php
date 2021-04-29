@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('car_income.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Εσόδων Οχήματος') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('sesod_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="sesod_date">{{ __('Από') }}</label>
                                    <input type="text" name="sesod_date" id="sesod_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('sesod_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#sesod_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('fesod_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fesod_date">{{ __('Έως ') }}</label>
                                    <input type="text" name="fesod_date" id="fesod_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fesod_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#fesod_date').datepicker({
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
                    @foreach($esoda_oximatos as $esodaoxima)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Εσόδων'.' '.'('.$count.')') }}</strong>
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
                                        <th>Τόπος</th>
                                        <th>Χιλιόμετρα</th>
                                        <th>Αξία</th>
                                        <th>Εταιρεία</th>
                                        <th>Έκθεση</th>
                                        <th>Παρατηρήσεις</th>
                                        <th>Διαγραφή</th>
                                        <th>Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($esoda_oximatos as $esodaoxima)
                                        <tr>
                                            <td> {{ $esodaoxima->date_esoda }} </td>
                                            <td>
                                                @foreach($accedent_places as $place)
                                                    @if($esodaoxima->id_accident_place == $place->id_accident_place )
                                                        {{ $place->Place }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $esodaoxima->km }} </td>
                                            <td> {{ $esodaoxima->value.'€' }} </td>
                                            <td>
                                                @foreach($companies as $comp)
                                                    @if($esodaoxima->id_company == $comp->id_company )
                                                        {{  $comp->comp_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $esodaoxima->id_ekthesis  }}</td>
                                            <td> {{ $esodaoxima->note }} </td>
                                            <td> {{ $esodaoxima->mark_del }} </td>
                                            <td>
                                                <a href="{{ URL('car_income/'.$esodaoxima->id_esoda_oximatos) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
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




