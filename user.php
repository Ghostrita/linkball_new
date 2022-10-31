


<div class="row" style="height:100% ">
    <!--div class="col-md-4">edit admin user

    </!--div>

    <div-- class="col-md-8">manage user
      
    </div-->

    <!-- admi user ------------------------------------------------------>
  <div class="column1">
    <div class="col-md-12">
      <div class="card my-4 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Admin User</h6>        
          </div>
        </div>
              
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
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

                <!--?php
                  $select_stmt = $db->prepare("SELECT * FROM linkballfr_db");
                  $select_stmt->execute();

                  while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?-->
                <tr>
                  <!--?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id=$row['user_id'];
                        $username=$row['username'];
                        $name=$row['name'];
                        $role=$row['role'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        //$password=$row['password'];
                        echo '
                        <td scope="row">'.$id.'. '.$username.'</td>
                        <td>'.$name.'</td>
                        <td>'.$role.'</td>
                        <td>'.$email.'</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="align-middle text-center">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <br>
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                        </td>
                        ';
                    }
                    
                  ?-->
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
                        <td class="align-middle text-center">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <br>
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                        </td>
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
    <div class="col-md-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Member</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0 ">
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
                    if($result){
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id=$row['user_id'];
                        $username=$row['username'];
                        $name=$row['name'];
                        $role=$row['role'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        
                        
                        //$password=$row['password'];
                        if($role == 'member'){
                          
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
                          <a href=\"login.php?action=login\" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <br>
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                        </td>
                </tr>
                <?php }}} ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- create user ------------------------------------------------------>
  <div class="column2">
    <div class="col-md-12">
    <div class="card my-4 ">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">Create User</h6>
    </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">

          <table class="table align-items-center mb-0">
            <tbody>
              <tr>
                <td>
                  <form action="welcome_get.php" method="get">
                              Roleplay
                  </form>
                </td>
                <td>
                  <form action="/action_page.php">
                    <select name="roleplay" id="roleplay">
                      <option value="admin">Admin</option>
                      <option value="member">Member</option>
                    </select>
                    
                  </form>
                </td>
              </tr>
              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                              Username
                            </form>
                </td>
                <td>
                  <input type="text" name="username" class="input-small" placeholder="Username">  
                </td>
              </tr>

              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                              Password
                            </form>
                </td>
                <td>
                  <input type="password" name="password" class="input-small" placeholder="Password">
                </td>
              </tr>

              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                            Password2 
                            </form>
                </td>
                <td>
                  <input type="password" name="password" class="input-small" placeholder="Password">
                </td>
              </tr>

              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                            Name
                            </form>
                </td>
                <td>
                    <input type="text" name="name" class="input-small" placeholder="Name">
                </td>
              </tr>

              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                            Email
                            </form>
                </td>
                <td>
                  <input type="text" name="email" class="input-small" placeholder="Email">
                </td>
              </tr>
              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                              Tel 
                            </form>
                </td>
                <td>
                  <input type="number" name="tel" class="input-small" placeholder="Telephone">
                </td>
              </tr>

              <tr>
                <td>
                            <form action="welcome_get.php" method="get">
                              Limit URL
                            </form>
                </td>
                  <td><input type="text" name="name">
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
                  <div class="form-group">
                            <form action="welcome_get.php" method="get">
                              ตารางแข่งขัน
                            </form>
                  </div>
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
                  <button type="submit" name="reg-user" class="btn">Regist</button>
                </td>
              </tr>

            </tbody>
          </table>


        </div>
        </div>
      </div>
    
    </div>
    </div>
  </div>
</div>
