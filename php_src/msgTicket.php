<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		var message="<?php isset($_COOKIE['cancelTicket'])? print($_COOKIE['cancelTicket']):print("NO"); ?>"
		var message2="<?php isset($_COOKIE['cancelTicket'])? print($_COOKIE['updateTicket']):print("NO"); ?>"
		if (message!="NO") {
			alert(message);
		}
		if (message2!="NO") {
			alert(message2);
		}
		window.location="../index1.php";

	</script>
</head>
<body>

</body>
</html>