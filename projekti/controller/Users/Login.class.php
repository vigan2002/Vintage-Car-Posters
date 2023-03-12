<?php

class Logincon extends Users
{
    private $username;
    private $password;
    
    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function grantAccess(){
        if($this->emptyInfo() == false){
            $stmt = null;
            utility::setmessage('error','Ju lutem plotsoni kolonat!!!','/login');
            exit();
        }
        $this->krijosessionin();

    }
    private function emptyInfo(){
        $result;
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function krijosessionin(){
        $user = $this->getuser($this->username);

        $checkpw = password_verify($this->password,$user[0]['password']);
        if($checkpw == false)
        {
            $user=null;
            utility::setmessage('error','Invalid information!!! please try correct info','/login');
            exit();
        }else if ($checkpw == true){

            $_SESSION['user_id'] = $user[0]['user_id'];
            $_SESSION['user_role'] = $user[0]['user_role'];
            $_SESSION['emri'] = $user[0]['name'];
    
            header('Location: /home');

        }
    }

}


?>