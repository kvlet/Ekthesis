@extends('forms')

@section('formsdetails')
    @include('arxi_eggrafon.formCreate')
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
@endsection

