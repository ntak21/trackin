<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>
<body>

@include('partials.navbar')

        <div class="title">
            <h4>Profil Anda</h4>
        </div>

        <div class="form-container">
            <div class="formprofile">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif

                <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <h1>Nama</h1>
                        <input type="text" name="Nama">
                    </div>

                    <div class="form-group">
                        <h1>Email</h1>
                        <input type="text" name="email">
                    </div>

                    <div class="form-group3">
                        <h1>No Handphone</h1>
                        <input type="text" name="No Handphone">
                    </div>

                    <input type="submit" name="Upload" value="Edit" id="btn btn-primary">
                </form>
            </div>
        </div>
</body>
</html>