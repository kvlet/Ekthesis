@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Έξοδα') }}</strong>
                    </h4>
                </div>
                <form id="edit_expense_form" method="post" action="{{ route('expense.update',$expense->id_expenses) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('id_expenses') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_expenses">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_expenses" id="id_expenses"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_expenses') ? ' is-invalid' : '' }}"
                                                   value="{{ $expense->id_expenses }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('eksodo') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="eksodo">{{ __(' Έξοδο') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="eksodo" id="eksodo"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('eksodo') ? ' is-invalid' : '' }}"
                                                   value="{{ $expense->eksodo }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('type_eksodo') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="type_eksodo">{{ __(' Τύπος εξόδου ') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="type_eksodo" name="type_eksodo" required>
                                                @if ($expense->type_eksodo==null)
                                                    <option  value=-1 selected>{{ " Επιλέξτε Τύπο εξόδου " }}</option>
                                                    <option  value="Αμοιβή">Αμοιβή</option>
                                                    <option  value="Έξοδο">Έξοδο</option>
                                                @elseif($expense->type_eksodo=='Αμοιβή')
                                                    <option  value=-1>{{ " Επιλέξτε Τύπο εξόδου " }}</option>
                                                    <option  value="{{$expense->type_eksodo}}" selected>Αμοιβή</option>
                                                    <option  value="Έξοδο">Έξοδο</option>
                                                @elseif($expense->type_eksodo=='Έξοδο')
                                                    <option  value=-1>{{ " Επιλέξτε Τύπο εξόδου " }}</option>
                                                    <option  value="Αμοιβή">Αμοιβή</option>
                                                    <option  value="{{$expense->type_eksodo}}" selected>Έξοδο</option>
                                                @endif
                                            </select>
                                            @if ($errors->has('type_eksodo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('type_eksodo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Where_use') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Where_use">{{ __(' Χρήση εξόδου ') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Where_use" name="Where_use" required >
                                                @if ($expense->Where_use==null)
                                                    <option value=-1 selected>{{ " Επιλέξτε Χρήση εξόδου " }}</option>
                                                    <option value="Ε">Ε</option>
                                                    <option value="Γ" >Γ</option>
                                                    <option  value="Ε/Γ">Ε/Γ</option>
                                                @elseif($expense->Where_use=='Ε')
                                                    <option value=-1>{{ " Επιλέξτε Χρήση εξόδου " }}</option>
                                                    <option value="{{$expense->Where_use}}" selected>Ε</option>
                                                    <option value="Γ" >Γ</option>
                                                    <option  value="Ε/Γ">Ε/Γ</option>
                                                @elseif($expense->Where_use=='Γ')
                                                    <option value=-1>{{ " Επιλέξτε Χρήση εξόδου " }}</option>
                                                    <option value="Ε" >Ε</option>
                                                    <option value="{{$expense->Where_use}}" selected>Γ</option>
                                                    <option  value="Ε/Γ">Ε/Γ</option>
                                                @elseif($expense->Where_use=='Ε/Γ')
                                                    <option value=-1>{{ " Επιλέξτε Χρήση εξόδου " }}</option>
                                                    <option value="Ε" >Ε</option>
                                                    <option value="Γ" >Γ</option>
                                                    <option  value="{{$expense->Where_use}}" selected>Ε/Γ</option>
                                                @endif
                                            </select>
                                            @if ($errors->has('Where_use'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Where_use') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="Mark_del" name="Mark_del" required>
                                                <option value="Ναι" >Ναι</option>
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
                                            <a href="{{ route('expense.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
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
                                        <th scope="col">Έξοδο</th>
                                        <th scope="col">Τύπος εξόδου</th>
                                        <th scope="col">Χρήση εξόδου</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($expenses as $expen)
                                        <tr>
                                            <td>{{ $expen->id_expenses }}</td>
                                            <td>{{ $expen->eksodo }}</td>
                                            <td>{{ $expen->type_eksodo }}</td>
                                            <td>{{ $expen->Where_use }}</td>
                                            <td>{{ $expen->Mark_del }}</td>
                                            <td><a href="{{ URL('expense/'.$expen->id_expenses) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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



