  <!---------------------------------TopNav section------------------------------------>

  <div class="topnav" id="myTopnav">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#admin" class="active">Admin</a>
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
            <a class="nav-link text-white <?php if(@$_GET['page'] == "index") echo "active bg-gradient-primary" ?>" href="index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">account_balance</i>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php echo "active bg-gradient-primary" ?> " href="index.php?page=admin">
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
            <a class="nav-link text-white <?php if(@$_GET['page'] == "1") echo "active bg-gradient-primary" ?> " href="index.php?page=match">
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
    /*height: 300px; /* Should be removed. Only for demonstration */
    }

    .column2 {
    
    width: 30%;
    /*padding: 10px;*/
    /*height: 300px; /* Should be removed. Only for demonstration */
    }

    .column3 {
    
    width: 90%;
    /*padding: 10px;*/
    /*height: 300px; /* Should be removed. Only for demonstration */
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

<?php include("inc/config.php"); 
    $idup=$_GET['updateid'];
                    $sql = "SELECT * FROM users WHERE user_id = $idup";
                    $result = mysqli_query($conn,$sql);
                    $i2 = 0;
                    //$iduser = 0;
                    if($result){
                      if ($row = mysqli_fetch_assoc($result)) {
                        $id=$row['user_id'];
                        $username=$row['username'];
                        $name=$row['name'];
                        $role=$row['role'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        //$password=$row['password'];
                        ?>

</head>

<body>

    <div class="row" style="height:100% ">
    
      <!-- Update user ------------------------------------------------------>
      <div>
        
          <section id="update">
          <form method="POST">
          <div class="col-md-6">
          <div class="card my-4 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Edit User</h6>
          </div>
          <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
  
              <table class="table align-items-center mb-0">
                  <tbody>
                  <tr>
                      <td>Roleplay</td>
                      <td>
                          <!-- <select name="role" type="text" id="role" value="<!-?php echo $role; ?>">
                              <!--option value="admin">Admin</!--option-->
                              <!--option value="member">Member</!--option>
                          </select> -->
                          <input type="text" name="role" type="text" class="input-small" value="<?php echo $role; ?>"readonly>
                      </td>
                  </tr>
                  <tr>
                      <td>Username</td>
                      <td><input type="text" name="username" class="input-small" value="<?php echo $username; ?>"readonly></td>
                  </tr>
  
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password" class="input-small" value="<?php echo $password; ?>"></td>
                  </tr>
  
                  <tr>
                      <td>Name</td>
                      <td><input type="text" name="name" class="input-small" value="<?php echo $name; ?>"></td>
                  </tr>
  
                  <tr>
                      <td>Email</td>
                      
                      <td>
                      <input type="text" name="email" class="input-small" value="<?php  echo $email; ?>">
                      </td>
                  </tr>
                  <tr>
                      <td>Tel</td>
                      
                      <td>
                      <input type="number" name="tel" class="input-small" value="<?php  echo $tel; ?>">
                      </td>
                  </tr>
  
                  <tr>
                      <td>Limit URL</td>
                      
                      <td><input type="text" name="limit_url" value="<?php  echo '999'; ?>">
                      </td>
                  </tr>
  
                  <tr>
                      <td>
                      <div class="checkbox anim-checkbox">
                          <input id="followlink" name="followlink" class="success" type="checkbox">
                          <label for="followlink" style="font: size 16px;">
                          Link Follow
                          </label>
                          
                      </div>
                      </td>
                      <td>
                      <div class="checkbox anim-checkbox">
                          <input id="pinlink" name="pinlink" class="success" type="checkbox">
                          <label for="pinlink" style="font: size 16px;">
                          Pin Link
                          </label>
                          
                      </div>
                      </td>
                  </tr>
  
                  </tbody>
              </table>
  
              
              <table class="table align-items-center mb-0">
                <tbody>
                  <tr>
                      <td>
                          <div class="form-group">
                                      <form action="welcome_get.php" method="get">
                                      ข้อมูลผู้ดูแล
                                      </form>
                          </div>
                      </td>
                      <td>
                          <div class="form-group">
                          <div class="checkbox anim-checkbox">
                              <input id="r-admin" name="r-admin" class="success" type="checkbox">
                              <label for="r-admin" style="font: size 16px;">
                              ดู
                              </label>
                          </div>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="c-admin" name="c-admin" class="success" type="checkbox">
                              <label for="c-admin" style="font: size 16px;">
                              เพิ่ม
                              </label>
                          </div>
                          </div>
                      </td>
                      <td>
                        <div class="checkbox anim-checkbox">
                            <input id="d-admin" name="d-admin" class="success" type="checkbox">
                            <label for="d-admin" style="font: size 16px;">
                            ลบ
                            </label>
                        </div>
                      </td>
                      <td>
                      <div class="checkbox anim-checkbox">
                          <input id="u-admin" name="u-admin" class="success" type="checkbox">
                          <label for="u-admin" style="font: size 16px;">
                          แก้ไข
                          </label>
                      </div>
                      </td>
                  </tr>
  
                  <tr>
                      <td>
                                  <form action="welcome_get.php" method="get">
                                  ข้อมูลทีม
                                  </form>
                      </td>
                      <td>
                          <div class="form-group">
                              <div class="checkbox anim-checkbox">
                                  <input id="r-team" name="r-team" class="success" type="checkbox">
                                  <label for="r-team" style="font: size 16px;">
                                  ดู
                                  </label>
                              </div>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="c-team" name="c-team" class="success" type="checkbox">
                              <label for="c-team" style="font: size 16px;">
                              เพิ่ม
                              </label>
                          </div>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="d-team" name="d-team" class="success" type="checkbox">
                              <label for="d-team" style="font: size 16px;">
                              ลบ
                              </label>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="e-taem" name="e-taem" class="success" type="checkbox">
                              <label for="e-taem" style="font: size 16px;">
                              แก้ไข
                              </label>
                          </div>
                      </td>
                  </tr>
  
                  <tr>
                      <td>
                          <div class="form-group">
                                      <form action="welcome_get.php" method="get">
                                      ข้อมูลลีค
                                      </form>
                          </div>
                      </td>
                      <td>
                          <div class="form-group">
  
                          <div class="checkbox anim-checkbox">
                              <input id="r-league" name="r-league" class="success" type="checkbox">
                              <label for="r-league" style="font: size 16px;">
                              ดู
                              </label>
                          </div>
                          </div>
                      </td>
  
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="c-league" name="c-league" class="success" type="checkbox">
                              <label for="c-league" style="font: size 16px;">
                              เพิ่ม
                              </label>
                          </div>
                          </div>
                      </td>
  
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="d-league" name="d-league" class="success" type="checkbox">
                              <label for="d-league" style="font: size 16px;">
                              ลบ
                              </label>
                          </div>
                      </td>
  
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="e-league" name="e-league" class="success" type="checkbox">
                              <label for="e-league" style="font: size 16px;">
                              แก้ไข
                              </label>
                          </div>
                      </td>
                  </tr>
  
                  <tr>
                      <td>
                          <div class="form-group">ตารางแข่งขัน</div>
                      </td>
                      <td>
                          <div class="form-group">
                              <div class="checkbox anim-checkbox">
                                  <input id="r-match" name="r-match" class="success" type="checkbox">
                                  <label for="r-match" style="font: size 16px;">
                                  ดู
                                  </label>
                              </div>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="c-match" name="c-match" class="success" type="checkbox">
                              <label for="c-match" style="font: size 16px;">
                              เพิ่ม
                              </label>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="d-match" name="d-match" class="success" type="checkbox">
                              <label for="d-match" style="font: size 16px;">
                              ลบ
                              </label>
                          </div>
                      </td>
  
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="e-match" name="e-match" class="success" type="checkbox">
                              <label for="e-match" style="font: size 16px;">
                              แก้ไข
                              </label>
                          </div>
                      </td>
                  </tr>
  
                  <tr>
                      <td>
                                  <form action="welcome_get.php" method="get">
                                  ข้อมูลช่่อง
                                  </form>
                      </td>
                      <td>
                          <div class="form-group">
  
                              <div class="checkbox anim-checkbox">
                                  <input id="r-channel" name="r-channel" class="success" type="checkbox">
                                  <label for="r-channel" style="font: size 16px;">
                                  ดู
                                  </label>
                              </div>
                          </div>
                      </td>
  
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="c-channel" name="c-channel" class="success" type="checkbox">
                              <label for="c-channel" style="font: size 16px;">
                              เพิ่ม
                              </label>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="d-channel" name="d-channel" class="success" type="checkbox">
                              <label for="d-channel" style="font: size 16px;">
                              ลบ
                              </label>
                          </div>
                      </td>
                      <td>
                          <div class="checkbox anim-checkbox">
                              <input id="e-channel" name="e-channel" class="success" type="checkbox">
                              <label for="e-channel" style="font: size 16px;">
                              แก้ไข
                              </label>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <button type="submit" name="submit" class="btn-btn-primary">Update</button>
                      </td>
                  </tr>
  
                  </tbody>
              </table>
  
              <?php }} ?>
              </div>
              </div>
          </div>
          
          </div>
          </div>
          </section>
          </form>
      </div>
    </div>
  
  </div>
</body>
    
    
  </div>
  </main>
  
  <!--------------------------update section --------------------------------------------->

<?php 
    
    
    //        echo $id;
    if(isset($_POST['submit'])){
               
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $name = $_POST['name'];
                //$lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $regis_date = date('Y-m-d H:i:s');
                $role = $_POST['role'];
              
                $checkUser = "SELECT username FROM users WHERE username = \"$username\"";   //
                $check_result_user = $conn->query($checkUser);
              
                //echo "All Recoreds : ".$check_result->num_rows."<br>";
              
                // $sql="insert into `linkballfr_db` set id=$idup,username=$username,password=$password,name=$name,email=$email,
                // tel=$tel";

                  if($username && $check_result_user->num_rows > 0){
                    $queryCommand = "UPDATE users SET username = '$username', password = '$password' , email = '$email' , 
                    tel = '$tel', name = '$name', regis_date = '$regis_date' , role = '$role' WHERE username = '$username'";
                      //$queryCommand = "UPDATE INTO users(username,password,email,tel,name,regis_date,role,id)
                      //VALUES('$username','$password','$email','$tel','$name','$regis_date','$role',$id)";
                        //echo $queryCommand;
                      // $insert_result = $conn->query($queryCommand); 
                      $insert_result = mysqli_query($conn,$queryCommand); 
                      if($insert_result){
                        echo "<div style=\"text-align: center; padding-top:50px\">update_success</div>";
                      }else{
                        echo "update_failed";
                      }
                  }
                  else{
                      echo "your username is invalid";
                  }
    }
    else{};

?>