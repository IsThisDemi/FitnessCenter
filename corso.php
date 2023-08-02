<?php
    session_start();
    require_once "utilityphp/connessione.php";
    require_once "utilityphp/header.php";
    require_once "utilityphp/card.php";

    //Se non è inserita un corso torno alla pagina principale
    if (!isset($_GET['id'])) {
        header("location: offerta_corsi.php");
        exit;
    }

    $id_corso = $_GET['id'];

    //Includo file html
    $paginaHTML = file_get_contents("html/corso.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");

    //Stabilisco connessione con il database
    $connessione = new Connection();

    if (!$connessione->apriConnessione()) {
        exit();
    }

    //Ottengo il l'id corso massimo
    $query_numero_corsi = "SELECT * FROM corsi ORDER BY id_corso DESC LIMIT 1;";
    $id_corso_max = $connessione->query_singolaDB($query_numero_corsi)[0];
    //Controllo che sia un corso valida
    if ($id_corso < 1 || $id_corso > $id_corso_max) {
        header("location: offerta_corsi.php");
        exit;
    }

    //Ottengo le informazioni del corso
    $query_info_corso = "SELECT nome_corso, descrizione, immagine, alt FROM corsi WHERE id_corso = '$id_corso';";
    $info_corso = $connessione->query_singolaDB($query_info_corso);

    $nome_corso = $info_corso['0'];
    $descrizione_corso = $info_corso['1'];
    $immagine_corso = $info_corso['2'];
    $alt_corso = $info_corso['3'];

    //Costruzione della tabella informativa del corso
    $query_categorie = "SELECT * FROM corsi WHERE id_corso = '$id_corso';";
    $risultato_info_categorie = $connessione->interrogaDB($query_categorie);
    $listaCard_offerta = '';
    if ($risultato_info_categorie) {
        foreach ($risultato_info_categorie as $ris) {
            $card = new InfoCorso($ris);
            $listaCard_offerta .= $card->makeInfo_corso();
        }
    } else {
        $listaCard_offerta = "<p>Errore nel recupero delle categorie</p>";
    }

    //Sostituzione dei campi della pagina html con i valori				
    $campi_replace = array("%header%", "%footer%",  "%info_corso%", "%corso%", "%descrizione%", "%immagine_corso%", "%alt%");
    $valori_replace = array(genera_header($nome_corso), $footer, $listaCard_offerta, $nome_corso, $descrizione_corso, $immagine_corso, $alt_corso);

    $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
?>