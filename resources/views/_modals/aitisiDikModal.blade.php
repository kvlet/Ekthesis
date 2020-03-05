<!-- Modal -->
<div class="modal fade" id="aitisiDikModal" tabindex="-1" role="dialog" aria-labelledby="aitisiDikModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="aitisiDikModal"> Αίτηση Δικογραφίας</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                         <label style="float: right"><strong><u>ΠΡΟΣ</u></strong></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input style="float: right" type="text" id="arxiDik" value="{{ 'arxi ekdosis' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p align="center"><strong><u>ΑΙΤΗΣΗ</u></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p align="center">Του Αθανασίου Τζαμάλα</p>
                        <p align="center">του Κωνσταντίνου</p>
                        <p align="center">Πραγματογνώμονας - Ερευνητής</p>
                        <p align="center">με έδρα την Λιβαδειά Βοιωτίας</p>
                        <p align="center">Δημ. Χρ.Παλαιολόγου, T.K.32100</p>
                        <p align="center">Τηλ.: 2261089006 Κιν.: 6974875778</p>
                        <p align="center">ch.pointdiagnostics@gmail.com</p>
                        <p align="center">Α.Δ.Τ.: ΑΜ498499 Ημ.Εκδ.:9/9/2014 </p>
                        <p align="center">Εκ. Αρχή: Τ.Α. Λιβαδειάς Βοιωτίας</p>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <textarea name="keimeno" id="" cols="60" rows="10" >{{ 'Λαμβάνοντας την εντολή σας για την παραλαβή της ποινικής δικογραφίας που αφορά το τροχαίο ατύχημα που έλαβε χώρα στην οδό Παπαναστασίου 15 στον ΑΜΠΕΛΩΝΑ ΛΑΡΙΣΗΣ, μεταξύ των κ. ΠΟΛΙΤΗ ΠΑΝΑΓΙΩΤΗ, οδηγός του υπ αρίθμου κυκλοφορίας ΡΙΝ-8137 Ε.Ι.Χ. , του ΑΡΧ/ΚΑ κ. ΧΡΙΣΤΟΔΟΥΛΟΥ ΘΩΜΑ, οδηγός του υπ αριθμου ΕΑ-20691 Ε.Ι.Χ. και του κ. ΤΑΧΑ ΖΗΣΗ, ιδιοκτήτη του σταθμευμένου ΡΙΙ-2557 Φ.Ι.Χ. ,έχω να σας αναφέρω τα εξής:Παρέλαβα την ποινική δικογραφία ,την οποία και σας την προσκομίζω.' }}
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>δυνάμει του </p> <input type="text" id="plir1" class="input-ait-dik no-outline"> <p>ειδικού πληρεξουσίου της εταιρείας</p>  <input type="text" id="comp1" class="input-ait-dik">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="printdoc()">Εκτύπωση</button>
                <script>
                    function printdoc() {
                        $mpdf = new vendor.mpdf.mpdf.Mpdf();
                        $mpdf=>output();
                    }
                </script>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσιμο</button>
            </div>
        </div>
    </div>
</div>
