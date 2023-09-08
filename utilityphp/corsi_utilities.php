<?php 
require_once "utilityphp/connessione.php";

use DB\DBAccess;

function GetCategorie(&$categorie){
    $connessione1 = new Connection();
    $connOK = $connessione1->apriConnessione();
    if(!$connOK) {
        return "errore di connessione";
    }
    $categorie=$connessione1->GetCategorie();
    $connessione1->closeDBConnection();
    return "success";
}
function GetCorsi(&$corsi){
    $connessione1 = new Connection();
    $connOK = $connessione1->apriConnessione();
    if(!$connOK) {
        return "errore di connessione";
    }
    $corsi=$connessione1->GetCorsi();
    $connessione1->closeDBConnection();
    return "success";
}
function InserisciCorso($nome_corso,$id_categoria,$descrizione,$immagine,$alt,$forza,$equilibrio,$resistenza,$stabilita,$intensita,$durata,$calorie,$calzature,$asciugamano,$borraccia,$tappetino,$guantoni,$capelli_raccolti,$abbigliamento_outdoor,$accappatoio,$cuffia,$costume){
    $categorie=[];
    GetCategorie($categorie);
    if(!isset($categorie[$id_categoria])){
        return "categoria inesistente";
    }
    $connessione1 = new Connection();
    $connOK = $connessione1->apriConnessione();
    if(!$connOK) {
        return "errore di connessione";
    }
    if($connessione1->InsertCorso(
        $nome_corso,
        $id_categoria,
        $descrizione,
        $immagine,
        $alt,
        (int)$forza,
        (int)$equilibrio,
        (int)$resistenza,
        (int)$stabilita,
        $intensita,
        $durata,
        $calorie,
        (int)$asciugamano,
        (int)$borraccia,
        (int)($calzature==1),
        (int)$tappetino,
        (int)($calzature==2),
        (int)$guantoni,
        (int)$capelli_raccolti,
        (int)$abbigliamento_outdoor,
        (int)($calzature==3),
        (int)$accappatoio,
        (int)$cuffia,
        (int)$costume,
        (int)($calzature==4),
        (int)($calzature==5)))
        {
            $connessione1->closeDBConnection();
            return "";
        }
    $connessione1->closeDBConnection();
    return "errore inserimento database";
}