<!-- Modal -->
<div class="modal fade" id="xrisiModal" tabindex="-1" role="dialog" aria-labelledby="xrisiModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="xrisiModal">Χρήση</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('xrisi.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table" id="xrisi_view">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Χρήση</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($xrisis as $xri)
                                    <tr>
                                        <td>{{ $xri->id_xrisi }}</td>
                                        <td>{{ $xri->xrisi }}</td>
                                        <td>{{ $xri->Mark_del }}</td>
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



