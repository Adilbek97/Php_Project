<?php
require_once '../db/connection.php';
if(isset($_COOKIE['queryToСancel'])){
	$number=$_COOKIE['queryToСancel'];
	echo "bilet $number hochet otmenit <br>";
  $link = mysqli_connect($host, $user, $password, $database) 
             or die("Ошибка к подключение базаданных " . mysqli_error($link));
$delete_query = "DELETE FROM `tickets` WHERE `tickets`.`number_of_ticket` = '$number'";
                     $delete_result = mysqli_query($link, $delete_query) or die("Ошибка " . mysqli_error($link));
	 if($delete_result){
	 	echo "<script>alert('билет по номерам $number_ticket успешно удалено');
	 	window.location='../index1.php';</script>";

	 }
}
?>