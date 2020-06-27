<?php 

include 'db.php';

if(isset($_POST['update'])){
    session_start();
    
   $f_name    = $_POST['f_name'];
   $l_name    = $_POST['l_name'];
   $phone     = $_POST['phone'];
   $password  = $_POST['password'];
   $email     = $_POST['email'];

    $img           =$_FILES['image'];
    $imgName       =$_FILES['image']['name'];
    $imgError      =$_FILES['image']['error'];
    $imgSize       =$_FILES['image']['size'];
    $imgTmpName    =$_FILES['image']['tmp_name']; 
    
    echo $_POST['f_name']; 
        
    $imgExt       =explode('.',$imgName);
    
    $imgActualExt =strtolower(end($imgExt));
    
    $allowed      =array('jpg','jpeg','png','pdf');
    
    if(in_array($imgActualExt ,$allowed)){
        if($imgError === 0){
            if($fileSize<500000){
                $imgNameNew = uniqid('',true).".".$imgActualExt;
				
				$_SESSION['imgname']=$imgNameNew;
				
                $imgDestination = 'uploads/'.$imgNameNew;
                move_uploaded_file($imgTmpName , $imgDestination);
                
            }else{echo "your img is too big!";}
            
        }else{echo"there was error uploding this file!"; }
        
    }else{echo "you cant uplode this type!";}   
}

  if($f_name !="" && $l_name !="" && $phone !="" && $email !="" && $password !="" && $imgNameNew !=""){
      
      $update="UPDATE login SET firstname='".$f_name."',lastname='".$l_name."',phone='".$phone."',email='".$email."',password='".$password."',image='".$imgNameNew."' WHERE id='".$_SESSION['user_id']."' ";
          
          mysqli_query($con,$update);
          $_SESSION['user_name']=$email;
          header('location:account-information.php');
      
  }else if($f_name !="" && $l_name !="" && $phone !=""&& $email !="" && $password !=""){
      
      $update="UPDATE login SET firstname='".$f_name."',lastname='".$l_name."',phone='".$phone."',email='".$email."',password='".$password."' WHERE id='".$_SESSION['user_id']."' ";
          
          $_SESSION['user_name']=$email;
          mysqli_query($con,$update);
          header('location:account-information.php');
  }

?>