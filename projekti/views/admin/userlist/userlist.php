<?php

include '../../../includes/configuration.php';
include '../../../includes/header/headerconfig.php';


include '../../../controller/Users.con.php';
$userlist = new UsersCon;
$userlist->userlist();
?>



<div id="toast"></div>
<script type="text/javascript" src="assets/js/info.js"></script>


