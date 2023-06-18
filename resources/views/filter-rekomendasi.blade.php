<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home-filter-style.css">
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

    <div class="jumbotron">
        <div class="home">
            <div class="kolom1">
                <p class="tagline"></p>
                <h2>Mau makan? Di kantin ITS aja!</h2>
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                  </div>
            </div>
            <img src="gambarits.png"/>
        </div>
    </div>
      
    <div class = kolom2>
        <div class="kolom3">
            <div class=filter-name>
                <h2>Rekomendasi paling banyak</h2>
            </div>

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
            <div class="myBtnContainer">
            <h3 id="filter">Filter <i class='bx bxs-filter-alt'></i></h3>
                <h3>Tampilkan berdasarkan</h3>
                <button class="btn" onclick="filterSelection('anda-sukai')">Anda sukai</button>
                <button class="btn-active" onclick="filterSelection('rekomendasi')">Rekomendasi</button>
                <button class="btn" onclick="filterSelection('all-tag')">#Semua Tag</button>
                <button class="btn" onclick="filterSelection('prasmanan')">Prasmanan</button>
                <button class="btn" onclick="filterSelection('ayam')"> Ayam</button>
                <button class="btn" onclick="filterSelection('bakso')"> Bakso</button>
                <button class="btn" onclick="filterSelection('penyetan')"> Penyetan</button>
                <button class="btn" onclick="filterSelection('mie')"> Mie</button>
            </div>
    </div>
</body>
</html>