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
    
    <script type="text/javascript" src="js/writeTF.js"></script>
    <script type="text/javascript" src="js/toBack.js"></script>
    <script type="text/javascript" src="js/payTicket.js" ></script>

    
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
     <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="shapka1.css">
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
        <?php
            if(isset($_POST['into']) && isset($_POST['mail']) && isset($_POST['password'])){

                require_once 'db/connection.php';
                $link = mysqli_connect($host, $user, $password, $database) 
                 or die("Ошибка к подключение базаданных " . mysqli_error($link));
                 $mail=$_POST['mail'];
                 // $password1=$_POST['password'];
                 $query ="SELECT password FROM users WHERE mail='$mail'";
                  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                  if($result)
                  {
                      $rows = mysqli_num_rows($result); // количество полученных строк
                      if($rows==0){
                        // print("такой логин нет");
                        setcookie ("lgnMsg", "такой логин нет");
                        setcookie ("mail", $mail, time() + 7200);
                        setcookie ("password1","", time() + 7200);
                      }else{
                       $row = mysqli_fetch_row($result);
                         if($row[0]==$_POST['password']){
                            print("tuura kirdi");  
                            echo " $row[0]<br>";
                            setcookie ("mail", $mail, time() + 7200);
                            setcookie ("password1",$row[0], time() + 7200);
                            setcookie ("lgnMsg", "Вы вошли в систему");
                         }else{
                            // print("Пароль не верно");
                            setcookie ("lgnMsg", "Пароль не верно");
                            setcookie ("mail", $mail, time() + 7200);
                            setcookie ("password1","", time() + 7200);
                             }
                       }
                      mysqli_free_result($result);
                  }
                 // print($_POST['mail']);
                mysqli_close($link);
                header("Location: php_src/login_orto.php");
                // session_start();
                // setcookie ("mail", "mail", time() + 7200);
                // setcookie ("password","password1", time() + 7200);
            }
        ?>
    <div class="col-lg-6   offset-lg-1"  >
      <form class="form-inline" action="index1.php" id="login_div" method="POST">
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
        <a href="html/register1.php">Регистрация</a>
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
            <a class="nav-link" href="php_src/news.php" style="color: #FAFFBD; font-size: 20px;" >Информация<span class="sr-only">(current)</span></a>
            </li>     
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: #FAFFBD; font-size: 20px;">Клиентам</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="php_src/toUpdateTicket.php">Изменить данные билета</a>
                <a class="dropdown-item" href="php_src/cancelTicket.php">Отменить билет</a>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pay_ticket" href="#" onclick="return onHide()"  style="color: #FAFFBD; font-size: 20px;">Купить билет</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #FAFFBD; font-size: 20px;">О нас</a>
          </li>
        </ul>
      </div>
    </nav>
  

<br>
  
 <div class="gray-background" id="ticket">
  <div id="search-tickets-id">ПОИСК ДЕШЕВЫХ БИЛЕТОВ</div>
  <br>
  <div class="container">
    <form id="contact-form" method="POST" action="php_src/orderTicket1.php" role="form">
      <div class="messages"></div>
      <div class="controls">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <input id="form_name" type="text" name="from_c" class="form-control" placeholder="Откуда" required="required" data-error="name is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="form-group">
               <input type="button" class="btn" id="button_1" value="⇄" style="background-color: #FF4500; color: #FAFFBD; " onclick="alert("Hello")">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <input id="form_name2" type="text" name="where_c" class="form-control" placeholder="Куда" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
           <div class="col-sm-5">
            <div class="form-group">

             <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" name="cl" id="inlineFormCustomSelect">
                          <option  value="b">Бизнес</option>
                          <option value="e">Эконом</option>
                        </select>
                      </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <div class="dates">
              <label for="form_phone" style="color: #FAFFBD; font-size: 20px;">Туда</label>
              <input id="form_phone" type="text" name="go_when" class="form-control" placeholder="Выберите дату" autocomplete="off">
              <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="dates">
              <label for="form_phone" style="color: #FAFFBD; font-size: 20px;"><input type="checkbox" name="" id="back" onclick="return toBack()">  Обратно</label>
              <input id="form_phone" type="text" name="go_back" class="form-control back" placeholder="Выберите дату">
              <div class="help-block with-errors"></div>
             </div>
             </div>
            </div>
            
          </div>
         </div>
        <div class="clearfix"></div>
     
     <br>
     <div class="row">
       <div class="col-md-3 offset-md-10"> <input type="submit" value="Заказать"  class="btn" style="background-color: #FF4500; color: #FAFFBD; "></div>
     </div>
   </form>
   </div>
</div>

 <!-- Adilbek  -->
<div class="gray-background">
        <div class=" head-line">ПОПУЛЯРНЫЕ НАПРАВЛЕНИЕ</div>
        <div class="row centered cities">
          <div class="col cities-wrapper" onclick="return fromB_toM()">
            <div class=" cities-container">
              <div class="city-name-from">Бишкек</div>
              <div class="city-name-to">Москва</div>
              <div class="city">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/Moscow.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromM_toB()">
            <div class="cities-container">
              <div class="city-name-from">Москва</div>
              <div class="city-name-to">Бишкек</div>
              <div class="city">
                <img src="img/Moscow.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromI_toB()">
            <div class="cities-container">
              <div class="city-name-from">Исфана</div>
              <div class="city-name-to">Бишкек</div>
              <div class="city">
                <img src="img/Isfana.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromB_toI()">
            <div class="cities-container">
              <div class="city-name-from">Бишкек</div>
              <div class="city-name-to">Исфана</div>
              <div class="city">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/isfana.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
        </div>
          <div class="row centered cities">
          <div class="col cities-wrapper" onclick="return fromB_toO()">
            <div class=" cities-container">
              <div class="city-name-from">Бишкек</div>
              <div class="city-name-to">Ош</div>
              <div class="city">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/osh1.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromO_toB()">
            <div class="cities-container">
              <div class="city-name-from">Ош</div>
              <div class="city-name-to">Бишкек</div>
              <div class="city">
                <img src="img/osh1.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/bishkek1.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromO_toM()">
            <div class="cities-container">
              <div class="city-name-from">Ош</div>
              <div class="city-name-to">Москва</div>
              <div class="city">
                <img src="img/osh1.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/Moscow.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
          <div class="col cities-wrapper" onclick="return fromM_toO()">
            <div class="cities-container">
              <div class="city-name-from">Москва</div>
              <div class="city-name-to">Ош</div>
              <div class="city">
                <img src="img/Moscow.jpg">
              </div>
              <div class="city diagonal">
                <img src="img/osh1.jpg">
              </div>
              <div class="city-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    
<!-- Novosti -->
    <div class="gray-background">
      <div class="head-line">
        НОВОСТИ
      </div>
      <div class="widget-content-RazletPostBundle-User-list">
        <div id="line-of-post">
          <div class="container-fluid">
            <div class="field-news">
              <div class="img-post">
                <a href="#">
                  <img src="img/azimut.png" style="width: 100%">
                </a>
              </div>
              <div class="content-post">
                <a href="#">
                  <h4>Новый рейс Бишкек - Ростов - на - Дону</h4>
                </a>
                <div>
                  "С 29 сентября 2018 года авиакомпания "Азимут" начи ("<a href="php_src/news.php">Подробное</a>")"
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Novosti -->

    <div class="white-background">
          <div id="widget-footer-main-RazletStructureBundle-User-index">
            <div id="content-text">
              <p>&nbsp;</p>
              <h2>Добро пожаловать на сайт</h2>
              <h3>
                "Рад приветствовать на своем сайте всех, кто хочет заказать дешевые авиабилеты онлайн!"
              </h3>
              <p>
                Основное направление деятельности нашей компании – продажа авиабилетов онлайн по всем направлениям из городов Бишкек Ош и Исфана.
              </p>
              <p>
                Самолет на сегодняшний день является самым быстрым и удобным способом передвижения. Большинство людей, отправляясь на отдых или в деловую поездку, предпочитают заказать билеты на самолет и с комфортом долететь до нужного места. Наш сайт предоставляет своим клиентам возможность купить авиабилеты по любым направлениям, не выходя из дома, оперативно и недорого.&nbsp;
              </p>
              <p>
                Покупка авиабилетов через Интернет возможна через пластиковые карты Visa или MasterCard. Полный список способов оплаты авиабилетов доступен после бронирования авиаперевозки на сайте &nbsp;
              </p>
            </div>
          </div>
        </div>

<!-- /* conteiner jabyldy*/ -->
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
                    <img src="img/VisaMC.jpg" width="234" height="45">
                  </td>
                  <td>
                    <img src="img/tch.gif" width="50" height="50">
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
<script type="text/javascript" src="js/hideLoginForm.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

</body>
</html>
