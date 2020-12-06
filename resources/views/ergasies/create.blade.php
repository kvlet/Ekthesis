@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <?php $count=0?>
                    @foreach($ergasies as $ergasia)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Εργασίες'.' '.'( '.$count.' )') }}</strong>
                    </h4>
                </div>
                <form id="create_ergasies_form" method="post" action="{{ route('ergasies.store') }}" autocomplete="off">
                    @csrf
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-label{{ $errors->has('id_ergasies') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="id_ergasies">{{ __('Κωδικός') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="id_ergasies" id="id_ergasies"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('id_ergasies') ? ' is-invalid' : '' }}"
                                                   value="{{ old('id_ergasies') }}" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('ergasia') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="ergasia">{{ __(' Εργασία ') }} <span style="color:red;font-weight:bold">*</span></label>
                                            <input type="text" name="ergasia" id="ergasia"
                                                   class="form-control form-input form-control-alternative{{ $errors->has('ergasia') ? ' is-invalid' : '' }}"
                                                   value="{{ old('ergasia') }}" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label{{ $errors->has('Print_sort') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="Print_sort">{{ __(' Σειρά εκτύπωσης ') }} <span style="color:red;font-weight:bold">*</span></label>
{{--                                            <input type="number" name="Print_sort" id="Print_sort"--}}
{{--                                                   class="form-control form-input form-control-alternative{{ $errors->has('Print_sort') ? ' is-invalid' : '' }}"--}}
{{--                                                   value="{{ old('Print_sort') }}" autofocus required>--}}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort1" value="1" checked>
                                            <label class="form-check-label" for="Print_sort">
                                                1
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort2" value="2">
                                            <label class="form-check-label" for="Print_sort">
                                                2
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Print_sort" id="Print_sort3" value="3">
                                            <label class="form-check-label" for="Print_sort">
                                                3
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
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
                                <div class="row mt-4">
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="ergasies_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Κωδικός</th>
                                        <th scope="col">Εργασία</th>
                                        <th scope="col">Σειρά εκτύπωσης</th>
                                        <th scope="col">Διαγραφή</th>
                                        <th scope="col">Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ergasies as $ergasia)
                                        <tr>
                                            <td>{{ $ergasia->id_ergasies }}</td>
                                            <td>{{ $ergasia->ergasia }}</td>
                                            <td>{{ $ergasia->Print_sort }}</td>
                                            <td>{{ $ergasia->Mark_del }}</td>
                                            <td><a href="{{ URL('ergasies/'.$ergasia->id_ergasies) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a></td>
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
@endsection



