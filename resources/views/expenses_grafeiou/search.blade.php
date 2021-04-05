@extends('forms')

@section('formsdetails')
<form method="post" action="{{ route('graf_expen.search') }}" role="search" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Αναζήτηση Εξόδων Γραφείου') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <div class="form-label{{ $errors->has('sexpen_date') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="sexpen_date">{{ __('Από') }}</label>
                                <input type="text" name="sexpen_date" id="sexpen_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                       class="form-control form-input form-control-alternative{{ $errors->has('sexpen_date') ? ' is-invalid' : '' }}" >
                                <script type="text/javascript">
                                    $('#sexpen_date').datepicker({
                                        autoclose: true,
                                        format: 'dd-mm-yyyy',
                                        language: 'el',
                                        todayHighlight: true,
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-label{{ $errors->has('fexpen_date') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="fexpen_date">{{ __('Έως ') }}</label>
                                <input type="text" name="fexpen_date" id="fexpen_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                       class="form-control form-input form-control-alternative{{ $errors->has('fexpen_date') ? ' is-invalid' : '' }}" >
                                <script type="text/javascript">
                                    $('#fexpen_date').datepicker({
                                        autoclose: true,
                                        format: 'dd-mm-yyyy',
                                        language: 'el',
                                        todayHighlight: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Αναζήτηση</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col">
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header-cust">
                <?php $count=0?>
                @foreach($expen_graf as $eksodgr)
                <?php $count++ ?>
                @endforeach
                <h4 class="heading-small text-center text-muted">
                    <strong>{{ __('Λίστα Εξόδων'.' '.'('.$count.')') }}</strong>
                </h4>
            </div>
            <div class="card-body">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-hover" id="expen_grafeiou_view">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Ημερομηνία</th>
                                    <th>Γραφείο</th>
                                    <th>Έξοδο</th>
                                    <th>Αξία</th>
                                    <th>Έγκυρο</th>
                                    <th>Παρατηρήσεις</th>
                                    <th>Επεξεργασία</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expen_graf as $eksodgr)
                                <tr>
                                    <td> {{ $eksodgr->Date_expen }} </td>
                                    <td>
                                        @foreach($grafeia as $graf)
                                            @if($eksodgr->id_grafeio == $graf->id_grafeio )
                                            {{ $graf->Name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($expenses as $exp)
                                            @if($eksodgr->id_expenses == $exp->id_expenses )
                                                {{ $exp->eksodo }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td> {{ $eksodgr->Value_expen.'€' }} </td>
                                    <td>
                                        @if ($eksodgr->Valid=='true')
                                            {{ 'Ναι' }}
                                        @else
                                            {{ 'Όχι' }}
                                        @endif
                                    </td>
                                    <td> {{ $eksodgr->Note }} </td>
                                    <td>
                                        <a href="{{ URL('graf_expen/'.$eksodgr->id_grafeio.'/'.$eksodgr->id_expenses.'/'.$eksodgr->Date_expen) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
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
@endsection





