@extends('forms')

@section('formsdetails')
    @include('nomoi.formCreate')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col">
                <table class="table table-hover" id="nomoi_view">
                    <thead>
                    <tr>
                        <th scope="col">Κωδικός</th>
                        <th scope="col">Νομός</th>
                        <th scope="col">Διαγραφή</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nomoi as $nomos)
                        <tr>
                            <td>{{ $nomos->id_nomoi }}</td>
                            <td>{{ $nomos->Nomos }}</td>
                            <td>{{ $nomos->Mark_del }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
