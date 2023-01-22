<?php
//insert data to data base
	if(isset($_POST['submit'])){

    require 'db_connection.php';

		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];

        if ($password != $repassword) {
            echo "<script> alert('Passwords don't match') </script>";
            return false;
        }


        $sql= "INSERT INTO `member` (`email`, `password`) values ('$email', '$password')";		
		
		
        
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('Successfully signed up now you can sign in!') </script>";
        } else {
            echo "<script> alert('Error Occurred') </script>";
        }

		
       
}