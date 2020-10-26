@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('oximata.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Οχήματος') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="pinakida" name="pinakida"
                                           placeholder="Πληκτρολογήστε αριθμό κυκλοφορίας"
                                           aria-label="Πληκτρολογήστε αριθμό κυκλοφορίας"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">Αναζήτηση</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

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
                    @foreach($oximata as $oxima)
                            <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Οχημάτων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="oximata_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Αρ. Κυκλοφορίας</th>
                                        <th scope="col">Μάρκα</th>
                                        <th scope="col">Χρώμα</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($oximata as $oxima)
                                            <tr>
                                                <td>{{ $oxima->Ar_kyklo }}</td>
                                                <td>{{ $oxima->id_markes }}</td>
                                                <td>{{ $oxima->id_xromata }}</td>
                                                <td><a href="{{ URL('oximata/'.$oxima->id_oximata) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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
