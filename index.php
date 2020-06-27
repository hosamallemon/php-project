<?php 

session_start();
 
if(!$_SESSION['user_name']){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dealers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
       <link rel="stylesheet" href="StyleSheet1.css"/>
      
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
          
          .heart1{
              color:red;
              
          }

          
  </style>
    
  </head>
  <body>
  
  <div class="site-wrap">
      

    <div class="site-blocks-cover" data-aos="fade">
        
          <?php include 'head.php';?>
        
        
        
        
        
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-5 text-center">
            <div class="featured-hero-product w-100">
              <h1 class="mb-2">Madewell</h1>
              <h4>Summer Collection</h4>
              <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
              <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="#" class="btn btn-primary rounded-0">Shop Now</a></p>
            </div>  
          </div>
          <div class="col-lg-7 align-self-end text-center text-lg-right">
            <img src="images/new/person_transparent.png" alt="Image" class="img-fluid img-1"style="position:relative">
          </div>
          
        </div>
      </div>
      
    </div>

  
    <div class="products-wrap border-top-0">
      <div class="container-fluid">
        <div class="row no-gutters products">
            
            
            
            <?php 
            include 'db.php';
            
            $sql="select  * from items ORDER BY id DESC limit 6";
            $result = mysqli_query($con,$sql);
            $result1 = mysqli_num_rows($result);
            
            if($result1 > 0 ){
                
                while($row = mysqli_fetch_assoc($result)){
                   
                    if($row['category']==1){
                        $category= "Men";
                    }else if($row['category']==2){
                        $category= "Women";
                    }else{
                        $category= "Children";
                    }
            echo"
            
                  <div class='col-6 col-md-6 col-lg-4 border-top'>
        <a href='shop-single.php?itemid=".$row['id']."' class='item items'>
          <img src='uploads/".$row['image']."' alt='Image' class='img-fluid' style='min-height:330px; max-height:330px; min-width:380px; max-width:380px'>

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

            
            


          <div class="col-6 col-md-6 col-lg-4">
            <a href="#" class="item">
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
            <a href="#" class="item">
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
    
    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Jacket</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-8 order-1 align-self-end">
            <img src="images/model_woman_1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Collections</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
              <div class="product">
                <a href="#" class="item">
                  <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
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
                <a href="#" class="item">
                  <img src="images/product_3.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The  Belt</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
                  <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                  <div class="item-info">
                    <h3>The Shoe</h3>
                    <span class="collection d-block">Summer Collection</span>
                    <strong class="price">$9.50</strong>
                  </div>
                </a>
              </div>

              <div class="product">
                <a href="#" class="item">
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
                <a href="#" class="item">
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


    <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Denim Coat</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-6 order-1 align-self-end">
            <img src="images/model_5.png" alt="Image" class="img-fluid">
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