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
       echo genera_header("home");               
    ?>
    <div id="home_content">
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
                <a class="menu_link first_letter_underlined" href="LINK PAGINA ISCRIZIONE" tabindex="5" accesskey="u">UNISCITI ORA</a>
            </div> 
        </div>

        <div id="home_sedi_bg"></div>
        <div id="home_sedi_text_box">
            <h3 id="home_sedi_titolo"><span lang="en">Clubs</span></h3>
            <p id="home_sedi_testo">
                Più di 100 palestre affiliate sparse in giro per l'Italia.<br>
                Non sai se siamo vicini a te? <br>
                <b>Cerca la sede più vicina a te</b>
            </p>
            <a class="menu_link first_letter_underlined" href="clubs.php" tabindex="6" accesskey="c">CERCA</a>
        </div>

        <div id="home_corsi_bg"></div>
        <div id="home_corsi_text_box">
            <h3 id="home_corsi_titolo">Esplora i nostri corsi</h3>
            <p id="home_corsi_testo">
                <p>
                    Non sai da dove iniziare?<br> <b>Unisciti a uno dei nostri corsi</b> e <span class="testo_rosso">raggiungi i tuoi obbiettivi</span> in compagnia.<br><br>
                    Dai un'occhiata alla nostra offerta: 
                </p> 
                
                <ul class="u_list">
                    <li><span lang="en">Yoga</span></li>
                    <li><span lang="en">Pilates</span></li>
                    <li><span lang="en">Full Body</span></li>
                    <li><span lang="en">Chalisthnics</span></li>
                    <li>Danza</li>
                </ul>
                <p>
                    e molto altro...
                </p> 
            </p>
            <a class="menu_link first_letter_underlined" href="corsi/index.php" tabindex="7" accesskey="e">ESPLORA</a>
        </div>
        

        <div id="home_iscrizione">
            <h3 id="home_iscrizione_titolo">Diventa un membro</h3>
            <div id="home_iscrizione_testo">
                Che tu voglia allenarti in tutta Europa o in un solo club, o se desideri utilizzare il pacchetto di servizi completo 
                o se preferisci l'offerta più conveniente, abbiamo in ogni caso il contratto giusto per te
            </div>
            <div id="home_iscrizione_piano1">
                <h4><span lang="en">Summer Special 10€</span></h4>
                <ul class="u_list">
                    <li>Allenati in un <span lang="en">club</span> a tua scelta</li>
                    <li>3 corsi compresi</li>
                </ul>
            </div>
            <div id="home_iscrizione_piano2">
                <h4><span lang="en">Base 40€</span></h4>
                <ul class="u_list">
                    <li>Allenati in un club a tua scelta</li>
                    <li>5 corsi compresi</li>
                    <li>Consulenza <span lang="en">Personal trainer</span></li>
                </ul>
            </div>
            <div id="home_iscrizione_piano3">
                <h4><span lang="en"><span lang="en">Premium</span> 70€</span></h4>
                <ul class="u_list">
                    <li>Allenati in <b>tutti</b> club</li>
                    <li><b>Tutti</b> i corsi compresi</li>
                    <li>Consulenza <span lang="en">Personal trainer</span></li>
                    <li>Consulenza Dietologo</li>
                    <li>Spa</li>
                </ul>
            </div>
            <a class="menu_link first_letter_underlined" href="LINK PAGINA ISCRIZIONE" tabindex="8" accesskey="a">ABBONATI</a>
        </div>

        <div id="home_info">
            <h3 id="home_info_titolo">Hai dei dubbi?</h3>
            <p id="home_info_testo">
                Sei ancora indeciso o hai semplicmente dei dubbi?<br>
                Per maggiori informazioni consulta la nostra sezione <span lang="en"><abbr title="frequently asked questions">FAQ</abbr></span>
            </p>
            <a class="menu_link first_letter_underlined" href="info.php" tabindex="9" accesskey="f"><abbr title="frequently asked questions">FAQ</abbr> - SCOPRI DI PIU'</a>
        </div>
    </div>

    <?php
        include_once "utilityphp/footer.php";                
    ?>
    
</body>
</html>