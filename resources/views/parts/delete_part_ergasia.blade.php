@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Εργασίες ανταλακτικού') }}</strong>
                    </h4>
                </div>
                <form id="delete_ergasies_of_part_form" method="post" action="{{ route('parts.destroy_part_ergasia',$part->id_parts) }}" autocomplete="off">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('part') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="part">{{ __('Ανταλλακτικό') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="part" id="part"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('part') ? ' is-invalid' : '' }}"
                                                   value="{{   $part->part  }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_ergasies">{{ __('Εργασία') }}<span style="color:red;font-weight:bold">*</span></label>
                                            <select class="form-control form-select" id="id_ergasies" name="id_ergasies" required disabled >
                                                    <option value="{{$ergasia->id_ergasies}}" @if(old('id_ergasies') == $ergasia->id_ergasies) selected @endif>{{ $ergasia->ergasia }}</option>
                                            </select>
                                            @if ($errors->has('id_ergasies'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_ergasies') }}</strong>
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





