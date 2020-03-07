<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header-cust-rmenu">
                <h6 class="heading-small text-center text-muted">
                    <strong>{{ __('Εκτυπώσεις') }}</strong>
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-warning" style="margin: 4px" href="/pdf"> Έκθεση Ζημιών </a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-warning" style="margin: 4px" href="#"> Έκθεση Κειμένου </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button id="aitisiDik" type="button" class=" btn btn-sm btn-warning" data-toggle="modal" data-target="#aitisiDikModal">
                            Αίτηση Δικογραφίας
                        </button>
{{--                        <a class="btn btn-sm btn-warning" style="margin: 4px" href="#"> Αίτηση Δικογραφίας </a>--}}
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-warning" style="margin: 4px" href="#"> Αίτηση Εισαγγελίας </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-warning" style="margin: 4px" href="#"> Εντολή Συνεργάτη </a>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-label ">
                    <hr>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header-cust-rmenu">
                <h6 class="heading-small text-center text-muted">
                    <strong>{{ __('Εισαγωγή Δεδομένων') }}</strong>
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-danger" style="margin: 4px" href="#"> Φωτογραφίες </a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-danger" style="margin: 4px" href="#"> Εμπλεκόμενα Οχήματα </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-label ">
                    <hr>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header-cust-rmenu">
                <h6 class="heading-small text-center text-muted">
                    <strong>{{ __('Προβολή Δεδομένων') }}</strong>
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-primary" style="margin: 4px" href="#"> Εκθέσεις Φακέλου </a>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-sm btn-primary" style="margin: 4px" href="#"> Αρχεία Έκθεσεις </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('_modals.aitisiDikModal')
</div>

