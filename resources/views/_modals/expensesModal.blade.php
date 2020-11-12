<!-- Modal -->
<div class="modal fade" id="expensesModal" tabindex="-1" role="dialog" aria-labelledby="expensesModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="expensesModal">Έξοδα</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('expense.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-hover" id="expenses_view">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Έξοδο</th>
                                    <th scope="col">Τύπος εξόδου</th>
                                    <th scope="col">Χρήση εξόδου</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expen)
                                    <tr>
                                        <td>{{ $expen->id_expenses }}</td>
                                        <td>{{ $expen->eksodo }}</td>
                                        <td>{{ $expen->type_eksodo }}</td>
                                        <td>{{ $expen->Where_use }}</td>
                                        <td>{{ $expen->Mark_del }}</td>
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





