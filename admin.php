


<div class="row table-responsive-for-admin p-0" style="height:100% ">
    <!--div class="col-md-4">edit admin user

    </!--div>

    <div-- class="col-md-8">manage user
      
    </div-->

  <?php if(@$_GET['page'] == "admin") : ?>
    <!-- admi user -----------------------------------asdasdasdasdasdasd------------------->
  <div class="column3">
    <div class="col-md-12">
      <div class="card my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Admin User</h6>        
          </div>
        </div>
              
        <div class="card-body px-0 pb-2">
          <div class="table-responsive-for-admin p-0">
            <table class="table table-bordered align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Username</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Role</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">URL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pin</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Using</th>
                  <!--th class="text-secondary opacity-7">Del</!--th-->
                </tr>
              </thead>
              
              <tbody>

                <!--?php
                  $select_stmt = $db->prepare("SELECT * FROM linkballfr_db");
                  $select_stmt->execute();

                  while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?-->
                <tr>
                  
                  <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    $i = 0;
                    if($result){
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id=$row['user_id'];
                        $username=$row['username'];
                        $name=$row['name'];
                        $role=$row['role'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        
                        //$password=$row['password'];
                        if($role == 'admin'){
                        ?>
                        <td><?php $i++; echo $i.' . '.$username; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $role; ?></td>
                        <td><?php echo $email; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                </tr>
                <?php }}} ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
                        </br>
    
    <!-- member user ------------------------------------------------------>
    <style>
      div.r {
        text-align: right !important;
      } 
      div.l {
        float:right;
      } 
    </style>
    <div class="col-md-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <table>
              <div style="text-align:left;">
                <th>
                    <h6 class="text-white text-capitalize ps-3">Member</h6>
                </th>
                <span style="float:right; padding-right:10px;">
                  <a class="text-light font-weight-bold text-xs" href="index.php?action=create-user">
                    <button class="btn btn-secondary">
                        Create User
                    </button>
                  </a>
                </span>
              </div>
              
                
              
            </table>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive-for-member p-0 ">
            <table class="table table-bordered align-items-center mb-0">
            <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Username</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Role</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">URL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pin</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Using</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E/D</th>
                  <!--th class="text-secondary opacity-7">Del</!--th-->
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    $i2 = 0;
                    //$iduser = 0;
                    if($result){
                      while ($row = mysqli_fetch_assoc($result)) {
                        //print_r($row);
                        $id=$row['user_id'];
                        $username=$row['username'];
                        $name=$row['name'];
                        $role=$row['role'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        //$password=$row['password'];
                        if($role == "member"){
                       
                        ?>
                        <td><?php $i2++; echo '  '.$i2.' . '.$username; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $role; ?></td>
                        <td><?php echo $email; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="align-middle text-center">
                          <!--a href="index.php?action=update?updateid=" class="text-light font-weight-bold text-xs"-->
                          <a href="update.php?updateid=<?php echo $id; ?> " class="text-light font-weight-bold text-xs">
                            <button class="btn btn-primary">Edit</button>
                          <a>

                          <a href="delete-user.php?deleteid=<?php echo $id; ?> " class="text-light font-weight-bold text-xs">
                            <button class="btn btn-danger">Delete</button>
                          </a>
                        </td>
                  </tr>
                <?php }
              }} ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="column2">
      <div class="col-md-6">
          
      </div>
  </div>
  <?php endif; ?>

  <!-- create user ------------------------------------------------------>
  <?php if(@$_GET['action'] == "create-user") : ?>
  <div class="column-create-user">
    <div class="col-md-12">
      <div class="card my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Create User</h6>
          </div>
        <div class="card-body px-0 pb-2">
          
          <div class="table-responsive-for-create-user p-0">
            <div class="container" >
              <section id="create_user">
                <form method="POST">              
                  <table class="table align-items-center mb-4">
                    <tbody>
                      
                          <tr>
                            <td>Roleplay</td>
                            <td>
                                <select name="role" id="role">
                                  <option value="member">Member</option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Username</td>
                            <td>
                              <input type="text" name="username" class="text" placeholder="Username">  
                            </td>
                          </tr>

                          <tr>
                            <td>Password</td>
                            <td>
                              <input type="password" name="password" class="text" placeholder="Password">
                            </td>
                          </tr>

                          <tr>
                            <td>Password2</td>
                            <td>
                              <input type="password" name="password2" class="text" placeholder="Password">
                            </td>
                          </tr>

                          <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" name="name" class="text" placeholder="Name">
                            </td>
                          </tr>

                          <tr>
                            <td>Email</td>
                            <td>
                              <input type="text" name="email" class="text" placeholder="Email">
                            </td>
                          </tr>
                          <tr>
                            <td>Tel</td>
                            <td>
                              <input type="text" name="tel" class="text" placeholder="Telephone">
                            </td>
                          </tr>

                          <tr>
                            <td>Limit URL</td>
                            <td><input type="text" name="limit-url">
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="checkbox anim-checkbox">
                                <input id="followlink" name="followlink" class="success" type="checkbox">
                                <label for="followlink" style="font: size 16px;">Link Follow</label>
                                
                              </div>
                            </td>
                            <td>
                              <div class="checkbox anim-checkbox">
                                <input id="pinlink" name="pinlink" class="success" type="checkbox">
                                <label for="pinlink" style="font: size 16px;">Pin Link</label>
                                
                              </div>
                            </td>
                          </tr>
                    </tbody>
                  </table>

                  <table class="table align-items-center mb-0">
                    <tbody>
                      <tr>
                        <td>ข้อมูลผู้ดูแล</td>
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
                        <td>ข้อมูลทีม</td>
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
                        <td>ข้อมูลลีค</td>
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
                        <td>ตารางแข่งขัน</td>
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
                        <td>ข้อมูลช่่อง</td>
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
                    </tbody>
                  </table>

                  <input type="submit" name="reg-user" class="signin">
                </form>
              </section>
            </div>
          </div>

        </div>
      </div>

      <!--?php endif; ?-->
      <?php 

          // if check keep me sign in
          @ob_start();
          @session_start();
          
          /*if(isset($_SESSION['auth_user'])){
              header("location:index.php");
          }*/
        
        include 'inc/config.php';

            // CREATE USER LOGIC
            if(@$_GET['action'] == "create-user" && 
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
  </div>
  <?php endif; ?>


  
