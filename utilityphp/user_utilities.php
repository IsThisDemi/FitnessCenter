<?php 
require_once "database_utilities.php";
function get_logged_user(){
    if(isset($_SESSION["user"])){
        return $_SESSION["user"];
    }
    return "";
}
function LoginUser($username,$password){
    if(!user_exist($username)){
        return "utente inesistente";
    }
    if(!check_password($username,$password)){
        return "password errata";
    }
    $_SESSION["user"]=$username;
    return "";
}
function logout(){
    $_SESSION["user"]=null;
}
function RegisterUser($username,$password){
    if(user_exist($username)){
        return "utente gia registrato";
    }
    add_user($username,$password);
    return "";
}
?>