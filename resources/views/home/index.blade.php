@extends('contacts.layouts.app-master')

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
                    </tr>
{{--                    @foreach ($contacts as $contact)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $contact->id }}</td>--}}
{{--                            <td>{{ $contact->first_name }}</td>--}}
{{--                            <td>{{ $contact->email }}</td>--}}
{{--                            <td>{{ $contact->mobile }}</td>--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('contacts.destroy',$company->id) }}" method="Post">--}}
{{--                                    <a class="btn btn-primary" href="{{ route('contacts.edit',$company->id) }}">Edit</a>--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                </table>


        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
