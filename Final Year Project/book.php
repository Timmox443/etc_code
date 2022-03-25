<?php
define("DB_SERVER", "localhost");
define("DB_USER", "user");
define("DB_PASSWORD", "tesla");
define("DB_DATABASE", "kwsbooking");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	{
		$name = $_POST['name'];
		$bookpark = $_POST['bookpark'];
		$age = $_POST['age'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$sql = "INSERT INTO `booking` (`Id`, `name`, `bookpark`, `age`, `date`, 'time') VALUES ('0', '$name', '$bookpark', '$age', '$date', '$time')";

		$rs = mysqli_query($connnect, $sql);
		if(mysqli_query($link, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
}

?>