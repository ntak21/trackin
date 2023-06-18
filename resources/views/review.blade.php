<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
    <title>Review Kantin</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .font-quicky-bold {
            font-family: 'Quicksand Bold', sans-serif;
        }

        .font-quicky {
            font-family: 'Quicksand Book', sans-serif;
        }

        body {
        border: 0px;
        padding: 0px;
        margin: 0px;
        background-color: #FAFBFB ;
        font-family: sans-serif;
        }
        
        .button {
             background-color: #D6CFCF;
             border: none;
             color: white;
             padding: 20px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 16px;
             margin: 4px 2px;
             position: absolute;
        }
        .button {border-radius: 12px ;}

        .formreview{
            margin-bottom: -70px;
        }
        .view {
            margin-left: 80px;
            background-color:#FAFBFB;
            border-radius: 35px;
            border: 2px solid gray;
            padding: 20px;
            width: 700px;
            height: 120px;
            left: 93px;
            top: 688px;

         }
         .view h1{
            margin-bottom: 10px;
            font-size: 20px;
            color: #2F4699;
            font-weight: 700;
         }

         .view p{
            font-size: 15px;
            color:black;
            font-weight: 400;
            margin-bottom: 12px;
         }
           
        .title{
            color: #2f4699
        }
            .kantinimg{
            border-radius: 45px 0px 45px 0px;
        }
        .bxs-like{margin-right: 10px;}

         input[type=submit]{
        border-style: solid;
        border-radius: 15px;
        color: #2F4699;
        border-color: #EDEDED;
        background-color: #EDEDED;
        margin-left: 0px;
        padding-left: 10px;
        padding-right: 10px;
        justify-content: center;}
    </style>

</head>

<body class="bg-[#f4f5f6]">
@include('partials.navbar')
    <!-- main -->
    <div class="mx-20 bg-[#f4f5f6] my-8  font-quicky-bold">
        <div class="flex flex-col gap-8">
            <h1 class="title">Informasi Tempat</h1>            
            <img class="kantinimg" src="data_file/informatika.jpg" alt="">
            <div class="flex flex-row gap-24">
                <a class="text-[#5C5C5C] hover:text-[#2F4699]  font-medium border-[#2F4699]  text-center" href="info-tempat">Informasi</a>
                <a class="text-[#5C5C5C] hover:text-[#2F4699] bw-24 font-medium border-[#2F4699]  text-center" href="info-menu">Menu</a>
                <a class="text-[#2F4699] w-24 border-b-2 font-medium border-[#2F4699]  text-center" href="review">Review</a>
                <a class="text-[#5C5C5C] hover:text-[#2F4699] font-medium border-[#2F4699]  text-center" href="info-foto">Foto</a>
            </div>
        </div>
            <h1 class="text-xl my-8 text-[#2F4699]">Kantin Informatika</h1>
            <label for="exampleInputEmail1">Tambahkan Review</label>
            <div class="formreview">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif

                <form action="/review/proses" method="POST" enctype="multipart/form-data"></form>
                {{ csrf_field() }}
                <input  type="text" name="review" class="form-control" id="exampleInputEmail1" placeholder="Tulis Review Anda Disini">
                <br>
                <div class="clearfix">
                    <input type="submit" value="Kirim">
                </div>
                    </label>
                  </div>
                <br><br>
                </form>
            </div>
            <div class="review-container">
            <div class="view">
            <h1>Tsaabitah Rizqiina<h1>
            <p> “Kantinnya bersih, makanan bervariasi.”</p>
            <div class="d-flex align-items-center">
                <p class="roboto" style="font-size: 13px"><i class='bx bxs-like' style='color:#269d12'></i>Direkomendasikan</p>
              </div>
            </div>
            </div>
            <br>
            <div class="review-container">
                <div class="view">
                <h1>Rafmitha Najmanisaa<h1>
                <p>“Menu bervariasi, tempat cukup bersih.”</p>
                <div class="d-flex align-items-center">
                    <p class="roboto" style="font-size: 13px"><i class='bx bxs-like' style='color:#269d12'></i>Direkomendasikan</p>
                  </div>
                </div>
            </div>
            <br>
            <div class="review-container">
                <div class="view">
                <h1>Sari Drajad<h1>
                <p>“Sotonya enak, harga terjangkau.”</p>
                <div class="d-flex align-items-center">
                    <p class="roboto" style="font-size: 13px"><i class='bx bxs-like' style='color:#269d12'></i>Direkomendasikan</p>
                  </div>
                </div>
            </div>
            
            </div>

                </div>
            </div>
    </div>
    <br>
</body>

</html>


