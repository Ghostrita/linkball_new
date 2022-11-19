<?php
    @ob_start();
    @session_start();
     print("see you next time ");
     print_r($_SESSION);
     if(isset($_SESSION['auth_user'])){         //มีตัวแปร seesion ที่มี key เป็น auth_user
       session_destroy();
        
    }
    header("location:login.php?action=login"); 
?>
