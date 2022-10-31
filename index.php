<?php
   	@ob_start();
    @session_start();
   
   
    include("inc/config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/topnav.css">
    <title>Document LB</title>
      <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
  <link id="pagestyle" href="assets/css/custom.css?v=<?php echo time(); ?>" rel="stylesheet" />
  <!--modal-->
  

  <style>
    .main-content{
    margin-left: 16.125rem;
    }
  
    * {
    box-sizing: border-box; /* กำหนดขนาดของ element รวม padding และ border */
    }

    /* Create two equal columns that floats next to each other */
    .column1 {
    
    width: 70%;
    /*padding: 10px;*/
    height: 300px;
    }

    .column2 {
    
    width: 30%;
    /*padding: 10px;*/
    /*height: 300px; /* Should be removed. Only for demonstration */
    }

    .column3 {
    
    width: 90%;
    padding-top: -10px;
    /*height: 300px; /* Should be removed. Only for demonstration */
    }

    .column4 {
    
    width: 23%;
    }

    .column5 {
    
    width: 77%;
    }

    .column6 {
    width: 62%;
    margin-left: 230px;
    /*height: 300px; /* Should be removed. Only for demonstration */
    }

    .column-create-user {
    
    width: 70%;
    /*padding: 10px;*/
    height: 100% !important;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .column {
    width: 100%;
    }
    }
  </style>
</head>

<body>



  <!---------------------------------TopNav section------------------------------------>

  <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    
    <?php 
      if(!isset($_SESSION['auth_user']) ){
          #echo "A : \"HELLO\" ";
          echo "<a href=\"login.php?action=register\">Register</a>";
          echo "<a href=\"login.php?action=login\">Login</a>";
      }
      else{
          echo "<a href=\"logout.php\">Logout</a>";
      }
    ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="assets/img/logo-football.png" class="navbar-brand-img h-100" alt="main_logo"-->
        <span class="ms-1 font-weight-bold text-white">LINKBALL</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white <?php if((@$_GET['page'] == "")&&(@$_GET['action'] != "create-user")) echo "active bg-gradient-primary" ?>" href="index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">account_balance</i>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if((@$_GET['page'] == "admin")||(@$_GET['action'] == 'create-user')) echo "active bg-gradient-primary" ?> " href="index.php?page=admin">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Admin</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "team") echo "active bg-gradient-primary" ?>" href="index.php?page=team">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">Team</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "league") echo "active bg-gradient-primary" ?> " href="index.php?page=league">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
              </div>
              <span class="nav-link-text ms-1">League</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "channel") echo "active bg-gradient-primary" ?> " href="index.php?page=channel">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Channel</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET == "match.php") echo "active bg-gradient-primary" ?> " href="match.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Table Match</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "link-watch-ball") echo "active bg-gradient-primary" ?> " href="index.php?page=link-watch-ball">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Link Watch Football</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "football-today") echo "active bg-gradient-primary" ?> " href="index.php?page=football-today">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Football Today</span>
            </a>
          </li>

          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "profile") echo "active bg-gradient-primary" ?> " href="index.php?page=profile">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "login") echo "active bg-gradient-primary" ?> " href="login.php?action=login">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="login.php?action=register">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>
        </ul>
      </div>
      <!--div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button">Upgrade to pro</a>
        </div>
      </div-->
    </hr>
  </aside>

  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
  <div class="container-fluid py-4">
    <?php 
      if(@$_GET['page'] == 'admin')
        include("admin.php");

      if(@$_GET['page'] == 'user')
        include("user.php");

      /*if(@strpos($_GET['page'], 'update') != -1)
        include("update.php");*/

      if(@$_GET['page'] == 'match')
        include("match.php");

      if(@$_GET['action'] == 'create-user')
        include("admin.php");

      if(@$_GET['action'] == 'update'){
        include("admin.php");

        
        
      }
        

      /*if(@$_GET['action'] == 'update'){
        include("update.php");
      }*/

      /*if(@$_GET['action'] == 'update.php?updateid=$id')
        include("update.php");*/
    ?>
    
    
  </div>
  </main>

</body>
</html>