@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-2 menu-text-size">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-oximata-tab" data-toggle="pill" href="#v-pills-oximata" role="tab" aria-controls="v-pills-oximata" aria-selected="true">Όχημα</a>
                <a class="nav-link" id="v-pills-owners-tab" data-toggle="pill" href="#v-pills-owners" role="tab" aria-controls="v-pills-owners" aria-selected="false" style="color: red">Ιδιοκτήτες</a>
                <a class="nav-link" id="v-pills-pragmoxim-tab" data-toggle="pill" href="#v-pills-pragmoxim" role="tab" aria-controls="v-pills-pragmoxim" aria-selected="false" >Εκθέσεις Οχήματος</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-oximata" role="tabpanel" aria-labelledby="v-pills-oximata-tab">
                    <form method="post" action="{{ route('oximata.update', $oxima->id_oximata) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Όχημα') }}</strong>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_oximata') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="id_oximata">{{ __('Κωδικός') }}</label>
                                                    <input type="text" name="id_oximata" id="id_oximata"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('id_oximata') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->id_oximata }}" disabled autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ar_kyklo') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ar_kyklo">{{ __('Αρ. Κυκλοφορίας') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="Ar_kyklo" id="Ar_kyklo"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_kyklo') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->Ar_kyklo }}" required autofocus>
                                                    @if ($errors->has('Ar_kyklo'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Ar_kyklo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ar_plasiou') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ar_plasiou">{{ __('Αρ. Πλαισίου') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="Ar_plasiou" id="Ar_plasiou"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_plasiou') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->Ar_plasiou }}" required autofocus>
                                                    @if ($errors->has('Ar_plasiou'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Ar_plasiou') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_markes') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_markes">{{ __('Μάρκα') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_markes" name="id_markes"  required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Μάρκα " }}</option>
                                                        @foreach($markes as $marka)
                                                            <option value="{{$marka->id_markes}}" @if($oxima->id_markes == $marka->id_markes) selected @endif>{{ $marka->marka }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_markes'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_markes') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecmark') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecmark">{{ __('Νέα Μάρκα') }}</label>
                                                    <div class="form-label{{ $errors->has('id_markes') ? ' has-danger' : '' }}" style="margin: auto">
                                                        {{--                                                <label class="form-control-label" for="newrec">{{ __('Νέος Τύπος') }}</label>--}}
                                                        <button id="newrecmark" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#markesModal">
                                                            {{--                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>--}}

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="modelo">{{ __('Μοντέλο') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <input type="text" name="modelo" id="modelo"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('modelo') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->modelo }}"  required autofocus>
                                                    @if ($errors->has('modelo'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('modelo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_xrisi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_xrisi">{{ __('Χρήση') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_xrisi"  name="id_xrisi"  required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Χρήση " }}</option>
                                                        @foreach($xrisis as $xrisi)
                                                            <option value="{{$xrisi->id_xrisi}}" @if($oxima->id_xrisi == $xrisi->id_xrisi) selected @endif>{{ $xrisi->xrisi}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_xrisi'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_xrisi') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecxri') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrec">{{ __(' Νέα Χρήση') }}</label>
                                                    <div class="form-label{{ $errors->has('id_xrisi') ? ' has-danger' : '' }}" style="margin: auto">

                                                        <button id="newrecxri" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#xrisiModal">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Hm_first_kykl') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Hm_first_kykl">{{ __('Ημ/νια 1ης Κυκλοφορίας') }}</label>
                                                    <input type="text" name="Hm_first_kykl" id="Hm_first_kykl" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Hm_first_kykl') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->Hm_first_kykl }}"  autofocus>
                                                    <script type="text/javascript">
                                                        $('#Hm_first_kykl').datepicker({
                                                            autoclose: true,
                                                            format: 'dd-mm-yyyy',
                                                            language: 'el',
                                                            todayHighlight: true,
                                                        });
                                                    </script>
                                                    @if ($errors->has('Hm_first_kykl'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Hm_first_kykl') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_xromata') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_xromata">{{ __('Χρώμα') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_xromata"  name="id_xromata"  required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Χρώμα " }}</option>
                                                        @foreach($xromata as $xroma)
                                                            <option value="{{$xroma->id_xromata}}" @if($oxima->id_xromata == $xroma->id_xromata) selected @endif>{{ $xroma->color}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_xromata'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_xromata') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecxrom') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrecxrom">{{ __('Νέο Χρώμα') }}</label>
                                                    <div class="form-label{{ $errors->has('id_xromata') ? ' has-danger' : '' }}" style="margin: auto">
                                                        <button id="newrecxrom" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#xromataModal">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('kibika') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="kibika">{{ __('Κυβικά') }}</label>
                                                    <input type="number" name="kibika" id="kibika"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('kibika') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->kibika }}"  autofocus>
                                                    @if ($errors->has('kibika'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('kibika') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_car_type') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_car_type">{{ __('Τύπος') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_car_type"  name="id_car_type"  required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Τύπο " }}</option>
                                                        @foreach($cartype as $cart)
                                                            <option value="{{$cart->id_car_type}}" @if($oxima->id_car_type == $cart->id_car_type) selected @endif>{{ $cart->Typos}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_car_type'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_car_type') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newreccart') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrec">{{ __(' Νέα Τύπος') }}</label>
                                                    <div class="form-label{{ $errors->has('id_car_type') ? ' has-danger' : '' }}" style="margin: auto">

                                                        <button id="newreccart" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#cartypeModal">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('manuf_year') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="manuf_year">{{ __('Έτος κατασκευής') }}</label>
                                                    <input type="number" name="manuf_year" id="manuf_year"
                                                           class="form-control form-input form-control-alternative{{ $errors->has('manuf_year') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->manuf_year }}"  autofocus>
                                                    @if ($errors->has('manuf_year'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('manuf_year') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('id_paint') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="id_paint">{{ __('Βαφή') }}<span style="color:red;font-weight:bold">*</span></label>
                                                    <select class="form-control form-select" id="id_paint"  name="id_paint"  required>
                                                        <option selected value value=-1>{{ " Επιλέξτε Βαφή " }}</option>
                                                        @foreach($paint as $pain)
                                                            <option value="{{$pain->id_paint_type}}" @if($oxima->id_paint == $pain->id_paint_type) selected @endif>{{ $pain->paint_type}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_paint_type'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('id_paint_type') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-label{{ $errors->has('newrecpaint') ? ' has-danger' : '' }}">
                                                    <!-- Button trigger modal -->
                                                    <label class="form-control-label" for="newrec">{{ __(' Νέα Βαφή') }}</label>
                                                    <div class="form-label{{ $errors->has('id_paint') ? ' has-danger' : '' }}" style="margin: auto">

                                                        <button id="newrecpaint" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#paintModal">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Thesis') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label"
                                                           for="Thesis">{{ __('Θέσης') }}</label>
                                                    <input type="number" name="Thesis" id="Thesis"
{{--                                                           oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"--}}
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Thesis') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->Thesis }}" autofocus>
                                                    @if ($errors->has('Thesis'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Thesis') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-label{{ $errors->has('Ippoi') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="Ippoi">{{ __('Ιπποι') }}</label>
                                                    <input type="number" name="Ippoi" id="Ippoi"
{{--                                                           oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"--}}
                                                           class="form-control form-input form-control-alternative{{ $errors->has('Ippoi') ? ' is-invalid' : '' }}"
                                                           value="{{ $oxima->Ippoi }}" autofocus>
                                                    @if ($errors->has('Ippoi'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Ippoi') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
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
                                            <div class="col-md-5">

                                            </div>
                                            <div class="col-md-2">

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
                <div class="tab-pane fade" id="v-pills-owners" role="tabpanel" aria-labelledby="v-pills-owners-tab">...</div>
                <div class="tab-pane fade" id="v-pills-pragmoxim" role="tabpanel" aria-labelledby="v-pills-pragmoxim-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <?php $count=0?>
                                    @foreach($pragmatognomosines as $pragmatognomosini)
                                        <?php $count++ ?>
                                    @endforeach
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Εκθέσεων'.' '.'('.$count.')') }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid mt-4">
                                        <div class="row">
                                            <div class="col">
                                                <table class="table table-bordered table-hover" id="pragma_view">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Αρ. Πρωτοκόλλου</th>
                                                            <th scope="col">Αρ. Φακέλου</th>
                                                            <th scope="col">Ημ/νια Ατυχήματος</th>
                                                            <th scope="col">Εταιρεία</th>
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
    @include('_modals.markesModal',['markes'=> $markes])
    @include('_modals.xrisiModal',['xrisi'=> $xrisi])
    @include('_modals.cartypeModal',['cartype'=> $cartype])
    @include('_modals.xromataModal',['xromata'=> $xromata])
    @include('_modals.paintModal',['paint'=> $paint])

@endsection



