@extends('forms')

@section('formsdetails')
    <form id="edit_keimena_ekth_form" method="post" action="{{ route('pragmatognomosines.update_keimena_ekth') }}" autocomplete="off">
        @csrf
{{--        {{ method_field('PUT') }}--}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Κείμενα Έκθεσης') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_ekthesis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_ekthesis">{{ __('Αρ. Πρωτοκόλλου') }}</label>
                                    <input type="text" name="id_ekthesis" id="id_ekthesis"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_ekthesis') ? ' is-invalid' : '' }}"
                                           value="{{ $id_ekthesis }}" disabled autofocus>
                                    {{--                                                           value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_keimena') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_keimena">{{ __('Κείμενο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_keimena" name="id_keimena" required disabled >
                                        @foreach($keimena as $keim)
                                            <option value="{{$keimeno->id_keimena}}" @if($keimeno->id_keimena == $keim->id_keimena) selected @endif>{{ $keim->Sort_descr }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_keimena'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_keimena') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Print') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Print">{{ __(' Εκτύπωση ') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Print" name="Print" required>
                                        <option value="Ναι" selected="selected">Ναι</option>
                                        <option value="Όχι">Όχι</option>
                                    </select>
                                    @if ($errors->has('Print'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('Print') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('print_group') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="print_group">{{ __(' Εκτύπωση ') }} </label>
                                    <select class="form-control form-select" id="Mark_del" name="print_group" >
                                        <option value=1 selected="selected">1</option>
                                        <option value=2>2</option>
                                    </select>
                                    @if ($errors->has('print_group'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('print_group') }}</strong>
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
                        <div class="row">
                            <div class="col-md-6">
                                <textarea id="Note" name="Note" style="width: 650px; height: 200px;">
                                            {{ $keimeno->pivot->Note }}
                                 </textarea>
                                <script>
                                    bkLib.onDomLoaded(function() {
                                        // nicEditors.allTextAreas()
                                        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('Note');
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <input name="id_ekthesis" type="hidden" value="{{ $id_ekthesis }}">
                        <input name="id_keimena" type="hidden" value="{{ $keimeno->id_keimena }}">
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

