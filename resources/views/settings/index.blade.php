@extends('forms')

@section('formsdetails')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Ρυθμίσεις') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <h3>DropBox:</h3>
                    @if($isConnected)
                        <p>Η εφαρμογή είναι συνδεδεμένη με το λογαριασμό σας στο Dropbox.</p>
                        <p>Για να αποσυνδεθείτε, πατήστε <a href="{{ route('storage.disconnect') }}">εδώ</a>.</p>
                    @else
                        <p>Προκειμένου να διαχειρίζεστε τα αρχεία σας μέσω της εφαρμογής, θα πρέπει να συνδεθείτε στην υπηρεσία DropBox.</p>
                        <a href="{{ route('storage.connect') }}" class="btn btn-primary text-white">Σύνδεση με το DropBox</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
