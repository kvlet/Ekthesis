<!-- Modal -->
<div class="modal fade" id="markesModal" tabindex="-1" role="dialog" aria-labelledby="markesModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="markesModal">Μάρκα</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('markes.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table" id="markes_view">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Μάρκα</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($markes as $marka)
                                    <tr>
                                        <td>{{ $marka->id_markes }}</td>
                                        <td>{{ $marka->marka }}</td>
                                        <td>{{ $marka->Mark_del }}</td>
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


