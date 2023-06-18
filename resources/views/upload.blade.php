<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/upload-style.css">
    <title>Add Kantin</title>
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
    <h4>Add Kantin</h4>
</div>

<div class="form-container">
    <div class="formkantin">
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
                <h1>Nama Kantin</h1>
                <input type="text" name="namaKantin">
            </div>

            <div class="form-group">
                <h1>Alamat</h1>
                <input type="text" name="alamat">
            </div>
        
            <div class="form-group2">
                <h1>Foto Kantin</h1>
                <input type="file" name="file">
            </div>

            <div class="form-group">
                <h1>Hari Buka</h1><h2>e.g.: Senin-Jumat<h2>
                <input type="text" name="buka">
            </div>
            
            <input type="submit" name="Upload" id="btn btn-primary">
        </form>
    </div>
</div>

</body>
</html>