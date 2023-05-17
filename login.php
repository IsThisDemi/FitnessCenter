<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/session_manager.php";
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
    //TO DO simpostare il backend di login
?>
    <form action="" method="post" id="login" >
        <label for="username_login" lang="en">Username</label>
        <input id="username_login" type="text" placeholder=" Username" name="username_login" required />

        <label for="password_login" lang="en">Password</label>
        <input id="password_login" type="password" placeholder=" Password" name="password_login" required />

        <input type="submit" name="login">
    </form>
    <form action="" method="post" id="registra" >
        <label for="username_registra" lang="en">Username</label>
        <input id="username_registra" type="text" placeholder=" Username" name="username_registra" required />

        <label for="password_registra" lang="en">Password</label>
        <input id="password_registra" type="password" placeholder=" Password" name="password_registra" required />
        <input type="submit" name="registra">
    </form>
<?php
    }

?>    
</div>

</body>