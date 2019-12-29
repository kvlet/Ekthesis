@extends('forms')

@section('formsdetails')

    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-genika-tab" data-toggle="pill" href="#v-pills-genika" role="tab" aria-controls="v-pills-genika" aria-selected="true">Γενικά</a>
                <a class="nav-link" id="v-pills-oikonomika-tab" data-toggle="pill" href="#v-pills-oikonomika" role="tab" aria-controls="v-pills-oikonomika" aria-selected="false">Οικονομικά</a>
                <a class="nav-link" id="v-pills-pathon-tab" data-toggle="pill" href="#v-pills-pathon" role="tab" aria-controls="v-pills-pathon" aria-selected="false">Παθών/Υπαίτιος</a>
                <a class="nav-link" id="v-pills-antikatastasis-tab" data-toggle="pill" href="#v-pills-antikatastasis" role="tab" aria-controls="v-pills-antikatastasis" aria-selected="false">Αντικαταστάσεις</a>
                <a class="nav-link" id="v-pills-epanafores-tab" data-toggle="pill" href="#v-pills-epanafores" role="tab" aria-controls="v-pills-epanafores" aria-selected="false">Επαναφορές</a>
                <a class="nav-link" id="v-pills-eksagogi-tab" data-toggle="pill" href="#v-pills-eksagogi" role="tab" aria-controls="v-pills-eksagogi" aria-selected="false">Εξαγωγή/Επανατοποθέτηση</a>
                <a class="nav-link" id="v-pills-bafes-tab" data-toggle="pill" href="#v-pills-bafes" role="tab" aria-controls="v-pills-bafes" aria-selected="false">Βαφές</a>
                <a class="nav-link" id="v-pills-ergasiesNoAntallaktika-tab" data-toggle="pill" href="#v-pills-ergasiesnoantallaktika" role="tab" aria-controls="v-pills-ergasiesnoantallaktika" aria-selected="false">Εργασίες χωρίς ανταλλακτικά</a>
                <a class="nav-link" id="v-pills-proasfalistikos-tab" data-toggle="pill" href="#v-pills-proasfalistikos" role="tab" aria-controls="v-pills-proasfalistikos" aria-selected="false">Προασφαλιστικός</a>
                <a class="nav-link" id="v-pills-katastasi-tab" data-toggle="pill" href="#v-pills-katastasi" role="tab" aria-controls="v-pills-katastasi" aria-selected="false">Κατάσταση</a>
                <a class="nav-link" id="v-pills-keimena-tab" data-toggle="pill" href="#v-pills-keimena" role="tab" aria-controls="v-pills-keimena" aria-selected="false">Κείμενα</a>
                <a class="nav-link" id="v-pills-eksodaekthesis-tab" data-toggle="pill" href="#v-pills-eksodaekthesis" role="tab" aria-controls="v-pills-eksodaekthesis" aria-selected="false">Έξοδα έκθεσεις</a>
                <a class="nav-link" id="v-pills-proyparxouses-tab" data-toggle="pill" href="#v-pills-proyparxouses" role="tab" aria-controls="v-pills-proyparxouses" aria-selected="false">Προυπάρχουσες</a>
                <a class="nav-link" id="v-pills-synergeia-tab" data-toggle="pill" href="#v-pills-synergeia" role="tab" aria-controls="v-pills-synergeia" aria-selected="false">Συνεργεία</a>
                <a class="nav-link" id="v-pills-provlepsis-tab" data-toggle="pill" href="#v-pills-provlepsis" role="tab" aria-controls="v-pills-provlepsis" aria-selected="false">Προβλέψεις</a>
                <a class="nav-link" id="v-pills-praktoreia-tab" data-toggle="pill" href="#v-pills-praktoreia" role="tab" aria-controls="v-pills-praktoreia" aria-selected="false">Πρακτορεία</a>
                <a class="nav-link" id="v-pills-notes-tab" data-toggle="pill" href="#v-pills-notes" role="tab" aria-controls="v-pills-notes" aria-selected="false">Παρατηρήσεις</a>
                <a class="nav-link" id="v-pills-eksodasynergati-tab" data-toggle="pill" href="#v-pills-eksodasynergati" role="tab" aria-controls="v-pills-eksodasynergati" aria-selected="false">Έξοδα συνεργάτη</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-genika" role="tabpanel" aria-labelledby="v-pills-genika-tab"><p> 123 Εδώ μέσα φόρμα που θα πιάνει όλο το col 10 </p></div>
                {{--  <div class="tab-pane fade" id="v-pills-oikonomika" role="tabpanel" aria-labelledby="v-pills-oikonomika-tab">...</div>
                <div class="tab-pane fade" id="v-pills-pathon" role="tabpanel" aria-labelledby="v-pills-pathon-tab">...</div>
                <div class="tab-pane fade" id="v-pills-antikatastasis" role="tabpanel" aria-labelledby="v-pills-antikatastasis-tab">...</div>
                <div class="tab-pane fade" id="v-pills-epanafores" role="tabpanel" aria-labelledby="v-pills-epanafores-tab">...</div>
                <div class="tab-pane fade" id="v-pills-eksagogi" role="tabpanel" aria-labelledby="v-pills-eksagogi-tab">...</div>
                <div class="tab-pane fade" id="v-pills-bafes" role="tabpanel" aria-labelledby="v-pills-bafes-tab">...</div>
                <div class="tab-pane fade" id="v-pills-ergasiesnoantallaktika" role="tabpanel" aria-labelledby="v-pills-ergasiesnoantallaktika-tab">...</div>
                <div class="tab-pane fade" id="v-pills-proasfalistikos" role="tabpanel" aria-labelledby="v-pills-proasfalistikos-tab">...</div>
                <div class="tab-pane fade" id="v-pills-katastasi" role="tabpanel" aria-labelledby="v-pills-katastasi-tab">...</div>
                <div class="tab-pane fade" id="v-pills-keimena" role="tabpanel" aria-labelledby="v-pills-keimena-tab">...</div>
                <div class="tab-pane fade" id="v-pills-eksodaekthesis" role="tabpanel" aria-labelledby="v-pills-eksodaekthesis-tab">...</div>
                <div class="tab-pane fade" id="v-pills-proyparxouses" role="tabpanel" aria-labelledby="v-pills-proyparxouses-tab">...</div>
                <div class="tab-pane fade" id="v-pills-synergeia" role="tabpanel" aria-labelledby="v-pills-synergeia-tab">...</div>
                <div class="tab-pane fade" id="v-pills-provlepsis" role="tabpanel" aria-labelledby="v-pills-provlepsis-tab">...</div>
                <div class="tab-pane fade" id="v-pills-praktoreia" role="tabpanel" aria-labelledby="v-pills-praktoreia-tab">...</div>
                <div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">...</div>
                <div class="tab-pane fade" id="v-pills-eksodasynergati" role="tabpanel" aria-labelledby="v-pills-eksodasynergati-tab">...</div>  --}}
            </div>
        </div>
    </div>


@endsection
