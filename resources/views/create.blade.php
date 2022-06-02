<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Contact</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="name" required class="form-control" placeholder="First Name">
                    @error('firstname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Second Name:</strong>
                    <input type="text" name="name" required class="form-control" placeholder="Second Name">
                    @error('second_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="name" required class="form-control" placeholder="title">
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>District:</strong>
                    <input type="text" name="name"  required class="form-control" placeholder="District Name">
                    @error('district')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="name" required class="form-control" placeholder="region">
                    @error('region')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="address"  class="form-control" placeholder="email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Mobile:</strong>
                    <input type="text" name="address" required class="form-control" placeholder="mobile">
                    @error('mobile')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-warning" href="{{ route('home.index') }}"> Back</a>
            </div>

        </div>

    </form>
</body>
</html>
