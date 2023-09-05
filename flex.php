<?php 
	require_once "utilityphp/header.php";

    //Includo file html
    $paginaHTML = file_get_contents("html/flex.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");
	//Gererazione header
	$header = genera_header("home");

    $campi_replace = array("%header%", "%footer%");
	$valori_replace = array($header, $footer);
	
	$paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
?>
