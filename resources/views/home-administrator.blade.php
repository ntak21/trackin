<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home-administrator-style.css">
    <title>Homepage</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <style>
    body {
    font-family: 'Quicksand';font-size: 22px;}
    </style>
</head>


<body>
    @include('partials.navbar')
    <br>
        <div class="login-status">
            <h3>(You are logged in as administrator)</h3>
        </div>
        <a href="{{ url('upload')}}" class="add-btn">+ Add Kantin</a>
        <a href="{{ url('upload-menu')}}" class="addmenu-btn">+ Add Menu </a>
        <div class = kolom2>
        <div class="kolom3">
            <div class="list-kantin">
            @foreach ($kntins as $kntin)
            <div class="container">
                <div class="foto">
                    <img src="{{url('/data_file/'.$kntin->file) }}" width="60">
                </div>

                <div class="info">
                    <h1>{{ $kntin["namaKantin"] }}</h1>
                    <h2><i class='bx bxs-map' ></i></i>{{ $kntin["alamat"]}}</h2>
                    <h3>Buka : {{ $kntin["buka"]}}</h3>

                    <h4>Tag  : </h4>
                    <h5><i class='bx bxs-like' ></i>12 orang menyukai tempat ini</h5>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</body>
</html>