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
{{--                @foreach($Contacts as $Contact)--}}
{{--                    <tr>--}}

{{--                        <td>{{$contacts->id }}</td>--}}
{{--                        <td>{{$contacts->fist_name }}</td>--}}
{{--                        <td>{{$contacts->last_name }}</td>--}}
{{--                        <td>{{$contacts->tittle }}</td>--}}
{{--                        <td>{{$contacts->district }}</td>--}}
{{--                        <td>{{$row->region }}</td>--}}
{{--                        <td>{{$contacts->email }}</td>--}}
{{--                        <td>{{$contacts->mobile }}</td>--}}

{{--                        <td>--}}
{{--                            <a href="{{ route('contacts.edit', $contacts->id)}}" class="btn btn-primary">Edit</a>--}}

{{--                            <form action="{{ route('contacts.destroy', $contacts->id)}}" method="post">--}}
{{--                                @csrf @method('DELETE')--}}
{{--                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                            </form>--}}

{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}

{{--            </table>--}}
{{--        </div>--}}
{{--        <div>--}}
<!--            --><?php //echo $data->render(); ?>
        </div>
    </div>

@endsection
