


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
                @foreach($contacts as $contact)
                    <tr>

                        <td>{{$contact->id }}</td>
                        <td>{{$contact->fist_name }}</td>
                        <td>{{$contact->last_name }}</td>
                        <td>{{$contact->tittle }}</td>
                        <td>{{$contact->district }}</td>
                        <td>{{$contact->region }}</td>
                        <td>{{$contact->email }}</td>
                        <td>{{$contact->mobile }}</td>

                        <td>
                            <a href="{{ url('contact', $contact->id)}}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
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
<!--            --><?php //echo $data->render(); ?>--}}
        </div>
    </div>

