@extends('forms')

@section('formsdetails')
    @include('accident_place.formCreate')
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
                    @foreach($accident_places as $accident_place)
                        <tr>
                            <td>{{ $accident_place->id_accident_place }}</td>
                            <td>{{ $accident_place->Place }}</td>
                            <td>{{ $accident_place->Mark_del }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
