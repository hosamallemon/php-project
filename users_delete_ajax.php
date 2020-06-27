<?php 

if(isset($_GET['user_id'])){
    
    include 'db.php';
   $userid=$_GET['user_id']; 
    
   $sql="delete from cart where user_id='".$userid."' ";
   $sql1="delete from favourite where user_id='".$userid."' ";
   $sql2="delete from item where user_id='".$userid."' ";
   $sql3="delete from login where id='".$userid."' ";
    
    mysqli_query($con,$sql);
    mysqli_query($con,$sql1);
    mysqli_query($con,$sql2);
    mysqli_query($con,$sql3);
    
    
    $sql4="select * from login where admin=0 ";
    $result=mysqli_query($con,$sql4);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            
            
                if($row['image']=='')
                    $img="uploads/default";
                else{$img="uploads/".$row['image']."";}
                
                echo"<tr>
                     
                      
                    <td  class='image'><img src='".$img."' class='img-responsive'></td>
                                 <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['email']."</td>
                                 <td>".$row['phone']."</td>
                    <td class='' ><a href='' class='btn btn-primary height-auto btn-sm delete' val='".$row['id']."'>

                </tr>"; 
        }
    }
    
    
}


?>