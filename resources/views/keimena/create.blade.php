@extends('forms')

@section('formsdetails')
    <form id="create_keimena_form" method="post" action="{{ route('keimena.store') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Κείμενα') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_keimena') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_keimena">{{ __('Κωδικός') }} </label>
                                    <input type="text" name="id_keimena" id="id_keimena"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_keimena') ? ' is-invalid' : '' }}"
                                           value="{{ old('id_keimena') }}"   autofocus disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Sort_descr') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Sort_descr">{{ __(' Σύντομη περιγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="Sort_descr" id="Sort_descr"
                                           class="form-control form-input form-control-alternative{{ $errors->has('Sort_descr') ? ' is-invalid' : '' }}"
                                           value="{{ old('Sort_descr') }}" autofocus required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Mark_del" name="Mark_del" required disabled>
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
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="Note" name="Note" style="width: 1000px; height: 300px;">
                                    {{ old('Note') }}
                                </textarea>
                                <script>
                                    bkLib.onDomLoaded(function() {
                                        // nicEditors.allTextAreas()
                                        new nicEditor({fullPanel : true}).panelInstance('Note');
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
@endsection


