
<?php 

include '../../../model/Posts.model.php';
$posti = new Posts;
$postat = $posti->fetchpostet();

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

<div style= float:right >
 <button type="button" onclick="window.location.href='/postlist?shtopostin'" class="btndefaultgreen"><i class="fas fa-plus"></i> Shto Postim te ri</button></div>


</table>

	<table align="center" width="100%">
<br>


<table width="100%" id="myTable" cellspacing="0" cellpadding="5" class="data_list">
            <thead>
            <tr>
                <th width="35px" style="font-size:13px;">Id</th>
                <th width="80px" style="text-align:left;">Images</th>
                <th width="150px"style="text-align:center;">Titulli</th>
                <th style="text-align:center;">Autori</th>
                <th style="text-align:center;">Data</th>
                <th style="text-align:center;">Statusi</th>
                <th width="120px"style="text-align: left;"></th>
            </tr>
            </thead>
           <?php foreach ($postat as $pos): ?>
            <tr> 
                             <td style="text-align:center;"><b><?php echo $nr++; ?></b></td>
                             <td><img style="border-radius: 50%;" style="margin:auto"
						src="/assets/post/<?php echo $pos['post_image'] ?>" height="50px"	width="50px" alt="image"></td>
                            <td style="text-align:center;"><b><?php echo $pos['post_title'] ?></b></td>
                             <td style="text-align:center;"><b><?php echo $pos['post_author'] ?></b></td>
                            <td style="text-align:center;"><b><?php echo $pos['post_date'] ?></b></td>
                            <td style="text-align:center;"><b><?php echo $pos['post_status'] ?></b></td>
							 <td> <button type="submit" onclick="window.location.href='/postlist?deleteuserid&deleteuserid=<?php echo $pos['post_id'] ?>'" class="btndefaultred"><i class="fas fa-trash"></i> Delete </button></td>
</tr>       
            <?php endforeach; ?>

           </table>