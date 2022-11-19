<?php
include 'inc/config.php';
if(isset($_GET['deleteid'])){
    $match_id=$_GET['deleteid'];
    $sql="delete from football_match where match_id=$match_id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:match.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>