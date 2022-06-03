@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Contact List</h1>

            <body>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right mb-2">
                            <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create Contact</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>

                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>TITLE</th>
                        <th>DISTRICT</th>
                        <th>REGION</th>
                        <th>EMAIL</th>
                        <th>MOBILE</th>
                        <th>ACTION</th>
                        <th width="280px">Action</th>
                    </tr>     <tbody>
                    @foreach($contacts as $contact)
                        <tr>

                            <td>{{$contact->id }}</td>
                            <td>{{$contact->first_name }}</td>
                            <td>{{$contact->last_name }}</td>
                            <td>{{$contact->tittle }}</td>
                            <td>{{$contact->district }}</td>
                            <td>{{$contact->region }}</td>
                            <td>{{$contact->email }}</td>
                            <td>{{$contact->mobile }}</td>

                            <td>
                                <a href="{{ url('contact').$contact->id}}" class="btn btn-primary">Edit</a>

                                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>


        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
