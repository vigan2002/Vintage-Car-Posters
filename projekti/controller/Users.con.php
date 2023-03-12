<?php

class UsersCon{

    public function __construct(){
        include $_SERVER['DOCUMENT_ROOT'].'../model/Users.model.php';
    }
    //Procesi i Loginit
    public function procesilogin(){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
		include '../controller/Users/Login.class.php';

        $bini = new Logincon($username,$password);
        $bini->grantAccess();
        }
    }
    //Procesi i Regjistrimit
    public function procesisingup(){
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password_repeat'];
    
        include '../controller/Users/Singup.class.php';  

        $singup = new Singupcon($name,$surname,$username,$email,$password,$password_repeat);
        $singup->singupUser();
        }
    }
    public function procesiprofilit(){
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
    
        include '../controller/Users/Profile.class.php';
    
        $userprofile = new ProfileCon;
        $userprofile->profili($name,$surname,$username,$email);
        $userprofile->updateprofile();
    
        }
        if(isset($_POST['changepw'])){
            $password = $_POST['password'];
            $newpw = $_POST['newpw'];

            include '../controller/Users/Profile.class.php';
    
            $userprofile = new ProfileCon;
            $userprofile->passwordi($password,$newpw);
            $userprofile->updatepassword();


        }
    }
    public function logoutprocess(){
        if(isset($_GET['logout'])){
            session_destroy();
            header("Location: /login");
            exit();
        }
    }
    public function userlist(){
        if(isset($_GET['deleteuserid'])){
            $user = new Users;
            $user->deleteuser($_GET['deleteuserid']);
            utility::setmessage('success','Useri u fshij me sukses!!!','/userlist');
        }else{
            include 'homelist.php';
        }
    }
    
}
?>