<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Dashboard Specialist</title>
  </head>
  <body>
    
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                <h1 class="fs-4">
                    <span class="px-2 me-2">
                        <img src="../images/logo-kecil.jpg" class="logo-kecil">
                    </span>
                    <!--<span class="text-white">Emilia</span>-->
                </h1>
                <!--<button class="btn d-md-none d-block close-btn px1 py-0 text-white"><i class="fas fa-stream"></i></button>-->
            </div>
            <ul class="list-unstyled px-3 pt-5">
                <li class="active">
                    <a href="dashboard.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-th-large"></i>&nbsp Job Order List</a>
                </li>
                <li class="">
                    <a href="add_jo.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-plus-square"></i>&nbsp  Add Job Order</a>
                </li>
                <li class="">
                    <a href="notifications.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-bell"></i>&nbsp Notification</a>
                </li>
                <li class="">
                    <a href="analytics.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-chart-bar"></i>&nbsp Analytics</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-user-cog"></i>&nbsp User Management</a>
                </li>
                <li class="">
                    <a href="account.php" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-user"></i>&nbsp Account</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-sign-out-alt"></i>&nbsp Logout</a>
                </li>
                <hr class="h-color mx-2">
                <form class="text-decoration-none py-2 d-block">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </ul>
            <hr class="h-color mx-2">
            
        </div>
        <div class="content">
        
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/jquery-3.6.0.min.js"></script>
    <script src="../javascript/sidebar.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>