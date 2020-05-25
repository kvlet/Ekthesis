@extends('forms')

@section('formsdetails')
<form id="edit_praktoreia_ekth_form" method="post" action="{{ route('pragmatognomosines.update_praktoreia_ekth') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Πρακτορεία Έκθεσης') }}</strong>
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
                                    {{-- value="{{ old('id_ekthesis') }}" disabled autofocus>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_praktoreio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_praktoreio">{{ __('Πρακτορείο') }}<span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="id_praktoreio" name="id_praktoreio" required  disabled>
                                        @foreach($praktoreia as $prakt)
                                            <option value="{{$prakt->id_praktoreio}}" @if(old('id_praktoreio') == $prakt->id_praktoreio) selected @endif>{{ $prakt->eponymia }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_praktoreio'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_praktoreio') }}</strong>
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
                                    {{ $praktoreio->pivot->note }}
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
                        <input name="id_praktoreio" type="hidden" value="{{ $praktoreio->id_praktoreio }}">
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

