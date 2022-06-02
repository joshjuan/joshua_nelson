@extends('layout')
@section('content')
    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-bordered table-condensed table-striped">
                <thead>

                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>TITLE</th>
                <th>DISTRICT</th>
                <th>REGION</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>ACTION</th>
                </thead>

                <tbody>
                @foreach($data as $row)
                    <tr>

                        <td>{{$row->id }}</td>
                        <td>{{$row->fist_name }}</td>
                        <td>{{$row->last_name }}</td>
                        <td>{{$row->tittle }}</td>
                        <td>{{$row->district }}</td>
                        <td>{{$row->region }}</td>
                        <td>{{$row->email }}</td>
                        <td>{{$row->mobile }}</td>

                        <td>
                            <a href="{{ route('contacts.edit', $row->id)}}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('contacts.destroy', $row->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <div>
            <?php echo $data->render(); ?>
        </div>
    </div>

@endsection
