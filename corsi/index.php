<?php require_once "../utilityphp/header.php";
//Connessione al database
$host = "localhost";
$username = "root";
$pass = "";
$database = "palestra";
$conn = mysqli_connect($host, $username, $pass, $database) or die(mysqli_error());

//Query per ottenere il numero di categorie
$sql = "SELECT * from categorie";
if ($result = mysqli_query($conn, $sql)) {
    $numero_categorie = mysqli_num_rows($result);
}

//Ottengo numero di corsi
 //Query per ottenere il numero di categorie
$sql = "SELECT * from corsi";
if ($result = mysqli_query($conn, $sql)) {
    $numero_corsi = mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">

    <title>Corsi</title>

    <meta name="description" content="Questa pagina continene una lista dei corsi fornita dalla palestra e una loro breve descrizione.">
    <meta name="keywords" content="corsi, palestra, yoga, pilates, zumba, body building, spinning, step">
    <meta name="author" content="Nome Palestra">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/mini.css" media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
    <link rel="stylesheet" href="css/print.css" media="print" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/corsi.js"></script>
</head>

<body>
    <section>
        <div class="container">
            <video class="video-background" autoplay muted playsinline preload="auto">
                <source src="https://player.vimeo.com/progressive_redirect/playback/787631395/rendition/1080p/file.mp4?loc=external&amp;signature=61fc2002eacfa849cd11c063b1e487d3a25314bf5d41d73e5681328af84d53aa" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay">
                <h1>Scopri i nostri corsi</h1>
                <p>Esplora le tue passioni con <?php echo $numero_corsi; ?> corsi tra cui scegliere</p>
            </div>
        </div>

        <h2>Un corso per ogni tuo obiettivo</h2>
        <h3>Forza</h3>
        <p>Ogni allenamento è pensato per sviluppare in modo mirato le diverse sfumature della dimensione “forza”, in armonia con
            le necessità del corpo.</p>
        <h3>Equilibrio</h3>
        <p>Allenarsi per ritrovare una maggiore serenità interiore, mettendo al centro di tutto proprio il “potere della mente” che
            agisce sul corpo.</p>
        <h3>Resistenza</h3>
        <p>Ottimizzare i risultati di allenamento in poco tempo è possibile, razionalizzando l'uso della forza e mantenendo alta
            l'intensità.</p>
        <h3>Stabilità</h3>
        <p>Stabilità è soprattutto ricerca del benessere fisico, sentire le articolazioni che funzionano, i muscoli che lavorano, e
            la testa che segue questo percorso.</p>
        <div id="corsi">
            <div class="flex-container">
                <?php
                for ($i = 1; $i <= $numero_categorie; $i++) {
                    //Query per ottenere il le info della categoria
                    $sql = "SELECT * FROM `categorie` WHERE id_categoria = '$i'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $categoria = $row['nome_cat'];
                    $immagine_categoria = $row['immagine'];
                    $alt = $row['alt'];

                    //Query per ottenere il numero di corsi con quella categoria
                    $sql = "SELECT COUNT(nome_corso) AS numero_corsi FROM corsi WHERE id_categoria = '$i'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $numero_corsi = $row['numero_corsi'];

                    //Genero le box contenenti i dati
                    echo '<a class="unstyled" href="../corsi/categoria.php?id=' . $i . '">
                                <article class="article-wrapper">
                                    <div class="rounded-lg container-project">
                                        <div class="project-image">
                                            <img src="../img/corsi/' . $immagine_categoria . '" alt="' . $alt . '">
                                        </div>
                                    </div>
                                    <div class="project-info">
                                        <div class="flex-pr">
                                            <div class="project-title text-nowrap">' . $categoria . '</div>
                                        </div>
                                        <div class="project-text text-nowrap">' . $numero_corsi . ' corsi</div>
                                    </div>
                                </article>
                            </a>';
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    include_once "../utilityphp/footer.php";
    ?>
</body>

</html>