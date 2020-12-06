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
                <form id="create_ergasies_of_part_form" method="post" action="{{ route('parts.store_part_ergasia',$part->id_parts) }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="id_parts" type="hidden" value="{{ $part->id_parts }}">
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
                                            <select class="form-control form-select" id="id_ergasies" name="id_ergasies" required >
                                                <option selected value value=-1>{{ " Επιλέξτε Εργασία " }}</option>
                                                @foreach($ergasies as $ergasia)
                                                    <option value="{{$ergasia->id_ergasies}}" @if(old('id_ergasies') == $ergasia->id_ergasies) selected @endif>{{ $ergasia->ergasia }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_ergasies'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_ergasies') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('newrecerg') ? ' has-danger' : '' }}">
                                            <!-- Button trigger modal -->
                                            <label class="form-control-label" for="newrecerg">{{ __('Νέα εργασία') }}</label>
                                            <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}" style="margin: auto">
                                                <button id="newrecerg" type="button" class=" btn btn-success btn-lg newdroprec" data-toggle="modal" data-target="#ergasiesOffPartModal">
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
    @include('_modals.ergasiesOffPartModal',['ergasies'=> $ergasies])
@endsection




