<?php

include '../includes/configuration.php';
$config->redirecthome();



include '../controller/Users.con.php';
$login = new UsersCon;
$login->procesilogin();


include '../includes/header/homehead.php';
?>
<link href="assets/css/info.css" rel="stylesheet" type="text/css" />
<link href="assets/css/login.min.css" rel="stylesheet" type="text/css" />
<div id="toast"></div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
<body class="loginform">
  <div class="login-page">
    <div class="form">
<form class="login-form" method="post">
        <a href="/login"><h1 class="logos">Login</h1></a>
        <input type="text" name="username" placeholder="Email & P&euml;rdoruesi sub..." required />
        <input type="password" name="password" placeholder="Fjal&euml;kalimi..." required/>
        <table width="100%">
          <tr>
            <td><button type="submit" name="submit" class="button"><i class="fas fa-sign-in-alt"></i> Kyqu</button></td>
            <td><button type="button" class="btn-regjistrohu"><a href="/singup"><i class="fas fa-user-plus"></i> REGJISTROHU</button></td>
          </tr>
        </table>
      </form>
    <div id="toast"></div>
  <script type="text/javascript" src="assets/js/info.js"></script>
      
