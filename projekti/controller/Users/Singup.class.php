<?php

class Singupcon extends Users
{
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    private $password_repeat;

    public function __construct($name,$surname,$username,$email,$password,$password_repeat)
    {
    $this->name = $name;
    $this->surname = $surname;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->password_repeat = $password_repeat;
    }

    public function singupUser(){
        if($this->emptyInfo() == false){
            utility::setmessage('error','Mos leni te dhena te zbrazeta!!!','/singup');
            exit();
        }
        if($this->passwordMatch() == false){
            utility::setmessage('error','Passwordi nuk perputhet!!!','/singup');
            exit();
        }
        if($this->checkinfo() == false){
            utility::setmessage('error','Ky username ose email eshte ne perdorim!!!!','/singup');
            exit();
        }

        $hashed = password_hash($this->password, PASSWORD_DEFAULT);
        $query = new queries;
        $query->create("users",["name"=>$this->name,"surname"=>$this->surname,"username"=>$this->username,"email"=>$this->email,"password"=>$hashed,"user_role"=>"client"]);
        utility::setmessage('success','Ju u regjistruat me sukses','/login');
        exit();

    }
    private function emptyInfo(){
        $result;
        if(empty($this->name) || empty($this->surname) || empty($this->username) || empty($this->email) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function passwordMatch(){
        $result;
        if($this->password !== $this->password_repeat){
            return false;
        }else{
            return true;
        }
        return $result;
    }
    private function checkInfo(){
        $result;
        if($this->checkBusy($this->username,$this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}
?>