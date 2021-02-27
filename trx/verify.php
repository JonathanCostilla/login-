<?php
include '../private/db.php';

if(isset($_POST['submit'])){

    $email      =   $_POST['inputEmail'];
    $password   =   $_POST['inputPassword'];

    //verify
    public function $verify ( $email, $password){
        $ver = $this->conn->query('SELECT * FROM administrador WHERE email = $email and password = $password') or die($this->conn->error);
        if($ver){
            session_start();
            $_SESSION['email'] = $email;
            header('../menu.php');
        }
        else{
            header("../index.php");
        }
    }
}
?>