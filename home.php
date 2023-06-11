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
<body id="HomePage">

    <?php
       genera_header("home");               
    ?>

    <main id="content"> 
        <div id="home_titolo_bg">
            <div id="home_titolo_text_box">
                <h1 id="home_titolo_titolo">Allenati per <span class="testo_rosso">il tuo benessere</span></h1>
                <p id="home_titolo_testo">
                    <b>Offerta speciale di giugno :</b> 
                    preparati per l'arrivo dell'estate abbonandoti ora!<br>
                    Ti alleni a <span class="testo_rosso">10€ al mese per i primi 3 mesi!</span><br>
                    Basta scegliere la sede e iscriversi. <br>
                    Solo fino al 31 giugno!
                </p>
                <p class="first_letter_underlined"><a class="menu_link" href="LINK PAGINA ISCRIZIONE" tabindex="5" accesskey="u">UNISCITI ORA</a></p>
            </div> 
        </div>

        <div id="home_sedi">
            <div id="home_sedi_bg"></div>
            <div id="home_sedi_text_box">
                <h3 id="home_sedi_titolo"><span lang="en">Clubs</span></h3>
                <p id="home_sedi_testo">Più di 100 palestre affiliate sparse in giro per l'Italia.<br>
                                        Non sai se siamo vicini a te? <br>
                                        <b>Cerca la sede più vicina a te</b>
                </p>
                <p class="first_letter_underlined"><a class="menu_link" href="clubs.php" tabindex="6" accesskey="c">CERCA</a></p>
            </div>
        </div>

        <div id="home_corsi">
            <div id="home_corsi_bg"></div>
            <div id="home_corsi_text_box">
                <h3 id="home_corsi_titolo">Esplora i nostri corsi ed allenamenti</h3>
                <p id="home_corsi_testo">
                    Corsi di <span lang="en">Yoga, Pilates, Body Building</span> e molto altro
                </p>
                <p class="first_letter_underlined"><a class="menu_link" href="corsi/index.php" tabindex="7" accesskey="e">ESPLORA</a></p>
            </div>
        </div>

        <div id="home_iscrizione">
            <h3>Cosa aspetti ad iscriverti</h3>
            <p class="first_letter_underlined"><a class="menu_link" href="LINK PAGINA ISCRIZIONE" tabindex="8" accesskey="a">ABBONATI</a></p>
        </div>

        <div id="home_info">
            <h3>Hai dei dubbi?</h3>
            <p id="home_info_testo">
                Per maggiori informazioni consulta la nostra sezione <span lang="en"><abbr title="frequently asked questions">FAQ</abbr></span>
            </p>
            <p class="first_letter_underlined"><a class="menu_link" href="info.php" tabindex="9" accesskey="f">DOMANDE FREQUENTI</a></p>
        </div>
    </main>

    <?php
        include_once "utilityphp/footer.php";                
    ?>

</body>
</html>