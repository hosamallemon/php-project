<?php 

include 'db.php';
$category=$_POST['category'];
$num=1;
if($category=="Men"){
 $sql="select * from items where category=1";}
elseif($category=="Women"){
   $sql="select * from items where category=2"; }
elseif($category=="Children"){
    $sql="select * from items where category=3";
}else{
    $sql="select * from items";
    
}


    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        
        
        
        while($row=mysqli_fetch_assoc($result)){
            
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
        </a><a href='favouritecode.php?itemid=".$row['id']."' style='' class='heartbtn'><span class='icon-heart-o heart1' style=''></span></a>
      </div>
            
            ";
            
            
        }
        
    }
    



?>