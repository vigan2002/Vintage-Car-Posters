<?php

include '../includes/configuration.php';
include '../includes/header/headerconfig.php';

include '../controller/Users.con.php';


$profili = new UsersCon;
$profili->procesiprofilit();

$user = new Users;
$info = $user->fetchuserinfo();


$profili->logoutprocess();
?>

<div class="page-head">
	<table align="center" width="73%">
		<td><font class="title-head">Profili</td>
	</table>
</div>
<br>
<br>
<br>
<div id="page" style="width: 80%;">
<div class="newsbox">	
<table align="center" width="95%">
	<tr>
		<td>
			<h3 style="margin: 1px; margin-bottom: 6px;"><i class="fas fa-user-edit"></i>&nbsp;Llogaria juaj <i class="fas fa-angle-down"></i></h3>
			<div style="padding:2px;">
		<font>
			K&euml;tu &euml;sht&euml; llogaria juaj, ku mund ti ruani t&euml; dh&euml;nat tuaja!<br>
		</font>
	</div>
</tr>
</td>
</table>
	<table align="center" width="100%">

		<tr>
			<td align="center" width="50%">
				<form method="post">
					<table cellspacing="2" cellpadding="6" width="50%">
						<tr>
							<td>
							<span class="text-label"><i>Emri*</i></span><br>
							<input type="text" class="text_profile" name="name" value="<?php echo $info['name'] ?>" /></td>
						</tr>
						<tr>
							<td>
							<span class="text-label"><i>Mbiemri*</i></span><br>
							<input type="text" class="text_profile" name="surname" value="<?php echo $info['surname'] ?>" /></td>
						</tr>
                        <tr>
							<td>
							<span class="text-label"><i>Username*</i></span><br>
							<input type="text" class="text_profile" name="username" value="<?php echo $info['username'] ?>" /></td>
						</tr>
						<tr>
							<td>
							<span class="text-label"><i>Emaili*</i></span><br>
							<input type="text" class="text_profile" name="email" value="<?php echo $info['email'] ?>" /></td>
						</tr>
						<tr><br>
							<td align="center" style="border-top:solid 1px #e9f2f9;"><span class="text-label" style="font-size: 12px;word-break: break-word;"></span></td>
						</tr>

						<tr>
							<td><button type="submit" name="submit" class="btndefaultgreen" value="Ruaj ndryshimet" />Ruaj ndryshimet</button></td>
						</tr>
					</table>
				</form>
			</td>
			<td align="center" width="50%">
				<table width="60%" align="center">
					<tr>
						<br>
						<td align="center" style="border-bottom:solid 1px #e9f2f9;">
							<br>
						</td>
					</tr>
					<tr>
						<td align="center">
							<form method="POST">
								<table cellspacing="0" cellpadding="2" width="50%">
									<tr>
										<td><br>
										<span class="text-label"><i>Fjal&euml;kalimi</i></span><br>
										<input type="text" name="password" value="" /></td>
									</tr>
									<tr>
										<td>
										<span class="text-label"><i>P&euml;rs&euml;rit Fjal&euml;kalimin</i></span><br>
										<input type="text" name="newpw" value="" /></td>
									</tr>
									<tr>
										<td><br><input type="submit" name="changepw" class="btndefaultgreen" value="Ruaj ndryshimet" /></td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<br>

<div style="border-bottom: solid 1px #e9f2f9;"></div>

<br>
<div id="toast"></div>
<script type="text/javascript" src="assets/js/info.js"></script>

