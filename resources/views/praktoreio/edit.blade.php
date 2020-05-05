@extends('forms')

@section('formsdetails')
    <form id="create_praktoreio_form" method="post" action="{{ route('praktoreio.update', $praktoreio->id_praktoreio) }}" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-cust">
                        <h4 class="heading-small text-center text-muted">
                            <strong>{{ __('Πρακτορεία') }}</strong>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('id_praktoreio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="id_praktoreio">{{ __('Κωδικός') }} </label>
                                    <input type="text" name="id_praktoreio" id="id_praktoreio"
                                           class="form-control form-input form-control-alternative{{ $errors->has('id_praktoreio') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->id_praktoreio }}"   autofocus disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('eponymia') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="eponymia">{{ __(' Επωνυμία') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="eponymia" id="eponymia"
                                           class="form-control form-input form-control-alternative{{ $errors->has('eponymia') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->eponymia }}" autofocus required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="address">{{ __('Διεύθυνση') }} </label>
                                    <input type="text" name="address" id="address"
                                           class="form-control form-input form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->address }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="tel">{{ __(' Τηλέφωνο') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <input type="text" name="tel" id="tel" maxlength="10"
                                           class="form-control form-input form-control-alternative{{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->tel }}" autofocus required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('kinito') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="kinito">{{ __('Κινητό') }} </label>
                                    <input type="text" name="kinito" id="kinito" maxlength="10" pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('kinito') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->kinito }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('fax') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="fax">{{ __(' Fax') }} </label>
                                    <input type="text" name="fax" id="fax" maxlength="10"  pattern="[0-9]{10}"
                                           class="form-control form-input form-control-alternative{{ $errors->has('fax') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->fax }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Email') }} </label>
                                    <input type="email" name="email" id="email"
                                           class="form-control form-input form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           value="{{ $praktoreio->email }}"   autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label{{ $errors->has('Mark_del') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="Mark_del">{{ __(' Διαγραφή') }} <span style="color:red;font-weight:bold">*</span></label>
                                    <select class="form-control form-select" id="Mark_del" name="Mark_del" required>
                                        <option value="Ναι">Ναι</option>
                                        <option value="Όχι" selected="selected">Όχι</option>
                                    </select>
                                    @if ($errors->has('Mark_del'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Mark_del') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <textarea id="note" name="note" style="width: 500px; height: 200px;">
                                    {{ $praktoreio->note }}
                                </textarea>
                                <script>
                                    bkLib.onDomLoaded(function() {
                                        // nicEditors.allTextAreas()
                                        new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('note');
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="text-center">
                                    <a href="{{ route('praktoreio.create') }}"><img width="50" src="/images/add_rec.jpg" /></a> {{--onMouseOut="this.src='/images/add_rec.jpg'" onMouseOver="this.src='/images/logo.jpg'" --}}
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Καταχώρηση</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('errors')
    </form>
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-cust">
                    <h4 class="heading-small text-center text-muted">
                        <strong>{{ __('Λίστα πρακτορείων') }}</strong>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="praktoreio" class="table table-bordered table-hover" style="width:100%">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Κωδικός</th>
                                    <th>Επωνυμία</th>
                                    <th>Διεύθυνση</th>
                                    <th>Τηλέφωνο</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($praktoreia as $praktoreio)
                                    <tr>
                                        <td> {{ $praktoreio->id_praktoreio }} </td>
                                        <td> {{ $praktoreio->eponymia }} </td>
                                        <td> {{ $praktoreio->address }} </td>
                                        <td> {{ $praktoreio->tel }} </td>
                                        <td> {{ $praktoreio->email }}</td>
                                        <td>
                                            <a href="{{ URL('praktoreiο/'.$praktoreio->id_praktoreio) }}" target=""><img src="/images/edit_rec.jpg" width="25" height="25" alt="Επεξεργασία" /></a>
                                        </td>
                                        <td>
                                            <form action=" {{ action('PraktoreioController@destroy',$praktoreio->id_praktoreio) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger" style="background-color:transparent; border-color:transparent;">
                                                    <img src="/images/delete.jpg" height="25"/>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




