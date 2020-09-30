<!-- Modal -->
<div class="modal fade" id="cartypeModal" tabindex="-1" role="dialog" aria-labelledby="cartypeModal"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center w-100" id="cartypeModal">Τύπος</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @include('cartype.formModal')

                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table" id="cartype_view">
                                <thead>
                                <tr>
                                    <th scope="col">Κωδικός</th>
                                    <th scope="col">Τύπος</th>
                                    <th scope="col">Διαγραφή</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartype as $cart)
                                    <tr>
                                        <td>{{ $cart->id_car_type }}</td>
                                        <td>{{ $cart->Typos }}</td>
                                        <td>{{ $cart->Mark_del }}</td>
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




