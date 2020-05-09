@extends('forms')

@section('formsdetails')
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
@endsection


