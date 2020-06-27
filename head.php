<?php 


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
    <link rel="stylesheet" href="StyleSheet1.css" />


<style>
    
    

</style>
    

        </head>

<body>
    <div class="site-navbar bg-white py-2 mt-2 mynav " style="position:relative">


        <div class="container-fluid">

            <div class="row">
                <div class="logo col-lg-6">
                    <div class="site-logo">
                        <a href="index.php" class="js-logo-clone">Dealers</a>
                    </div>
                </div>

                <div class="col-lg-6 text-right">
                    
                    <?php 
                    
                    if(isset($_SESSION['user_type'])){
                        if($_SESSION['user_type']==1)
                     echo "<i style='font-size:18px; color:black' class='fas control'>  <a href='list_of_users.php' style='color:black'>&#xf023; Admin</a></i>";   
                    }
                    
                    ?>
                    

                   <i style='font-size:18px; color:black' class='fas control'>  <a href="account-information.php" style="color:black">&#xf007; Account</a></i>

                    <i style='font-size:18px; color:black' class='fas control'> <a href="item_managed.php" style="color:black">&#xf007; Manage</a></i>

                    <i style='font-size:18px; color:black' class='control fas '>  <a href="logout.php" style="color:black">&#xf011; Logout</a></i>

                </div>



            </div>






        </div>
        <div class="search-wrap">


            <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" id="search" placeholder="Search keyword and hit enter...">
                </form>
            </div>
        </div>

        <div class="container">
            <div class="d-flex align-items-center justify-content-between">

                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="index.php">Home</a></li>
                            <li class="has-children active">
                                <a href="#">CATEGORY</a>
                                <ul class="dropdown">
                                    <li><a  id="all"  style="color:black">All</a></li>
                                    <li><a  id="men" style="color:black">Men</a></li>
                                    <li><a  id="women" style="color:black">Women</a></li>
                                    <li><a  id="children" style="color:black">Children</a></li>
                                    <li class="has-children">
                                        <a href="#">Sub Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Children</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="favourite.php">Favourite</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="favourite.php" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                    <a href="cart.php" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>
                        <span class="number">2</span>
                    </a>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>

                </div>



            </div>

        </div>    <!-- end of contaner -->

    </div>
</body>

</html>