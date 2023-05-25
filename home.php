<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>FitnessCenter-Home</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="FitnessCenter, palestra, fitness, corsi, allenamenti, iscrizione, sedi, informazioni"/>

    <meta name="description" content="Questa è la pagina iniziale del sito web della catena di palestre Fitness Center. Sarà possibile visualizzare 
    esempi di schede di allenamento, corsi offerti dai nostri istruttori, le nostre sedi attuali e potersi registrare come membro. In particolare la 
    Homepage funziona da menù e pagina illustrativa delle funzionalità offerte dal sito, con link che porteranno alle singole pagine" />
    
	<meta name="author" content="Tao Ren Federico Ye"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" media="print" href="../css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>
    <?php 

    genera_header("home");

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
            <a class="bottone" href="LINK PAGINA LOGIN">Unisciti ora</a>
        </div id>
        <div id="home_sedi">
            <h3>Trova la sede più vicina a te</h3>
            <span class="home_testo">Più di 100 palestre affiliate in Italia</span>
            <a class="bottone" href="LINK PAGINA SEDI">Cerca</a>
        </div id>
        <div id="home_corsi">
            <h3>Esplora i nostri corsi ed allenamenti</h3>
            <p class="home_testo">
                Corsi di <span lang="en">Yoga, Pilates, Body Building</span> e molto altro
            </p>
            <a class="bottone" href="LINK PAGINA CORSI">Esplora</a>
        </div id>
        <div id="home_iscrizione">
            <h3>Cosa aspetti ad iscriverti</h3>
            <a class="bottone" href="LINK PAGINA ISCRIZIONE">Abbonati</a>
        </div id>
        <div id="home_info">
            <h3>Hai dei dubbi?</h3>
            <p class="home_testo">
                Per maggiori informazioni consulta la nostra sezione <span lang="en"><abbr title="frequently asked questions">FAQ</abbr></span>
            </p>
            <a class="bottone" href="info.php">Scopri di più</a>
        </div id>
    </main>

    <footer>
        
    </footer>

</body>
</html>