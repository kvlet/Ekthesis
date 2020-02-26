<!-- Modal -->
<div class="modal fade" id="compModal" tabindex="-1" role="dialog" aria-labelledby="compModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="compModal">Ασφαλιστική Εταιρεία</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('company.formCreate')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table" id="arxi_view">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Αρχή</th>
                                    <th scope="col">Τηλέφωνο-1</th>
                                    <th scope="col">Τηλέφωνο-2</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($arxes_ekdosis_eggrafon as $arxi)
                                    <tr>
                                        <td>{{ $arxi->id_Arxi_ekdosis_eggrafon }}</td>
                                        <td>{{ $arxi->Arxi }}</td>
                                        <td>{{ $arxi->Tel1 }}</td>
                                        <td>{{ $arxi->Tel2 }}</td>
                                        <td>{{ $arxi->Mark_del }}</td>
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

