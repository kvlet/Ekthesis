@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Αρχές Εγγράφων') }}</strong>
                    </h4>
                </div>
                <form id="create_arxi_form" method="post" action="{{ route('arxi_eggrafon.update',$arxi->id_Arxi_ekdosis_eggrafon) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_Arxi_ekdosis_eggrafon') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_Arxi_ekdosis_eggrafon">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_Arxi_ekdosis_eggrafon" id="id_Arxi_ekdosis_eggrafon"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_Arxi_ekdosis_eggrafon') ? ' is-invalid' : '' }}"
                                                   value="{{ $arxi->id_Arxi_ekdosis_eggrafon }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Arxi') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Arxi">{{ __(' Αρχή Εγγράφων') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="Arxi" id="Arxi"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Arxi') ? ' is-invalid' : '' }}"
                                                   value="{{ $arxi->Arxi }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('Tel1') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Tel1">{{ __(' Τηλέφωνο-1') }} </label>
                                            <input type="text" name="Tel1" id="Tel1"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Arxi') ? ' is-invalid' : '' }}"
                                                   value="{{ $arxi->Tel1 }}" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('Tel2') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Tel2">{{ __(' Τηλέφωνο-2') }}</label>
                                            <input type="text" name="Tel2" id="Tel2"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('Tel2') ? ' is-invalid' : '' }}"
                                                   value="{{ $arxi->Tel2 }}" autofocus>
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
                                            <a href="{{ route('arxi_eggrafon.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
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
                                <table class="table table-bordered table-hover" id="arxi_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Αρχή</th>
                                        <th scope="col">Τηλέφωνο-1</th>
                                        <th scope="col">Τηλέφωνο-2</th>
                                        <th scope="col">Διαγραφή</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($arxes_ekdosis_eggrafon as $arxi)
                                        <tr>
                                            <td>{{ $arxi->id_Arxi_ekdosis_eggrafon }}</td>
                                            <td>{{ $arxi->Arxi }}</td>
                                            <td>{{ $arxi->Tel1 }}</td>
                                            <td>{{ $arxi->Tel2 }}</td>
                                            <td>{{ $arxi->Mark_del }}</td>
                                            <td><a href="{{ URL('arxi/'.$arxi->id_Arxi_ekdosis_eggrafon) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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


