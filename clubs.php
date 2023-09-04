<?php
    session_start();     
	require_once "utilityphp/connessione.php";
	require_once "utilityphp/header.php";

    //Includo file html
    $paginaHTML = file_get_contents("html/clubs.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");
	//Gererazione header
	$header = genera_header("palestre");

    //Stabilisco connessione con il database
	$connessione = new Connection();
    $clubs = "";
    $stringa_clubs = "";

    $connOk = $connessione->apriConnessione();

    if($connOk) {
		$clubs = $connessione->getList(); //salva la lista dei giocatori in giocatori
        $connessione->closeDBConnection(); //chiude la connessione

		if($clubs != null) {

			foreach ($clubs as $club) {
				$stringa_clubs .= '<a class="address" href="' . $club['link'] . '" target="map">'
								. '<button class="palestra"><label for="palestra">' . $club['nome'] . '</label></button>' 
								. '</a>'
								. '<div class="panel">'
								. '<p>' . $club['info'] . '</p>'
								. '</div>';
			}
		} else {
			$stringa_clubs = "<p>Nessun club presente</p>";
		}
    } else {
		$stringa_clubs ="<p>
							La pagina ha avuto problemi ad collegarsi al databse. <br>
							Ci scusiamo per l'incoveniente. <br>
							Se necessità assistenza nel mentre le consigliamo di contattarci via telefono
						</p>";
	}

    
    //Sostituzione dei campi della pagina html con i valori				
	$campi_replace = array("%header%", "%footer%", "%lista_club%");
	$valori_replace = array($header, $footer, $stringa_clubs);
	
	$paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
?>