<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/admin_utilities.php";
$BackendResult="";
$DisplayMessage="";
if(!$_SESSION["admin"]){
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
        if($_GET["action"]=="register"&&isset($_POST["username_registra"])&&isset($_POST["password_registra"])){
            
        }
    }
?>



<?php 
}
?>