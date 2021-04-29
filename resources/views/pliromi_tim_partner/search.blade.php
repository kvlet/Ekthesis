@extends('forms')

@section('formsdetails')
    <form method="post" action="{{ route('timol_partner.search') }}" role="search" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Αναζήτηση Πληρωμής Τιμολογίου Συνεργάτη') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('stimol_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="stimol_date">{{ __('Από') }}</label>
                                    <input type="text" name="stimol_date" id="stimol_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('stimol_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#stimol_date').datepicker({
                                            autoclose: true,
                                            format: 'dd-mm-yyyy',
                                            language: 'el',
                                            todayHighlight: true,
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-label{{ $errors->has('ftimol_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ftimol_date">{{ __('Έως ') }}</label>
                                    <input type="text" name="ftimol_date" id="ftimol_date" data-provide="datepicker" placeholder="HH-MM-YYYY"
                                           class="form-control form-input form-control-alternative{{ $errors->has('ftimol_date') ? ' is-invalid' : '' }}" >
                                    <script type="text/javascript">
                                        $('#ftimol_date').datepicker({
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
                    @foreach($pliromiTimolPartner as $pliromi)
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
                                <table class="table table-bordered table-hover" id="pliromi_timologiou_partn_view">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Ημερομηνία</th>
                                        <th>Γραφείο</th>
                                        <th>Συνεργάτης</th>
                                        <th>Αρ. Τιμολογίου</th>
                                        <th>Καθαρό Ποσό</th>
                                        <th>Ποσό με Φ.Π.Α.</th>
                                        <th>Έγκυρο</th>
                                        <th>Επεξεργασία</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pliromiTimolPartner as $pliromi)
                                        <tr>
                                            <td> {{ $pliromi->Date_timol }} </td>
                                            <td>
                                                @foreach($grafeia as $graf)
                                                    @if($pliromi->id_grafeio == $graf->id_grafeio )
                                                        {{ $graf->Name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($pragmatognomones as $pragm)
                                                    @if($pliromi->id_partner == $pragm->id )
                                                        {{ $pragm->L_name.' '.$pragm->F_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $pliromi->Ar_timologio_partner }} </td>
                                            <td> {{ $pliromi->Value.'€' }} </td>
                                            <td> {{ $pliromi->Value_me_fpa.'€' }} </td>
                                            <td>
                                                @if ($pliromi->Valid=='true')
                                                    {{ 'Ναι' }}
                                                @else
                                                    {{ 'Όχι' }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pliromi->Valid=='true')
                                                    <a href="{{ URL('timol_partner/'.$pliromi->Ar_timologio_partner.'/'.$pliromi->id_partner) }}"
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






