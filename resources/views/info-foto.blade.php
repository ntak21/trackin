<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info-style.css">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <title>Informasi Foto</title>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
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
    body {
    border: 0px;
    padding: 0px;
    margin: 0px;
    font-family: 'Quicksand';font-size: 22px;}

        .font-quicky-bold {
            font-family: 'Quicksand Bold', sans-serif;
        }

        .font-quicky {
            font-family: 'Quicksand Book', sans-serif;
        }    
        .title{
            color: #2f4699
        }
        .kantinimg{
            border-radius: 45px 0px 45px 0px;
        }
        .bxs-like{margin-right: 10px;}

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
                <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="info-menu">Menu</a>
                <a class="text-[#5C5C5C] hover:text-[#2F4699] w-24 hover:border-b-2 font-medium border-[#2F4699]  text-center" href="review">Review</a>
                <a class="text-[#2F4699] w-24 border-b-2 font-medium border-[#2F4699]  text-center" href="info-foto">Foto</a>
            </div>
        </div>
            <h1 class="text-xl my-8 text-[#2F4699]">Rumah Makan U-7</h1>

            <div class="grid grid-cols-3 gap-5">
                <div class="grid-span-1 w-[350px]">
                    <img src="images/u7-1.png" alt="">
                </div>
                <div class="grid-span-1 w-[350px]">
                    <img src="images/u7-2.png" alt="">
                </div>
                <div class="grid-span-1 w-[350px]">
                    <img src="images/u7-1.png" alt="">
                </div>
                <div class="grid-span-1 w-[350px]">
                    <img src="images/u7-2.png" alt="">
                </div>
            </div>
    </div>
    <br>
</body>

</html>