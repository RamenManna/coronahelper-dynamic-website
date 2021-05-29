<?php


include'conn.php';
if(isset($_GET['id'])){
    $userid=$_GET['id'];
    $q="DELETE FROM `user` WHERE user_id='".$userid."'";
    $res=mysqli_query($con,$q);
}
header('location:adminpanel.php');

?>