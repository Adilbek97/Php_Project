
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<script type="text/javascript">
        var msg="<?php isset($_COOKIE['lgnMsg'])? print($_COOKIE['lgnMsg']):print("NO"); ?>"
        if(msg!="No"){
        alert(msg);
        	if(msg=="Вы вошли в систему"){
        		var mail="<?php print($_COOKIE['mail']); ?>"
        	sessionStorage.setItem("msg", "user_in");
        	sessionStorage.setItem("login", mail);
        	}else{
        		sessionStorage.setItem("msg", "user_isn't_in");
        	}
    	}
    	else{
        		sessionStorage.setItem("msg", "user_isn't_in");
    	}
    	window.location="../index1.php";
</script> 
</head>
<body>
	
</body>
</html>