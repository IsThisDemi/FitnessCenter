<?php
require_once "utilityphp/connessione.php";
require_once "utilityphp/header.php";

$paginaHTML = file_get_contents("html/JoinUS.html");
$header =  genera_header("Contattaci");
$footer = file_get_contents("utilityphp/footer.php");

use DB\DBAccess; //importa la classe DBAccess presente in "connessione"

$tagPermessi = '<em><strong><ul><p>'; //se ci fosse un tag non permesso, lo rimuove fino alla fine e si ha codice non valido
$messaggiPerForm = ''; //messaggi di errore per la form

//Variabili per il form

$nome = "";
$cognome = "";
$sesso = "";
$dataNascita = "";
$email = "";
$telefono = "";
$note = "";

function pulisciInput($value) {
    $value = trim($value); //trim() rimuove gli spazi bianchi (o altri caratteri) dall'inizio e dalla fine di una stringa
    $value = strip_tags($value); //strip_tags() rimuove le tag HTML e PHP da una stringa
    $value = htmlentities($value); //htmlentities() converte i caratteri speciali in entità HTML
    //se faccio prima "htmlentities", "strip_tags" non è più utile
    return $value;
}
function pulisciNote($value){
    global $tagPermessi;

    $value = trim($value); 
    $value = strip_tags($value, $tagPermessi); 
    return $value;
}



if(isset($_POST['submit'])){  //se è stato premuto il bottone "submit" all'interno della form


    $nome = pulisciInput($_POST['nome']); //pulisce il nome
    if (strlen($nome) == 0){
        $messaggiPerForm .= '<p>Nome non inserito</p>';
    }
    else{
        if(preg_match("/\d/", $nome)){ //se il nome contiene un numero
            $messaggiPerForm .= '<p>Nome  non può contenere numeri</p>';
        }
    }

    $cognome = pulisciInput($_POST['cognome']); 
    if (strlen($nome) == 0){
        $messaggiPerForm .= '<p>Cognome non inserito</p>';
    }
    else{
        if(preg_match("/\d/", $cognome)){ 
            $messaggiPerForm .= '<p>Cognome  non può contenere numeri</p>';
        }
    }

    $sesso = pulisciInput($_POST['sesso']); //pulisce il sesso

    $dataNascita = pulisciInput($_POST['dataNascita']); 
    if (strlen($dataNascita) == 0){
        $messaggiPerForm .= '<p>Data di nascita non inserita</p>';
    }
    else{
        if(!preg_match("/\d{4}\-\d{2}\-\d{2}/", $dataNascita)){ //se la data non è nel formato corretto (anno - mese - giorno)
            $messaggiPerForm .= '<p>La data di nascita non è nel formato corretto</p>';
        }
    }


    $email = pulisciInput($_POST['email']);
     if (strlen($email) == 0){
        $messaggiPerForm .= '<p>Email non inserita</p>';
    }
    else{
        if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email)){
            $messaggiPerForm .= '<p>Email non è nel formato corretto</p>';
        }
    }
    
    $telefono = pulisciInput($_POST['telefono']);
    if (strlen($telefono) == 0){
        $messaggiPerForm .= '<p>Telefono non inserito</p>';
    }
    else{
        if(!preg_match("/\d{10}/", $telefono)){  
            $messaggiPerForm .= '<p>Il numero di telefono deve essere di lughezza 10 e non può contenere caratteri</p>';
        }
    }
    
    $note = pulisciNote($_POST['note']);

    if($messaggiPerForm=="") {
        $connessione1 = new Connection();
        $connOK = $connessione1->apriConnessione();
        if($connOK) {
            $queryOK = $connessione1->insertNewCostumer($nome, $cognome, $sesso, $dataNascita, $email, $telefono, $note);
            if($queryOK) {
                $messaggiPerForm = '<div id="greetings"><p>Inserimento avvenuto con successo.</p></div>';
                $nome = "";
                $cognome = "";
                $sesso = "";
                $dataNascita = "";
                $email = "";
                $telefono = "";
                $note = "";
            } else {
                $messaggiPerForm = '<div id="messageErrors"><p>Problema nell\'inserimento dei dati, controlla se hai usato caratteri speciali. </p></div>';
            }
        } else {
            $messaggiPerForm = '<div id="messageErrors"><p>I nostri sistemi sono al momento non funzionanti, ci scusiamo per il disagio.</p></div>';
        }
    } else {
        $messaggiPerForm = '<div id="messageErrors"><ul>' . $messaggiPerForm . '</ul></div>';
    }
}


$paginaHTML = str_replace("%header%", $header, $paginaHTML);
$paginaHTML = str_replace("%footer%", $footer, $paginaHTML);
$paginaHTML = str_replace("<messaggiForm />", $messaggiPerForm, $paginaHTML); 
$paginaHTML = str_replace("<valoreNome />", $nome, $paginaHTML); 
$paginaHTML = str_replace("<valoreCognome />", $cognome, $paginaHTML);
$paginaHTML = str_replace("<valData />", $dataNascita, $paginaHTML);
$paginaHTML = str_replace("<valoreMail />", $email, $paginaHTML);
$paginaHTML = str_replace("<valoreTel />", $telefono, $paginaHTML);
echo $paginaHTML;
?>
