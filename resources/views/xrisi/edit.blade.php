@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Χρήση') }}</strong>
                    </h4>
                </div>
                <form id="edit_xrisi_form" method="post" action="{{ route('xrisi.update',$xrisi->id_xrisi) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_xrisi') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_xrisi">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_xrisi" id="id_xrisi"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_xrisi') ? ' is-invalid' : '' }}"
                                                   value="{{ $xrisi->id_xrisi }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label{{ $errors->has('xrisi') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="xrisi">{{ __(' Χρήση') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="xrisi" id="xrisi"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('xrisi') ? ' is-invalid' : '' }}"
                                                   value="{{ $xrisi->xrisi }}" autofocus required>
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
                                            <a href="{{ route('xrisi.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
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
                                <table class="table table-bordered table-hover" id="nomoi_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Χρήση</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($xrisis as $xrisi)
                                        <tr>
                                            <td>{{ $xrisi->id_xrisi }}</td>
                                            <td>{{ $xrisi->xrisi }}</td>
                                            <td>{{ $xrisi->Mark_del }}</td>
                                            <td><a href="{{ URL('xrisi/'.$xrisi->id_xrisi) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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


