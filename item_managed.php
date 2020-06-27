<?php 
  session_start();

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(isset($_GET['id'])){
    
    $deleteitem = $_GET['id'];
    $delete     = "delete from items where id = '".$deleteitem."' ";
    mysqli_query($db,$delete);
    

    
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dealers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
      

     
      <script src="sweetalert2.all.min.js"></script>
      
      <script src="jquery-3.4.1.min.js"></script>
      
      <script>
          
          $(document).on('click','.delete',function(e){
              
              
              e.preventDefault();
              var itemid=$(this).attr('val');
              swaldelete(itemid);
              
              
              function swaldelete(itemid){
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
                   url:"items_delete_ajax.php",
                   data:{
                      manage_item_page_itemid:itemid
                       
                  },success:function(data){

                      $('#table_ajax').html(data);
                  }
                  
              }); }   
                      
                  }); }
                  

              
          });
          
      </script>
   
  </head>
  <body>
  
  <div class="site-wrap">
    

   <?php include 'head.php';?>


    <div class="row">
    <div class="bg-light py-3">
      <div class="container">
        <div class="col-sm-12">
          <div class="col-md-12 mb-0"><a href="index1.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div></div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-1">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table" id="table_ajax">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Title</th>
                    <th class="product-price">Category</th>
                    <th class="product-quantity">Details</th>
                    <th class="product-total">Price</th>
                    <th class="product-remove">Remove</th>
                    <th class="product-remove">Update</th>
                      
                  </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    
                    $id       =$_SESSION['user_id'];

                    
                    
                    $sql="select * from items where user_id = '".$id."' ";
                    $result=mysqli_query($db,$sql);
                    if( mysqli_num_rows( $result  ) > 0 ){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            
                                                
            if ($row['category']==1){
                     $category = "Men";
            }
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
                    
                    <td>
                    <a href='update_items.php?itemid=".$row['id']."' class='btn btn-primary btn-lg btn-block height-auto'id='add'>Update</a></td>
                    
                  </tr>";
                            
                        }
                    }
                    
      
                   ;?>

               
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-4 offset-md-8 ">
              <form method ="post" action="additem.php">


                <button name='submit' type ='submit' class="btn btn-primary btn-sm btn-block ">Add Item</button>
              </form>

            </div>
			</div>
            

              </div>
            </div>
         


    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            
            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates sed dolorum excepturi iure eaque, aut unde.</p>
            </div>
            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>