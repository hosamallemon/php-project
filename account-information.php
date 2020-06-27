<?php 

session_start();
include 'db.php';
$id=$_SESSION['user_id'];

$sql="select * from login where id='".$id."' ";
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
                
                max-width: 400px;
                min-width: 400px;
                height: 418px;
                
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
            
            
           <h2>Account Information</h2></div>
        
        
            
        <div class="container">
            
            <form action="account-information-code.php" method="post" enctype="multipart/form-data">
            
            <div class="row border p-4">
                
                    <div class="col-lg-6">
                        
                <div class="col-lg-12">
                    
            
                 <div class="form-group row">
                  
                    <label  class="text-black">First Name</label>

                    <input type="text" class="form-control" id="" name="f_name" placeholder="" value='<?php echo"".$row['firstname'].""; ?>'>
                  
                </div>
                    
                </div>
                                
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label class="text-black">Last Name</label>
                    <input type="text" class="form-control" id="" name="l_name" placeholder="" value='<?php echo"".$row['lastname'].""; ?>'>
                  
                </div>
                    
                </div>  
                    
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label  class="text-black">Phone</label>
                    <input type="text" class="form-control" id="" name="phone" placeholder="" value='<?php echo"".$row['phone'].""; ?>'>
                  
                </div>
                    
                </div>
                        
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label  class="text-black">Email</label>
                    <input type="text" class="form-control" id="" name="email" placeholder="" value='<?php echo"".$_SESSION['user_name'].""; ?>'>
                  
                </div>
                    
                </div>
                        
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label class="text-black">Password</label>
                    <input type="password" class="form-control" id="" name="password" placeholder="" value='<?php echo"".$row['password'].""; ?>'>
                  
                </div>
                    
                </div>
                  
                <div class="col-lg-12">
                    
                 <div class="form-group row">
                  
                    <label  class="text-black">RePassword</label>
                    <input type="text" class="form-control" id="" name="" placeholder="">
                  
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
                        <div class="mb-3">  <input type="file" name="image"></div>
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



