
<?php 

$user = new Users;
$info = $user->fetchuserbyrole('client');

$nr = 1;
?>


<div class="page-head">
	<table align="center" width="73%">
		<td><font class="title-head">Lista e Userave</td>
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
			<h3 style="margin: 1px; margin-bottom: 6px;"><i class="fas fa-user-edit"></i>&nbsp;Lista e Userave <i class="fas fa-angle-down"></i></h3>
			<div style="padding:2px;">
		<font>
			K&euml;tu mund&euml; t&euml; shikoni userat, ku mund ti modifikoni ata!<br>
		</font>
	</div>
</tr>
</td>
</table>
	<table align="center" width="100%">

<br>
<table width="100%" id="myTable" cellspacing="0" cellpadding="5" class="data_list">
            <thead>
            <tr>
                <th width="35px" style="font-size:13px;">Id</th>
                <th style="text-align:left;">Emri</th>
                <th style="text-align:left;">Mbiemri</th>
                <th style="text-align:left;">Username</th>
                <th style="text-align:left;">Email</th>
                <th width="120px"style="text-align: left;"></th>
            </tr>
            </thead>
           <?php foreach ($info as $user): ?>
            <tr> 
                             <td style="text-align:center;"><b><?php echo $nr++; ?></b></td>
							 <td style="text-align:left;"><b><?php echo $user['name'] ?></b></td>
                            <td style="text-align:left;"><b><?php echo $user['surname'] ?></b></td>
                             <td style="text-align:left;"><b><?php echo $user['username'] ?></b></td>
                            <td style="text-align:left;"><b><?php echo $user['email'] ?></b></td>
							 <td> <button type="submit" onclick="window.location.href='/userlist?deleteuserid=<?php echo $user['user_id'] ?>'" class="btndefaultred"><i class="fas fa-trash"></i> Delete </button></td>
</tr>       
            <?php endforeach; ?>