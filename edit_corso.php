<?php 
require_once "utilityphp/connessione.php";
require_once "utilityphp/header.php";
require_once "utilityphp/connessione.php";
$BackendResult="";
$DisplayMessage="";
if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
    $_SESSION["prev_page"]="adminpage.php";
    header("location:login.php");
}
//Se non è inserita un corso torno all'area di login
if (!isset($_GET['id'])) {
    header("location: login.php");
    exit;
}
//Stabilisco connessione con il database
$connessione = new Connection();
if (!$connessione->apriConnessione()) {
    exit();
}

//Controllo che sia un corso valido
$id_corso = $_GET['id'];
$query_numero_corsi = "SELECT COUNT(nome_corso) AS numero_corsi FROM corsi WHERE id_corso = '$id_corso';";
$numero_corsi = $connessione->query_singolaDB($query_numero_corsi)[0];
if ($numero_corsi < 1) {
    header("location: login.php");
    exit;
}
//Da qui in poi id sarà valido
else
{
    if (isset($_GET["action"])) {
        //print_r($_POST);
        //id_corso`, `nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`
        if($_GET["action"]=="edit"
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
            $forza=isset($_POST["forza"]);
            $equilibrio=isset($_POST["equilibrio"]);
            $resistenza=isset($_POST["resistenza"]);
            $stabilita=isset($_POST["stabilità"]);
            $tappetino=isset($_POST["tappetino"]);
            $asciugamano=isset($_POST["asciugamano"]);
            $borraccia=isset($_POST["borraccia"]);
            $guantoni=isset($_POST["guantoni"]);
            $capelli_raccolti=isset($_POST["capelli_raccolti"]);
            $abbigliamento_outdoor=isset($_POST["abbigliamento_outdoor"]);
            $accappatoio=isset($_POST["accappatoio"]);
            $cuffia=isset($_POST["cuffia"]);
            $costume=isset($_POST["costume"]);


            $BackendResult=$connessione->editCorso($id_corso, $nome_corso,$id_categoria,$descrizione,$immagine,$alt,$forza,$equilibrio,$resistenza,$stabilita,$intensita,$durata,$calorie,$calzature,$asciugamano,$borraccia,$tappetino,$guantoni,$capelli_raccolti,$abbigliamento_outdoor,$accappatoio,$cuffia,$costume);
            if($BackendResult==""){
                $DisplayMessage="modifica completata";
            }
            else{
                $DisplayMessage=$BackendResult;
            }
        }
    }
    //Includo file html
    $paginaHTML = file_get_contents("html/edit_corso.html");
    $formHTML = file_get_contents("html/inserimento_form.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");
    //Gererazione header
    $header = genera_header("modifica corso");

    //Ottengo le informazioni del corso
    $query_info_corso = "SELECT * FROM corsi WHERE id_corso = '$id_corso';";
    $info_corso = $connessione->query_singolaDB($query_info_corso);

    $nome_corso = $info_corso['1'];
    $id_categoria = $info_corso['2'];
    $descrizione_corso = $info_corso['3'];
    $immagine_corso = $info_corso['4'];
    $alt_corso = $info_corso['5'];
    $forza = $info_corso['6'];
    if($forza==1){
        $forza="checked";
    }
    else{
        $forza="";
    }
    $equilibrio = $info_corso['7'];
    if($equilibrio==1){
        $equilibrio="checked";
    }
    else{
        $equilibrio="";
    }
    $resistenza = $info_corso['8'];
    if($resistenza==1){
        $resistenza="checked";
    }
    else{
        $resistenza="";
    }
    $stabilita = $info_corso['9'];
    if($stabilita==1){
        $stabilita="checked";
    }
    else{
        $stabilita="";
    }
    $intensita = $info_corso['10'];
    $durata = $info_corso['11'];
    $calorie = $info_corso['12'];
    $asciugamano = $info_corso['13'];
    if($asciugamano==1){
        $asciugamano="checked";
    }
    else{
        $asciugamano="";
    }
    $borraccia = $info_corso['14'];
    if($borraccia==1){
        $borraccia="checked";
    }
    else{
        $borraccia="";
    }
    $calzini = $info_corso['15'];
    if($calzini==1){
        $calzini="selected";
    }
    else{
        $calzini="";
    }
    $tappetino = $info_corso['16'];
    if($tappetino==1){
        $tappetino="checked";
    }
    else{
        $tappetino="";
    }
    $scarpe_sportive = $info_corso['17'];
    if($scarpe_sportive==1){
        $scarpe_sportive="selected";
    }
    else{
        $scarpe_sportive="";
    }
    $guantoni = $info_corso['18'];
    if($guantoni==1){
        $guantoni="checked";
    }
    else{
        $guantoni="";
    }
    $capelli_raccolti = $info_corso['19'];
    if($capelli_raccolti==1){
        $capelli_raccolti="checked";
    }
    else{
        $capelli_raccolti="";
    }
    $abbigliamento_outdoor = $info_corso['20'];
    if($abbigliamento_outdoor==1){
        $abbigliamento_outdoor="checked";
    }
    else{
        $abbigliamento_outdoor="";
    }
    $scarpe_outdoor = $info_corso['21'];
    if($scarpe_outdoor==1){
        $scarpe_outdoor="selected";
    }
    else{
        $scarpe_outdoor="";
    }
    $accappatoio = $info_corso['22'];
    if($accappatoio==1){
        $accappatoio="checked";
    }
    else{
        $accappatoio="";
    }
    $cuffia = $info_corso['23'];
    if($cuffia==1){
        $cuffia="checked";
    }
    else{
        $cuffia="";
    }
    $costume = $info_corso['24'];
    if($costume==1){
        $costume="checked";
    }
    else{
        $costume="";
    }
    $ciabatte = $info_corso['25'];
    if($ciabatte==1){
        $ciabatte="selected";
    }
    else{
        $ciabatte="";
    }
    $piedi_nudi = $info_corso['26'];
    if($piedi_nudi==1){
        $piedi_nudi="selected";
    }
    else{
        $piedi_nudi="";
    }

    //Ottengo il nome della categoria dato l'id
    $nome_categoria_query = "SELECT nome_cat FROM categorie WHERE id_categoria = '$id_categoria';";
    $nome_categoria = $connessione->query_singolaDB($nome_categoria_query)[0];
    //Ottengo la lista delle categorie
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
            if($nome==$nome_categoria){
                $lista_categorie .= "<option value=".$id." selected>".$nome."</option>";
            }
            else{
                $lista_categorie .= "<option value=".$id.">".$nome."</option>";
            }
        }
    }

    //Sostituzione dei campi della pagina html con i valori				
    $campi_replace = array("%id_corso%", "%categorie%","%header%", "%footer%", "%messaggio%", "%nome_corso%", "%categoria_corso%", "%descrizione_corso%", "%immagine_corso%", "%alt_immagine_corso%", "%intensita_corso%", "%durata_corso%", "%calorie_corso%",  "%checked_forza%", "%checked_equilibrio%", "%checked_resistenza%", "%checked_stabilita%", "%checked_tappetino%", "%checked_asciugamano%", "%checked_borraccia%", "%calzini%", "%scarpe_sportive%", "%checked_guantoni%", "%checked_capelli%", "%checked_outdoor%", "%scarpe_outdoor%", "%checked_accappatoio%", "%checked_cuffia%", "%checked_costume%", "%ciabatte%", "%piedi_nudi%");
    $valori_replace = array($id_corso, $lista_categorie, $header, $footer, $DisplayMessage, $nome_corso, $nome_categoria, $descrizione_corso, $immagine_corso, $alt_corso, $intensita, $durata, $calorie, $forza, $equilibrio, $resistenza, $stabilita, $tappetino, $asciugamano, $borraccia, $calzini, $scarpe_sportive, $guantoni, $capelli_raccolti, $abbigliamento_outdoor, $scarpe_outdoor, $accappatoio, $cuffia, $costume, $ciabatte, $piedi_nudi);
    $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
}
?>