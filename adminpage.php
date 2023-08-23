<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/admin_utilities.php";
$BackendResult="";
$DisplayMessage="";
if (isset($_GET["action"])) {
    if($_GET["action"]=="login"&&isset($_POST["username_login"])&&isset($_POST["password_login"])){
        $username_login=$_POST["username_login"];
        $password_login=$_POST["password_login"];
        /*if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $username_login)){
            $DisplayMessage = 'Email non è nel formato corretto';
        }
        else{*/
            $BackendResult=LoginUser($_POST["username_login"],$_POST["password_login"]);
            if($BackendResult==""){
                if(isset($_SESSION["prev_page"])){
                    header($_SESSION["prev_page"]);
                }
                else{
                    header("location:home.php");
                }
            }
            else{
                $DisplayMessage=$BackendResult;
            }
        //}
    }
    if($_GET["action"]=="register"&&isset($_POST["username_registra"])&&isset($_POST["password_registra"])){
        $BackendResult=RegisterUser($_POST["username_registra"],$_POST["password_registra"]);
        if($BackendResult==""){
            $DisplayMessage="registrazione completa";
        }
        else{
            $DisplayMessage=$BackendResult;
        }
    }
}
?>