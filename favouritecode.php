<?php 
session_start();
include 'db.php';




if(isset($_GET['itemid'])){
    
    $itemid = $_GET['itemid'];
    $userid = $_SESSION['user_id'];
    $sql1="select * from favourite where item_id='".$itemid."' and user_id='".$userid."'"; 
    $result=mysqli_query($con,$sql1);
    $rows = mysqli_num_rows($result);
    
    if($rows == 0){
        
        $sql="insert into favourite(item_id,user_id) Values ('$itemid','$userid')";
        mysqli_query($con,$sql);
        header('location:shop.php');
    
    }else{
        header('location:shop.php?favourite=true');
        
    }
    

}else{echo "error plz try again" ; }


?>