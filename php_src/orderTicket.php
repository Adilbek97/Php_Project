<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		var login1 = sessionStorage.getItem("msg");
		if (login1!="user_in") {
			alert("Вы не в системе, пожалуйста сначала заходите в систему");
			window.location="../index1.php";
		}
		
	</script>
</head>
<body>

</body>
</html>
<?php
require_once '../db/connection.php';
echo "ticked order <br>";
$data=$_POST;
	echo $data['from_c']."<br>";
	echo $data['where_c']."<br>";
	echo $data['go_when']."<br>";
	echo $data['size_of_pass']."<br>";
	echo $data['go_back']."<br>";
	$from_c = $data['from_c'];
	$where_c = $data['where_c'];
	$go_when = $data['go_when'];
	$size_of_pass = $data['size_of_pass'];
	$go_back = $data['go_back'];
    $link = mysqli_connect($host, $user, $password, $database) 
     or die("Ошибка к подключение базаданных " . mysqli_error($link));
     $mail=$_COOKIE['mail'];
     $query ="SELECT * FROM users WHERE mail='$mail'";
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
      if($result)
      {
      	$rows = mysqli_num_rows($result);
      	$row = mysqli_fetch_row($result);
      	$number_of_ticket=rand();
      	$insert_query = "INSERT INTO `tickets` VALUES (NULL, '$row[0]', '$row[2]', '$row[1]', '$row[7]', '$row[8]', '$from_c', '$where_c', '$size_of_pass', '$go_when', '$go_back', '$number_of_ticket')";
      	$insert_result = mysqli_query($link, $insert_query) or die("Ошибка " . mysqli_error($link)); 
      	if ($insert_result) {
      		echo "<p style='color:green;'>уважаемый $row[2] $row[1] ваш заказ принят  <br> nomer vashego bileta  $number_of_ticket <br>";
      	}
      
      }

?>