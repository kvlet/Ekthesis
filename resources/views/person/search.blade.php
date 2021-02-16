@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('person.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Αναζήτηση Παθών / Υπαιτίου') }}</strong>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="L_name" name="L_name"
                                           placeholder="Πληκτρολογήστε επώνυμο"
                                           aria-label="Πληκτρολογήστε επώνυμο"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">Αναζήτηση</button>
                                    </div>
                                </div>
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
                    @foreach($persons as $pers)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Παθώντων / Υπαιτίων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="person_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Επώνυμο</th>
                                        <th scope="col">Όνομα</th>
                                        <th scope="col">Α.Φ.Μ.</th>
                                        <th scope="col">Κινητό</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($persons as $pers)
                                        <tr>
                                            <td>{{ $pers->L_name }}</td>
                                            <td>{{ $pers->F_name }}</td>
                                            <td>{{ $pers->AFM }}</td>
                                            <td>{{ $pers->Kinito }}</td>
                                            <td><a href="{{ URL('person/'.$pers->id_person) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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


