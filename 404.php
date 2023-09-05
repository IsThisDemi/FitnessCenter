<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>error 404</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="errore 404"/>
    <meta name="description" content="Pagina non trovata" />
	<meta name="author" content="FitnessCenter"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css"/> 
    <link rel="stylesheet" href="css/mini.css" media="handheld, screen and (max-width:768px), only screen and (max-device-width:768px)" />
    <link rel="stylesheet" href="css/print.css" media="print" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<?php 
echo genera_header("404");
?>

<div id="home_content"">
    <div id="home_titolo_bg">
        <div id="home_titolo_text_box">
            <h1 id="home_titolo_titolo" class="errore">Pagina non trovata</h1>
            <a href="home.php">Torna alla home</a>
        </div>
    </div>
</div>
<footer>
    <div>
        <h4 id="titolo_footer">FitnessCenter SRL</h4>
    </div>
    <div id="footer_text_box">
        <p id="info_sede_centrale">
            <b>- Sede Centrale -</b><br>
            Via Attendolo 11 - Milano (MI) | CAP: 20141 | Telefono: 327 8455663 | Mail: info@FitnessCenter.it
        </p>
        <p id="copyright_text">© Copyright 2023 FitnessCenter. <span lang="en">All rights reserved.</span></p>
        <p id="autori_text">Sito realizzato per il progetto del corso di Tecnologie Web 2023 dell'università di Padova<br> 
            Gruppo:  Giovanni C. / Riccardo M. / Mattia P. / Federico Y.</p>
    </div>
</footer> 
</body>