<?php
include 'inc/config.php';
if(isset($_GET['deleteid'])){
    $user_id=$_GET['deleteid'];
    $sql="delete from users where user_id=$user_id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:index.php?page=admin');
    }else{
        die(mysqli_error($conn));
    }
}
?>