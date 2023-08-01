<?php
    session_start();     
	require_once "utilityphp/connessione.php";
	require_once "utilityphp/header.php";
	require_once "utilityphp/card.php";

    //Includo file html
    $paginaHTML = file_get_contents("html/offerta_corsi.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");

    //Stabilisco connessione con il database
	$connessione = new Connection();

	if (!$connessione->apriConnessione()) {
		exit();
	}

	genera_header("offerta corsi");

    //Conto il numero di corsi usando la funzione contaCorsi() della classe Connection
    $numero_corsi = $connessione->contaCorsi();

    //Costruzione delle card di tipo offerta_corsi
    $query_categorie = "SELECT categorie.id_categoria, nome_cat, categorie.immagine, categorie.alt, COUNT(nome_corso) AS numero_corsi FROM categorie, corsi WHERE categorie.id_categoria = corsi.id_categoria GROUP BY nome_cat;";
	$risultato_info_categorie = $connessione->interrogaDB($query_categorie);
	$listaCard_offerta = '';
	if ($risultato_info_categorie) {
		foreach ($risultato_info_categorie as $ris) {
			$card = new Card($ris);
			$listaCard_offerta .= $card->makeCard_offerta();
		}
	} else {
		$listaCard_offerta= "<p>Errore nel recupero delle categorie</p>";
	}
    
    //Sostituzione dei campi della pagina html con i valori				
	$campi_replace = array("%footer%", "%numero_corsi%", "%lista_categorie%");
	$valori_replace = array($footer, $numero_corsi, $listaCard_offerta);
	
	echo str_replace($campi_replace, $valori_replace, $paginaHTML);
?>