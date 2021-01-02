<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header-cust">
                <h4 class="heading-small text-center text-muted">
                    <strong>{{ __('Επιπλέων χαρακτηριστικά οχήματος:'.' '.$oxima->Ar_kyklo) }}</strong>
                </h4>
            </div>
            <form id="creat_spec__first_form" method="post" action="{{ route('oximata.update_spec',$oxima->id_oximata) }}" autocomplete="off">
                @csrf
                {{ method_field('PUT') }}
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <input name="id_oximata" type="hidden" value="{{ $oxima->id_oximata }}">
                                    <div class="form-label{{ $errors->has('id_oximata') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="Ar_kyklo">{{ __('Όχημα') }}</label>
                                        <input type="text" name="Ar_kyklo" id="Ar_kyklo"
                                               class="form-control form-input form-control-alternative{{ $errors->has('Ar_kyklo') ? ' is-invalid' : '' }}"
                                               value="{{ $oxima->Ar_kyklo }}" disabled autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('amaxoma') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="amaxoma">{{ __('Αμάξωμα') }}</label>
                                        <input type="text" name="amaxoma" id="amaxoma"
                                               class="form-control form-input form-control-alternative{{ $errors->has('amaxoma') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->amaxoma  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('doors') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="doors">{{ __('Αριθμος Πορτών') }}</label>
                                        <input type="number" name="doors" id="doors"
                                               class="form-control form-input form-control-alternative{{ $errors->has('doors') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->doors  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('metaxonio') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="metaxonio">{{ __('Μεταξόνιο') }}</label>
                                        <input type="text" name="metaxonio" id="metaxonio"
                                               class="form-control form-input form-control-alternative{{ $errors->has('metaxonio') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->metaxonio }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('mikos') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="mikos">{{ __('Μήκος') }}</label>
                                        <input type="text" name="mikos" id="mikos"
                                               class="form-control form-input form-control-alternative{{ $errors->has('mikos') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->mikos  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('platos') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="platos">{{ __('Πλάτος') }}</label>
                                        <input type="text" name="platos" id="platos"
                                               class="form-control form-input form-control-alternative{{ $errors->has('platos') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->platos  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('ypsos') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="ypsos">{{ __('Ύψος') }}</label>
                                        <input type="text" name="ypsos" id="ypsos"
                                               class="form-control form-input form-control-alternative{{ $errors->has('ypsos') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->ypsos }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('apobaro') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="apobaro">{{ __('Απόβαρο') }}</label>
                                        <input type="text" name="apobaro" id="apobaro"
                                               class="form-control form-input form-control-alternative{{ $errors->has('apobaro') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->apobaro  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('gas') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="gas">{{ __(' Τύπος Καυσίμου') }} </label>
                                        <select class="form-control form-select" id="gas" name="gas" >
                                            <option value=" " @if ($specifications->gas==null) selected="selected" @endif> </option>
                                            <option value="ΠΕΤΡΕΛΑΙΟ" @if ($specifications->gas=='ΠΕΤΡΕΛΑΙΟ') selected="selected" @endif>ΠΕΤΡΕΛΑΙΟ</option>
                                            <option value="ΑΜΟΛΥΒΔΗ" @if ($specifications->gas=='ΑΜΟΛΥΒΔΗ') selected="selected" @endif>ΑΜΟΛΥΒΔΗ</option>
                                            <option value="ΒΕΝΖΙΝΗ-ΥΓΡΑΕΡΙΟ" @if ($specifications->gas=='ΒΕΝΖΙΝΗ-ΥΓΡΑΕΡΙΟ') selected="selected" @endif>ΒΕΝΖΙΝΗ-ΥΓΡΑΕΡΙΟ</option>
                                            <option value="ΒΕΝΖΙΝΗ-ΗΛΕΚΤΡΙΚΟ" @if ($specifications->gas=='ΒΕΝΖΙΝΗ-ΗΛΕΚΤΡΙΚΟ') selected="selected" @endif>ΒΕΝΖΙΝΗ-ΗΛΕΚΤΡΙΚΟ</option>
                                            <option value="ΗΛΕΚΤΡΙΚΟ" @if ($specifications->gas=='ΗΛΕΚΤΡΙΚΟ') selected="selected" @endif>ΗΛΕΚΤΡΙΚΟ</option>
                                        </select>
                                        @if ($errors->has('gas'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gas') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('tepozito') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="tepozito">{{ __('Χωρητικότητα ρεζερβουάρ') }}</label>
                                        <input type="text" name="tepozito" id="tepozito"
                                               class="form-control form-input form-control-alternative{{ $errors->has('tepozito') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->tepozito }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('num_kilin') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="num_kilin">{{ __('Αριθμός κυλίνδρων') }}</label>
                                        <input type="text" name="num_kilin" id="num_kilin"
                                               class="form-control form-input form-control-alternative{{ $errors->has('num_kilin') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->num_kilin  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('num_valv') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="num_valv">{{ __('Αριθμός βαλβίδων') }}</label>
                                        <input type="text" name="num_valv" id="num_valv"
                                               class="form-control form-input form-control-alternative{{ $errors->has('num_valv') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->num_valv  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('max_power') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="max_power">{{ __('Μέγιστη Ισχύς') }}</label>
                                        <input type="text" name="max_power" id="max_power"
                                               class="form-control form-input form-control-alternative{{ $errors->has('max_power') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->max_power }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('strofes') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="strofes">{{ __('Μέγιστη Ισχύς σε Στροφές') }}</label>
                                        <input type="text" name="strofes" id="strofes"
                                               class="form-control form-input form-control-alternative{{ $errors->has('strofes') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->strofes  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('ropi') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="ropi">{{ __('Μέγιστη Ροπή') }}</label>
                                        <input type="text" name="ropi" id="ropi"
                                               class="form-control form-input form-control-alternative{{ $errors->has('ropi') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->ropi  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('ropi_strofes') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="ropi_strofes">{{ __('Μέγιστη Ροπή σε Στροφές') }}</label>
                                        <input type="text" name="ropi_strofes" id="ropi_strofes"
                                               class="form-control form-input form-control-alternative{{ $errors->has('ropi_strofes') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->ropi_strofes }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('epitax') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="epitax">{{ __('Επιτάχυνση') }}</label>
                                        <input type="text" name="epitax" id="epitax"
                                               class="form-control form-input form-control-alternative{{ $errors->has('epitax') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->epitax  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('taxitita') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="taxitita">{{ __('Τελική Ταχύτητα') }}</label>
                                        <input type="text" name="taxitita" id="taxitita"
                                               class="form-control form-input form-control-alternative{{ $errors->has('taxitita') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->taxitita  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('num_gear') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="num_gear">{{ __('Τάχυτητες') }}</label>
                                        <input type="number" name="num_gear" id="num_gear"
                                               class="form-control form-input form-control-alternative{{ $errors->has('num_gear') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->num_gear }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('gear') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="gear">{{ __(' Κιβώτιο') }} </label>
                                        <select class="form-control form-select" id="gear" name="gear" >
                                            <option value=" " @if ($specifications->gear==null) selected="selected" @endif> </option>
                                            <option value="ΑΥΤΟΜΑΤΟ" @if ($specifications->gear=='ΑΥΤΟΜΑΤΟ') selected="selected" @endif>ΑΥΤΟΜΑΤΟ</option>
                                            <option value="ΜΗΧΑΝΙΚΟ" @if ($specifications->gear=='ΜΗΧΑΝΙΚΟ') selected="selected" @endif>ΜΗΧΑΝΙΚΟ</option>
                                            <option value="ΗΜΙΑΥΤΟΜΑΤΟ" @if ($specifications->gear=='ΗΜΙΑΥΤΟΜΑΤΟ') selected="selected" @endif>ΗΜΙΑΥΤΟΜΑΤΟ</option>
                                            <option value="ΣΕΙΡΙΑΚΟ" @if ($specifications->gear=='ΣΕΙΡΙΑΚΟ') selected="selected" @endif>ΣΕΙΡΙΑΚΟ</option>
                                        </select>
                                        @if ($errors->has('gear'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gear') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('kinisi') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="kinisi">{{ __(' Κίνηση ') }} </label>
                                        <select class="form-control form-select" id="kinisi" name="kinisi" >
                                            <option value=" " @if ($specifications->kinisi==null) selected="selected" @endif> </option>
                                            <option value="ΕΜΠΡΟΣΘΙΑ" @if ($specifications->kinisi=='ΕΜΠΡΟΣΘΙΑ') selected="selected" @endif>ΕΜΠΡΟΣΘΙΑ</option>
                                            <option value="ΟΠΙΣΘΙΑ" @if ($specifications->kinisi=='ΟΠΙΣΘΙΑ') selected="selected" @endif>ΟΠΙΣΘΙΑ</option>
                                            <option value="ΤΕΤΡΑΚΙΝΗΣΗ" @if ($specifications->kinisi=='ΤΕΤΡΑΚΙΝΗΣΗ') selected="selected" @endif>ΤΕΤΡΑΚΙΝΗΣΗ</option>
                                        </select>
                                        @if ($errors->has('kinisi'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('kinisi') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('fr_anartisi') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="fr_anartisi">{{ __('Εμπρόσθια ανάρτηση ') }}</label>
                                        <input type="text" name="fr_anartisi" id="fr_anartisi"
                                               class="form-control form-input form-control-alternative{{ $errors->has('fr_anartisi') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->fr_anartisi }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('b_anart') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="b_anart">{{ __('Πίσω ανάρτηση') }}</label>
                                        <input type="text" name="b_anart" id="b_anart"
                                               class="form-control form-input form-control-alternative{{ $errors->has('b_anart') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->b_anart  }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('fr_frena') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"  for="fr_frena">{{ __('Εμπρόσθια φρένα') }}</label>
                                        <input type="text" name="fr_frena" id="fr_frena"
                                               class="form-control form-input form-control-alternative{{ $errors->has('fr_frena') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->fr_frena  }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('b_frena') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="b_frena">{{ __('Πίσω φρένα ') }}</label>
                                        <input type="text" name="b_frena" id="b_frena"
                                               class="form-control form-input form-control-alternative{{ $errors->has('b_frena') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->b_frena }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label{{ $errors->has('abs') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="abs">{{ __(' Abs ') }} </label>
                                        <select class="form-control form-select" id="abs" name="abs" >
                                            <option value=" " @if ($specifications->abs==null) selected="selected" @endif> </option>
                                            <option value="NAI" @if ($specifications->abs=='NAI') selected="selected" @endif>NAI</option>
                                            <option value="OXI" @if ($specifications->abs=='OXI') selected="selected" @endif>OXI</option>
                                        </select>
                                        @if ($errors->has('abs'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('abs') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-label{{ $errors->has('notes') ? ' has-danger' : '' }}">
                                        <label class="form-control-label"
                                               for="notes">{{ __('Παρατηρήσεις ') }}</label>
                                        <input type="text" name="notes" id="notes"
                                               class="form-control form-input form-control-alternative{{ $errors->has('notes') ? ' is-invalid' : '' }}"
                                               value="{{ $specifications->notes }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Αποθήκευση χαρακτηριστικών</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
