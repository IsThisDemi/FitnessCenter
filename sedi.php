<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title><PAGETITLE/></title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="FitnessCenter palestra fitness sedi"/>
    <meta name="description" content="Questa pagina continene una lista delle sedi attualmente presenti con relativa posizione geografica su una mappa." />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="../css/style.cs" />
	<link rel="stylesheet" media="print" href="../css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

    <?php 

    genera_header("info");

    ?>
    
    <div id="search_bar">
        <div id="search_title">
            <p>Trova il club più vicino a te</p>
        </div>
        <input id= "searchbar_club" type="text" placeholder="Inserisci città" name="searchbar_club" onkeyup="search_club()">
    </div>

    <div id="google_map">
        <iframe id="map" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12367434.270080628!2d2.1135756967020627!3d40.819327761504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItalia!5e0!3m2!1sit!2sit!4v1684500878027!5m2!1sit!2sit"
            title="Mappa dove viene indicata la posizone geografica della palestra" name="map" 
            width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            <!--   da implementare in CSS per .map!!  
                border:none"              
                filter:invert(90%) hue-rotate(180deg)  (dark mode)
            -->
        </iframe>
    </div>

    <div id="accordion_container">

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27129181.298069037!2d82.73260625677057!3d33.8982126306769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31508e64e5c642c1%3A0x951daa7c349f366f!2sCina!5e0!3m2!1sit!2sit!4v1684501016370!5m2!1sit!2sit" 
            target="map">Club Acireale</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Madonna delle Grazie 1 <br>
                Città: Acireale (CT) <br>
                CAP: 95024 <br>
                Telefono: 328 8912714
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.2130762938523!2d9.749193615564945!3d45.6866957791042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47815b613781c203%3A0x3908aa1ca2db5afd!2sFitActive%20Albano%20Sant&#39;Alessandro!5e0!3m2!1sit!2sit!4v1684795851241!5m2!1sit!2sit"
            target="map">Club Albano Sant'Alessandro</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Tonale 6 <br>
                Città: Albano Sant'Alessandro (BG) <br>
                CAP: 24061 <br>
                Telefono: 3792771491
            </p>
        </div>
         
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.1407698019366!2d8.652548975466951!3d44.90013207089824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4787750822cd6fcb%3A0xa1acfa73f1730dd7!2sFitActive%20Alessandria!5e0!3m2!1sit!2sit!4v1684796001137!5m2!1sit!2sit"    
            target="map">Club Alessandria</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via della Stortigliona 1 <br>
                Città: Alessandria (AL) <br>
                CAP: 15121 <br>
                Telefono: 333 9231505
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2079.696786541747!2d12.627259054053894!3d41.59271810943965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132599ea5776f33f%3A0xf872eddc556b32f2!2sFitActive%20Aprilia!5e0!3m2!1sit!2sit!4v1684797046356!5m2!1sit!2sit"
            target="map">Club Aprilia</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Riserva Nuova 04011 <br>
                Città: Aprilia (LT) <br>
                CAP: 15121 <br>
                Telefono: 345 8780186
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.3127208795426!2d11.846459522286345!3d43.470976444739065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bed02a7c87cf1%3A0x631bc558efd2bb7f!2sFitActive%20Arezzo!5e0!3m2!1sit!2sit!4v1684797287247!5m2!1sit!2sit"
            target="map">Club Arezzo</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Einstein 39 <br>
                Città: Arezzo (AR) <br>
                CAP: 52100 <br>
                Telefono: 340 7731798
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.5544363221143!2d8.941419975504019!3d45.49891653112281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786ed8c1071b0f5%3A0xf067215a78096074!2sFitActive%20Arluno!5e0!3m2!1sit!2sit!4v1684797399751!5m2!1sit!2sit"
            target="map">Club Arluno</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Enzo Ferrari 31 <br>
                Città: Arluno (MI) <br>
                CAP: 20004 <br>
                Telefono: 392 6357275
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2825.822327215808!2d8.235634183005743!3d44.906610195890956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478793a19dafffff%3A0xe408734a869e2d57!2sFitActive%20Asti!5e0!3m2!1sit!2sit!4v1684797578524!5m2!1sit!2sit"
            target="map">Club Asti</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Corso Alessandria 426 <br>
                Città: Asti (AT) <br>
                CAP: 14100 <br>
                Telefono: 351 6186205
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1626.5127694330665!2d9.113645102453912!3d45.523037610038266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c196d9412ded%3A0xd778c7cecdc0cf1a!2sFitActive%20Baranzate!5e0!3m2!1sit!2sit!4v1684797770222!5m2!1sit!2sit"
            target="map">Club Baranzate</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Milano 255 <br>
                Città: Baranzate (MI) <br>
                CAP: 20021 <br>
                Telefono: 380 1569808
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.1721600400774!2d2.136268015425259!3d41.37034417926567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4996384211341%3A0x105e8509bda7b3b8!2sFitActive%20Barcelona%20Carrer%20de%20Gav%C3%A0!5e0!3m2!1sit!2sit!4v1684797967567!5m2!1sit!2sit"
            target="map">Club Barcellona</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: <span lang="es">Carrer de Gavà</span> 9 <br>
                Città: Barcellona (Spagna) <br>
                Telefono: 617195623
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24049.913067899146!2d16.860212722242824!3d41.107468201679964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347e9513f947805%3A0x528c8eede39c7996!2sFitActive%20Bari%20Japigia!5e0!3m2!1sit!2sit!4v1684798091195!5m2!1sit!2sit"
            target="map">Club Bari Japigia</a>
        </button>
        <div class="panel">
            <p>
                Centro commerciale Mongolfiera Japigia <br>
                Città: Bari (BA) <br>
                CAP: 70126 <br>
                Telefono: 340 7284221
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24048.937854612494!2d16.81254777431641!3d41.110130700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347e90d745d5799%3A0x57f3c4078b289e79!2sFitActive%20Bari%20Pasteur!5e0!3m2!1sit!2sit!4v1684798203375!5m2!1sit!2sit"
            target="map">Club Bari Pasteur</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Pasteur 6 <br>
                Città: Bari (BA) <br>
                CAP: 70124 <br>
                Telefono: 348 7827663
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20538.35409288291!2d7.5893074228856525!3d45.02610475540531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478815a12e43b1b5%3A0xd3184caedd1e2d55!2sFitActive%20Beinasco!5e0!3m2!1sit!2sit!4v1684798555951!5m2!1sit!2sit"
            target="map">Club Beinasco</a>
        </button>
        <div class="panel">
            <p>
                Centro Commerciale Le Fornaci <br>
                Città: Beinasco (TO) <br>
                CAP: 10092 <br>
                Telefono: 320 8872231
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22291.22853053902!2d9.632706039916066!3d45.70294017052041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781517d4be15c03%3A0x8c9a79f7d5464fe!2sFitActive%20Bergamo%20Canonici!5e0!3m2!1sit!2sit!4v1684798788939!5m2!1sit!2sit"
            target="map">Club Bergamo Canonici</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Passaggio Canonici Lateranensi 11 <br>
                Città: Bergamo (BG) <br>
                CAP: 24121 <br>
                Telefono: 345 1713640
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22291.22853053902!2d9.632706039916066!3d45.70294017052041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478151cd3bfbfed3%3A0xff0aa641cde3261b!2sFitActive%20Bergamo%20via%20Tremana!5e0!3m2!1sit!2sit!4v1684798894381!5m2!1sit!2sit"
            target="map">Club Bergamo Via Tremana</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Tremana 11 <br>
                Città: Bergamo (BG) <br>
                CAP: 24123 <br>
                Telefono: 351 6340199
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.01791963225!2d9.280924275512211!3d45.63037632233687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786bbb2bb1ab6cf%3A0xe776106805cf68ba!2sFitActive%20Biassono!5e0!3m2!1sit!2sit!4v1684798943495!5m2!1sit!2sit"
            target="map">Club Biassono</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Parco 47 <br>
                Città: Biassono (MB) <br>
                CAP: 24123 <br>
                Telefono: 340 3638536
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22761.763941205274!2d11.312488374316402!3d44.51063690000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd371e51d9da5%3A0x150fca5687800e79!2sFitActive%20Bologna%20Creti!5e0!3m2!1sit!2sit!4v1684799540886!5m2!1sit!2sit"
            target="map">Club Bologna Via Creti</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Donato Creti 12/B <br>
                Città: Bologna (BO) <br>
                CAP: 40128 <br>
                Telefono: 375 5479453
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22774.328204736154!2d11.343491574316419!3d44.4784561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e2b516d34cf67%3A0x230657785858673e!2sFitActive%20Bologna%20Via%20Friuli!5e0!3m2!1sit!2sit!4v1684799608182!5m2!1sit!2sit"
            target="map">Club Bologna Via Friuli</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Friuli Venezia Giulia 1 <br>
                Città: Bologna (BO) <br>
                CAP: 40139 <br>
                Telefono: 347 5609356
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8849.030709846606!2d8.452852436401729!3d45.68555147068453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47866d9f06f128b7%3A0x6bc0462ce7d53871!2sFitActive%20Borgomanero!5e0!3m2!1sit!2sit!4v1684799676860!5m2!1sit!2sit"
            target="map">Club Borgomanero</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via G. Matteotti 86 <br>
                Città: Borgomanero (NO) <br>
                CAP: 28021 <br>
                Telefono: 353 4527017
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.4586435513147!2d9.137627283307307!3d45.60142644970987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786be1bb3f248a7%3A0x38f25fa51a200244!2sFitActive%20Bovisio%20Masciago!5e0!3m2!1sit!2sit!4v1684799742897!5m2!1sit!2sit"
            target="map">Club Bovisio Masciago</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Giuseppe di Vittorio 4 <br>
                Città: Bovisio Masciago (MB) <br>
                CAP: 20813 <br>
                Telefono: 345 3964024
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44715.14303310632!2d10.1777915383714!3d45.53631391706823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47819f7c5c4fb4fd%3A0x3585029a4d3e6ac1!2sFitActive%20Brescia%20Margherita%20D&#39;Este!5e0!3m2!1sit!2sit!4v1684800184519!5m2!1sit!2sit"
            target="map">Club Brescia Margherita D'Este</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Giorgione 7 <br>
                Città: Brescia (BS) <br>
                CAP: 25124 <br>
                Telefono: 351 9298418
            </p>
        </div>
        
        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44715.14303310632!2d10.1777915383714!3d45.53631391706823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781776a33835701%3A0x4cf410d9c0a8e5b9!2sFitActive%20Brescia%20Oberdan!5e0!3m2!1sit!2sit!4v1684800241667!5m2!1sit!2sit"
            target="map">Club Brescia Oberdan</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Oberdan 6/C <br>
                Città: Brescia (BS) <br>
                CAP: 25128 <br>
                Telefono: 351 5592989
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44715.14303310632!2d10.1777915383714!3d45.53631391706823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781776a33835701%3A0x4cf410d9c0a8e5b9!2sFitActive%20Brescia%20Oberdan!5e0!3m2!1sit!2sit!4v1684800241667!5m2!1sit!2sit"
            target="map">Club Brescia Orzinuovi</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Orzinuovi 50 <br>
                Città: Brescia (BS) <br>
                CAP: 25125 <br>
                Telefono: 351 6914002
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.761844900215!2d9.117078075500014!3d45.43430193543425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c38ef2b49e5b%3A0x58147af9fc0dc7e!2sFitActive%20Buccinasco!5e0!3m2!1sit!2sit!4v1684800472982!5m2!1sit!2sit"
            target="map">Club Buccinasco</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Mantegna 1 <br>
                Città: Buccinasco (MI) <br>
                CAP: 23883 <br>
                Telefono: 351 9474826
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d137710.80872767812!2d8.737895018105531!3d45.621678856070375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868bfa0063fe61%3A0x390132124a5390d8!2sFitActive%20Busto%20Arsizio!5e0!3m2!1sit!2sit!4v1684800621538!5m2!1sit!2sit"
            target="map">Club Busto Arsizio</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Fagnano Olona 29 <br>
                Città: Busto Arsizio (VA) <br>
                CAP: 21052 <br>
                Telefono: 375 6379318
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3089.7827741425194!2d9.08443057513834!3d39.24780252595419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e737b8b083e2e3%3A0xb437f49f92834d07!2sFitActive%20Cagliari!5e0!3m2!1sit!2sit!4v1684800693988!5m2!1sit!2sit"
            target="map">Club Cagliari</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Viale Elmas 151/B <br>
                Città: Cagliari (CA) <br>
                CAP: 09122 <br>
                Telefono: 392 0171869
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.3867958730266!2d11.168075075402804!3d43.84781103982332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5717a40d5cb7%3A0xfb35a0d9ca2f3f52!2sFitActive%20Calenzano!5e0!3m2!1sit!2sit!4v1684800766920!5m2!1sit!2sit"
            target="map">Club Calenzano</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Vittorio Emanuele 14 <br>
                Città: Cagliari (CA) <br>
                CAP: 09122 <br>
                Telefono: 351 7991343
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364071.4533507358!2d8.729502703973546!3d45.76395330744533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786986fde9d931b%3A0x7ec30a076fac3398!2sFitActive%20Cant%C3%B9!5e0!3m2!1sit!2sit!4v1684800866741!5m2!1sit!2sit"
            target="map">Club Cantù</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Viale Lombardia 81 <br>
                Città: Cantù (CO) <br>
                CAP: 22063 <br>
                Telefono: 349 4152590
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115212.2502609665!2d9.180860641092972!3d45.50216605637295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b7315b31ad9f%3A0x94c9914a0ebd2e16!2sFitActive%20Carugate!5e0!3m2!1sit!2sit!4v1684800947768!5m2!1sit!2sit"
            target="map">Club Carugate</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Guido Rossa 7 <br>
                Città: Carugate (MI) <br>
                CAP: 22063 <br>
                Telefono: 347 7276867
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404323.9277567224!2d10.419599037432395!3d43.88119039264621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d58df035992503%3A0x249345a407731eab!2sFitActive%20Cascina!5e0!3m2!1sit!2sit!4v1684801048757!5m2!1sit!2sit"
            target="map">Club Cascina</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Nugolaio 62 <br>
                Città: Carugate (PI) <br>
                CAP: 56021 <br>
                Telefono: 333 4844022
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177002.04237902883!2d8.661542957114097!3d45.71708617129041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786639d146338f9%3A0xc25ba43e1c96465d!2sFitActive%20Casorate%20Sempione!5e0!3m2!1sit!2sit!4v1684801132780!5m2!1sit!2sit"
            target="map">Club Casorate</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Sempione 27 <br>
                Città: Casorate (VA) <br>
                CAP: 21011 <br>
                Telefono: 351 8367572
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2833.7714896119296!2d8.065316475457395!3d44.74467858115898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4787f5cfae645f8b%3A0x47c79b3e9771ad9a!2sFitActive%20Castagnito!5e0!3m2!1sit!2sit!4v1684801230195!5m2!1sit!2sit"
            target="map">Club Castagnito</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Neive 69/A <br>
                Città: Castagnito (CN) <br>
                CAP: 12050 <br>
                Telefono: 391 7267825
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.403488028465!2d11.929203983342923!3d45.682874144264225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4779294b88365b95%3A0xb29e12d002ebb890!2sFitActive%20Castelfranco%20Veneto!5e0!3m2!1sit!2sit!4v1684801305025!5m2!1sit!2sit"
            target="map">Club Castelfranco Veneto</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Dei Faggi 16 <br>
                Città: Castelfranco Veneto (VI) <br>
                CAP: 31033 <br>
                Telefono: 351 2402271
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.1124568650116!2d8.871522775510863!3d45.608384023808036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868d25ca6fe9c3%3A0xa386ef6a1f78bf28!2sFitActive%20Castellanza!5e0!3m2!1sit!2sit!4v1684801489023!5m2!1sit!2sit"
            target="map">Club Castellanza</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Asti 5 <br>
                Città: Castellanza (VA) <br>
                CAP: 21053 <br>
                Telefono: 351 3939508
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.5390596682473!2d8.609276675517835!3d45.72028321631706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47866ff633ef54bd%3A0xe8333283f82ff4f0!2sFitActive%20Castelletto%20Sopra%20Ticino!5e0!3m2!1sit!2sit!4v1684801575881!5m2!1sit!2sit"
            target="map">Club Castelletto sopra Ticino</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Tripolitania 5 <br>
                Città: Castelletto sopra Ticino (NO) <br>
                CAP: 28053 <br>
                Telefono: 339 8800544
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d131483.83291396248!2d12.184952838852864!3d44.12965895000822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca5ed1d3cf7cf%3A0xa3473fcf2321bc93!2sFitActive%20Cesena!5e0!3m2!1sit!2sit!4v1684801729846!5m2!1sit!2sit"
            target="map">Club Cesena</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Cavalcavia 55 <br>
                Città: Cesena (FC) <br>
                CAP: 47521 <br>
                Telefono: 349 8988252
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.9828939950644!2d9.210994683285247!3d45.55066965310025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b97c3f54ef35%3A0xbc6c13c18f60814c!2sFitActive%20Cinisello%20Balsamo!5e0!3m2!1sit!2sit!4v1684801811743!5m2!1sit!2sit"
            target="map">Club Cinisello Balsamo</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Monfalcone 15 <br>
                Città: Cinisello Balsamo (MI) <br>
                CAP: 20092 <br>
                Telefono: 342 8169531
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.701938342775!2d8.977977075513879!3d45.65680712056807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478691cf0bacf503%3A0xf2c208d55636a853!2sFitActive%20Cislago!5e0!3m2!1sit!2sit!4v1684801886946!5m2!1sit!2sit"
            target="map">Club Cislago</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Via Battisti 1473 <br>
                Città: Cislago (VA) <br>
                CAP: 21040 <br>
                Telefono: 351 8469286
            </p>
        </div>

        <button class="address">
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.701938342775!2d8.977977075513879!3d45.65680712056807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478691cf0bacf503%3A0xf2c208d55636a853!2sFitActive%20Cislago!5e0!3m2!1sit!2sit!4v1684801886946!5m2!1sit!2sit"
            target="map">Club Cologno Monzese</a>
        </button>
        <div class="panel">
            <p>
                Indirizzo: Viale Lombardia angolo <br>
                Città: Cologno Monzese (MI) <br>
                CAP: 20093 <br>
                Telefono: 388 3585530
            </p>
        </div>
        
    </div>


    <p>
 

            Club Cormano Via Rodari 25 Cormano (MI) - 3515076731
            Club Curno Via Fermi 56 - 3486057477
            Club Cusago Viale Europa 30  - 3484512474
            Club Forlì Via Tripoli 3 - 3517099318
            Club Genova Campi Via Renata Bianchi 137  - 3457663738
            Club Genova Piazza Dante Piazza Dante Genova (GE) - 3924015584
            Club Lainate Via Don Luigi Sturzo 16 - 3339247332
            Club Lecco Via Belfiore Via Belfiore 31  - 3714186759
            Club Legnano Via Novara snc 20025 Legnano (MI) - 3515578678
            Club Magenta Strada Robecco 72  - 3917355005
            Club Marcon Via Enrico Mattei 9 - 3518196558
            Club Milano Ripamonti Via Attendolo 11 - 3278455663
            Club Milano Rossi Via Pellegrino Rossi 88  - 3341425498
            Club Milano Sismondi Via Giancarlo Sismondi 43  - 3452588275
            Club Milano Stelvio Viale Stelvio 47  - 3519315708
            Club Modena Via San Giovanni Bosco 270  - 3477550946
            Club Moncalieri Corso Savona 69 - 3452243303
            Club Montano Lucino Via Giosuè Carducci 10 - 3457320453
            Club Montesilvano Corso Umberto I 32 - 65015 Montesilvano (PE) - 3489267604
            Club Monza Zara Via Zara 9 - 3245592201
            Club Napoli Birreria Piazza Madonna dell'Arco 12 - 3480314887
            Club Nerviano Via Canova 10 Nerviano (MI) - 3517494133
            Club Novara Camoletti Via Camoletti 13 Novara (NO) - 3516095511
            Club Paderno Dugnano Via Reali 125 - 3478546231
            Club Padova Via Vitale Tedeschi 7 - 3245852709
            Club Pantigliate Via Alcide De Gasperi 28 - 3770914076
            Club Parma Via La Spezia 187 - 3516535881
            Club Pavia Via Goffredo Mameli 3 - 3312725745
            Club Pero Via Isaac Newton 8 - 3913330972
            Club Pescara Via Nazionale Adriatica 211  - 3773815486
            Club Pessano Via Angelo Vassallo snc  - 3516419941
            Club Piacenza   Via Emilia 100  - 3714296285
            Club Pinerolo Via Vecchia di Buriasco 12  - 3883745015
            Club Pontecagnano Via Antonio Pacinotti 90 - 3485307273
            Club Potenza Via De Coubertin 4 - 3899115561
            Club Reggio Emilia Viale Martiri di Piazza Tien An Men 2/Y  - 3922243322
            Club Reggio Emilia Via Fattori Via Fattori16 Reggio Emilia - 3883434664
            Club Robbiate Via Milano 52 - 3895460171
            Club Roma Boccea Via Boccea 464 - 3519528231
            Club Roma Pisana Via della Consolata 130 Roma (RO) - 3516919631
            Club Roma Portuense Via Leonardo Greppi 14 - 3756470421
            Club Salerno Via Raffaele Cantarella 1 - 3791625891
            Club Saluzzo Via Vittime di Bologna 39 - 3892519559
            Club San Dona Via Vittorio Veneto 112 - 3516549085
            Club San Giuliano Milanese Via Tolstoj 79 - 3518694555
            Club Saronno Via Ungaretti 34 - 3920643875
            Club Savona Piazza Pergolesi  - 3421342836
            Club Segrate Via Schering 3 - 3471875619
            Club Seregno Via Montorfano 98 - 3519465116
            Club Settimo Torinese Via Regio Parco 114/A  - 3924441078
            Club Seveso Via Sabotino 58 - 0362528934
            Club Torino Bruno Via Giordano Bruno 206 - 3924446245
            Club Torino Corso Svizzera Corso Svizzera 185  - 3917602644
            Club Torino Via Botticelli Via Sandro Botticelli 21 - 10155 Torino (TO) - 3278142813
            Club Torre Annunziata Via Vittorio Veneto 238 - 3479969431
            Club Treviso Viale IV Novembre 93/a  - 3519008335
            Club Trezzo Via Giuseppe Mazzini 46 - 3517408954
            Club Varese Via Belforte 7D - 3925122720
            Club Venaria Corso Lombardia  - 3757220458
            Club Vercelli Corso Avogadro di Quaregna snc - 3515386912
            Club Verdellino Corso Europa 10 - 3517030381
            Club Vertemate Via Nazionale 3 Vertemate con Minoprio CO - 3518385220
            Club Vicenza Via dei Pioppi50 - Vicenza (VC) - 3440192656
            Club Vigevano Corso della Repubblica 16 - 3388108495
            Club Voghera Strada Grippina 168  - 3515217025
            Club Zibido Strada Provinciale dei Giovi 1 - 3911600081
    </p>
    </div>

    <script src="js/searchbar_sedi.js"></script>
    <script src="js/club_list_sedi.js"></script>
</body>



