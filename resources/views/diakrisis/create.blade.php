@extends('forms')

@section('formsdetails')
    @include('diakrisis.formCreate')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col">
                <table class="display" id="diakr_view" style="width:100%">
                    <thead>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
