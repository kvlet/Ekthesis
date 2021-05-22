@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('timol_compl.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Τιμολογίου Εταιρείας') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('sdate_ekd') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="sdate_ekd">{{ __('Από') }}</label>
                                    <input type="text" name="sdate_ekd" id="sdate_ekd" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('sdate_ekd') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#sdate_ekd').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('fdate_ekd') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fdate_ekd">{{ __('Έως ') }}</label>
                                    <input type="text" name="fdate_ekd" id="fdate_ekd" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fdate_ekd') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#fdate_ekd').datepicker({
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
                    @foreach($timologio as $timol)
                        <?php $count++ ?>
                    @endforeach
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα Τιμολογίων'.' '.'('.$count.')') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover" id="timologio_comp_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Ημερομηνία</th>
                                        <th>Γραφείο</th>
                                        <th>Εταιρεία</th>
                                        <th>Αρ. Τιμολογίου</th>
                                        <th>Γενικό σύνολο</th>
                                        <th>Μερικώς πληρωτέο</th>
                                        <th>Έξοδα τιμολογίων</th>
                                        <th>Έγκυρο</th>
                                        <th>Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($timologio as $timol)
                                        <tr>
                                            <td> {{ $timol->Date_ekdosis }} </td>
                                            <td>
                                                @foreach($grafeia as $graf)
                                                    @if($timol->id_grafeio == $graf->id_grafeio )
                                                        {{ $graf->Name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($company as $comp)
                                                    @if($timol->id_company == $comp->id_company )
                                                        {{ $comp->comp_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $timol->Ar_timologiou }} </td>
                                            <td> {{ $timol->Geniko_synolo.'€' }} </td>
                                            <td> {{ $timol->Merikos_pliroteo.'€' }} </td>
                                            <td> {{ $timol->Eksoda_timologion.'€' }} </td>
                                            <td>
                                                @if ($timol->Valid=='Ναι')
                                                    {{ 'Ναι' }}
                                                @else
                                                    {{ 'Όχι' }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($timol->Valid=='Ναι')
                                                    <a href="{{ URL('timol_compl/'.$timol->id_timologio) }}"
                                                       target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" />
                                                    </a>
                                                @endif
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







