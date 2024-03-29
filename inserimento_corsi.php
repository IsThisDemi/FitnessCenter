<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/corsi_utilities.php";
$BackendResult="";
$DisplayMessage="";
if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
    $_SESSION["prev_page"]="adminpage.php";
    header("location:login.php");
}
else
{
    if (isset($_GET["action"])) {
        //print_r($_POST);
        //id_corso`, `nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`
        if($_GET["action"]=="insert"
        &&isset($_POST["nome_corso"])
        &&isset($_POST["categoria_corso"])
        &&isset($_POST["descrizione_corso"])
        &&isset($_POST["link_immagine"])
        &&isset($_POST["alt_immagine"])
        &&isset($_POST["intensita"])
        &&isset($_POST["durata"])
        &&isset($_POST["calorie"])
        &&isset($_POST["equipaggiamento_calzature"])
        ){
            $nome_corso=htmlentities(trim($_POST["nome_corso"]));
            $id_categoria=htmlentities(trim($_POST["categoria_corso"]));
            $descrizione=htmlentities(trim($_POST["descrizione_corso"]));
            $immagine=htmlentities(trim($_POST["link_immagine"]));
            $alt=htmlentities(trim($_POST["alt_immagine"]));
            $intensita=htmlentities(trim($_POST["intensita"]));
            $durata=htmlentities(trim($_POST["durata"]));
            $calorie=htmlentities(trim($_POST["calorie"]));
            $calzature=htmlentities(trim($_POST["equipaggiamento_calzature"]));
            if(isset($_POST["forza"])){$forza = $_POST["forza"];}else {$forza = 0;};
            if(isset($_POST["equilibrio"])){$equilibrio = $_POST["equilibrio"];}else {$equilibrio = 0;};
            if(isset($_POST["resistenza"])){$resistenza = $_POST["resistenza"];}else {$resistenza = 0;};
            if(isset($_POST["stabilità"])){$stabilita = $_POST["stabilità"];}else {$stabilita = 0;};
            if(isset($_POST["tappetino"])){$tappetino = $_POST["tappetino"];}else {$tappetino = 0;};
            if(isset($_POST["asciugamano"])){$asciugamano = $_POST["asciugamano"];}else {$asciugamano = 0;};
            if(isset($_POST["borraccia"])){$borraccia = $_POST["borraccia"];}else {$borraccia = 0;};
            if(isset($_POST["guantoni"])){$guantoni = $_POST["guantoni"];}else {$guantoni = 0;};
            if(isset($_POST["capelli_raccolti"])){$capelli_raccolti = $_POST["capelli_raccolti"];}else {$capelli_raccolti = 0;};
            if(isset($_POST["abbigliamento_outdoor"])){$abbigliamento_outdoor = $_POST["abbigliamento_outdoor"];}else {$abbigliamento_outdoor = 0;};
            if(isset($_POST["accappatoio"])){$accappatoio = $_POST["accappatoio"];}else {$accappatoio = 0;};
            if(isset($_POST["cuffia"])){$cuffia = $_POST["cuffia"];}else {$cuffia = 0;};
            if(isset($_POST["costume"])){$costume = $_POST["costume"];}else {$costume = 0;};


            $BackendResult=InserisciCorso($nome_corso,$id_categoria,$descrizione,$immagine,$alt,$forza,$equilibrio,$resistenza,$stabilita,$intensita,$durata,$calorie,$calzature,$tappetino,$asciugamano,$borraccia,$tappetino,$guantoni,$capelli_raccolti,$abbigliamento_outdoor,$accappatoio,$cuffia,$costume);
            if($BackendResult==""){
                $DisplayMessage="inserimento completato";
            }
            else{
                $DisplayMessage=$BackendResult;
            }
        }
    }
    //Includo file html
    $paginaHTML = file_get_contents("html/inserimento_corsi.html");
    $formHTML = file_get_contents("html/inserimento_form.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");
    //Gererazione header
    $header = genera_header("inserimento corsi");

    $categorie;
    if(GetCategorie($categorie)!="success"||!$categorie){
        $contenuto = '<p>errore connessione o database</p>';
    }
    else{
        if($DisplayMessage!=""){
            $DisplayMessage='<p class="formresult">'.$DisplayMessage.'</p>';
        }
        $categorie;
        $lista_categorie = '';
        GetCategorie($categorie);
        foreach($categorie as $id=>$nome){
            $lista_categorie .= "<option value=".$id.">".$nome."</option>";
        }
        $campi_replace_form = array("%messaggio%", "%categorie%");
        $valori_replace_form = array($DisplayMessage, $lista_categorie);
        $paginaHTML_form = str_replace($campi_replace_form, $valori_replace_form, $formHTML);
    }

    //Sostituzione dei campi della pagina html con i valori				
    $campi_replace = array("%header%", "%footer%", "%contenuto%");
    $valori_replace = array($header, $footer, $paginaHTML_form);
    $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
}
?>