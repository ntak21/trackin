<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
    rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <title>Sign Up</title>
    <style>
        input[type=submit]{
        border-style: solid;
        border-radius: 15px;
        color: #2F4699;
        border-color: #EDEDED;
        background-color: #EDEDED;
        margin-left: 240px;
        padding-left: 10px;
        padding-right: 10px;
        justify-content: center;
    }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="modal">
    <form class="modal-content" action="{{ route('store') }}" method="post">
            <div class="container">
                <h4>Sign Up</h4>
                @csrf
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                    <div class="col-md-6">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                    <div class="col-md-6">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                    <div class="col-md-6">
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                </div>
                
                <div class="clearfix">
                    <input type="submit" value="Sign Up">
                </div>
            </div>
    </form>
</div>
</body>
</html>
