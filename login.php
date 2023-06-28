<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/user_utilities.php";
$BackendResult="";
$DisplayMessage="";
if (isset($_GET["action"])) {
    if($_GET["action"]=="login"&&isset($_POST["username_login"])&&isset($_POST["password_login"])){
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
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login FitnessCenter</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Login FitnessCenter"/>
    <meta name="description" content="pagina di login per FitnessCenter" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" media="print" href="css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

<?php 

    genera_header("login");

?>
<div id="content" class="loginpage">
<?php 

    $user=get_logged_user();
    if($user&&$user!=""){
    echo "<p id='logoutmessage'> sei attualmente loggato come ".$user." desideri effettuare il logout?</p>";
    }
    else{
?>
    <ul class="topselector">
        <li><button type="button" id=loginselector class="selected">login</button></il>
        <li><button type="button" id=registerelector>register</button></il>
    </ul>

    <form class="loginform" action="login.php?action=login" method="post" id="login" >
        <label for="username_login" lang="en">Username</label>
        <input id="username_login" type="text" placeholder=" Username" name="username_login" required />

        <label for="password_login" lang="en">Password</label>
        <input id="password_login" type="password" placeholder=" Password" name="password_login" required />

        <input type="submit" name="login">
    </form>
    <form class="loginform hidden" action="login.php?action=register" method="post" id="registra">
        <label for="username_registra" lang="en">Username</label>
        <input id="username_registra" type="text" placeholder=" Username" name="username_registra" required />

        <label for="password_registra" lang="en">Password</label>
        <input id="password_registra" type="password" placeholder=" Password" name="password_registra" required />
        <input type="submit" name="registra">
    </form>
    
<?php
    if($DisplayMessage!=""){
        echo '<p class="formresult">';
        echo $DisplayMessage;
        echo '</p>';
    }
    }
    
?>    
</div>
<script src="js/login.js"> </script>
</body>