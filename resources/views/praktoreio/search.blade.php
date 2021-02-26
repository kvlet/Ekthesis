@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('praktoreiο.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Πρακτορείου') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="eponymia" name="eponymia"
                                           placeholder="Πληκτρολογήστε το πρακτορείο"
                                           aria-label="Πληκτρολογήστε το πρακτορείο"
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
                    @foreach($praktoreia as $prakt)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Πρακτορείων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="praktoreio_view">
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
                                    @foreach($praktoreia as $praktoreio)
                                        <tr>
                                            <td> {{ $praktoreio->id_praktoreio }} </td>
                                            <td> {{ $praktoreio->eponymia }} </td>
                                            <td> {{ $praktoreio->address }} </td>
                                            <td> {{ $praktoreio->tel }} </td>
                                            <td> <a href="mailto: {{ $praktoreio->email }} " alt="send mail to {{ $praktoreio->eponymia }}">{{ $praktoreio->email }}</a></td>
                                            <td>
                                                <a href="{{ URL('praktoreiο/'.$praktoreio->id_praktoreio) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
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


