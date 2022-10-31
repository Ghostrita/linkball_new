<?php
 // FUNCTION FOR FUTURE
 function formatText($text){
  echo "<div style=\"text-align:center\">$text</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="assets/css/style.css?<?php echo rand(0,9999) ?>">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="assets/js/main.js"> </script>
    </head>

    <body>
        <div class="login">
          <a href="login.php?action=login"><img src="assets/img/home-button.jpg" alt="" width="50" height="50" ></a>
          <h2 class="
            <?php 
              if(@$_GET['action'] == "login")
                echo "active";
              else 
                echo "nonactive"; 
            ?>
          ">
            <a href="?action=login">sign in</a>
          </h2>
          
          <h2 class="<?php 
            if(@$_GET['action'] == "register") 
              echo "active"; 
            else echo "nonactive"; ?>">
              <a href="?action=register">sign up</a>
          </h2>
          

          <!-- --------------LOGIN SECTION----------- -->
          <?php if(@$_GET['action'] == "login") : ?>
          <section id="login">
            <form method="POST">
              <input type="text" class="text" name="username">
              <span>username</span>
              <br>
              <br>
              <input type="password" class="text" name="password">
              <span>password</span>
              <br>

              <!--input type="checkbox" id="checkbox-1-1" class="custom-checkbox" name="keepme"/>  <!---->
              
              <!--label for="checkbox-1-1">Keep me Signed in</!--label-->
            
              <button class="signin">Sign In</button>
              <hr>
              <a href="#">Forgot Password?</a>
            </form>
          </section>
          <?php endif; ?>

          <!-- REGISTER SECTION ------------------------------------>
          <?php if(@$_GET['action'] == "register") : ?>
          <style>
            .container{
              background-color: green;
              opacity: 0.9;
            }
            .popup-role{
              margin-left: 40px;
            }
            .text{
              margin-left: 60px;
            }
            .input{

            }
          </style>
          <div class="container" >
            <section id="register">
                <form method="POST">

                  
                  
                  
                  <input type="text" class="text" name="username">
                  <span for="username">Username</span>
              
                  <input type="password" class="text" name="password">
                  <span for="password">Password</span>
              
                  <input type="password" class="text" name="password2">
                  <span for="password2">Password2</span>
              
                  <input type="text" class="text" name="name">
                  <span for="name">Name</span>

                  <!--input type="text" class="text" name="lastname">
                  <span-- for="lastname">Lastname</span-->
              
                  <input type="text" class="text" name="email">
                  <span for="email">E-mail</span>

                  <input type="text" class="text" name="tel">
                  <span for="tel">Telephone Number</span>

                   
                  <input type="text" class="text" name="role" value="member">
                  <span for="role">Role</span>

                  <input type="submit" name="reg-user" class="signin">
                </form> 

            </section>
          </div>
          <?php endif; ?>

         

          <?php
          
          
            // if check keep me sign in
              @ob_start();
              @session_start();
              
              if(isset($_SESSION['auth_user'])){
                  header("location:index.php");
              }
            
            include 'inc/config.php';
            
            // if(isset($_POST['username']) && isset($_POST['password'])){
            //     // ถ้ามีการส่งค่า username , password
            //     $username = $_POST['username']; // กำหนดให้ $username มีค่าเท่ากับ ชื่อผู้ใช้ที่รับมา
            //     $password = $_POST['password']; 
            //     $rs = $conn->query("SELECT username,password FROM member WHERE username='$username' and password=md5('$password')");
            //     echo "num_rows : ".$rs->num_rows."<br>";
            //     if($rs->num_rows > 0){
            //         // เจอค่าใน db
            //         $row = $rs->fetch_row();
            //         print_r($row);
            //     }else{
            //         echo "Username or Password was incorrect";
            //     }
            // }

              // LOGIN LOGIC

                if(@$_GET['action'] == "login" && isset($_POST['username'])       
                    && isset($_POST['password'])){              //ใส่ @ เพื่อไม่ให้มันขึ้นเตือน
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if(@isset($_POST['keepme']))
                      $keepmein = $_POST['keepme'];
                    #echo $username.' and '.$password;

                    $selectQry = "Select * from users where username='$username' and password=md5('$password')";    //
                  
                    // echo "-----------------";
                    // echo "<br>";
                    // echo "Fetch_Assoc:: <br>";
                    if( ( (strlen($username) > 3) && (strlen($username) < 17) ) && 
                      ( (strlen($password) > 3) && (strlen($password) < 17) ) )  {
                        $rs2 = $conn->query($selectQry);        //query ค่าจากฐานข้อมูล

                          if($rs2->num_rows > 0){
                            $result = $rs2->fetch_assoc();
                            // print_r($result);
                            // echo $result['username'];
                            // echo "<br>";
                            // echo $result['password'];
                          if($keepmein){
                            $_SESSION['auth_user'] = $result['username'];
                          }

                          header("location:index.php");
                          }else{
                            echo "<br>";
                            formatText("incorrect username or password, please try again.");
                          }
                          
                    //var_dump($rs);
                    }
                    else{
                      echo "<br>";
                      formatText("your username or password is invalid.");
                    }
                }

              // REGISTER LOGIC
              if(@$_GET['action'] == "register" && 
              isset($_POST['username']) && 
              isset($_POST['password']) &&
              isset($_POST['name']) &&
              isset($_POST['email']) &&
              isset($_POST['tel']) &&
              isset($_POST['role'])){
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $regis_date = date('Y-m-d H:i:s');
                $role = $_POST['role'];
              
                $checkUser = "SELECT username FROM users WHERE username = \"$username\"";   //
                $checkName = "SELECT name FROM users WHERE name = \"$name\"";
                $check_result_user = $conn->query($checkUser);
                $check_result_name = $conn->query($checkName);
                //echo "All Recoreds : ".$check_result->num_rows."<br>";
              
                if(strlen($username) >= 4 && strlen($username) < 16 ){
                  if($check_result_user->num_rows > 0){
                    echo "<div style=\"text-align: center; padding-top:50px\">error this user is exist</div>";
                  }
                  else{
                      $queryCommand = "INSERT INTO users(username,password,email,tel,name,regis_date,role)
                      VALUES('$username','$password','$email','$tel','$name','$regis_date','$role')";
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
    </body>
</html>