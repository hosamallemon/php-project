<?php 

if(isset($_GET['favourite_itemid'])){
session_start();
include'db.php';

$user_id=$_SESSION['user_id'];
$item_delete  =$_GET['favourite_itemid'];

$sql="delete from favourite where item_id='".$item_delete."'";
mysqli_query($con,$sql);

$sql1="select * from favourite inner join items on favourite.item_id=items.id where favourite.user_id='".$user_id."'";
$result =mysqli_query($con,$sql1);


if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
    echo"
    
                      <div class='col-6 col-md-6 col-lg-4 border-top'>
        <a href='shop-single.php?itemid=".$row['item_id']."' class='item items'>
          <img src='uploads/".$row['image']."' alt='Image' class='img-fluid' style='min-height:270px; max-height:270px; min-width:240px; max-width:240px'>

          <div class='item-info'>
            <h3>".$row['title']."</h3>
            <span class='collection d-block'>Summer Collection</span>
            <strong class='price'>$".$row['price']."  
            </strong>


 

          </div>      
        </a><button  class='btn btn-primary height-auto btn-sm delete' id='delete' val='".$row['id']."'>X</button>
      </div>
    
    ";
    
} 
}

}

if(isset($_GET['manage_item_page_itemid'])){
    session_start();
    include'db.php';
    
    $itemid=$_GET['manage_item_page_itemid'];
    $sql="delete  from items where id ='".$itemid."'" ;
    $result=mysqli_query($con,$sql);

            echo"
              <table class='table table-bordered'>
                <thead>
                  <tr>
                    <th class='product-thumbnail'>Image</th>
                    <th class='product-name'>Title</th>
                    <th class='product-price'>Category</th>
                    <th class='product-quantity'>Details</th>
                    <th class='product-total'>Price</th>
                    <th class='product-remove'>Remove</th>
                  </tr>
                </thead>
                <tbody>";
                    
                     
                    
                    $id =$_SESSION['user_id'];

                    
                    
                    $sql="select * from items where user_id = '".$id."' ";
                    
                    $result=mysqli_query($con,$sql);
                    if( mysqli_num_rows( $result  ) > 0 ){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            
                                                
                    if ($row['category']==1){
                      $category = "Men";}
                                    
                    else if($row['category']==2){
                      $category = "Women";   
                     } else {$category = "Children";}
                           
                            $id1 = $row['id'];
                  
                            
                            echo "<tr>
                    <td class='product-thumbnail'>
                      <img src='uploads/".$row['image']."' alt\"Image\" class='img-fluid' style='min-width:150px; min-height:150px ; max-width:150px; max-height:150px'>
                    </td>
                    
                    <td class='product-name'>
                      <h2 class='h5 text-black'>".$row['title']."</h2>
                    </td>
                    
                    <td>".$category."</td>
                      
                    <td style='min-width:360px ; max-width:360px'>

                        ".$row['detail']."

                    </td>
                      
                    <td> $".$row['price']."</td>
                    
                    <td>

                    <a href='' class='btn btn-primary height-auto btn-sm delete' val='".$row['id']."'>X</a>

                    </td>
                    
                  </tr>";
                            
                        }
                    }
                    
      
                   

               
                echo"</tbody>";
             echo" </table>";
            
            
        
    
    
    
}


?>