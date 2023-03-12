<?php
class Posts extends DBconfig{

    public function fetchpostet(){
        $query = new queries;
        $info = $query->readdata("posts","*");
        return $info->fetchAll();
    }
    public function fetchpostetbyid($id){
        $query = new queries;
        $info = $query->readdata("posts","*",["post_id"=>$id]);
        return $info->fetch();
    }
    public function deletepost($id){
        $query = new queries;
        $info = $query->delete("posts","post_id",$id);
    }
    
}

?>