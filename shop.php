<?php 

session_start();
 include_once'db.php';





?>





<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Dealers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="StyleSheet1.css">
      <script src="JavaScript.js"></script>
    
     <script src="sweetalert.min.js"></script>
      <style>
          .products .item, .product .item {
    text-align: center;
    display: block;
    position: relative;
    border-bottom: 1px solid #eee;
    min-height: 500px;
    max-height: 500px;
}
          .products > [class*="col-"], .product > [class*="col-"] {
    border-right: 1px solid #eee;
    text-align: center;
    padding-top: 30px;
	border-bottom: 1px solid #eee;
}
          .products > [class*="col-"], .product > [class*="col-"] {
    border-right: 1px solid #eee;
    text-align: center;
    min-width: 274px;
}
.products .item, .product .item {

   
}
          
          .heart1{
              color:red;
              
          }

          
  </style>
      
      <script>
          document.ready(function(){
                    $("i").click(function () {

    $("this").addClass("heart1");
          
});
          });

      
      
      </script>


      <script src="jquery-3.4.1.min.js"></script>

	      <script src="jquery-3.4.1.min.js"></script>
    
    <script>
        

        
        $(document).ready(function(){
            
            
            $("#men").click(function(){
               $.ajax({
                   
                   type:"post",
                   url:"category.php",
                   data:{
                       category:$("#men").text()
                       
                       
                   },success:function(data){
                       $('.products').html(data);
                       
                   }
                   
               });
                
            });

            $("#women").click(function(){
               $.ajax({
                   
                   type:"post",
                   url:"category.php",
                   data:{
                       category:$("#women").text()
                       
                       
                   },success:function(data){
                       $('.products').html(data);
                       
                   }
                   
               });
                
            });

            $("#children").click(function(){
               $.ajax({
                   
                   type:"post",
                   url:"category.php",
                   data:{
                       category:$("#children").text()
                       
                       
                   },success:function(data){
                       $('.products').html(data);
                       
                   }
                   
               });
                
            });


            $("#all").click(function(){
               $.ajax({
                   
                   type:"post",
                   url:"category.php",
                   data:{
                       category:$("#all").text()
                       
                       
                   },success:function(data){
                       $('.products').html(data);
                       
                   }
                   
               });
                
            });
        });
        
    </script>
      <script>
          
        $(document).on('click','.favourite',function(){
            
            $.ajax({
                
                type:"get",
                url:"favourite_ajax.php",
                data:{
                    
                    itemid:$(this).attr('val')
                    
                },success:function(mydata){
                    
                    
                    if(mydata=="true"){
                        
                        
                        
                                swal({
                                    
                                    title:"Warning",
                                    icon: "warning",
                                    text:"Already in favourite !!!",
                
                                });
                    
                    }else{
                               
                        $('.products').html(mydata);
                        
                        
                        swal({
                                    
                                    icon: "success",
                                    title: "done",
                                    text:"",
                
                                });   
                        
                    }
                }
                
            });
            
        });
      </script>
  </head>
  <body>
  
  <div class="site-wrap">


 <?php include 'head.php' ;?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong>
            
           <span style="color:red" class="ml-5" id="true">           
      <?php 
              
         if(isset($_GET['favourite'])){
         echo "already in favourite !!!!!";
             
         }
          
          
          ?>
              </span>
              <div class="hoho"></div>

            </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-9 order-2 order-lg-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="products-wrap border-top-0">
  <div class="container-fluid">
    <div class="row no-gutters products">
        
        <?php 
        
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
        
        
        
        
        
        ?>
        
      <div class="col-6 col-md-6 col-lg-4 border-top">
        <a href="shop-single.html" class="item items">
          <img src="images/product_1.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>The Shoe</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price hh"  style="">$93.50</strong>
          </div>
        </a>
      </div>
        
      <div class="col-6 col-md-6 col-lg-4 border-top">
        <a href="shop-single.html" class="item">
          <span class="tag">Sale</span>
          <img src="images/product_2.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Marc Jacobs Bag</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price">$9.50 <del>$30.00</del></strong>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-4 border-top">
        <a href="shop-single.html" class="item">
          <img src="images/product_3.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>The  Belt</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price">$944.50</strong>
              
          </div>
        </a>
      </div>

      <div class="col-6 col-md-6 col-lg-4">
        <a href="shop-single.html" class="item">
          <img src="images/product_1.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>The Shoe</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price">$9.50</strong>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-4">
        <a href="shop-single.html" class="item">
          <span class="tag">Sale</span>
          <img src="images/product_2.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Marc Jacobs Bag</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price">$9.50 <del>$30.00</del></strong>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-4">
        <a href="shop-single.html" class="item">
          <img src="images/product_3.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>The  Belt</h3>
            <span class="collection d-block">Summer Collection</span>
            <strong class="price">$9.50</strong>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="border p-4 mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">The Collections</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
              <div class="product">
                <a href="shop-single.html" class="item">
                  <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="shop-single.html" class="item">
                  <span class="tag">Sale</span>
                  <img src="images/product_2.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>Marc Jacobs Bag</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50 <del>$30.00</del></strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="shop-single.html" class="item">
                  <img src="images/product_3.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The  Belt</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="shop-single.html" class="item">
                  <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                      
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="shop-single.html" class="item">
                  <span class="tag">Sale</span>
                  <img src="images/product_2.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>Marc Jacobs Bag</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50 <del>$30.00</del></strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="shop-single.html" class="item">
                  <img src="images/product_3.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The  Belt</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

            </div>
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
      
      <script src="jquery-3.4.1.min.js"></script>
      <script src="JavaScript.js"></script>
    
  </body>
</html>