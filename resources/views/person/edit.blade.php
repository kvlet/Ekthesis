@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-2 menu-text-size">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-person-tab" data-toggle="pill" href="#v-pills-person" role="tab" aria-controls="v-pills-person" aria-selected="true">Παθών / Υπαίτιος</a>
                <a class="nav-link" id="v-pills-pathon_prag-tab" data-toggle="pill" href="#v-pills-pathon_prag" role="tab" aria-controls="v-pills-pathon_prag" aria-selected="false">Εκθέσεις ως Παθών</a>
                <a class="nav-link" id="v-pills-ypat_prag-tab" data-toggle="pill" href="#v-pills-ypat_prag" role="tab" aria-controls="v-pills-ypat_prag" aria-selected="false">Εκθέσεις ως Υπαίτιος</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-person" role="tabpanel" aria-labelledby="v-pills-person-tab">
                    <form id="create_person_form" method="post" action="{{ route('person.update',$person->id_person) }}" autocomplete="off">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Παθόντες / Υπαίτιοι') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('id_person') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="id_person">{{ __('Κωδικός') }} </label>
                                                <input type="text" name="id_person" id="id_person"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('id_person') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->id_person }}"   autofocus disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('L_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="L_name">{{ __(' Επώνυμο ') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="L_name" id="L_name"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('L_name') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->L_name }}" autofocus required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('F_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="F_name">{{ __(' Όνομα ') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="F_name" id="F_name"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('F_name') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->F_name }}" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Address') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Address">{{ __(' Διεύθυνση ') }} </label>
                                                <input type="text" name="Address" id="Address"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Address') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Address }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Phone') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Phone">{{ __(' Τηλέφωνο') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="Phone" id="Phone"  pattern="[0-9]{10}" maxlength="10"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Phone') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Phone }}" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Kinito') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Kinito">{{ __('Κινητό') }} </label>
                                                <input type="text" name="Kinito" id="Kinito" maxlength="10" pattern="[0-9]{10}"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Kinito') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Kinito }}"   autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Tautotita') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Tautotita">{{ __(' Ταυτότητα ') }} </label>
                                                <input type="text" name="Tautotita" id="Tautotita"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Tautotita') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Tautotita }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('AFM') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="AFM">{{ __(' ΑΦΜ ') }} </label>
                                                <input type="text" name="AFM" id="AFM"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('AFM') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->AFM }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Father_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Father_name">{{ __(' Πατρώνυμο ') }} </label>
                                                <input type="text" name="Father_name" id="Father_name"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Father_name') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Father_name }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Mother_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Mother_name">{{ __(' Μητρώνυμο ') }} </label>
                                                <input type="text" name="Mother_name" id="Mother_name"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Mother_name') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Mother_name }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Tameio') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Tameio">{{ __(' Ταμείο ') }} </label>
                                                <input type="text" name="Tameio" id="Tameio"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Tameio') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Tameio }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Amka') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Amka">{{ __(' ΑΜΚΑ ') }} </label>
                                                <input type="text" name="Amka" id="Amka"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Amka') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Amka}}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Job') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Job">{{ __(' Επάγγελμα ') }} </label>
                                                <input type="text" name="Job" id="Job"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Job') ? ' is-invalid' : '' }}"
                                                       value="{{  $person->Job }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Filo') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Filo">{{ __(' Φύλο') }}</label>
                                                <select class="form-control form-select" id="Filo" name="Filo" required>
                                                    <option value="Γυναίκα">Γυναίκα</option>
                                                    <option value="Άντρας" selected="selected">Άντρας</option>
                                                </select>
                                                @if ($errors->has('Filo'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Filo') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Baros') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Baros">{{ __(' Βάρος ') }} </label>
                                                <input type="text" name="Baros" id="Baros"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Baros') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Baros }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Ypsos') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Ypsos">{{ __(' Ύψος ') }} </label>
                                                <input type="text" name="Ypsos" id="Ypsos"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Ypsos') ? ' is-invalid' : '' }}"
                                                       value="{{$person->Ypsos }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Hm_gen') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Hm_gen">{{ __(' Ημ. Γέννησης ') }} </label>
                                                <input type="text" name="Hm_gen" id="Hm_gen" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Hm_gen') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Hm_gen }}" autofocus>
                                                <script type="text/javascript">
                                                    $('#Hm_gen').datepicker({
                                                        autoclose: true,
                                                        format: 'dd-mm-yyyy',
                                                        language: 'el',
                                                        todayHighlight: true,
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('Age') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Age">{{ __(' Ηλικία ') }} </label>
                                                <input type="text" name="Age" id="Age"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('Age') ? ' is-invalid' : '' }}"
                                                       value="{{ $person->Age }}" autofocus disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                <div class="tab-pane fade" id="v-pills-pathon_prag" role="tabpanel" aria-labelledby="v-pills-pathon_prag-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosinesp as $pragmatognomosini)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Παθών :'.' '.$person->L_name.' '.$person->F_name) }}</strong>
                                    </h4>
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Εκθέσεων '.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <table class="table table-sm table-bordered table-hover" id="pragma_view">
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
                                                    @foreach($pragmatognomosinesp as $pragmatognomosini)
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
                <div class="tab-pane fade" id="v-pills-ypat_prag" role="tabpanel" aria-labelledby="v-pills-ypat_prag-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosinesy as $pragmatognomosini)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Υπαίτιος:'.' '.$person->L_name.' '.$person->F_name) }}</strong>
                                    </h4>
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Εκθέσεων '.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <table class="table table-sm table-bordered table-hover" id="pragma_view">
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
                                                    @foreach($pragmatognomosinesy as $pragmatognomosini)
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


