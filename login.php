<?php 
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="StyleSheet1.css"/>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<form action = "validation.php" method = "post">
    <div class="div1">
        <img class="img1" src="https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png" alt="user" width="100" />

        <h1>Welcome Admin</h1>

        <div><input name="Email" class="input1 inp1 form-control" type="email" placeholder="   Email" required/></div>
        <div><input name="password" class="input1 inp2 form-control" type="password" placeholder="   Password" required/></div>

		  <div class="checkbox text-left ">
			<label>
			  <input type="checkbox" /> Remember Me
			</label>
		  </div>

      

        <button class="btn1" name ="submit" type ="submit">Submit</button>
        <div class="text-right"> <a class="forget" href="#" >forgot the password?</a></div><br>
		<div> <a class="sign_up" href="registration.php" >SIGN UP</a></div>
      

    </div>
	</form>



                <script src="jquery-3.4.1.min.js"></script>
    <script src="JavaScript.js"></script>
    
</body>
</html>
