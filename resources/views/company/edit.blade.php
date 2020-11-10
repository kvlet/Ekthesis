@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-2 menu-text-size">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-companys-tab" data-toggle="pill" href="#v-pills-companys" role="tab" aria-controls="v-pills-companys" aria-selected="true">Εταιρεία</a>
                <a class="nav-link" id="v-pills-dept-tab" data-toggle="pill" href="#v-pills-dept" role="tab" aria-controls="v-pills-dept" aria-selected="false">Τηλέφωνα</a>
                <a class="nav-link" id="v-pills-price-tab" data-toggle="pill" href="#v-pills-price" role="tab" aria-controls="v-pills-price" aria-selected="false">Τιμοκατάλογος</a>
                <a class="nav-link" id="v-pills-pragmcomp-tab" data-toggle="pill" href="#v-pills-pragmcomp" role="tab" aria-controls="v-pills-pragmcomp" aria-selected="false" >Εκθέσεις Εταιρείας</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-companys" role="tabpanel" aria-labelledby="v-pills-companys-tab">
                    <form id="create_company_form" method="post" action="{{ route('company.update', $company->id_company) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Ασφαλιστική Εταιρεία:'.' '.$company->comp_name) }}</strong>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('id_company') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_company">{{ __('Κωδικός') }} </label>
                                                    <input type="text" name="id_company" id="id_company"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_company') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->id_company }}"   autofocus disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('comp_name') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="comp_name">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="comp_name" id="comp_name"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('comp_name') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->comp_name }}" autofocus required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('afm') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="afm">{{ __(' ΑΦΜ ') }} <span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="afm" id="afm"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('afm') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->afm }}" autofocus required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('address') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="address">{{ __(' Διεύθυνση ') }} </label>
                                                    <input type="text" name="address" id="address"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->address }}" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('tk') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="tk">{{ __(' Τ.Κ. ') }} </label>
                                                    <input type="text" name="tk" id="tk"  pattern="[0-9]{10}" maxlength="5"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('tk') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->tk }}" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('Fax') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Fax">{{ __(' Fax ') }} </label>
                                                    <input type="text" name="Fax" id="Fax"  pattern="[0-9]{10}" maxlength="10"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Fax') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->fax }}" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('Email') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Email">{{ __(' Email ') }} </label>
                                                    <input type="text" name="Email" id="Email"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Email') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->Email }}" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-label{{ $errors->has('Ypoloipo') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ypoloipo">{{ __(' Υπόλοιπο ') }} </label>
                                                    <input type="text" name="Ypoloipo" id="Ypoloipo"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ypoloipo') ? ' is-invalid' : '' }}"
                                                           value="{{ $company->Ypoloipo }}" autofocus disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <hr>
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
                        </div>
                        @include('errors')
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-dept" role="tabpanel" aria-labelledby="v-pills-dept-tab">
                    <a href="{{ route('company.create_company_dept',$company->id_company) }}" target="" class="btn btn-primary">Προσθήκη τμήματος</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Τμημάτων') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="department" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Τμήμα</th>
                                                    <th>Τηλέφωνο</th>
                                                    <th>Fax</th>
                                                    <th>Email</th>
                                                    <th>Υπεύθυνος</th>
                                                    <th>Επεξεργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($company->departments as $depart)
                                                    <tr>
                                                        <td>
                                                            @foreach($department as $dept)
                                                                @if ($dept->id_department == $depart->pivot->id_department)
                                                                    {{ $dept->dept }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td> {{ $depart->pivot->phone }} </td>
                                                        <td> {{ $depart->pivot->Fax }} </td>
                                                        <td> {{ $depart->pivot->Email }} </td>
                                                        <td> {{ $depart->pivot->Respon }} </td>
                                                        <td>
                                                            <a href="{{  URL('company/'.$company->id_company.'/edit_department/'.$depart->pivot->id_department) }}"
                                                               target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{  URL('company/'.$company->id_company.'/delete_department/'.$depart->pivot->id_department) }}"
                                                               target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                        </td>
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
                <div class="tab-pane fade" id="v-pills-price" role="tabpanel" aria-labelledby="v-pills-price-tab">...</div>
                <div class="tab-pane fade" id="v-pills-pragmcomp" role="tabpanel" aria-labelledby="v-pills-pragmcomp-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosines as $pragmatognomosini)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Εταιρεία:'.' '.$company->comp_name) }}</strong>
                                    </h4>
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Εκθέσεων'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid mt-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-hover dislpay" style="width:100%" id="pragma_view">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Αρ. Πρωτοκόλλου</th>
                                                        <th scope="col">Αρ. Φακέλου</th>
                                                        <th scope="col">Ημ/νια Ατυχήματος</th>
                                                        <th scope="col">Ημ/νια Δικασίμου</th>
                                                        <th scope="col">Εταιρεία Εντολέας</th>
                                                        <th scope="col">Παθών</th>
                                                        <th scope="col">Αρ. Κυκλ. Παθών</th>
                                                        <th scope="col">Πραγμ/γνώμονας</th>
                                                        <th scope="col">Τύπος</th>
                                                        <th scope="col">Επεξεργασία</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pragmatognomosines as $pragmatognomosini)
                                                        <tr>
                                                            <td>{{$pragmatognomosini->id_ekthesis}}</td>
                                                            <td>{{ $pragmatognomosini->Prot_bibliou }}</td>
                                                            <td>{{$pragmatognomosini->Date_atiximatos}}</td>
                                                            <td>{{$pragmatognomosini->Date_dikasimou}}</td>
                                                            <td>
                                                                @foreach($companies as $company)
                                                                    @if($pragmatognomosini->id_company_pathon == $company->id_company)
                                                                        {{$company->comp_name}}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach($pathontes as $pathon)
                                                                    @if($pragmatognomosini->id_pathon == $pathon->id_person)
                                                                        {{$pathon->L_name. ' '.$pathon->F_name}}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @if ($pragmatognomosini->id_oximatos_pathon != 1)
                                                                    @foreach($oximata_pathon as $oxima_pathon)
                                                                        @if($pragmatognomosini->id_oximatos_pathon == $oxima_pathon->id_oximata)
                                                                            {{$oxima_pathon->Ar_kyklo}}
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                    {{$pragmatognomosini->Object}}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @foreach($pragmatognomones as $pragmatognomonas)
                                                                    @if($pragmatognomosini->id == $pragmatognomonas->id)
                                                                        {{$pragmatognomonas->L_name.' '.$pragmatognomonas->F_name }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>{{ $pragmatognomosini->id_diakrisi }}</td>
                                                            <td>
                                                                @if ($pragmatognomosini->id_diakrisi=='Π' || ($pragmatognomosini->id_diakrisi=='ΠΕ' ))
                                                                    <a href="{{ URL('pragmatognomosines/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @else
                                                                    <a href="{{ URL('ereunes/'.$pragmatognomosini->id_ekthesis) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                                                @endif
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
                </div>
            </div>
        </div>
    </div>
@endsection


