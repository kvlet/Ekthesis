@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('company.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Εταιρείας') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="compName" name="compName"
                                           placeholder="Πληκτρολογήστε την εταιρεία"
                                           aria-label="Πληκτρολογήστε την εταιρεία"
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
                    @foreach($companys as $company)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Εταιρειών'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="oximata_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Επωνυμία</th>
                                        <th scope="col">Α.Φ.Μ.</th>
                                        <th scope="col">Διεύθυνση</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companys as $company)
                                        <tr>
                                            <td>{{ $company->comp_name }}</td>
                                            <td>{{ $company->afm }}</td>
                                            <td>{{ $company->address }}</td>
                                            <td>{{ $company->Email }}</td>
                                            <td><a href="{{ URL('company/'.$company->id_company) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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

