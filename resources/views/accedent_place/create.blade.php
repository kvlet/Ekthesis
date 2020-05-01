@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τόποι Ατυχήματος') }}</strong>
                    </h4>
                </div>
                @include('accedent_place.formModal')
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table" id="place_view">
                                    <thead>
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Τόπος</th>
                                        <th scope="col">Διαγραφή</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($accedent_places as $accedent_place)
                                        <tr>
                                            <td>{{ $accedent_place->id_accedent_place }}</td>
                                            <td>{{ $accedent_place->Place }}</td>
                                            <td>{{ $accedent_place->Mark_del }}</td>
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
