<?php 


if(isset($_GET['deleteuserid'])){

include '../../../model/Posts.model.php';
$post = new Posts;
$post->deletepost($_GET['deleteuserid']);
utility::setmessage('success','Posti u fshij me sukses!!!','/postlist');
}
?>