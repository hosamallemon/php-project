<?php 
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	
    <link rel="stylesheet" href="StyleSheet1.css"/>
</head>
<body>

<form action = "adduser.php" method = "post">
    <div class="div2">
        <img src="https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png" alt="user" width="100" style= "margin-bottom:25px"/>

        <h2 style= "margin-bottom:20px" >User Registration</h2>

        <div><input name="Firstname" class="input2 inp1 form-control" type="text" placeholder="   Firstname" required/></div>
		<div><input name="Lastname" class="input2 inp2 form-control" type="text" placeholder="   Lastname" required/></div>
		<div><input name="Phone" class="input2 inp2 form-control" type="tel" pattern="[0-9]{10}" placeholder="   Phone" required/></div>
        <div><input name="Email" class="input2 inp2 form-control" type="email" placeholder="   Emal" required/></div>
		<div><input name="Password" class="input2 inp2 form-control" type="password" placeholder="   Password" required/></div>
		<div><input name="re-Password" class="input2 inp2 form-control" type="password" placeholder="   Re Password" required/></div>

		


        <button class="btn btn-primary" name ="submit" type ="submit">Sign upp</button>
        <p class="text-right"><a href="login.php" style="text-align:right">Back TO Login</a></p>


      <div class="dropdown-menu">
  <a class="dropdown-item" href="#">Link 1</a>
  <a class="dropdown-item" href="#">Link 2</a>
  <a class="dropdown-item-text" href="#">Text Link</a>
  <span class="dropdown-item-text">Just Text</span>
</div>

    </div>
    
	</form>


    
</body>
</html>
