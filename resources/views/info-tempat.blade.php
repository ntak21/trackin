<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet"/>    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"/>
      <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informasi</title>
    <style>
      p {
        margin: 0;
      }
     
      .nav-title {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 700;
        font-size: 28px;
        line-height: 35px;
        color: #2f4699;
      }
      .nav-sub-title {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 25px;
        color: #2f4699;
        cursor: pointer;
      }
      .navbar img {
        height: auto;
        max-width: 100%;
        width: 3vw;
        cursor: pointer;
      }
      h2.title {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 30px;
        color: #2f4699;
      }
      #menu p {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        color: #2f4699;
      }

      #informasi h2 {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 30px;
        color: #2f4699;
      }

    .container1 p{
      font-family: "Quicksand";
      font-style: normal;
      font-weight: 600;
      font-size: 16px;
      line-height: 12px;
      margin-bottom: 15px
    }

    .container{
      margin-top:20px;
    }
    .container1 h1{
      margin-bottom: 6px;
    }

      #informasi p {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 12px;
      }
      .row.card-item {
        height: 10vh;
      }
      .card-img {
        border-radius: 10px;
        height: 10vh;
        object-fit: cover;
      }
      span.title {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 15px;
        color: #2f4699;
      }
      span.desc {
        font-family: "Quicksand";
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 15px;
        color: #5c5c5c;
      }
      .review {
        background: #ffffff;
        border-radius: 35px;
        height: 17vh;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
      }
      .roboto {
        margin: 0;
        flex-grow: 1;
        font-family: "Roboto";
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
      }
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
      .bxs-like{
        margin-left: -3px;
        margin-right: 15px;
      }
      
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
    <!--header-->
    <div class="mx-20 bg-[#f4f5f6] my-8  font-quicky-bold">
      <div class="flex flex-col gap-8">
          <h1 class="title">Informasi Tempat</h1>
          <img class="kantinimg" src="data_file/informatika.jpg" alt="">
          <div class="flex flex-row gap-24">
            <a class="text-[#2F4699] w-24 border-b-2 font-medium border-[#2F4699]  text-center" href="info-tempat">Informasi</a>
            <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="info-menu">Menu</a>
            <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="review">Review</a>
            <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="info-foto">Foto</a>
          </div>
      </div>
      <!--header-->
    <!--
    <section id="menu">
      <div class="container">
        <div class="col-6">
          <div class="d-flex justify-content-between">
            <button
              type="button"
              class="btn btn-link text-decoration-underline"
            >
              <p>Informasi</p>
            </button>
            <button type="button" class="btn btn-link text-decoration-none">
              <p>Menu</p>
            </button>
            <button type="button" class="btn btn-link text-decoration-none">
              <p>Review</p>
            </button>
            <button type="button" class="btn btn-link text-decoration-none">
              <p>Foto</p>
            </button>
          </div>
        </div>
      </div>
    </section>
  -->
  <div class="container1">
  <h1 class="text-xl my-8 text-[#2F4699]">Kantin Informatika</h1>
  <p class="col-8 py-2" style="color: #7f7f7f">
    Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117
  </p>

  <span
    style="
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-size: 8px;
      line-height: 9px;
      display: flex;
      align-items: center;
    "
  >
    <p style="color: #9e9c9c">Buka: Senin-Sabtu</p>
  </span>

  <div class="d-flex align-items-center my-2">
    <img class="me-2" src="assets/joss.svg" alt="" />
    <p class="roboto" style="color:#269D12"><i class='bx bxs-like' style="color:#269D12"></i>3 orang merekomendasikan tempat ini</p>
  </div>
  </div>

  

    <section id="informasi">
      <div class="container">
        <div class="row row-cols-2">
          <div class="col">
            
            <p class="py-2" style="font-size: 16px; color: #2f4699">Menu</p>
            
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
            <button
              type="button"
              class="btn w-75 my-5 py-3 rounded-3 outline-0"
              style="background-color: #d9d9d9; color: #6a6a6a"
            >
              Lihat Semua Menu
            </button>
          </div>
          <div class="col align-items-start">
            <p class="pt-5 pb-4" style="font-size: 16px; color: #2f4699">
              Review
            </p>
            <!-- review card-->
            <div
              class="col-9 bg-white review d-flex align-items-start justify-content-around flex-column px-5 py-3 my-3"
              style="color: #5c5c5c; line-height: normal"
            >
              <p>Tsaabitah Rizqiina</p>
              <p style="font-weight: 500; font-size: 14px">
                “Kantinnya bersih, makanan bervariasi.”
              </p>
              <div class="d-flex align-items-center">
                <p class="roboto" style="font-size: 13px"><i class='bx bxs-like' style='color:#269d12'  ></i>Direkomendasikan</p>
              </div>
            </div>
            <!-- review card-->

            <div
              class="col-9 bg-white review d-flex align-items-start justify-content-around flex-column px-5 py-3 my-3"
              style="color: #5c5c5c; line-height: normal"
            >
              <p>Rafmitha Najmanisaa</p>
              <p style="font-weight: 500; font-size: 14px">
                “Menu bervariasi, tempat cukup bersih.”
              </p>
              <div class="d-flex align-items-center">
                <p class="roboto" style="font-size: 13px"><i class='bx bxs-like' style='color:#269d12'></i>Direkomendasikan</p>
              </div>
            </div>
            <!--button-->
            <button
              type="button"
              class="btn w-75 my-2 py-3 rounded-3 outline-0"
              style="background-color: #d9d9d9; color: #6a6a6a"
            >
              Lihat Semua Review
            </button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
