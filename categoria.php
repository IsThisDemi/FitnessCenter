<?php
    session_start();
    require_once "utilityphp/connessione.php";
    require_once "utilityphp/header.php";
    require_once "utilityphp/card.php";

    //Se non è inserita una categoria torno alla pagina principale
    if (!isset($_GET['id'])) {
        header("location: offerta_corsi.php");
        exit;
    }
    $id_categoria = $_GET['id'];
    //Controllo che sia una categoria valida
    if ($id_categoria < 1 || $id_categoria > 8) {
        header("location: offerta_corsi.php");
        exit;
    }

    //Includo file html
    $paginaHTML = file_get_contents("html/categoria.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");

    //Stabilisco connessione con il database
    $connessione = new Connection();

    if (!$connessione->apriConnessione()) {
        exit();
    }

    //Ottengo le informazioni della categoria
    $query_numero_corsi = "SELECT COUNT(nome_corso) AS numero_corsi FROM corsi WHERE id_categoria = '$id_categoria';";
    $numero_corsi = $connessione->query_singolaDB($query_numero_corsi)[0];

    $query_info_categoria = "SELECT * FROM categorie WHERE id_categoria = '$id_categoria';";
    $info_categoria = $connessione->query_singolaDB($query_info_categoria);

    $nome_categoria = $info_categoria['1'];
    $descrizione_categoria = $info_categoria['2'];
    $immagine_categoria = $info_categoria['3'];
    $alt_categoria = $info_categoria['4'];

    //Costruzione delle card di tipo corso
    $query_categorie = "SELECT * FROM corsi WHERE id_categoria = '$id_categoria';";
    $risultato_info_categorie = $connessione->interrogaDB($query_categorie);
    $listaCard_offerta = '';
    if ($risultato_info_categorie) {
        foreach ($risultato_info_categorie as $ris) {
            $card = new CardCorso($ris);
            $listaCard_offerta .= $card->makeCard_corso();
        }
    } else {
        $listaCard_offerta = "<p>Errore nel recupero delle categorie</p>";
    }

    //Sostituzione dei campi della pagina html con i valori				
    $campi_replace = array("%footer%", "%numero_corsi%", "%lista_corsi%", "%categoria%", "%descrizione%", "%immagine_categoria%", "%alt%", "%header%");
    $valori_replace = array($footer, $numero_corsi, $listaCard_offerta, $nome_categoria, $descrizione_categoria, $immagine_categoria, $alt_categoria, genera_header($nome_categoria));

    $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
?>