<!-- Modal -->
<div class="modal fade" id="diakrisisModal" tabindex="-1" role="dialog" aria-labelledby="diakrisisModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="diakrisisModal">Τύπος Έκθεσης</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('diakrisis.formCreate')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="display" id="diakr_view" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Διάκριση</th>
                                    <th scope="col">Διαγραφή</th>
                                    <th scope="col">Προτεραιότητα</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($diakrisis as $diakrisi)
                                    <tr>
                                        <td>{{ $diakrisi->id_diakrisi }}</td>
                                        <td>{{ $diakrisi->Diakrisi }}</td>
                                        <td>{{ $diakrisi->Mark_del }}</td>
                                        <td>{{ $diakrisi->Group_diakr }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Κλείσιμο</button>
            </div>
        </div>
    </div>
</div>
