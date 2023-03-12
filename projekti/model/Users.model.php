<?php

class Users extends DBconfig{

    public function fetchuserinfo(){
        $query = new queries;
        $info = $query->readdata("users","*",["user_id"=>$_SESSION['user_id']]);
        return $info->fetch();
    }    
    public function fetchuserbyrole($roli){
        $query = new queries;
        $info = $query->readdata("users","*",["user_role"=>$roli]);
        return $info->fetchAll();
    }
    public function deleteuser($id){
        $query = new queries;
        $info = $query->delete("users","user_id",$id);
    }
    //Funksioni nese jan te zena useranme dhe emaili per singup dhe profile update
    protected function checkBusy($username,$email,$metoda = null){

        $sql = 'SELECT username FROM users WHERE username=? OR email=?';
        $info = [$username,$email]; 
        if($metoda == 'profili'){
            $sql = 'SELECT username FROM users WHERE (username = ? OR email=?) && user_id != ?';
            $info = [$username,$email,$_SESSION['user_id']];
        }
        $stmt = $this->db()->prepare($sql);

        if(!$stmt->execute($info)){
            $stmt=null;
            echo 'Error DB execute';
            exit();
        }
        $result;
        if($stmt->rowCount() != 0){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    //Funksion per marrjen e infos se userit per te testuar loginin nese eshte i sakt
    protected function getuser($username){
        $stmt = $this->db()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        
        if(!$stmt->execute([$username,$username]))
        {
            $stmt=null;
            echo "Error Sql";
            exit();
        }
        if($stmt->rowCount() == 0)
        {
            $stmt=null;
            utility::setmessage('error','Invalid information!!! please try correct info','/login');
            exit();
        }

        $user = $stmt->fetchAll();
        return $user;
    }
    
    
}


?>