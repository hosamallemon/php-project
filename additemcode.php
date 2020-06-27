<?php

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   mysqli_select_db($con,'hosam-project'); 





if(isset($_POST['submit'])){


    
    $id            =$_SESSION['user_id'];
      $target_file = "web/".basename($_FILES["image"]["name"]);
    $title         =$_POST['title'];
    $price         =$_POST['price'];
    $category      =$_POST['category'];
    $img           =$_FILES['image'];
    $imgName       =$_FILES['image']['name'];
    $imgError      =$_FILES['image']['error'];
    $imgSize       =$_FILES['image']['size'];
    $imgTmpName    =$_FILES['image']['tmp_name'];
    $detail        =$_POST['detail'];
    
    $imgExt       =explode('.',$imgName);
    $imgActualExt =strtolower(end($imgExt));
    
    $allowed      =array('jpg','jpeg','png','pdf');
    
    if(in_array($imgActualExt ,$allowed)){
        if($imgError === 0){
            if($fileSize<50000){
                $imgNameNew = uniqid('',true).".".$imgActualExt;
				
				$_SESSION['imgname']=$imgNameNew;
				
                $imgDestination = 'uploads/'.$imgNameNew;
                move_uploaded_file($imgTmpName , $imgDestination);
                
            }else{echo "your img is too big!";}
            
        }else{echo"there was error uploding this file!"; }
        
    }else{echo "you cant uplode this type!";}
    
   if($title != "" && $price != "" && $category != "" && $detail != ""){
       
       
       $add="insert into items(title,price,category,detail,user_id,image) VALUES ('$title','$price','$category','$detail','$id','$imgNameNew')";
       
       mysqli_query($con,$add);
       header('location:additem.php?imgname='.$imgNameNew);
       
   }else {echo "plz fill all the inputs"; }
    
    
    
    
    
}
    
    
    



?>