<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/user_utilities.php";

if (isset($_GET["action"])) {
    if($_GET["action"]=="login"&&isset($_GET["username_login"])&&isset($_GET["password_login"])){
        $LoginResult=LoginUser($_GET["username_login"],$_GET["password_login"]);
        if($loginresult==""){
            header("location:home.php");
        }
    }
    if($_GET["action"]=="register"&&isset($_GET["username_registra"])&&isset($_GET["password_registra"])){
        $RegisterResult=RegisterUser($_GET["username_registra"],$_GET["password_registra"]);        
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title><PAGETITLE/></title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="<KEYWORDS/>"/>
    <meta name="description" content="<DESCRIPTION/>" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" media="print" href="../css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

<?php 

    genera_header("login");

?>
<div id="content">
<?php 

    $user=get_logged_user();
    if($user&&$user!=""){
    echo "<p> sei attualmente loggato come ".$user." desideri effettuare il logout?</p>"
    }
    else{
?>
    <form action="login.php?action=login" method="post" id="login" >
        <label for="username_login" lang="en">Username</label>
        <input id="username_login" type="text" placeholder=" Username" name="username_login" required />

        <label for="password_login" lang="en">Password</label>
        <input id="password_login" type="password" placeholder=" Password" name="password_login" required />

        <input type="submit" name="login">
    </form>
    <form action="login.php?action=register" method="post" id="registra" >
        <label for="username_registra" lang="en">Username</label>
        <input id="username_registra" type="text" placeholder=" Username" name="username_registra" required />

        <label for="password_registra" lang="en">Password</label>
        <input id="password_registra" type="password" placeholder=" Password" name="password_registra" required />
        <input type="submit" name="registra">
    </form>
<?php
    //TO DO Display messaggi di errore
    }

?>    
</div>

</body>