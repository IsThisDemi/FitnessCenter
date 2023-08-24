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
    $username=$connessione1->user_exist($email)
    if(!$username){
        return "utente inesistente";
    }
    if(!$connessione1->check_password($username,$password)){
        return "password errata";
    }
    $_SESSION["user"]=$username;
    $_SESSION["admin"]=$connessione1->CheckUserPriviledge($username)=="ADMIN");
    return "";
}
function logout(){
    $_SESSION["user"]=null;
    $_SESSION["admin"]=false;
}
function RegisterUser($username,$mail,$password){
    connessione1 = new Connection();
    $connOK = $connessione1->apriConnessione();
    if(!$connOK) {
        return "errore di connessione"
    }
    if($connessione1->user_exist($username)||$connessione1->user_exist($email)){
        return "mail or username gia in uso";
    }
    if(!$connessione1->RegisterNewUser($username,$email,$password)){
        return "errore registrazione utente";
    };
    return "";
}
?>