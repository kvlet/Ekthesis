@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τύποι Έκθεσης') }}</strong>
                    </h4>{{ method_field('PUT') }}
                </div>

                <form id="create_diakrisis_form" method="post" action="{{ route('diakrisis.update', $diakrisi->id_diakrisi) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_diakrisi') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_diakrisi">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_diakrisi" id="id_diakrisi"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_diakrisi') ? ' is-invalid' : '' }}"
                                                   value="{{ $diakrisi->id_diakrisi }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label{{ $errors->has('Diakrisi') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Diakrisi">{{ __(' Τύπος Έκθεσης') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Diakrisi" id="Diakrisi"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Diakrisi') ? ' is-invalid' : '' }}"
                                                   value="{{ $diakrisi->Diakrisi }}" autofocus required>
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
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('Group_diakr') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Group_diakr">{{ __(' Προτεραιότητα') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Group_diakr" name="Group_diakr" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected="selected">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="text-center">
                                            <a href="{{ route('diakrisis.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button id="addRow" type="submit" class="btn btn-primary">Αποθήκευση</button>
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
                                <table class="table table-bordered table-hover" id="diakr_view" style="width:100%">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Διάκριση</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Προτεραιότητα</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($diakrisis as $diakr)
                                        <tr>
                                            <td>{{ $diakr->id_diakrisi }}</td>
                                            <td>{{ $diakr->Diakrisi }}</td>
                                            <td>{{ $diakr->Mark_del }}</td>
                                            <td>{{ $diakr->Group_diakr }}</td>
                                            <td><a href="{{ URL('diakrisis/'.$diakrisi->id_diakrisi) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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

