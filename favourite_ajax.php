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
        
        $insert="insert into favourite(item_id,user_id) Values ('$itemid','$userid')";
        mysqli_query($con,$insert);
        
                $sql    = "select * from items";
        $sql1   ="select * from items inner join favourite on items.id=favourite.item_id where favourite.user_id='".$_SESSION['user_id']."'";
        $result = mysqli_query($con,$sql);
        $result1= mysqli_query($con,$sql1);
        $arr=array();
        
        /*check if the item already in favourite */
        if(mysqli_num_rows($result1)>0){
            while( $row1 = mysqli_fetch_assoc($result1) ){
                
                $arr[]=$row1['item_id'];
                
            }                   
        }
        
        if(mysqli_num_rows($result)>0){
        while( $row = mysqli_fetch_assoc($result) ){

            echo"
            
            
                  <div class='col-6 col-md-6 col-lg-4 border-top'>
        <a href='shop-single.php?itemid=".$row['id']."' class='item items'>
          <img src='uploads/".$row['image']."' alt='Image' class='img-fluid' style='min-height:270px; max-height:270px; min-width:240px; max-width:240px'>

          <div class='item-info'>
            <h3>".$row['title']."</h3>
            <span class='collection d-block'>Summer Collection</span>
            <strong class='price'>$".$row['price']."  
            </strong>


 

          </div>      
        </a>
        ";
            
           if (in_array($row['id'], $arr, TRUE)){
               
        echo"<div style='display:inline' class='red-heart'>
        <a  style='' class='heartbtn favourite' val='".$row['id']."'><span class='fas fa-heart' style='cursor:pointer; color:red ;font-size:25px' ></span></a>
        </div>" ;
               
           } else{

		echo"<a  style='' class='heartbtn favourite' val='".$row['id']."'><span class='icon-heart-o heart1' style='cursor:pointer ;font-size:25px' ></span></a>";}

      echo"</div>
            
            ";
            
            
            }            
            
        }

        
    
    }else{
        echo"true";
        
    }
    
}else{echo"some thing wrong";}



?>