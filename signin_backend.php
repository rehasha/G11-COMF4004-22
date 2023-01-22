<?php
//insert data to data base
	if(isset($_POST['submit'])){

    require 'db_connection.php';

		$email=$_POST['email'];
		$password=$_POST['password'];

        $sql= "SELECT `member_id` from `member` WHERE `member`.`email` = $email AND `member`.`password` = $password";		
		
		$result = mysqli_query($conn, $sql);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result)[0];
            $member_id = $row['member_id'];
            $_SESSION['member_id'] = $member_id;
            header("Location: /");
            die();
        } else {
            echo "<script> alert('Error Occurred') </script>";
        }

		
       
}