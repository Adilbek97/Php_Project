<?php
ob_start();
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
    <script type="text/javascript" src="libs/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap-datepicker.css">
    <script type="text/javascript" src="shapka1.js"></script>
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
    <div class="col-lg-6   offset-lg-1" >
      <form class="form-inline" action="../index1.php" id="login_div" method="POST">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" name="mail" id="exampleInputEmail3" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Passworiiiicdin[ojsfN;GK FAd</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
        </div>
        <button type="submit" name="into" class="btn btn-primary">Вход</button>
      </form>
      <div id="out_link"></div>
      <div class="auth_links">
        <a href="#">Регистрация</a>
        <a href="#">Забыли пароль?</a>
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
            <a class="nav-link" href="#"  style="color: #FAFFBD; font-size: 20px;" >Информация<span class="sr-only">(current)</span></a>
            </li>     
            <li class="nav-item">
             <a class="nav-link" href="#" style="color: #FAFFBD; font-size: 20px;">Клиентам</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" id="pay_ticket" href="#" onclick="return onHide()" style="color: #FAFFBD; font-size: 20px;">Купить билет</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #FAFFBD; font-size: 20px;">О нас</a>
          </li>
        </ul>
      </div>
    </nav>
<br>
  
<div class="container blue_background">
      <div class="white_background container">
        <div class="container ">
          <form class="clform" action="register1.php" method="POST">
              <div class="textTitle"><h2>Данные пользователя</h2></div>

              <?php
$data = $_POST;
if (isset($data['btnCreate'])) {
   $errors = array();
  // s
  if( trim($data['mail'])==''){
      $errors[]='Введите логин';
   }
  if( trim($data['lastName'])==''){
      $errors[]='Введите фамилия';
   }
 if( trim($data['firstName'])==''){
    $errors[]='Введите имя';
 }
 if( trim($data['thirdName'])==''){
      $errors[]='Введите отчество';
   }
if( trim($data['birthDay'])==''){
      $errors[]='Введите день рождения';
   }
if( trim($data['jyn'])==''){
      $errors[]='Выберите пол';
   }
if( trim($data['phoneNum'])==''){
      $errors[]='Введите телефон';
   }
 if( trim($data['password'])==''){
    $errors[]='Введите пароль';
 }
  if( $data['password'] != $data['password2']){
      $errors[]='Повторный пароль введён не верно!';
   }
  if ( empty($errors)) {
    //its all ok we can register

        //    registr
            $name = $data['firstName'];
            $lastName= $data['lastName'];
            $thirdName= $data['thirdName'];
            $birthDay= $data['birthDay'];
            $jyn= $data['jyn'];
            $phone= $data['phoneNum'];
            $password1= $data['password'];
            $mail= $data['mail'];
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
                                      $query ="INSERT INTO users VALUES (NULL, '$lastName', '$name', '$thirdName', '$birthDay', '$jyn', '$phone', '$mail', '$password1')";
                              $result = mysqli_query($link, $query) or die("Oshibka " . mysqli_error($link)); 
                             if($result)
                              {
                                  echo "<span style='color:blue;'>Вы усшешно зарегистрировались.</span>";
                                  header("Location: ../php_src/succesRegistered.php");
                              }
                                  }else{
                                    // print("takoi mail uje est".$_SESSION['mail_exist']);
                                    echo '<div style="color: yellow;">'."Такой Mail уже есть!".'</div><hr>';
                                  }
                                  mysqli_free_result($result_mail);
                              }
            mysqli_close($link);
      // register
  }else{
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
  }

}


?>
               <div class="form-group">
                <label for="email">Email* </label>
                <input type="email" class="form-control" id="email" name="mail" value="<?php echo @$data['mail'];?>">
              </div>
              <div class="form-group">
                <label >Фамилия*</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo @$data['lastName'];?>">
              </div>
              <div class="form-group">
                <label for="email">Имя*</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo @$data['firstName'];?>" >
              </div>
              <div class="form-group">
                <label >Отчество*</label>
                <input type="text" class="form-control" id="" name="thirdName" value="<?php echo @$data['thirdName'];?>">
              </div>
              <div class="form-group">
                <label for="date">День рождения*</label>
                <input type="date" class="form-control" name="birthDay" value="<?php echo @$data['birthDay'];?>">
              </div>
              <div class="form-group">
                <input type="radio" name="jyn" value="e" > Муж<br>
                <input type="radio" name="jyn" value="k"> Жен
              </div>
              <div class="form-group">
                <label for="phone">Телефон*</label>
                <!-- <input type="text" class="form-control" placeholder="код страны"> -->
                <input type="text" class="form-control" placeholder="телефон" name="phoneNum" value="<?php echo @$data['phoneNum'];?>">
              </div>
              <hr>
              <div class="textTitle"><h2>Пароль</h2></div>
              <div class="form-group">
                <label for="pwd" >Пароль</label>
                <input type="password" class="form-control" id="" name="password">
              </div>
              <div class="form-group">
                <label for="pwd" >Потверждение пароля</label>
                <input type="password" class="form-control" id="" name="password2">
              </div>
              <div class="btn">
                <button type="submit" name="btnCreate" class="btn btn-success">Создат пользователя</button>
              </div>
            </form>
        </div>
    </div>
</div>


<!-- footer -->
  <div class="container" id="footer">
      <div id="footer-container">
        <div id="widget-footer-RazletStructureBundle-User-index">
          <div class="content-text">
            <div id="footer-line-settings">
              <div id="footer-line">&nbsp;</div>
              <div id="footer-line-end">&nbsp;</div>
            </div>
            <table>
              <tbody>
                <tr>
                  <td>Ашимов Адилбек, 
                    Женишбеков Мунарбек <i id="year">2018</i></td>
                  <td>
                    &nbsp;
                  </td>
                  <td>
                    <img src="../img/VisaMC.jpg" width="234" height="45">
                  </td>
                  <td>
                    <img src="../img/tch.gif" width="50" height="50">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div> 
      </div>
    </div>
  <!-- footer -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
 -->
<script type="text/javascript" src="../js/hideLoginForm.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>
</html>