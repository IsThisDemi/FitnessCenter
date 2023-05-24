<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>contatti ed info</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="contatti,info,posizione,gim"/>
    <meta name="description" content="informazioni e contatti per gim" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" media="print" href="../css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

<?php 

genera_header("info");

?>
<div id="content">
    <sectioni id="faq">
    <h2>Domande frequenti</h2>
        <dl>
            <dt>Domanda</dt>
            <dd>risposta</dd>            
        </dl>
    </section>
    <sectioni id="posizione">
        <h2>Dove siamo?</h2>        
            <p class="contactsParagraph">Potete trovarci in Via Vendramini, 20, 35137 Padova (PD).</p>
            <p class="contactsParagraph">
                Dalla fermata dell'autobus in piazza Mazzini attraversate il parco e continuate dritti lungo Via Vendramini.
            </p>
    </section>
    <sectioni id="contatti_social">
        <div id="contatti" class="contactsection">
            <h2>Contatti</h2>        
            <dl>
                <dt>Telefono</dt>
                <dd>049 111 1111</dd>
                <dt lang="en">Email</dt>
                <dd>info@gim.it</dd>
            </dl>
        </div>
        <div id="social" class="contactsection">
            <h2>Social</h2>
            <p>Segui i nostri <span lang="en">social</span>  per rimanere aggiornato su eventi e promozioni</p>
            <dl>
                <dt lang="en">Telegram</dt>
                <dd><a href="https://t.me/gim">t.me/gim</a></dd>
                <dt lang="en">Twitter</dt>
                <dd>@<a href="https://twitter.com/gim">gim</a></dd>
            </dl>
        </div>
    </section>
</div>

</body>