@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-2 menu-text-size">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-parts-tab" data-toggle="pill" href="#v-pills-parts" role="tab" aria-controls="v-pills-parts" aria-selected="true">Ανταλακτικό</a>
                <a class="nav-link" id="v-pills-ergasies-tab" data-toggle="pill" href="#v-pills-ergasies" role="tab" aria-controls="v-pills-ergasies" aria-selected="false">Εργασίες ανταλλακτικού</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-parts" role="tabpanel" aria-labelledby="v-pills-parts-tab">
                    <form id="edit_parts_form" method="post" action="{{ route('parts.update',$part->id_parts) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-label{{ $errors->has('id_parts') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="id_parts">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="id_parts" id="id_parts"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('id_parts') ? ' is-invalid' : '' }}"
                                                       value="{{ $part->id_parts }}" autofocus disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label{{ $errors->has('part') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="part">{{ __(' Ανταλλακτικό ') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="part" id="part"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('part') ? ' is-invalid' : '' }}"
                                                       value="{{ $part->part }}" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
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
                                    <div class="row mt-4">
                                        <div class="col d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Αποθήκευση</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-ergasies" role="tabpanel" aria-labelledby="v-pills-ergasies-tab">
                    <a href="{{ route('parts.create_part_ergasia',$part->id_parts) }}" target="" class="btn btn-primary">Προσθήκη Εργασίας</a>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-cust">
                                    <h4 class="heading-small text-center text-muted">
                                        <strong>{{ __('Λίστα Εργασιών Ανταλακτικού: '.$part->part) }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="ergasies" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Εργασία</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($part->parts_in_ergasies as $erg)
                                                    <tr>
                                                        <td>
                                                            @foreach($ergasies as $ergasia)
                                                                @if ($ergasia->id_ergasies == $erg->pivot->id_ergasies)
                                                                    {{ $ergasia->ergasia }}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <a href="{{  URL('parts/'.$part->id_parts.'/delete_ergasia/'.$erg->pivot->id_ergasies) }}"
                                                               target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                        </td>
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
        </div>
    </div>
@endsection
