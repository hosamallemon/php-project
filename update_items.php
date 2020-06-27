<?php 

session_start();
include 'db.php';
$id=$_SESSION['user_id'];

$sql="select * from items where id='".$_GET['itemid']."' ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if($row['image']==''){
    
$img='uploads/default';    

}else{$img="uploads/".$row['image']."";}




?>



<!DOCTYPE html>




<html lang="eng">
    
    
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        
        <style>
            
            img{

                max-width: 330px;
                min-width: 330px;
                height: 340px;
                
            }
            .separator {
                
                display: flex;
                align-items: center;
                text-align: center;
                color: black;
            
            }
            .separator::before, .separator::after {
                
                content: '';
                flex: 1;
                border-bottom: 1px solid #000;
            }
            .separator::before {
                
                margin-right: .25em;
            }
            .separator::after {
                
                margin-left: .25em;
            }
        </style>
        
    </head>
    
    
    <body>
        
        <?php include'head.php';?>
        <div class="separator mt-4 mb-4">
            
            
           <h2>Update Item</h2></div>
        
        
            
        <div class="container">
            
            <form action="account-information-code.php" method="post" enctype="multipart/form-data">
            
            <div class="row border p-4">
                
                    <div class="col-lg-6">
                        
                <div class="col-lg-12">
                    
            
                 <div class="form-group row">
                  
                    <label  class="text-black">Title</label>

                    <input type="text" class="form-control" id="" name="f_name" placeholder="" value='<?php echo"".$row['title'].""; ?>'>
                  
                </div>
                    
                </div>
                                
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label class="text-black">category</label>
                     
                     <select name="category" class="browser-default custom-select" id="category">
                      <option selected><?php echo"".$row['category'].""?></option>
                      <option value="1">Men</option>
                      <option value="2">Women</option>
                      <option value="3">Children</option>
                    </select>
                  
                </div>
                    
                </div>  
                    
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label  class="text-black">price</label>
                    <input type="text" class="form-control" id="" name="phone" placeholder="" value='<?php echo"".$row['price'].""; ?>'>
                  
                </div>
                    
                </div>
                        
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label  class="text-black">Details</label>
                    <textarea class="form-control" id="" name="email" placeholder="" value=''><?php echo"".$row['detail'].""; ?> </textarea> 
                  
                </div>
                    
                </div>
                        

                  
                <div class="col-lg-12">
                    

                    
                </div>
                    
                </div>
                
                    
                    
                    
                    
                
                
                <div class="col-lg-5 col-lg-offset-1">
                    <div>
                    
                    <div class="border border-primar text-center mb-2">
                        <img src='<?php echo"".$img.""; ?>' class=" " >
                        
                    </div>
                        <div class="mb-3 ml-5">  <input type="file" name="image"></div>
                    <div class="text-center">
                    <input type="submit" class="btn btn-primary " style="width: 150px;" value="Save" name="update">
                    </div>
                    </div>
                </div>
                
                </div>
    
               </form>  
            </div>
            
            
         
       
        
        
        
        
        
    </body>

</html>



