<?php

  session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hosam-project');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   mysqli_select_db($con,'hosam-project');
   
if(isset($_POST['submit'])){

    $Email = $_POST['Email'];
    $password = $_POST['password'];

    if ($Email != "" && $password != ""){

        $sql_query = "select * from login where Email='".$Email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_num_rows($result);
		$row1 = mysqli_fetch_assoc($result);
		$id=$row1['id'];
		$user_type=$row1['admin'];
      
        if($row == 1){

		if($user_type==0){
		   $_SESSION['user_name'] = $Email;
		   $_SESSION['user_id'] = $id;
		   $_SESSION['user_type']=0;
		   header('location:index.php');}else {
		   $_SESSION['user_name'] = $Email;
		   $_SESSION['user_id'] = $id;
		   $_SESSION['user_type']=1;
		   header('location:index.php');


	
}

           
		   
        }else{
		echo "no";
		header('location:login.php');
            echo "Invalid username and password";
        }

    }else{
	header('location:login.php');}

}else{
	header('location:login.php');}
?>