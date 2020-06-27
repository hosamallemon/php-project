
<?php 

session_start();
if(!$_SESSION['user_name']){
header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
      
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
      
      <script src="jquery-3.4.1.min.js"></script>
      <script src="sweetalert.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      
      <script>
          
          $(document).ready(function(){
              
              $("#add1").click(function(e){
                  e.preventDefault();
                  
   /*     var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);*/
                  $.ajax({
                      
                      
                      type:"get",
                      url:"add_item_ajax.php",
                      data:{
                          title:$("#title").val(),
                          price:$("#price").val(),
                          category:$("#category").val(),
                          
                          details:$("#details").val()
                      }
                      
                  });
                  
              });
              
          });
          
          
          
          
$(document).ready(function(e){
    $("#form").on('submit',function(e) {
        e.preventDefault();
        
        
        var form =$(this);
        var formdata= new FormData($(this)[0]);
        $.ajax({
            type:'POST',
            url: 'add_item_ajax.php',
            data:formdata,
            dataType:'json',
            cache:false,
            contentType: false,
            processData: false,
            beforSend:function(){$('#add').attr("disabled"),("disabled");
                                $('#form').attr("opacity"),(".5")},
            success:function(data){
                
                console.log("yes");
                console.log(data);
                
                      Swal.fire({
                          title:"done",
                          icon:"success",
                          text:"good job",
                      });

                
            },
            error: function(data){
                console.log("error");
                console.log(data);
            },

        });
    });
});
          
      </script>


      
  </head>
  <body>
  
  <div class="site-wrap">
    
	
  

	<?php include 'head.php';?>

      
    
    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">

            <form  id="form"  enctype="multipart/form-data" action="add_item_ajax">

              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label  class="text-black">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="col-md-6">
                    <label  class="text-black">Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="price" name="price">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label  class="text-black">Category <span class="text-danger">*</span></label>
         
                      <select name="category" class="browser-default custom-select" id="category">
  <option selected>Select Category</option>
  <option value="1">Men</option>
  <option value="2">Women</option>
  <option value="3">Children</option>
</select>
                  </div>
                    <div class="col-md-6">
                        <label  class="text-black">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>


                <div class="form-group row">
                  <div class="col-md-12">
                    <label  class="text-black">Details </label>
                    <textarea name="detail" id="details" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">

                      <input type="submit" class="btn btn-primary btn-lg btn-block" name="" id="add" value="Add Item">
                  </div>
                </div>
              </div>
              </form>
          </div>
          
        </div>
      </div>
    </div>


    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  July 15 &mdash; 25, 2019</p>
            </a>
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