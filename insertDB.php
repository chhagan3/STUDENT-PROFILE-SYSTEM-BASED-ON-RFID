<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
		$depart = $_POST['depart'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_the_iot_projects (name,id,gender,depart,email,mobile) values(?, ?, ?, ? ,?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$depart,$email,$mobile));
		Database::disconnect();
		header("Location: user data.php");
    }
?>