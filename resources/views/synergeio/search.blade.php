@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('synergeio.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Συνεργείου') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Name_syner" name="Name_syner"
                                           placeholder="Πληκτρολογήστε το συνεργείο"
                                           aria-label="Πληκτρολογήστε το συνεργείο"
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
                    @foreach($synergeia as $syner)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Συνεργείων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="synergeio_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Κωδικός</th>
                                        <th>Επωνυμία</th>
                                        <th>Διεύθυνση</th>
                                        <th>Τηλέφωνο</th>
                                        <th>Email</th>
                                        <th>Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($synergeia as $synergeio)
                                        <tr>
                                            <td> {{ $synergeio->id_synergeia }} </td>
                                            <td> {{ $synergeio->Name_syner }} </td>
                                            <td> {{ $synergeio->Addres }} </td>
                                            <td> {{ $synergeio->Phone }} </td>
                                            <td> <a href="mailto: {{ $synergeio->Email }} " alt="send mail to {{ $synergeio->Name_syner }}">{{ $synergeio->Email }}</a></td>
                                            <td>
                                                <a href="{{ URL('synergeio/'.$synergeio->id_synergeia) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
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



