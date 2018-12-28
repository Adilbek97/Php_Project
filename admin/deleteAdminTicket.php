<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<?php
require_once '../db/connection.php';
  $link = mysqli_connect($host, $user, $password, $database) 
             or die("Ошибка к подключение базаданных " . mysqli_error($link));
$number_ticket =  $_POST['delVal']; 
$delete_query = "DELETE FROM `tickets` WHERE `tickets`.`number_of_ticket` = '$number_ticket'";
                     $delete_result = mysqli_query($link, $delete_query) or die("Ошибка " . mysqli_error($link));
	 if($delete_result){
	 	echo "<script>alert('билет по номерам $number_ticket успешно удалено');
	 	window.location='index.php';</script>";

	 }
?>