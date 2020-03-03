@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Αρχές Εγγράφων') }}</strong>
                    </h4>
                </div>
                @include('arxi_eggrafon.formModal')
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table" id="arxi_view">
                                    <thead>
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Αρχή</th>
                                        <th scope="col">Τηλέφωνο-1</th>
                                        <th scope="col">Τηλέφωνο-2</th>
                                        <th scope="col">Διαγραφή</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($arxes_ekdosis_eggrafon as $arxi)
                                        <tr>
                                            <td>{{ $arxi->id_Arxi_ekdosis_eggrafon }}</td>
                                            <td>{{ $arxi->Arxi }}</td>
                                            <td>{{ $arxi->Tel1 }}</td>
                                            <td>{{ $arxi->Tel2 }}</td>
                                            <td>{{ $arxi->Mark_del }}</td>
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

