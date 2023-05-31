<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/user_utilities.php";

$user=get_logged_user();
if($user==""){
    $_SESSION["prev_page"]="areautente.php"
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>area_utente</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="area_utente,gim"/>
    <meta name="description" content="area_utente gim" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" media="print" href="../css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

<?php 

genera_header("area_utente");

?>
<div id="content">
    <div id="userinfo">

    <p><?php echo $user;?></p>
    
    </div>
    <div id="iscrizioni">

    <p>todo</p>
    
    </div>
</div>

</body>