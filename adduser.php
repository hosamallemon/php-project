<?php

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   mysqli_select_db($con,'hosam-project');
   


if(isset($_POST['submit'])){

    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
    $firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$phone = $_POST['Phone'];
	$email = $_POST['Email'];
    $password = $_POST['Password'];

    if ($firstname != "" && $lastname != "" && $phone != "" && $email != "" && $password != ""){

        $sql_query = "select * from login where email='".$email."' ";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_num_rows($result);

      
        if($row == 1){
		  echo "user already taken";
        }else{
		$add ="INSERT INTO login(firstname,lastname,phone,email,password,admin,image) VALUES ('$firstname','$lastname','$phone','$email','$password',0,'')";
         mysqli_query($con,$add);
		echo '<script language="javascript">';
echo 'alert("registration successful")';
echo '</script>';
header('location:registration.php');
        }

    }else{
	header('location:registration.php');}

}else{
	header('location:registration.php');}
?>