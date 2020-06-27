<?php 

session_start();
include"db.php";

if(isset($_GET['itemid'])){
    
   $itemid=$_GET['itemid'];
    $userid=$_SESSION['user_id'];
    $sql="insert into cart(item_id,user_id) VALUES ('$itemid','$userid')";
    mysqli_query($con,$sql);
    
    header('location:shop-single.php?itemid='.$itemid.'$success ');
    


}

?>