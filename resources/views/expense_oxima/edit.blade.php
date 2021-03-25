@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Έξοδα οχήματος') }}</strong>
                    </h4>
                </div>
                <form id="create_expen_oxima_form" method="post" action="{{ route('expen_manage.update',$expen_oxima->id_expen_oxima) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_expen_oxima') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_expen_oxima">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_expen_oxima" id="id_expen_oxima"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_expen_oxima') ? ' is-invalid' : '' }}"
                                                   value="{{ $expen_oxima->id_expen_oxima }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label{{ $errors->has('expen_oxima') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="expen_oxima">{{ __(' Έξοδο') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="expen_oxima" id="expen_oxima"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('expen_oxima') ? ' is-invalid' : '' }}"
                                                   value="{{ $expen_oxima->expen_oxima }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('mark_del') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="mark_del" name="mark_del" required >
                                                <option value="Ναι">Ναι</option>
                                                <option value="Όχι" selected="selected">Όχι</option>
                                            </select>
                                            @if ($errors->has('mark_del'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mark_del') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
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
                                <table class="table table-bordered table-hover" id="expen_oxima_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Έξοδο</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($expens_oxima as $expen)
                                        <tr>
                                            <td>{{ $expen->id_expen_oxima }}</td>
                                            <td>{{ $expen->expen_oxima }}</td>
                                            <td>{{ $expen->mark_del }}<expen_manage/td>
                                            <td><a href="{{ URL('expen_manage/'.$expen->id_expen_oxima) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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


