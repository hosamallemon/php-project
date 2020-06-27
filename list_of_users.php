<?php 
session_start();
?>

<!DOCTYPE html>




<html lang="eng">
    
    
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        
        <script src="sweetalert2.all.min.js"></script>
      
        <script src="jquery-3.4.1.min.js"></script>
        <style>
            
            body{
                font-weight: bold;
                
            }
            
            tr{
                
                text-align: center;
                
                
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
            .site-blocks-table th{
                padding: 20px;
                font-size: 21px;
                
            }
            .site-blocks-table td {
                    padding: 20px;
                    text-align: center;
                    vertical-align: middle;
                    color: #212529;
                
            }

            img{
                
                
                width: 100%;
                height: 110px;

                
            }
            .image{
                
                min-width: 110px;
                max-width: 110px;

               
            };
            
        </style>
        
      <script>
          
          $(document).on('click','.delete',function(e){
              
              
              e.preventDefault();
              var userid=$(this).attr('val');
              swaldelete(userid);
              
              
              function swaldelete(userid){
                  Swal.fire({
                   
                      title:'are you sure',
                      text:'it will be delete parmanently',
                      type:'warning',
                      showCancelButton:true,
                      confirmButtonColor:'#3085d6',
                      cancelButtonColor:'#d33',
                      confirmButtonText:'yes delte it',
                      showLoaderOnConfirm:true,
                      
                    preConfirm:function(){ 
                  $.ajax({
                  
                   type:"get",
                   url:"users_delete_ajax.php",
                   data:{
                      user_id:userid
                       
                  },success:function(data){

                      $('#table_ajax').html(data);
                  }
                  
              }); }   
                      
                  }); }
                  

              
          });
          
      </script>
    
    </head>
    
    
    <body>
        
        
        <?php include'head.php';?>
        

        <div class="separator mt-4 mb-4">
            
           <h2>All Users Account</h2>

        </div>
        
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class ="col-lg-12">
                <div class="site-blocks-table">
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="">Image</th>
                    <th class="">First Name</th>
                    <th class="">Last Name</th>
                    <th class="">Email</th>
                    <th class="">Phone</th>
                    <th class="">Remove</th>
                  </tr>
                </thead>
                 
                 <tbody id="table_ajax">
                     
                     <?php 
                     
                     include "db.php";
                     $sql="select * from login where admin=0";
                     $result =mysqli_query($con,$sql);
                     
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
                                 <td class='' ><a href='' class='btn btn-primary height-auto btn-sm delete' val='".$row['id']."'>X</a></td>  


                             </tr>";      
                             
                         }
                         
                         
                         
                         
   
                     }


                     
                     ?>

                 </tbody>
                </table>     
                
                </div>
                
            </div>
            
            
            
        </div>
        </div>  
        
        
        
        
    </body>

</html>



 