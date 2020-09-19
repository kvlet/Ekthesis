@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Τύπος Βαφής') }}</strong>
                    </h4>
                </div>
                <form id="create_paint_form" method="post" action="{{ route('paint.store') }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_paint_type') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_paint_type">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_paint_type" id="id_paint_type"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_paint_type') ? ' is-invalid' : '' }}"
                                                   value="{{ old('id_paint_type') }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label{{ $errors->has('paint_type') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="paint_type">{{ __(' Βαφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="paint_type" id="paint_type"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('paint_type') ? ' is-invalid' : '' }}"
                                                   value="{{ old('paint_type') }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Mark_del" name="Mark_del" required disabled>
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
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Καταχώρηση</button>
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
                                        <th scope="col">Βαφή</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($paint as $pain)
                                        <tr>
                                            <td>{{ $pain->id_paint_type }}</td>
                                            <td>{{ $pain->paint_type }}</td>
                                            <td>{{ $pain->Mark_del }}</td>
                                            <td><a href="{{ URL('paint/'.$pain->id_paint_type) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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






