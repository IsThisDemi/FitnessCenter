<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Home-FitnessCenter</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="FitnessCenter, palestra, fitness, corsi, allenamenti, iscrizione, sedi, informazioni"/>

    <meta name="description" content="Questa è la pagina iniziale del sito web della catena di palestre Fitness Center. Sarà possibile visualizzare 
    esbpi di schede di allenamento, corsi offerti dai nostri istruttori, le nostre sedi attuali e potersi registrare come mbbro. In particolare la 
    Homepage funziona da menù e pagina illustrativa delle funzionalità offerte dal sito, con link che porteranno alle singole pagine" />
    
	<meta name="author" content="Tao Ren Federico Ye"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mini.css"  media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
    <link rel="stylesheet" href="css/print.css" media="print" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>

    <?php 
    genera_header("info");
    ?>
    
    <main> 
        <div id="home_titolo">
            <h1>Allenati per il tuo benessere</h1>
            <p class="home_testo">
                Offerta speciale : Cosa aspetti? 
                Approfitta subito dell'offerta di giugno e preparati per l'arrivo dell'estate: 
                abbonati ora e ti alleni a 10€ al mese per i primi 3 mesi! Basta scegliere la sede e iscriversi.
                Solo fino al 31 giugno!
            </p>
            <a class="menu_link" href="LINK PAGINA ISCRIZIONE" tabindex="" accesskey="u"><b>U</b>nisciti ora</a>
        </div id>
        <div id="home_sedi">
            <h3>Trova la sede più vicina a te</h3>
            <span class="home_testo">Più di 100 palestre affiliate in Italia</span>
            <a class="menu_link" href="sedi.php" tabindex="0" accesskey="c"><b>C</b>erca</a>
        </div id>
        <div id="home_corsi">
            <h3>Esplora i nostri corsi ed allenamenti</h3>
            <p class="home_testo">
                Corsi di <span lang="en">Yoga, Pilates, Body Building</span> e molto altro
            </p>
            <a class="menu_link" href="corsi/index.html" tabindex="0" accesskey="e"><b>E</b>splora</a>
        </div id>
        <div id="home_iscrizione">
            <h3>Cosa aspetti ad iscriverti</h3>
            <a class="menu_link" href="LINK PAGINA ISCRIZIONE" tabindex="0" accesskey="a"><b>A</b>bbonati</a>
        </div id>
        <div id="home_info">
            <h3>Hai dei dubbi?</h3>
            <p class="home_testo">
                Per maggiori informazioni consulta la nostra sezione <span lang="en"><abbr title="frequently asked questions">FAQ</abbr></span>
            </p>
            <a class="menu_link" href="info.php" tabindex="0" accesskey="s"><b>S</b>copri di più</a>
        </div id>
    </main>

    <?php
        include_once "utilityphp/footer.php";                
    ?>

</body>
</html>