<?php 
require_once "utilityphp/connessione.php";

use DB\DBAccess;

function get_logged_user(){
    if(isset($_SESSION["user"])){
        return $_SESSION["user"];
    }
    return "";
}
function LoginUser($email,$password){
    $connessione1 = new Connection();
    $connOK = $connessione1->apriConnessione();
    if(!$connOK) {
        return "errore di connessione"
    }
    if(!$queryOK = $connessione1->user_exist($email)){
        return "utente inesistente";
    }
    if(!$queryOK = $connessione1->check_password($email,$password)){
        return "password errata";
    }
    $_SESSION["user"]=$email;
    $_SESSION["admin"]
    return "";
}
function logout(){
    $_SESSION["user"]=null;
    $_SESSION["admin"]=false;
}
/*function RegisterUser($username,$password){
    if(user_exist($username)){
        return "utente gia registrato";
    }
    add_user($username,$password);
    return "";
}*/
?>