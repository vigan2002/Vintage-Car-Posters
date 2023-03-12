<?php
class Postcon extends Posts{
       
    private $post_title;   
    private $post_author;
    private $post_image;
    private $post_image_temp;
    private $post_content;
    private $post_date;
    private $post_status;
    private $fotoencode;

    public function  __construct($post_title,$post_author,$post_image,$post_image_temp,$post_content,$post_date,$post_status){
       $this->post_title = $post_title;   
       $this->post_author = $post_author;
       $this->post_image = $post_image;
       $this->post_image_temp = $post_image_temp;
       $this->post_content = $post_content;
       $this->post_date = $post_date;
       $this->post_status = $post_status;
    }
    public function shtopostin(){
        
        $this->imageupload();

        $query = new queries;
        $query->create("posts",["post_title"=>$this->post_title,"post_author"=>$this->post_author,"post_date"=>$this->post_date,"post_image"=>$this->fotoencode,"post_content"=>$this->post_content,"post_status"=>$this->post_status]);
        utility::setmessage('success','Posti u shtua me sukses','/postlist');
        exit();
    }


    private function imageupload(){

        if($this->post_image){
            $upload_dir = '../../../assets/post/';
            $imgExt = strtolower(pathinfo($this->post_image,PATHINFO_EXTENSION));
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');;
            $UserAvatar = rand(1000,1000000).".".$imgExt;

            if(!(in_array($imgExt, $valid_extensions))){
                utility::setmessage('error','Vetem fajllat jpg,png,gif jan te lejuar','/postlist?shtopostin');
                exit();
            }
            move_uploaded_file($this->post_image_temp,"../../../assets/post/$UserAvatar");
            $this->fotoencode = $UserAvatar;

        }else{
            utility::setmessage('error','Ju lutem uploadne foton','/postlist?shtopostin');
            exit();
        }
    }
}

?>
