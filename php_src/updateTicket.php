<!-- UPDATE `tickets` SET `from_c` = 'ОШ', `where_c` = 'Нарын', `passengers_size` = '3', `go_when` = '2018-12-19', `go_back` = '2018-12-13' WHERE `tickets`.`ticked_id` = 14; -->
<?php
ob_start();
?>
<?php
require_once '../db/connection.php';
$number_ticket=$_COOKIE['toUpdateTicket'];
$data=array();
 $link = mysqli_connect($host, $user, $password, $database) 
             or die("Ошибка к подключение базаданных " . mysqli_error($link));
             $query ="SELECT * FROM tickets WHERE number_of_ticket='$number_ticket'";
              $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
              if($result)
              {

                  $row = mysqli_fetch_row($result);
                  /*for($i=0;$i<count($row);$i++){
                    echo " $i = $row[$i] <br>";
                  }*/
                  $data=$row;
                }
if(isset($_POST['btnUpdate'])){
  $data1=$_POST;
  // echo $data1['from_c'];
  // $update_query ="UPDATE `tickets` SET `from_c` = '$data1['from_c']', `where_c` = '$data1['where_c']', `passengers_size` = '$data1['s_pass']', `go_when` = '$data1['go_when']', `go_back` = '$data1['go_back']' WHERE `tickets`.`ticked_id` = 14;";
  //$update_query ="UPDATE tickets SET 'from_c' = 'ОШ' WHERE `tickets`.`ticked_id` = '14';"
  // $update_result = mysqli_query($link, $update_query) or die("Ошибка " . mysqli_error($link)); 
  //             if($update_result)
  //             {
  //               echo "<p style='color: green;'>ваш билет успешно izmeneno</p>";
  //                         setcookie ("cancelTicket", "ваш билет(".$number_ticket.") успешно отменено",time() - 7200);
  //                         setcookie ("updateTicket", "ваш билет(".$number_ticket.") успешно изменено");
  //                         header("Location: msgTicket.php");
  //             }
  echo "<script>alert('Данные изменены');</script>";
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../libs/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker.css">
    
    <script type="text/javascript" src="../js/writeTF.js"></script>
    <script type="text/javascript" src="../js/toBack.js"></script>
    <script type="text/javascript" src="../js/payTicket.js" ></script>

    
    <!-- Bootstrap  -->
    
    <!-- for date -->
    <script type="text/javascript">
      
    $(function (){
       $('.dates #form_phone').datepicker({
        'format':'yyyy-mm-dd',
        'autoclose':true
       });  
    });
    </script>
    <!-- for date -->
   <script type="text/javascript">
     function onHide(){
      var login = sessionStorage.getItem("login");
      if(login=="user_in"){
        $('#login_div').show();
      }
      alert(login);
      
     }
   </script>
    <!-- connecting css -->
     <link rel="stylesheet" type="text/css" href="../css/main.css">
      <link rel="stylesheet" href="../shapka1.css">

      <link rel="stylesheet" type="text/css" href="../css/registerPage.css">
   <!-- connecting css -->

   
  </head>
  <body>
    <div class="container ">
      <!-- /* conteiner achldy*/ -->

      <div class="row">
        <div class="col-lg-1">
          <a  href="home.js" style="" id="home">
            <img style="width:240px; " src="img/logo.png">
          </a>
        </div>
        <div class="col-lg-2 offset-lg-2">
          <div id="index"><div class="content-text"> <div style="text-shadow: 0 0 3px #3293B6;">
            <span style="font-size: 45px;">Справочная</span>
            <p id="hot-phone">+996 (312) <strong>&nbsp;63-33-33</strong></p>
            <div>+996 (709)&nbsp;<strong>63-33-33</strong></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6   offset-lg-1"  >
      <form class="form-inline" action="../index1.php" id="login_div" method="POST">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" name="mail" placeholder="Email" value="<?php isset($_COOKIE['mail'])? print($_COOKIE['mail']):print(""); ?>">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Passworiiiicdin[ojsfN;GK FAd</label>
          <input type="password" class="form-control" id="exampleInputPassword3" name="password" placeholder="Password"
          value="<?php isset($_COOKIE['password1'])? print($_COOKIE['password1']):print(""); ?>">
        </div>
        <button type="submit" name="into" onclick="return clcBtnLgn()"  class="btn btn-primary">Вход</button>
      </form>
      <div id="out_link"></div>
      <div class="auth_links">
        <a href="../html/register1.php">Регистрация</a>
        <a href="#" onclick="return onHide()">Забыли пароль?</a>
      </div>
    </div>
  </div>

<br>


    <nav class="navbar navbar-light bg-faded" style="background: rgba(0,50,70,0.7); ">
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
      &#9776;
      </button>
      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        
        <ul class="nav navbar-nav" >
          <li class="nav-item">
            <a class="nav-link" href="../php_src/news.php" style="color: #FAFFBD; font-size: 20px;" >Информация<span class="sr-only">(current)</span></a>
            </li>     
            <li class="nav-item">
             <a class="nav-link" href="#" style="color: #FAFFBD; font-size: 20px;">Клиентам</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" id="pay_ticket" href="../index1.php"  style="color: #FAFFBD; font-size: 20px;">Купить билет</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #FAFFBD; font-size: 20px;">О нас</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container ">
      <div class="container blue_background">
      <div class="white_background container">
        <div class="container ">
          <form class="clform" action="updateTicket.php" method="POST">
              <div class="textTitle"><h2>Изменить билет</h2></div>

              <div class="form-group">
                <label >От*</label>
                <input type="text" class="form-control" id="lastName" name="from_c" value="<?php echo @$data[6];?>">
              </div>
              <div class="form-group">
                <label for="email">Куда*</label>
                <input type="text" class="form-control" id="firstName" name="where_c" value="<?php echo @$data[7];?>" >
              </div>
              <div class="form-group">
                <label >Количество пасажир*</label>
                <input type="number" class="form-control" id="" name="s_pass" value="<?php echo @$data[8];?>">
              </div>
              <div class="form-group">
                <label for="date">Когда*</label>
                <input type="date" class="form-control" name="go_when" value="<?php echo @$data[9];?>">
              </div>
              <div class="form-group">
              <label for="date">Обратно*</label>
                <input type="date" class="form-control" name="go_back" value="<?php echo @$data[10];?>">
              </div>
              <div class="btn">
                <button type="submit" name="btnUpdate" class="btn btn-success">Изменить</button>
              </div>
            </form>
        </div>
    </div>
</div>

    </div>

    <script type="text/javascript" src="../js/hideLoginForm.js"></script>
  </body>
  </html>
   <?php 
include '../app/footer.php';
  ?>