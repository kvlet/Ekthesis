@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τύποι Έκθεσης') }}</strong>
                    </h4>
                </div>
                @include('diakrisis.formModal')
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="diakr_view" style="width:100%">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Διάκριση</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Προτεραιότητα</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($diakrisis as $diakrisi)
                                            <tr>
                                                <td>{{ $diakrisi->id_diakrisi }}</td>
                                                <td>{{ $diakrisi->Diakrisi }}</td>
                                                <td>{{ $diakrisi->Mark_del }}</td>
                                                <td>{{ $diakrisi->Group_diakr }}</td>
                                                <td><a href="{{ URL('diakrisis/'.$diakrisi->id_diakrisi) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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
