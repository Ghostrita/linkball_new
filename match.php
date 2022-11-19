<?php
include 'inc/config.php';
            // if check keep me sign in
              @ob_start();
              @session_start();
              //echo "session :".$_SESSION['auth_user'];  
              
              if(isset($_SESSION['auth_user'])){
                  header("location:index.php");
              }
?>

<head>
    <!-- Datatable CSS -->
    <!-- <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- Datatable JS -->
    <!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

    <!-- Datatable CSS -->
    <link href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" class="rel">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascrit" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      // $(document).ready(function(){
      //   $('#empTable').DataTable({
      //   'processing': true,
      //   'serverSide': true,
      //   'serverMethod': 'post',
      //   'ajax': {
      //       'url':'ajaxfile.php'
      //   },
      //   'columns': [
      //     { data: 'league' },
      //     { data: 'match_id' },
      //     { data: 'match_date' },
      //     { data: 'home_id' },
      //     { data: 'away_id' },
      //   ]
      //   });
      // });
    </script>
</head>

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

    .column4 {
    
    width: 23%;
    margin-left: -20px;
    }

    .column5 {
    
    width: 77%;
    }

    .column6 {
    width: 63%;
    margin-left: 14%;
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
            <a class="nav-link text-white <?php if(@$_GET['page'] == "index") echo "active bg-gradient-primary" ?>" href="index.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">account_balance</i>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if(@$_GET['page'] == "admin") echo "active bg-gradient-primary" ?> " href="index.php?page=admin">
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
            <a class="nav-link text-white <?php echo "active bg-gradient-primary" ?> " href="match.php">
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


<div class="row" style="height:100% ">
  <!-- match -----------------------------------asdasdasdasdasdasd------------------->
  <div class="column6">
    <div class="col-md-12">
      <div class="card my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">List Match</h6>        
          </div>
        </div>
              
        <div class="card-body px-0 pb-2">
          <div class="table-responsive-for-match p-0">
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length " id="dataTables-example_length">
                            <table class="align-items-center mb-0">
                                <tr>
                                    <td>
                                      record per page
                                    </td>
                                    <td>
                                        <form action="/action_page.php">
                                            <select name="data-table_length" id="data-table_length" >
                                                <option value="10" <?php $record_show = 10; ?>>10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </form>
                                    </td>
      
                                </tr>
                            </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dataTables_filter align-items-center mb-0" id="dataTables-example_filter">
                        <table class="align-items-center mb-0">
                                <td>Search</td>
                                <td>
                                    <form action="/action_page.php">
                                        <input type="search"  aria-controls="dataTables-example">
                                    </form>
                                </td>
                        </table>
                    </div>
                </div>
            </div>
            <table class="table table-bordered align-items-center mb-0 display dataTable" id="empTable">
              <thead>
                <tr>
                  <!--th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">League</!--th-->
                  <!-- <select name="league" data-placeholder="Choose Team" class="form-control chzn-select" style="display: none;">
				            <option value="801"> AFC Champions League</option>
                    <option value="957"> AFC Championship U19 </option>
                    <option value="1666"> AFC U-23 Asian Cup</option>
                    <option value="879"> AFC U16 CHAMPIONSHIP 2018</option>
                    <option value="852"> Africa Cup of Nations </option>
                    <option value="851"> Africa Cup of Nations - Qualification</option>
                    <option value="514"> Arab Club Champions Cup</option>
                    <option value="591"> Arab Club Champions Cup</option>
                    <option value="920"> Argentina Argentina. Cup</option>
                    <option value="1498"> Argentina Liga Profesional</option>
                  </select> -->
                  <th width='20%' class="text-center text-uppercase">League</th>
                  <th class="text-center text-uppercase" >Match</th>
                  <th width='10%' class="text-center text-uppercase">Date</th>
                  <th class="text-center text-uppercase">Live</th>
                  <th class="text-center text-uppercase">Used</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E/D</th>
                  <th class="text-center text-uppercase">Add By</th>
                  <!--th class="text-secondary opacity-7">Del</!--th-->
                </tr>
              </thead>
              
              <tbody>
                <?php
                  function get_team_byid($away_id,$conn,$sqly,$resulty) {
                    $result_query = mysqli_query($conn,$sqly);
                    while ($rowy = mysqli_fetch_assoc($result_query)){
                      $team_id = $rowy['team_id'];
                      $team = $rowy['team'];
                      if($team_id == $away_id){
                        return $team;
                      }
                      else{
                        //echo $team;
                        continue;
                      }
                    }
                    /*/ Free result set
                    //mysqli_free_result($resultx);
                    mysqli_free_result($result_query);
                    echo $team;*/
                  } 
                      $sqlx = "SELECT football_match.match_id ,football_match.match_time ,football_match.addby ,
                              football_match.league_id ,football_match.away_id ,football_match.home_id ,
                              football_match.match_date ,league.league, team.team_id ,team.team
                              FROM football_match 
                              INNER JOIN league ON football_match.league_id = league.league_id
                              INNER JOIN team ON football_match.home_id = team.team_id
                              -- WHERE football_match.home_id = team.team_id OR football_match.away_id = team.team_id
                              ";
                      
                      $sqly = "SELECT football_match.match_id ,football_match.away_id , team.team_id ,team.team
                              FROM football_match 
                              INNER JOIN team ON football_match.away_id = team.team_id
                              ORDER BY team_id ASC;";
                      
                      $resultx = mysqli_query($conn,$sqlx);
                      $resulty = mysqli_query($conn,$sqly);

                      //$page = 0;

                      if(isset($_GET['page'])){
                        $page = $_GET['page'];
                      }else{
                        $page = 1;
                      }
                      //echo $page;
                      
                      $offset = ($page - 1) * $record_show;

                      $sql_total = "SELECT * FROM football_match";
                      $query_total = mysqli_query($conn,$sql_total);
                      $row_total = mysqli_num_rows($query_total);
                      $page_total = ceil($row_total/$record_show);
                      
                      //echo $page_total;

                      $i2 = 0;
                      $rowx = [];
                      $rows = mysqli_num_rows( $resultx );
                      //echo $rowx;
                      $rowtt = $rowx;
                      //echo $rowtt;
                      //$pgnperpage = ceil()
                      $sqlz = "SELECT * FROM football_match";

                      if(isset($_GET['football_match.match_id']) && !empty($_GET['football_match.match_id'])){
                        $sqlx .= " WHERE football_match.match_id = '".$_GET['match_id']."'";
                      }
                      if(isset($_GET['search']) && !empty($_GET['search'])){
                        $sqlx .= " WHERE football_match.league_id LIKE '%".$_GET['search']."%'";
                      }

                      $sqlx .= " LIMIT $offset,$record_show ";
                      $resultx = mysqli_query($conn,$sqlx);

                        if($resultx){
                        while ($rowx = mysqli_fetch_assoc($resultx)) {
                          
                          //$rows = $rowx;
  
                          $page_rows = 5;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
                          
                              $mdate=$rowx['match_date'];
                              $match_id=$rowx['match_id'];
                              $league_id=$rowx['league_id'];
                              $league=$rowx['league'];
                              $home_id=$rowx['home_id'];
                              $away_id=$rowx['away_id'];
                              $home_p=$rowx['team'];

                              // $mdate=$rowz['match_date'];
                              // $match_id=$rowz['match_id'];
                              // $league_id=$rowz['league_id'];
                              // $league=$rowz['league'];
                              // $home_id=$rowz['home_id'];
                              // $away_id=$rowz['away_id'];
                              // $home_p=$rowz['team'];
                              
                              //$away_p=$rowx['team'];
                              //$away_id = $rowx['team_id'];
                              $away_p = get_team_byid($away_id,$conn,$sqly,$resulty);
                ?>
                
                  <?php if(!empty($rowx)) { ?>
                    <?php ?>
                      <tr>
                        <td><?php echo $rowx['league']; ?></td>
                        <td style="text-align:center;width:28%;"><?php $i2++; 
                                          echo $home_p." VS ".$away_p ?></td>
                        <td><?php echo $mdate; ?></td>
                        <!-- <td><! ?php call_away_team($away_id);?></td> -->
                        <td><?php  ?></td>
                        <td><?php  ?></td>
                        <td class="align-middle text-center">
                            <a href="match.php?page=update" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit match">
                              Edit
                            </a>
                            <br>
                            <a href="delete-match.php?deleteid=<?php echo $match_id; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete match">
                              Delete
                            </a>
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                  <?php }}} ?>
              </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination">

                  <li class="page-item">
                    <a class="page-link" href="?page=1" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>

                  <li class="page-item <?=$page > 1 ? '' : 'disabled' ?>">
                    <a class="page-link" href="?page=<?=$page-1?>" tabindex="-1" area-disabled="true">Previous</a>
                  </li>

                  <?php for($i=1;$i<$page_total;$i++): ?>
                    <li class="page-item <?=$page == $i ? 'active' : '' ?>"><a class="page-link" href="match.php?page=<?=$i?>"><?=$i?></a></li>
                  <?php endfor; ?>

                  <li class="page-item <?=$page <= $page_total-1 ? '' : 'disabled' ?>">
                    <a class="page-link" href="?page=<?=$page+1?>">Next</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="?page=<?=$page_total?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- add match ------------------------------------------------------>
  <div class="column4">
    <div class="col-md-12">
      <div class="card my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Add Match</h6>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <section id="create_match">
                <form method="POST">   
                  <table class="table align-items-center mb-0">
                    <tbody>
                      <tr>
                        <td>League</td>
                        <td>
                          <!-- <input type="text" name="league" class="input-small" placeholder="League">   -->
                          <select name="league" class="text">
                            <?php 
                              $sql = mysqli_query($conn, "SELECT league FROM league");
                              while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"$league\">" . $row['league'] . "</option>";
                              }
                            ?>
                          </select>
                        </td>
                      </tr>
                      <?php echo ""; ?>
                      <tr>
                        <td>Home Team</td>
                        <td>
                          <!-- <input type="text" name="home-team" class="input-small" placeholder="Home Team"> -->
                          <select name="home-team" class="text">
                            <?php 
                              $sql = mysqli_query($conn, "SELECT team FROM team");
                              while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"$team\">" . $row['team'] . "</option>";
                              }
                              echo $team;
                            ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Away Team</td>
                        <td>
                          <!-- <input type="text" name="away-team" class="input-small" placeholder="Away Team"> -->
                          <select name="away-team" class="text">
                            <?php 
                              $sql = mysqli_query($conn, "SELECT team FROM team");
                              while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"$team\">" . $row['team'] . "</option>";
                              }
                            ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td>
                          <input type="date" name="date" class="input-small">
                        </td>
                      </tr>
                      <tr>
                        <td>Time</td>
                        <td>
                          <input type="time" name="time" class="input-small" placeholder="Time">
                        </td>
                      </tr>
                      <!-- <tr>
                        <td>Date-Time</td>
                        <td>
                          <input type="datetime-local" name="datetime" class="input-small">
                        </td>
                      </tr> -->
                      <tr>
                        <td>Channel</td>
                        <td>
                          <input type="number" name="channel" class="input-small" placeholder="Channel">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="submit" name="create-match" class="signin">  
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 

          // if check keep me sign in
          @ob_start();
          @session_start();
          
          /*if(isset($_SESSION['auth_user'])){
              header("location:index.php");
          }*/
        
        //include 'inc/config.php';

            // CREATE MATCH LOGIC
            if(
            isset($_POST['league']) && 
            isset($_POST['home-team']) &&
            isset($_POST['away-team']) &&
            isset($_POST['date']) &&
            isset($_POST['time']) &&
            isset($_POST['channel']) ){
              $league = $_POST['league'];
              $hometeam = $_POST['home-team'];
              $awayteam = $_POST['away-team'];
              $date = $_POST['date'];
              $time = $_POST['time'];
              $channel = $_POST['channel'];
              //$regis_date = date('Y-m-d H:i:s');
            
              // $checkLeague = "SELECT league FROM league WHERE league = \"$league\"";   //
              // $checkHometeam = "SELECT team FROM team WHERE team = \"$hometeam\"";
              // $checkAwayteam = "SELECT team FROM team WHERE team = \"$awayteam\"";
              // $check_result_league = $conn->query($checkLeague);
              // $check_result_hometeam = $conn->query($checkHometeam);
              // $check_result_awayteam = $conn->query($checkAwayteam);
              //echo "All Recoreds : ".$check_result->num_rows."<br>";
              echo "...................$league $hometeam $awayteam";
              if($hometeam || $awayteam){
                if($hometeam === $awayteam){
                  echo "<div style=\"text-align: center; padding-top:50px\">error hometeam must not same awayteam</div>";
                }
                else{
                    $queryCommand = "INSERT INTO match(league,hometeam,awayteam,date,time)
                    VALUES('$league','$hometeam','$awayteam','$date','$time')";
                      //echo $queryCommand;
                    $insert_result = $conn->query($queryCommand); 
                    if($insert_result){
                      echo "<div style=\"text-align: center; padding-top:50px\">register_success</div>";
                    }else{
                      echo "<div style=\"text-align: center; padding-top:50px\">register_failed</div>";
                    }
                }
              }
              else{
                echo "<div style=\"text-align: center; padding-top:50px\">your username is invalid</div>";
              }
            }
      ?>
</div>

  <!--main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
    <div class="container-fluid py-4">
      <!--?php 
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
  </!--main>
</body>
</html>

