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
    $corsi=$connessione1->GetCategorie();
    $connessione1->closeDBConnection();
    return "success";
}
function InserisciCorso(){
    
}