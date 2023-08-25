<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/admin_utilities.php";
$BackendResult="";
$DisplayMessage="";
if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
    $_SESSION["prev_page"]="adminpage.php";
    header("location:login.php");
}
else
{
    if (isset($_GET["action"])) {
        //id_corso`, `nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`
        if($_GET["action"]=="add_corso"
        &&isset($_POST["id_corso"])
        &&isset($_POST["nome_corso"])
        &&isset($_POST["id_categoria"])
        &&isset($_POST["descrizione"])
        &&isset($_POST["immagine"])
        &&isset($_POST["alt"])
        &&isset($_POST["forza"])
        &&isset($_POST["equilibrio"])
        &&isset($_POST["stabilità"])
        &&isset($_POST["durata"])
        &&isset($_POST["calorie"])
        &&isset($_POST["asciugamano"])
        &&isset($_POST["borraccia"])
        &&isset($_POST["stabilità"])
        &&isset($_POST["calzini"])
        &&isset($_POST["tappetino"])
        &&isset($_POST["scarpe_sportive"])
        &&isset($_POST["guantoni"])
        &&isset($_POST["capelli_raccolti"])
        &&isset($_POST["abbigliamento_outdoor"])
        &&isset($_POST["scarpe_outdoor"])
        &&isset($_POST["accappatoio"])
        &&isset($_POST["cuffia"])
        &&isset($_POST["costume"])
        &&isset($_POST["ciabatte"])
        &&isset($_POST["piedi_nudi"])){
            
        }
        /*if($_GET["action"]=="register"&&isset($_POST["username_registra"])&&isset($_POST["password_registra"])){
            
        }*/
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

    echo genera_header("admin");

?>
<div id="content" class="loginpage">
    
</div>


<?php 
}
?>