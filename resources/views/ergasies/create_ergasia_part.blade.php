@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Ανταλλακτικά Εργασίας') }}</strong>
                    </h4>
                </div>
                <form id="create_parts_of_ergasies_form" method="post" action="{{ route('ergasies.store_ergasia_part',$ergasia->id_ergasies) }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="id_ergasies" type="hidden" value="{{ $ergasia->id_ergasies }}">
                                        <div class="form-label{{ $errors->has('ergasia') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="ergasia">{{ __('Εργασία') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="ergasia" id="ergasia"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('ergasia') ? ' is-invalid' : '' }}"
                                                   value="{{   $ergasia->ergasia  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_parts">{{ __('Ανταλλακτικό') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_parts" name="id_parts" required >
                                                <option selected value value=-1>{{ " Επιλέξτε Ανταλλακτικό " }}</option>
                                                @foreach($parts as $part)
                                                    <option value="{{$part->id_parts}}" @if(old('id_parts') == $part->id_parts) selected @endif>{{ $part->part }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_parts'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_parts') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('newrecpart') ? ' has-danger' : '' }}">
                                            <!-- Button trigger modal -->
                                            <label class="form-control-label" for="newrecpart">{{ __('Νέο ανταλλακτικό') }}</label>
                                            <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}" style="margin: auto">
                                                <button id="newrecpart" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#partOffErgasiesModal">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
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
                </form>
            </div>
        </div>
    </div>
    @include('_modals.partOffErgasiesModal',['parts'=> $parts])
@endsection





