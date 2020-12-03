<?php 

class User {


    public static function Logout() {
        setcookie(
            'username', 
            '', 
            time() - (30)
        );



        session_destroy(); 
											    //unset($_COOKIE['username']);
											    echo $_COOKIE['username'];
											    setcookie("username", $_COOKIE['username'], time() - (86400 * 32), "/");
											    header("location:admin-login.php");

    }

    public static function Login($username, $password) {

    }

    public static function changeProfile() {

    }

    public static function checkIfLoggedIn() {
        
    }

}