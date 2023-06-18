<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/upload-menu-style.css">
    <title>Add Menu</title>
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
<div class="title">
    <h4>Add Menu</h4>
</div>

<div class="form-container">

    <div class="form-menu">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif

        <form action="/upload-menu/proses" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h1>Nama  Kantin</h1>
                <select name="kantinID">
                    <option value="">-Pilih Kantin-</option>
                    @foreach ($kntins as $item)
                    <option value="{{$item -> kantinID }}">{{$item -> namaKantin }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <h1>Nama Menu</h1>
                <input type="text" name="namaMenu">
            </div>
        
            <div class="form-group2">
                <h1>Foto Menu</h1>
                <input type="file" name="file">
            </div>

            <div class="form-group">
                <h1>Harga</h1>
                <input type="number" name="harga">
            </div>
            
            <fieldset class="radio-field">
                <legend>Tag:</legend>
            
                <div>
                  <input type="checkbox" id="mie" name="tag" value="mie"
                         checked>
                  <label for="mie">Mie</label>
                </div>

                <div>
                    <input type="checkbox" id="ayam" name="tag" value="ayam">
                    <label for="ayam">Ayam</label>
                </div>
            
                <div>
                  <input type="checkbox" id="bakso" name="tag" value="bakso">
                  <label for="bakso">Bakso</label>
                </div>
            
                <div>
                  <input type="checkbox" id="penyetan" name="tag" value="penyetan">
                  <label for="penyetan">Penyetan</label>
                </div>

                   <div>
                  <input type="checkbox" id="prasmanan" name="tag" value="prasmanan">
                  <label for="prasmanan">Prasmanan</label>
                </div>
            </fieldset>
            
            <input type="submit" name="Upload" id="btn btn-primary">
        </form>
    </div>
</div>

</body>
</html>