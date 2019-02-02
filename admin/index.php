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
        or die("Ошибка " . mysqli_error($link));
 $query ="SELECT * FROM tickets ORDER BY go_when;";

 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
	    $rows = mysqli_num_rows($result); // количество полученных строк
	     // print($rows);
	    echo "<table border='2'>";
	    echo "<tr color='green'><td>Имя</td><td>Фамилия</td><td>mail</td><td>parol</td><td>от</td><td>куда</td><td>	класс</td><td>дата</td><td>дата возврат</td><td>номер билет</td><td>цена</td><td>удалить</td></tr>";
	    for ($i = 0 ; $i < $rows ; $i++)
		    {
		        $row = mysqli_fetch_row($result);

		        echo "<tr>";
		         for ($j = 2 ; $j < count($row); $j++) {
		         	echo "<td>$row[$j] </td> ";
		         }
		         echo "<td><form action='deleteAdminTicket.php' method='post'><input type='hidden' value='$row[11]' name='delVal'><input type='submit' value='delete'></form><td>";
		         echo "</tr>";
		        // echo "<p style='color:red;align:center;'>$row[1]</p>";
		        // echo "<p >$row[2]</p>";
		        // echo "<p >$row[3] $row[4] </p>";
		        // echo "<hr>";
		    }
		   echo "<table>";
	    }
mysqli_close($link);
?>