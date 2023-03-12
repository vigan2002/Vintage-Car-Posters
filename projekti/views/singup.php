<?php

include '../includes/configuration.php';
$config->redirecthome();



include '../controller/Users.con.php';
$singup = new UsersCon;
$singup->procesisingup();


include '../includes/header/homehead.php';

?>
<link href="assets/css/info.css" rel="stylesheet" type="text/css" />
<link href="assets/css/login.min.css" rel="stylesheet" type="text/css" />
<div id="toast"></div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
<body class="loginform">
  <div class="login-page">
    <div class="form">

      <form class="login-form" method="POST">  
      <a href="/login"><h1 class="logos">Login</h1></a>
        <input type="text" name="name" placeholder="Emri" required />
        <input type="text" name="surname" placeholder="Mbiemri" required />
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Emaili" required />
        <input type="password" name="password" placeholder="Fjal&euml;kalimi" />
        <input type="password" name="password_repeat" placeholder="P&euml;rs&euml;rit Fjal&euml;kalimin" />
        <br>
        <!-- <button type="sumbit" name="regjistrohu" class="btn-regjistrohu2""><i class="fas fa-user-plus"></i> REGJISTROHU</button> -->
        <button type="submit" name="submit" class="btn-regjistrohu2"><i class="fas fa-user-plus"></i> REGJISTROHU</button>
      <p class="message">Jeni regjistruar tashm&euml;?  <a href="#"><i class="fas fa-sign-in-alt"></i>  Kyqu</a></p>
      </form>
      <div id="toast"></div>
  <script type="text/javascript" src="assets/js/info.js"></script>
