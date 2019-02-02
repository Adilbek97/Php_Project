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
    <div class="container">
      
    </div>

    <script type="text/javascript" src="../js/hideLoginForm.js"></script>
  </body>
  </html>
   <?php 
include '../app/footer.php';
  ?>