<?php 


class PostsCon{

    public function __construct(){
        include $_SERVER['DOCUMENT_ROOT'].'../model/Posts.model.php';
    }
    
    public function postprocess(){
        if(isset($_POST['submit'])){
            $post_title = $_POST['title'];
            $post_author = "test";
            $post_image = $_FILES['image']['name'];
            $post_image_temp = $_FILES['image']['tmp_name'];
            $post_content = $_POST['post_content'];
            $post_date = date('d-m-y');
            $post_status = $_POST['post_status'];
            
            include '../../../controller/Posts/Post.class.php';  

            $postan = new Postcon($post_title,$post_author,$post_image,$post_image_temp,$post_content,$post_date,$post_status);
            $postan->shtopostin();
        }
    }
}

?>