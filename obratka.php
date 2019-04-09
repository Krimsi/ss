<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Разработчики</title>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" rel="stylesheet">
<link href="css/materialize.min.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>



</head>

<body style="background-color: #263238;">
<nav>
    <div class="nav-wrapper  grey darken-4">
      <div id="jq">
      <a href="#" class="brand-logo" ><img src="logo.jpg" style="padding-left: 50px;"></a>
    </div>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Главная</a></li>
        <li><a href="Discepline.php">Дисциплины</a></li>
        <li><a href="sportsmen.php">Спортсмены</a></li>
        <li><a href="obratka.php">Обратная связь</a></li>
        <li><a class="modal-trigger" href="#modal1">Admin panel</a></li>
      </ul> 
    </div>
  </nav>
 
	
<div class="container" id="crin">
 <div class="row">
    <form class="col s12"  data-toggle="validator" action="" method="post" id="s31">
      <div class="row" id="container12">
        <div class="col s12">
          <h5 style="color: white;"> Напишите нам отзыв</h5>
        </div>
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate" name="first_name">
          <label for="first_name" >Имя</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name">
          <label for="last_name">Фамилия</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"name="textarea1"></textarea>
          <label for="textarea1">Отзыв</label>
        </div>
      </div>
    
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate"  name="email">
          <label for="email">Ваш email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit"  style="float: right;" value="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>  
  <div style="color: white;">
   <?php
require_once 'contr.php';
?>  
</div>
    </form>
  </div>
 </div>       
 
	





<div class="footer" style="margin-top: 50px">
   <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CyberSport</h5>
                <p class="white-text ">Что бы чего то добиться, нужно бросить всё и идти к цели. </p>
                <span>© Саша Simple Костылев</span>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Связь с нами!</h5>
                <ul>
                  <li><a class="white-text " href="#!">Мы в VK</a> <img src="img/vk.png" style="width: 18px;"></li>
                  <li><a class="white-text " href="#!">Мы в Telegram`e</a> <img src="img/telegram.png" style="width: 18px;"></li>
                  <li><a class="white-text " href="#!">Мы в Facebook`е</a> <img src="img/facebook.png" style="width: 18px;"></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Сайт cybersport.Все права защищены.
            <a class="white-text text-lighten-4 right">Номер для связи +7 (812) 923-13-01</a>
            </div>
          </div>
        </footer>
      </div>



         <?php require 'modalwindow.php'; ?> <!-- модальное окно для админ панели -->
     
</body>
<script src="js/materialize.js"></script>
<script src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/modalwindow.js"></script>
<script src="js/script.js"></script>
<script src="js/vue.js"></script>
</html>
