<?php 
class Profilecon  extends Users{
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    private $newpw;

    public function profili($name,$surname,$username,$email)
    {
    $this->name = $name;
    $this->surname = $surname;
    $this->username = $username;
    $this->email = $email;
    }   
    public function passwordi($password,$newpw){
        $this->password = $password;
        $this->newpw = $newpw;
    }
    public function updatepassword(){
        if($this->empitypassword() == false){
            utility::setmessage('error','Mos leni te dhena te zbrazeta!!!','/profili');
            exit();
        }
        if($this->checkpassword()){
            utility::setmessage('error','Fjalakimi nuk eshte perseritur si duhet!!!','/profili');
            exit();
        }
        $hashed = password_hash($this->password, PASSWORD_DEFAULT);
        $query = new queries;
        $query->update("users",["password"=>$hashed],"user_id",$_SESSION['user_id']);
        utility::setmessage('success','The password has been updated succesfully','/profili');
        exit();

    }

    public function updateprofile(){

        if($this->emptyInfo() == false){
            utility::setmessage('error','Mos leni te dhena te zbrazeta!!!','/profili');
            exit();
        }
        if($this->checkinfo() == false){
            utility::setmessage('error','Ky username ose email eshte ne perdorim!!!!','/profili');
            exit();
        }
        $query = new queries;
        $query->update("users",["name"=>$this->name,"surname"=>$this->surname,"username"=>$this->username,"email"=>$this->email],"user_id",$_SESSION['user_id']);
        utility::setmessage('success','The profile has been updated succesfully','/home');
        exit();

    }
    private function emptyInfo(){
        $result;
        if(empty($this->name) || empty($this->surname) || empty($this->username) || empty($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function checkInfo(){
        $result;
        if($this->checkBusy($this->username,$this->email,'profili')){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function empitypassword(){
        $result;
        if(empty($this->password) || empty($this->newpw)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function checkpassword(){
        $result;
        if($this->password != $this->newpw){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

}

?>