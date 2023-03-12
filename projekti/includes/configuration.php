<?php

session_name("ULTRASESSION");
session_start();



include $_SERVER['DOCUMENT_ROOT'].'../includes/db/dbconfig.php';
include $_SERVER['DOCUMENT_ROOT'].'../includes/db/queries.php';


include $_SERVER['DOCUMENT_ROOT'].'../includes/helper/utility.php';

$config = new utility;
$config->showmessage();


?>