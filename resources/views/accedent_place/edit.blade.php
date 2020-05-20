@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τόποι Ατυχήματος') }}</strong>
                    </h4>
                </div>

                <form id="create_place_form" method="post" action="{{ route('accedent_place.update',$place->id_accident_place) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_accedent_place') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_accedent_place">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_accedent_place" id="id_accedent_place"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_accedent_place') ? ' is-invalid' : '' }}"
                                                   value="{{ $place->id_accident_place }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label{{ $errors->has('Place') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Place">{{ __(' Τόπος') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Place" id="Place"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Place') ? ' is-invalid' : '' }}"
                                                   value="{{ $place->Place }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Mark_del" name="Mark_del" required>
                                                <option value="Ναι">Ναι</option>
                                                <option value="Όχι" selected="selected">Όχι</option>
                                            </select>
                                            @if ($errors->has('Mark_del'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Mark_del') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="text-center">
                                                <a href="{{ route('accedent_place.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
                                            </div>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table" id="place_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Τόπος</th>
                                        <th scope="col">Διαγραφή</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($accident_places as $accedent_place)
                                        <tr>
                                            <td>{{ $accedent_place->id_accident_place }}</td>
                                            <td>{{ $accedent_place->Place }}</td>
                                            <td>{{ $accedent_place->Mark_del }}</td>
                                            <td><a href="{{ URL('place/'.$accedent_place->id_accident_place) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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

