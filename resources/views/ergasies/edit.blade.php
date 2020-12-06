@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-2 menu-text-size">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-ergasies-tab" data-toggle="pill" href="#v-pills-ergasies" role="tab" aria-controls="v-pills-ergasies" aria-selected="true">Εργασία</a>
                <a class="nav-link" id="v-pills-parts-tab" data-toggle="pill" href="#v-pills-parts" role="tab" aria-controls="v-pills-parts" aria-selected="false">Ανταλλακτικά εργασίας</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-ergasies" role="tabpanel" aria-labelledby="v-pills-ergasies-tab">
                    <form id="edit_ergasies_form" method="post" action="{{ route('ergasies.update',$ergasia->id_ergasies) }}" autocomplete="off">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="id_ergasies">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="id_ergasies" id="id_ergasies"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('id_ergasies') ? ' is-invalid' : '' }}"
                                                       value="{{ $ergasia->id_ergasies }}" autofocus disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('ergasia') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="ergasia">{{ __(' Εργασία ') }} <span style="color:red;font-weight:bold">*</span></label>
                                                <input type="text" name="ergasia" id="ergasia"
                                                       class="form-control form-input form-control-alternative{{ $errors->has('ergasia') ? ' is-invalid' : '' }}"
                                                       value="{{ $ergasia->ergasia }}" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label{{ $errors->has('Print_sort') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="Print_sort">{{ __(' Σειρά εκτύπωσης ') }} <span style="color:red;font-weight:bold">*</span></label>
{{--                                                <input type="number" name="Print_sort" id="Print_sort"--}}
{{--                                                       class="form-control form-input form-control-alternative{{ $errors->has('Print_sort') ? ' is-invalid' : '' }}"--}}
{{--                                                       value="{{ $ergasia->Print_sort }}" autofocus required>--}}
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort1" value="1" @if($ergasia->Print_sort == '1') checked @endif>
                                                <label class="form-check-label" for="Print_sort">
                                                    1
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort2" value="2" @if($ergasia->Print_sort == '2') checked @endif>
                                                <label class="form-check-label" for="Print_sort">
                                                    2
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort3" value="3" @if($ergasia->Print_sort == '3') checked @endif>
                                                <label class="form-check-label" for="Print_sort">
                                                    3
                                                </label>
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
                <div class="tab-pane fade" id="v-pills-parts" role="tabpanel" aria-labelledby="v-pills-parts-tab">
                    <a href="{{ route('ergasies.create_ergasia_part',$ergasia->id_ergasies) }}" target="" class="btn btn-primary">Προσθήκη Ανταλλακτικού</a>
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
                                        <strong>{{ __('Λίστα Ανταλλακτικών Εργασίας: '.$ergasia->ergasia) }}</strong>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="parts" class="table table-bordered table-hover" style="width:100%">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Ανταλλακτικό</th>
                                                    <th>Διαγραφή</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($ergasia->ergasies_in_parts as $par)
                                                    @if ($par->id_parts > 1)
                                                        <tr>
                                                            <td>
                                                                @foreach($parts as $part)
                                                                    @if ($part->id_parts == $par->pivot->id_parts)
                                                                        {{ $part->part }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                <a href="{{  URL('ergasies/'.$ergasia->id_ergasies.'/delete_part/'.$par->pivot->id_parts) }}"
                                                                   target=""><img src="/images/delete.jpg" width="25" height="25" alt="Διαγραφή" /></a>
                                                            </td>
                                                            </td>
                                                        </tr>
                                                    @endif
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

