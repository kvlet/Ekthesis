<!-- Modal -->
<div class="modal fade" id="departmentsModal" tabindex="-1" role="dialog" aria-labelledby="departmentsModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="departmentsModal">Τμήματα</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('department.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-hover" id="nomoi_view">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Τμήμα</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($department as $dept)
                                    <tr>
                                        <td>{{ $dept->id_department }}</td>
                                        <td>{{ $dept->dept }}</td>
                                        <td>{{ $dept->Mark_del }}</td>
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





