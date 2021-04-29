@extends('forms')

@section('formsdetails')
    <form id="update_ekth_from_pliromi_tim_partner_form" method="post" action="{{ route('timol_partner.store_ekth', $pliromiTimolPartner->id_partner) }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Εκκαθάριση εκθέσεων συνεργάτη') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="Ar_timologio_partner" type="hidden" value="{{ $pliromiTimolPartner->Ar_timologio_partner }}">
                                <div class="form-label{{ $errors->has('Ar_timologio_partner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Ar_timologio_partner">{{ __('Αρ. Τιμολ. Συνεργάτη') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text"  name="Ar_timologio_partner" id="Ar_timologio_partner"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Ar_timologio_partner') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Ar_timologio_partner }}" required disabled>
                                    @if ($errors->has('Ar_timologio_partner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Ar_timologio_partner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('id_partner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_partner">{{ __('Συνεργάτης') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_partner" name="id_partner" required disabled>
                                        @foreach($pragmatognomones as $pragmat)
                                            <option value="{{$pragmat->id}}" @if($pliromiTimolPartner->id_partner == $pragmat->id) selected @endif>{{ $pragmat->L_name.' '.$pragmat->F_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_partner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_partner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('id_grafeio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_grafeio">{{ __('Γραφείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_grafeio" name="id_grafeio" required disabled>
                                        @foreach($grafeia as $grafeiο)
                                            <option value="{{$grafeiο->id_grafeio}}" @if($pliromiTimolPartner->id_grafeio == $grafeiο->id_grafeio) selected @endif>{{ $grafeiο->Name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_grafeio'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_grafeio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Date_timol') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                           for="Date_timol">{{ __('Ημερομηνία') }}<span style="color:red;font-weight:bold">*</span>
                                    </label>
                                    <input type="text" name="Date_timol" id="Date_timol" data-provide="datepicker" data-date-format="dd-mm-yyyy" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Date_timol') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Date_timol }}"  required disabled>
                                    <script type="text/javascript">
                                        $('#Date_timol').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                    @if ($errors->has('Date_timol'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Date_timol') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value">{{ __('Ποσό') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Value" id="Value"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Value }}" required disabled>
                                    @if ($errors->has('Value'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Value') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('fpa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fpa">{{ __('Φ.Π.Α.') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="fpa" id="fpa"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fpa') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->fpa }}" required disabled>
                                    @if ($errors->has('fpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Value_me_fpa') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Value_me_fpa">{{ __('Ποσό με Φ.Π.Α.') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <input type="number" step="0.01" name="Value_me_fpa" id="Value_me_fpa"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Value_me_fpa') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Value_me_fpa }}" required disabled>
                                    @if ($errors->has('Value_me_fpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Value_me_fpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Valid') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Valid">{{ __(' Έγκυρο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Valid" name="Valid" required disabled>
                                        <option value="true" @if($pliromiTimolPartner->Valid == "true") selected="selected" @endif>Έγκυρο</option>
                                        <option value="false"  @if($pliromiTimolPartner->Valid == "false") selected="selected" @endif>Άκυρο</option>
                                    </select>
                                    @if ($errors->has('Valid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Valid') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Parakratisi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Parakratisi">{{ __(' Παρακράτηση') }} </label>
                                    <select class="form-control form-select" id="Parakratisi" name="Parakratisi"  disabled>
                                        <option value="true" @if($pliromiTimolPartner->Parakratisi == "true") selected="selected" @endif>Ναι</option>
                                        <option value="false" @if($pliromiTimolPartner->Parakratisi == "false") selected="selected" @endif>Όχι</option>
                                    </select>
                                    @if ($errors->has('Parakratisi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Parakratisi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Pososto_parakr') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Pososto_parakr">{{ __('Ποσοστό παρακράτησης') }}</label>
                                    <input type="number" step="0.01" name="Pososto_parakr" id="Pososto_parakr"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Pososto_parakr') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Pososto_parakr }}" disabled >
                                    @if ($errors->has('Pososto_parakr'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Pososto_parakr') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Poso_parakr') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Poso_parakr">{{ __('Ποσό παρακράτησης') }}</label>
                                    <input type="number" step="0.01" name="Poso_parakr" id="Poso_parakr"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Poso_parakr') ? ' is-invalid' : '' }}"
                                           value="{{ $pliromiTimolPartner->Poso_parakr }}" disabled >
                                    @if ($errors->has('Poso_parakr'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Poso_parakr') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('Notes') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Notes">{{ __(' Παρατηρήσεις ') }}</label>
                                    <input name="Notes" type="hidden" disabled>
                                    <div id="editor_pliromi_partner" style="height: 50px">
                                        {{--                                        <p> </p>--}}
                                        {{$pliromiTimolPartner->Notes}}
                                    </div>
                                    <script>
                                        var quill = new Quill('#editor_pliromi_partner', {
                                            modules: {
                                                toolbar: [
                                                    [{ 'size': ['small', false, 'large', 'huge'] }],
                                                    ['bold', 'italic', 'underline', 'strike'],
                                                    [{color: ['black', 'red', 'blue', 'yellow', 'orange', 'white']}],
                                                    [{ 'background': ['black', 'red', 'blue', 'yellow', 'orange', 'white'] }],
                                                    [{ 'align': ['', 'center', 'justify'] }],
                                                    ['link', 'image'],
                                                    [{ list: 'ordered' }, { list: 'bullet' }]
                                                ]
                                            },
                                            placeholder: 'Πληκτρολογίστε εδώ το κείμενο...',
                                            theme: 'snow'
                                        });

                                        var form = document.querySelector('form');
                                        form.onsubmit = function() {
                                            // Populate hidden form on submit
                                            var note = document.querySelector('input[name=Notes]');
                                            // note.value = JSON.stringify(quill.getContents());
                                            note.value = quill.container.firstChild.innerHTML;
                                        };
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header-cust">
                                        <?php $count=0?>
                                        @foreach($pragma as $pragm)
                                            <?php $count++ ?>
                                        @endforeach
                                        <h4 class="heading-small text-center text-muted">
                                            <strong>{{ __('Λίστα εκθέσεων'.' '.'('.$count.')') }}</strong>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid mt-4">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-control-label" for="choice_all">{{ __(' Επιλογή όλων ') }}</label>
                                                    <input type="checkbox"  name="choice_all" id="choice_all">
                                                    <div class="row">
                                                        <div class="row mt-4">
                                                            <div class="col d-flex justify-content-end">
                                                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                                                            </div>
                                                            <div class="col d-flex justify-content-end">
                                                                <a href="{{  URL('timol_partner/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <table class="table table-bordered table-hover" id="ekth_for_ekkath_view">
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <th>Πραγματογνωμοσύνη</th>
                                                                <th>Ημ/νια Ατυχήματος</th>
                                                                <th>Παθών</th>
                                                                <th>Αρ. Κυκλοφορίας</th>
                                                                <th>Εταιρεία</th>
                                                                <th>Επιλογή</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($pragma as $pragm)
                                                                <tr>
                                                                    <td>
                                                                        <input name="id_ekthesis[]" type="hidden" id="ekthesis" class="form-control" value="{{ $pragm->id_ekthesis }}">
                                                                        {{ $pragm->id_ekthesis }}
                                                                    </td>
                                                                    <td> {{ $pragm->Date_atiximatos }} </td>
                                                                    <td>
                                                                        @foreach($pathontes as $path)
                                                                            @if($path->id_person == $pragm->id_pathon )
                                                                                {{ $path->L_name.' '.$path->F_name }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        @if ( $pragm->id_oximatos_pathon == 1)
                                                                            {{ $pragm->Object }}
                                                                        @else
                                                                            @foreach($oximata as $oxim)
                                                                                @if($oxim->id_oximata == $pragm->id_oximatos_pathon )
                                                                                    {{ $oxim->Ar_kyklo }}
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @foreach($companies as $comp)
                                                                            @if($comp->id_company == $pragm->id_company_pathon )
                                                                                {{ $comp->comp_name }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        <input type="checkbox" value="{{ $pragm->id_ekthesis }}" name="choice[{{ $pragm->id_ekthesis }}]">
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
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" id="btnSave" class="btn btn-primary">Καταχώρηση</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{  URL('timol_partner/search') }}" class="btn btn-primary" role="button">Επιστροφή</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection




