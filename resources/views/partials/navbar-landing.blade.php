<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar-landing-style.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
    rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
   <style>
   body {
   font-family: 'Quicksand';font-size: 22px;}
   </style>
</head>
<body>
<nav class="wrapper">
    <div class="logo">
        <div>Track In</div>
    </div>

    <ul class = "navigation">
            <li><a class="nav-link" href="/">Homepage</a></li>
            <li><a class="nav-link" href="/profile">Profil</a></li>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class='bx bx-user-circle'></i></button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="login"> <i class='bx bxs-log-in'></i>Log in</a>
                </div>
            </div>
    </ul> 
   
</nav>


<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>

</body>
</html>

