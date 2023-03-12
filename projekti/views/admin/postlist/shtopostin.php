
<?php

include '../../../controller/Posts.con.php';
$postimi = new PostsCon;
$postimi->postprocess();


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
<tbody><tr>
			<td align="center" width="50%">
            <form method="post" enctype="multipart/form-data">
					<br><table cellspacing="2" cellpadding="6" width="50%">
						<tbody><tr>
							<td>
							<span class="text-label"><i>Post Title*</i></span><br>
							<input type="text" class="text_profile" name="title"  style="width: 435px;"></td>
						</tr>
                        <tr>
							<td>
							<span class="text-label"><i>Post Image*</i></span><br>
							<input type="file" class="text_profile" name="image"></td>
						</tr>
						<tr>
							<td>
							<span class="text-label"><i>Post Content*</i></span><br>
                            <textarea class="form-control "name="post_content" id="" cols="60" rows="10">
                            </textarea></td>
						</tr>
                        <tr>
                        <td>	
                            <input type="hidden" name="post_status" value="off"/>  
                            <input type="checkbox" name="post_status" id="statusi" value="aktiv">
                            <label for="statusi" class="container"> Statusi
                            <span class="checkmark"></span>
                        </label></td>
                        </tr>
						<tr>
							<td align="center" style="border-top:solid 1px #e9f2f9;"><span class="text-label" style="font-size: 12px;word-break: break-word;"></span></td>
						</tr>

						<tr>
							<td><button type="submit" name="submit" class="btndefaultgreen" value="Ruaj ndryshimet">Ruaj ndryshimet</button></td>
						</tr>
					</tbody></table>
				</form>
