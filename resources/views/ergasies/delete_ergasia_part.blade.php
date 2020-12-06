@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Ανταλλακτικά εργασίας') }}</strong>
                    </h4>
                </div>
                <form id="delete_parts_of_ergasies_form" method="post" action="{{ route('ergasies.destroy_ergasia_part',$ergasia->id_ergasies) }}" autocomplete="off">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('ergasia') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="ergasia">{{ __('Εργασία') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="ergasia" id="ergasia"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('ergasia') ? ' is-invalid' : '' }}"
                                                   value="{{   $ergasia->ergasia  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_parts">{{ __('Εργασία') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_parts" name="id_parts" required disabled >
                                                <option value="{{$part->id_parts}}" @if(old('id_parts') == $part->id_parts) selected @endif>{{ $part->part }}</option>
                                            </select>
                                            @if ($errors->has('id_parts'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_parts') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input name="id_parts" type="hidden" value="{{ $part->id_parts }}">
                                <input name="id_ergasies" type="hidden" value="{{ $ergasia->id_ergasies }}">
                                <div class="row mt-4">
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-danger">Διαγραφή</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection






