<!-- Modal -->
<div class="modal fade" id="paintModal" tabindex="-1" role="dialog" aria-labelledby="paintModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="paintModal">Βαφή</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('paint.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table" id="paint_view">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Βαφή</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paint as $pain)
                                    <tr>
                                        <td>{{ $pain->id_paint_type }}</td>
                                        <td>{{ $pain->paint_type }}</td>
                                        <td>{{ $pain->Mark_del }}</td>
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





