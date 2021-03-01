@extends('forms')



@section('formsdetails')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <table class="table">
                    @foreach($results['entries'] as $row)
                        <tr>
                            <td>
                                @if ($row['.tag'] === 'folder')
                                    <a href='{{ url('storage/files'.$row['path_lower']) }}'><i class="fa fa-folder"></i> {{ $row['name'] }}</a><br>
                                @else
                                    {{ $row['name'] }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
