<?php
	setcookie ("lgnMsg", "такой логин нет",time() - 7200);
 	setcookie ("mail", "jok", time() - 7200);
    setcookie ("password1","", time() - 7200);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		sessionStorage.setItem("msg", "user_isn't_in");
		window.location="../index1.php";
	</script>
</head>
<body>

</body>
</html>