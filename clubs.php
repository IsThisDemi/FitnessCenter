<?php require_once "utilityphp/header.php";?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Clubs-FitnessCenter</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="FitnessCenter palestra fitness sedi"/>
    <meta name="description" content="Questa pagina continene una lista delle sedi attualmente presenti con relativa posizione geografica su una mappa." />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mini.css"  media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
    <link rel="stylesheet" href="css/print.css" media="print" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body id="SediPage" >

    <?php
       echo genera_header("clubs");               
    ?>

    <div id="clubs_content">

        <div id="search_bar">
            <div id="search_title">
                <p>Trova il club più vicino a te</p>
            </div>
            <input id= "searchbar_club" type="text" placeholder="Inserisci città" name="searchbar_club" onkeyup="search_club()">
        </div>
            
        <div id="google_map">
            <iframe id="map" 
                title="Mappa dove viene indicata la posizone geografica della palestra" name="map" 
                src="https://www.google.com/maps/d/u/0/embed?mid=1D7uw8ihHL2XQgWA_KycFw-QsIoP7Fws&ehbc=2E312F"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div id="addresses_container">
            <h2 lang="en">FitnessCenter Clubs</h3>
            <div id="addresses_list">
                    
                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.9753403992813!2d15.167151215312717!3d37.602739379791224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313f9628d3958f5%3A0xbac6b45e7a9bae99!2sFitActive%20Acireale!5e0!3m2!1sit!2sit!4v1684969343268!5m2!1sit!2sit"
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

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.131518835751!2d9.170745215560254!3d45.547679779102076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786bfae02924da7%3A0xfe3d600e617078da!2sFitActive%20Cormano!5e0!3m2!1sit!2sit!4v1684836974718!5m2!1sit!2sit"
                        target="map">Club Cormano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Rodari 25 <br>
                            Città: Cormano (MI) <br>
                            CAP: 20032 <br>
                            Telefono: 351 5076731
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.995910654826!2d9.621691976041287!3d45.691054071078604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478153dab81a6387%3A0x48df3a4af1ae8a0a!2sFitActive%20Curno!5e0!3m2!1sit!2sit!4v1684837055379!5m2!1sit!2sit"
                        target="map">Club Curno</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Fermi 56 <br>
                            Città: Curno (BG) <br>
                            CAP: 24035 <br>
                            Telefono: 348 6057477
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72604.26292488526!2d9.061118031573175!3d45.46382435021223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786e91ffbfdeadd%3A0x9dba5ea8a6acbcf6!2sFitActive%20Cusago!5e0!3m2!1sit!2sit!4v1684837137182!5m2!1sit!2sit"
                        target="map">Club Cusago</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Viale Europa 30 <br>
                            Città: Cusago (MI) <br>
                            CAP: 20047 <br>
                            Telefono: 348 4512474
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2858.9211270671417!2d12.048655510429448!3d44.229282214863105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b572c5b869de9%3A0xcfc24f655bb0969c!2sFitActive%20Forl%C3%AC!5e0!3m2!1sit!2sit!4v1684837189553!5m2!1sit!2sit"
                        target="map">Club Forlì</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Tripoli 3 <br>
                            Città: Forlì (FC) <br>
                            CAP: 47122 <br>
                            Telefono: 351 7099318
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22796.50234466219!2d8.84758791083983!3d44.4216166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d3419e1f68293d%3A0xa3d7003ec7865df2!2sFitActive%20Genova%20Campi!5e0!3m2!1sit!2sit!4v1684837283361!5m2!1sit!2sit"
                        target="map">Club Genova Campi</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Renata Bianchi 137 <br>
                            Città: Genova (GE) <br>
                            CAP: 16152 <br>
                            Telefono: 345 7663738
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22803.263430756404!2d8.899237610839844!3d44.40427429999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d343406fd4b9dd%3A0xe85aceaf2e77996b!2sFitActive%20Genova%20Piazza%20Dante!5e0!3m2!1sit!2sit!4v1684837348323!5m2!1sit!2sit"
                        target="map">Club Genova Piazza Dante</a>
                    </button>
                    <div class="panel">
                        <p>
                            Piazza Dante <br>
                            Città: Genova (GE) <br>
                            CAP: 16121 <br>
                            Telefono: 392 4015584
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.73153748857!2d9.0343641105257!3d45.57583702586434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786948322c56471%3A0x491d1f401db4d25e!2sFitActive%20Lainate!5e0!3m2!1sit!2sit!4v1684837388120!5m2!1sit!2sit"
                        target="map">Club Lainate</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Don Luigi Sturzo 16 <br>
                            Città: Lainate (MI) <br>
                            CAP: 20020 <br>
                            Telefono: 333 9247332
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2778.8808693630303!2d9.405213610545866!3d45.85368350724877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47840388bd0c0681%3A0x9afc977ede8a5ca6!2sFitActive%20Lecco!5e0!3m2!1sit!2sit!4v1684837597338!5m2!1sit!2sit"
                        target="map">Club Lecco</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Belfiore 31 <br>
                            Città: Lecco (LC) <br>
                            CAP: 23900 <br>
                            Telefono: 371 4186759
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44657.10467036071!2d8.836719764285423!3d45.60925650867885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47868dc25f009cd5%3A0x44d17922ab12242d!2sFitActive%20Legnano!5e0!3m2!1sit!2sit!4v1684837665711!5m2!1sit!2sit"
                        target="map">Club Legnano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Novara snc <br>
                            Città: Legnano (MI) <br>
                            CAP: 20025 <br>
                            Telefono: 351 5578678
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.014896365614!2d8.88109811051657!3d45.449355934310326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786f1cea12c205f%3A0x462289b9806d4797!2sFitActive%20Magenta!5e0!3m2!1sit!2sit!4v1684837711069!5m2!1sit!2sit"
                        target="map">Club Magenta</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Strada Robecco 72 <br>
                            Città: Magenta (MI) <br>
                            CAP: 20013 <br>
                            Telefono: 391 7355005
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41887.15222160903!2d12.32143171983156!3d45.55601424786328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47794d40c545da03%3A0x64e4f04a947b51cb!2sFitActive%20Marcon!5e0!3m2!1sit!2sit!4v1684837760781!5m2!1sit!2sit"
                        target="map">Club Marcon</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Enrico Mattei 9 <br>
                            Città: Marcon (VE) <br>
                            CAP: 30020 <br>
                            Telefono: 351 8196558
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89606.01673185921!2d9.056514943359367!3d45.42571100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c5eafe0c49f5%3A0xf1a0b20a186c418f!2sFitActive%20Milano%20Ripamonti!5e0!3m2!1sit!2sit!4v1684837855810!5m2!1sit!2sit"
                        target="map">Club Milano Ripamonti</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Attendolo 11 <br>
                            Città: Milano (MI) <br>
                            CAP: 20141 <br>
                            Telefono: 327 8455663
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89464.69442111535!2d9.029059843359384!3d45.514674199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c113e6e654d5%3A0x232bb5b10d1be87d!2sFitActive%20Milano%20Via%20Pellegrino%20Rossi!5e0!3m2!1sit!2sit!4v1684837898149!5m2!1sit!2sit"
                        target="map">Club Milano Rossi</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Pellegrino Rossi 88 <br>
                            Città: Milano (MI) <br>
                            CAP: 20161 <br>
                            Telefono: 334 1425498
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89464.69442111535!2d9.029059843359384!3d45.514674199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c70ec67d592d%3A0x19ee320cb12a8cbc!2sFitActive%20Milano%20Via%20Sismondi!5e0!3m2!1sit!2sit!4v1684837949104!5m2!1sit!2sit"
                        target="map">Club Milano Sismondi</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Giancarlo Sismondi 43 <br>
                            Città: Milano (MI) <br>
                            CAP: 20133 <br>
                            Telefono: 345 2588275
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89464.69442111535!2d9.029059843359384!3d45.514674199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c16e9173b9ab%3A0xa1cd9761c040fd5b!2sFitActive%20Milano%20Stelvio!5e0!3m2!1sit!2sit!4v1684837990849!5m2!1sit!2sit"
                        target="map">Club Milano Stelvio</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Viale Stelvio 47 <br>
                            Città: Milano (MI) <br>
                            CAP: 20159 <br>
                            Telefono: 351 9315708
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.03425745551!2d7.704439500000001!3d44.983615199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47880dcf4f6222b5%3A0x3843bd1ee2cae09a!2sFitActive%20Moncalieri!5e0!3m2!1sit!2sit!4v1684841820965!5m2!1sit!2sit"
                        target="map">Club Moncalieri</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Savona 69 <br>
                            Città: Moncalieri (TO) <br>
                            CAP: 10024 <br>
                            Telefono: 345 2243303
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.3358500489503!2d9.0475937!3d45.784498899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869d5efd3d4533%3A0x4349e70ef5d435ce!2sFitActive%20Montano%20Lucino!5e0!3m2!1sit!2sit!4v1684841927499!5m2!1sit!2sit"
                        target="map">Club Montano Lucino</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Giosuè Carducci <br>
                            Città: Montano Lucino (CO) <br>
                            CAP: 22070 <br>
                            Telefono: 345 7320453
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2940.7727246344243!2d14.146425899999997!3d42.5176376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1331a5d12cdaac27%3A0x5f6e679c980a5549!2sFitActive%20Montesilvano!5e0!3m2!1sit!2sit!4v1684842056961!5m2!1sit!2sit"
                        target="map">Club Montesilvano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Umberto I 32 <br>
                            Città: Montesilvano (PE) <br>
                            CAP: 65015 <br>
                            Telefono: 348 9267604
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.2604461006836!2d9.269027!3d45.56520090000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b85357d78259%3A0x56f8e30e18d6e6b5!2sFitActive%20Monza%20-%20via%20Zara!5e0!3m2!1sit!2sit!4v1684842171982!5m2!1sit!2sit"
                        target="map">Club Monza</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Zara 9 <br>
                            Città: Monza (MB) <br>
                            CAP: 20900 <br>
                            Telefono: 324 5592201
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.3245182838164!2d14.257296499999999!3d40.88669579999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b079e324663d7%3A0x45def22ec365448d!2sFitActive%20Napoli!5e0!3m2!1sit!2sit!4v1684842239080!5m2!1sit!2sit"
                        target="map">Club Napoli</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Piazza Madonna dell'Arco 12 <br>
                            Città: Napoli (NP) <br>
                            CAP: 80145 <br>
                            Telefono: 348 0314887
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.898809815984!2d8.9828142!3d45.5523611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869342d9b38be9%3A0xec90c9b2c317bcca!2sFitActive%20Nerviano!5e0!3m2!1sit!2sit!4v1684842334330!5m2!1sit!2sit"
                        target="map">Club Nerviano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Canova 10 <br>
                            Città: Nerviano (MI) <br>
                            CAP: 20014 <br>
                            Telefono: 351 7494133
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.642816222822!2d8.6073903!3d45.43670110000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47865b71b8ec004f%3A0xd53cc676ea0a8db6!2sFitActive%20Novara!5e0!3m2!1sit!2sit!4v1684842405837!5m2!1sit!2sit"
                        target="map">Club Novara</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Camoletti 13 <br>
                            Città: Novara (NO) <br>
                            CAP: 28100 <br>
                            Telefono: 351 6095511
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.625806435844!2d9.1451205!3d45.577963000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786be4a2578188b%3A0xddbee49337b7c846!2sFitActive%20Paderno%20Dugnano!5e0!3m2!1sit!2sit!4v1684842537397!5m2!1sit!2sit"
                        target="map">Club Paderno Dugnano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Risorgimento 72 <br>
                            Città: Senago (MI) <br>
                            CAP: 20037 <br>
                            Telefono: 347 8546231
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4317.1091472638445!2d11.891669380865132!3d45.44363153752601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ed1817b2d7f0d%3A0x297dc603b65e84bb!2sFitActive%20Padova!5e0!3m2!1sit!2sit!4v1684842602858!5m2!1sit!2sit"
                        target="map">Club Padova</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Vitale Tedeschi 7 <br>
                            Città: Padova (PD) <br>
                            CAP: 35133 <br>
                            Telefono: 324 5852709
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.7979045374877!2d10.291113299999997!3d44.7849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47806b0170d473ad%3A0x5839df64326294a6!2sFitActive%20Parma!5e0!3m2!1sit!2sit!4v1684842656168!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        target="map">Club Parma</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via La Spezia 187 <br>
                            Città: Parma (PR) <br>
                            CAP: 43126 <br>
                            Telefono: 351 6535881
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.406839857656!2d9.081707!3d45.5018882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786eb65883c997d%3A0xbf8fd74dac61a69d!2sFitActive%20Pero!5e0!3m2!1sit!2sit!4v1684842963478!5m2!1sit!2sit"
                        target="map">Club Pero</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Isaac Newton 8 <br>
                            Città: Pero (MI) <br>
                            CAP: 20016 <br>
                            Telefono: 391 3330972
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.2432253442275!2d14.184562600000001!3d42.48638150000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1331a55b77970137%3A0x36ac023be11ce39b!2sFitActive%20Pescara%20Nord!5e0!3m2!1sit!2sit!4v1684843059055!5m2!1sit!2sit"
                        target="map">Club Pescara</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Nazionale Adriatica 211 <br>
                            Città: Pescara (PE) <br>
                            CAP: 65125 <br>
                            Telefono: 377 3815486
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.058237151227!2d9.3913514!3d45.549154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b7138b276adb%3A0x46ce4825e8e89dbb!2sFitActive%20Pessano%20con%20Bornago!5e0!3m2!1sit!2sit!4v1684843228037!5m2!1sit!2sit"
                        target="map">Club Pessano con Bornago</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Angelo Vassallo <br>
                            Città: Pessano con Bornago (MI) <br>
                            CAP: 20060 <br>
                            Telefono: 351 6419941
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24580.941745038504!2d9.682755984174833!3d45.07356535139188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4780e7fe697ebb13%3A0x525136c5ab45ad8d!2sFitActive%20Piacenza!5e0!3m2!1sit!2sit!4v1684843416372!5m2!1sit!2sit"
                        target="map">Club Piacenza</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Emilia 100 <br>
                            Città: Piacenza (LO) <br>
                            CAP: 20060 <br>
                            Telefono: 371 4296285
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.0900627381184!2d7.347440899999999!3d44.8808161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478824fa21c7fb2d%3A0x8f100264e9553973!2sFitActive%20Pinerolo!5e0!3m2!1sit!2sit!4v1684843710378!5m2!1sit!2sit"
                        target="map">Club Pinerolo</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Vecchia di Buriasco 12 <br>
                            Città: Pinerolo (TO) <br>
                            CAP: 10064 <br>
                            Telefono: 388 3745015
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.7526259050237!2d14.906168899999999!3d40.6353371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133bdd3c77c62aa7%3A0xdc47ed2f461026f0!2sFitActive%20Pontecagnano!5e0!3m2!1sit!2sit!4v1684843994700!5m2!1sit!2sit"
                        target="map">Club Pontecagnano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Antonio Pacinotti 90 <br>
                            Città: Pontecagnano (SA) <br>
                            CAP: 84098 <br>
                            Telefono: 348 5307273
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.8187645136377!2d15.8005769!3d40.6559253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1338e33bb8432ffb%3A0xff8ef3be7e6e7b3b!2sFitActive%20Potenza!5e0!3m2!1sit!2sit!4v1684844046352!5m2!1sit!2sit"
                        target="map">Club Potenza</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via De Coubertin 4 <br>
                            Città: Potenza (PZ) <br>
                            CAP: 84098 <br>
                            Telefono: 389 9115561
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45361.67142061023!2d10.54705717910156!3d44.71747949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801bfb44566b7f%3A0xc2c40f39911c1a4a!2sFitActive%20Reggio%20Emilia!5e0!3m2!1sit!2sit!4v1684844213961!5m2!1sit!2sit"
                        target="map">Club Reggio Emilia Martiri</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Viale Martiri di Piazza Tien An Men 2/Y <br>
                            Città: Reggio Emilia (RE) <br>
                            CAP: 42124 <br>
                            Telefono: 392 2243322
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.874122203932!2d10.65252579999999!3d44.68134980000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801ddcc2b74ee5%3A0x933b0eeaf5bef4b6!2sFitActive%20Reggio%20Emilia%20Fattori!5e0!3m2!1sit!2sit!4v1684844276563!5m2!1sit!2sit"
                        target="map">Club Reggio Emilia Fattori</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Fattori 16 <br>
                            Città: Reggio Emilia (RE) <br>
                            CAP: 42122 <br>
                            Telefono: 388 3434664
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47507.83601850856!2d12.36807797910157!3d41.90920449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f5fb0e2db45cb%3A0x5fadcc8a1113eb04!2sFitActive%20Roma%20Boccea!5e0!3m2!1sit!2sit!4v1684844347034!5m2!1sit!2sit"
                        target="map">Club Roma Boccea</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Boccea 464 <br>
                            Città: Roma (RM) <br>
                            CAP: 00166 <br>
                            Telefono: 351 9528231
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.7918191745894!2d12.41726729999999!3d41.87582530000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f5fb3c30ceb47%3A0xe07cc6b330bd89c9!2sFitActive%20Roma%20Pisana!5e0!3m2!1sit!2sit!4v1684844451626!5m2!1sit!2sit"
                        target="map">Club Roma Pisana</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via della Consolata 130 <br>
                            Città: Roma (RM) <br>
                            CAP: 00163 <br>
                            Telefono: 379 1625891
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.3784642799346!2d12.460407300000002!3d41.86320310000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13258bb75e1c3bb1%3A0xbf760237ac7a8f92!2sFitActive%20Roma%20Portuense!5e0!3m2!1sit!2sit!4v1684844545418!5m2!1sit!2sit"
                        target="map">Club Roma Portuense</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Leonardo Greppi 14 <br>
                            Città: Roma (RM) <br>
                            CAP: 00149 <br>
                            Telefono: 375 6470421
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.091574244676!2d14.798051200000002!3d40.671951199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133bc39d95b9bc7b%3A0x5816a37f3f8674f0!2sFitActive%20Salerno!5e0!3m2!1sit!2sit!4v1684844617661!5m2!1sit!2sit"
                        target="map">Club Salerno</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Raffaele Cantarella 1 <br>
                            Città: Salerno (SA) <br>
                            CAP: 83133 <br>
                            Telefono: 379 1625891
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.1753240381263!2d7.500580899999999!3d44.6547695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cd49168b6eeb2d%3A0x1f846e6c023275ce!2sFitActive%20Saluzzo!5e0!3m2!1sit!2sit!4v1684844684102!5m2!1sit!2sit"
                        target="map">Club Saluzzo</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Vittime di Bologna 39 <br>
                            Città: Saluzzo (CN) <br>
                            CAP: 12037 <br>
                            Telefono: 389 2519559
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.6530545813152!2d9.049654799999999!3d45.617615699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869400c2ac72f1%3A0xbb6dd6d82b713c8e!2sFitActive%20Saronno!5e0!3m2!1sit!2sit!4v1684844743825!5m2!1sit!2sit"
                        target="map">Club Saronno</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Ungaretti 34 <br>
                            Città: Saronno (VA) <br>
                            CAP: 21047 <br>
                            Telefono: 392 0643875
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.4384924636156!2d8.476475200000001!3d44.300935300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d2e3aaed92fbdb%3A0xf9b6aab5f1413a32!2sFitActive%20Savona!5e0!3m2!1sit!2sit!4v1684844812410!5m2!1sit!2sit"
                        target="map">Club Savona</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Vitorio veneto 3 <br>
                            Città: Savona (SV) <br>
                            CAP: 17100 <br>
                            Telefono: 342 1342836
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.7115600718216!2d7.655250199999999!3d45.0307805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4788139e390ae2e3%3A0x5472b6ad75243e16!2sFitActive%20Torino%20Via%20Giordano%20Bruno!5e0!3m2!1sit!2sit!4v1684844962180!5m2!1sit!2sit"
                        target="map">Club Torino Bruno</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Giordano Bruno 206 <br>
                            Città: Torino (TO) <br>
                            CAP: 10134 <br>
                            Telefono: 392 4446245
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90136.82604519071!2d7.589519058203125!3d45.09033909999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886db2b0a5d747%3A0x2b98ef86fef61ba0!2sFitActive%20Torino%20Corso%20Svizzera!5e0!3m2!1sit!2sit!4v1684845010510!5m2!1sit!2sit"
                        target="map">Club Torino Corso Svizzera</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Svizzera 185 <br>
                            Città: Torino (TO) <br>
                            CAP: 10149 <br>
                            Telefono: 391 7602644
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2816.14413213369!2d7.697842099999994!3d45.10314619999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d9bba6c32af%3A0xaa4b971ac3e68519!2sFitActive%20Torino%20Botticelli!5e0!3m2!1sit!2sit!4v1684845062735!5m2!1sit!2sit"
                        target="map">Club Torino Botticelli</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Sandro Botticelli 21 <br>
                            Città: Torino (TO) <br>
                            CAP: 10155 <br>
                            Telefono: 327 8142813
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.4332012384634!2d12.270530299999999!3d45.6622031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4779492d21acfb79%3A0x2b150977fe1be193!2sFitActive%20Treviso!5e0!3m2!1sit!2sit!4v1684845117559!5m2!1sit!2sit"
                        target="map">Club Treviso</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Viale IV Novembre 93/a <br>
                            Città: Treviso (TV) <br>
                            CAP: 31100 <br>
                            Telefono: 351 9008335
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.3619627357275!2d9.517396999999999!3d45.6033696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47814dd91b81e091%3A0xbc46ec0ea11a4a9a!2sFitActive%20Trezzo%20sull&#39;Adda!5e0!3m2!1sit!2sit!4v1684845174459!5m2!1sit!2sit"
                        target="map">Club Trezzo</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Giuseppe Mazzini 46 <br>
                            Città: Trezzo sull'Adda (MI) <br>
                            CAP: 20056 <br>
                            Telefono: 351 7408954
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.4499328584097!2d8.8377555!3d45.8222737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478681cde00f79c1%3A0x21e48afa31106cf1!2sFitActive%20Varese!5e0!3m2!1sit!2sit!4v1684862465083!5m2!1sit!2sit"
                        target="map">Club Varese</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via Belforte 7D <br>
                            Città: Varese (VA) <br>
                            CAP: 21100 <br>
                            Telefono: 392 5122720
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.4499328584097!2d8.8377555!3d45.8222737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478681cde00f79c1%3A0x21e48afa31106cf1!2sFitActive%20Varese!5e0!3m2!1sit!2sit!4v1684862465083!5m2!1sit!2sit"
                        target="map">Club Venaria Reale</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Toscana 1 <br>
                            Città: Venaria (TO) <br>
                            CAP: 10078 <br>
                            Telefono: 375 7220458
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11222.839785351087!2d8.398067567628015!3d45.31428450734487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47864d905934f45d%3A0xaa6a58a78a74c5cd!2sFitActive%20Vercelli!5e0!3m2!1sit!2sit!4v1684862571795!5m2!1sit!2sit"
                        target="map">Club Vercelli</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso Avogadro di Quaregna snc <br>
                            Città: Vercelli (VC) <br>
                            CAP: 10078 <br>
                            Telefono: 351 5386912
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.0392137994363!2d11.497995710522343!3d45.52941642896614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f3183cd4198af%3A0x175e85405dfa720d!2sFitActive%20Vicenza!5e0!3m2!1sit!2sit!4v1684862621013!5m2!1sit!2sit"
                        target="map">Club Vicenza</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Via dei Pioppi 50 <br>
                            Città: Vicenza (VC) <br>
                            CAP: 36100 <br>
                            Telefono: 344 0192656
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.6580635444034!2d8.851177510506899!3d45.31533244324039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786fda82396fca7%3A0x16ee2ea92c34a7df!2sFitActive%20Vigevano!5e0!3m2!1sit!2sit!4v1684862690228!5m2!1sit!2sit"
                        target="map">Club Vigevano</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Corso della Repubblica 16 <br>
                            Città: Vigevano (PV) <br>
                            CAP: 27029 <br>
                            Telefono: 338 8108495
                        </p>
                    </div>

                    <button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2803.509175867891!2d9.129083610510023!3d45.358719340351605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786dd5e7f08907b%3A0xa6ad446b260f0ed8!2sFitActive%20Zibido%20San%20Giacomo!5e0!3m2!1sit!2sit!4v1684862747155!5m2!1sit!2sit"
                        target="map">Club Zibido</a>
                    </button>
                    <div class="panel">
                        <p>
                            Indirizzo: Strada Provinciale dei Giovi 1 <br>
                            Città: Zibido San Giacomo (MI) <br>
                            CAP: 20058 <br>
                            Telefono: 391 1600081
                        </p>
                    </div> 

                </div>
            </div>
        </div>
    </div>
    
    
    <?php
        include_once "utilityphp/footer.php";                
    ?>

    <script src="js/searchbar_sedi.js"></script>
    <script src="js/club_list_sedi.js"></script>
</body>
</html>



<!--

<button class="address">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.9753403992813!2d15.167151215312717!3d37.602739379791224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313f9628d3958f5%3A0xbac6b45e7a9bae99!2sFitActive%20Acireale!5e0!3m2!1sit!2sit!4v1684969343268!5m2!1sit!2sit"
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
                    
-->