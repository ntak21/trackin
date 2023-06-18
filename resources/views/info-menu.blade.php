<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="css/info-menu-style.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet"/>    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"/>
      <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informasi Menu</title>
    <style>
        /* note:

font-family: 'Quicksand Book Oblique', sans-serif;
font-family: 'Quicksand Book', sans-serif;
font-family: 'Quicksand Dash', sans-serif;
font-family: 'Quicksand Light Oblique', sans-serif;
font-family: 'Quicksand Light', sans-serif;
font-family: 'Quicksand Bold Oblique', sans-serif;
font-family: 'Quicksand Bold', sans-serif; 
main color : #2F4699
text color : #5C5C5C
*/
        .font-quicky-bold {
            font-family: 'Quicksand Bold', sans-serif;
        }

        .font-quicky {
            font-family: 'Quicksand Book', sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
        }
        .card-img {
        margin-bottom: 10px;
        border-radius: 10px;
        height: 10vh;
        object-fit: cover;}
        
      .title{
        color: #2f4699
      }
        .kantinimg{
        border-radius: 45px 0px 45px 0px;
      }
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
                <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="info-tempat">Informasi</a>
                <a class="text-[#2F4699] w-24 border-b-2 font-medium border-[#2F4699]  text-center" href="info-menu">Menu</a>
                <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="review">Review</a>
                <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="info-foto">Foto</a>
            </div>
        </div>
            <h1 class="text-xl my-8 text-[#2F4699]">Kantin Informatika</h1>

        
    <section id="informasi">
        <div class="container">
          <div class="row row-cols-2">
            <div class="col">
              <div class="row my-2 card-item">
                <div class="col-4">
                  <img src="data_file/sotobetawi.jpg" alt="" class="card-img" />
                </div>
                <div
                  class="col-5 d-flex align-items-center justify-content-start"
                >
                  <span
                    ><span class="title"> Soto Betawi </span>
                    <br />
                    <span class="desc"> Rp 16.000 / porsi </span>
                  </span>
                </div>
              </div>
  
              <div class="row my-2 card-item">
                <div class="col-4">
                  <img src="data_file/bakso.jpg" alt="" class="card-img" />
                </div>
                <div
                  class="col-5 d-flex align-items-center justify-content-start"
                >
                  <span
                    ><span class="title"> Bakso </span>
                    <br />
                    <span class="desc"> Rp 15.000 / pcs </span>
                  </span>
                </div>
              </div>
  
              <div class="row my-2 card-item">
                <div class="col-4">
                  <img src="data_file/nasigoreng.jpg" alt="" class="card-img" />
                </div>
                <div
                  class="col-5 d-flex align-items-center justify-content-start"
                >
                  <span
                    ><span class="title"> Nasi Goreng </span>
                    <br />
                    <span class="desc"> Rp 15.000 / pcs </span>
                  </span>
                </div>
              </div>
  
              <div class="row my-2 card-item">
                <div class="col-4">
                  <img src="data_file/gadogado.jpg" alt="" class="card-img" />
                </div>
                <div
                  class="col-5 d-flex align-items-center justify-content-start"
                >
                  <span
                    ><span class="title"> Gado-gado </span>
                    <br />
                    <span class="desc"> Rp 15.000 / porsi </span>
                  </span>
                </div>
              </div>

              
              <div class="row my-2 card-item">
                <div class="col-4">
                  <img src="data_file/pisangkeju.jpg" alt="" class="card-img" />
                </div>
                <div
                  class="col-5 d-flex align-items-center justify-content-start"
                >
                  <span
                    ><span class="title"> Pisang keju </span>
                    <br />
                    <span class="desc"> Rp 8.000 / pcs </span>
                  </span>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

            
    </div>
    <br>
</body>

</html>