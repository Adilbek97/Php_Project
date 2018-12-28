<?php
session_start();
?>
    
<?php
if(isset($_POST['firstName'])){
	$name = $_POST['firstName'];
	$lastName= $_POST['lastName'];
	$thirdName= $_POST['thirdName'];
	$birthDay= $_POST['birthDay'];
	$jyn= $_POST['jyn'];
	$phone= $_POST['phoneNum'];
	$password1= $_POST['password'];
	$mail= $_POST['mail'];
	print("name= ".$name."<br>");
	print("lastName= ".$lastName."<br>");
	print("thirdName= ".$thirdName."<br>");
	print("birthDay= ".$birthDay."<br>");
	print("jyn= ".$jyn."<br>");
	print("phone= ".$phone."<br>");
	print("password= ".$_POST['password']."<br>");
	print("mail= ".$mail."<br>");
	$_SESSION['mail_exist']=$mail;
	require_once '../db/connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query_mail ="SELECT password FROM users WHERE mail='$mail'";
                 $result_mail = mysqli_query($link, $query_mail) or die("Ошибка " . mysqli_error($link));
                  if($result_mail)
                  {
                      $rows = mysqli_num_rows($result_mail); // количество полученных строк
                      // setcookie("mail","0");
                      if($rows==0){

                      	echo "$rows keldi <br>";
                        	$query ="INSERT INTO users VALUES (NULL, '$lastName', '$name', '$thirdName', '$birthDay', '$jyn', '$phone', '$mail', '$password1')";
							   	$result = mysqli_query($link, $query) or die("Oshibka " . mysqli_error($link)); 
							   if($result)
							    {
							        echo "<span style='color:blue;'>Dannye dabavleny</span>";
							    }
							    mysqli_free_result($result);
								
                      }else{
                      	print("takoi mail uje est".$_SESSION['mail_exist']);
                      }
                      mysqli_free_result($result_mail);
                  }
mysqli_close($link);
  

}else {
	print("gelmedi");
}
?>
