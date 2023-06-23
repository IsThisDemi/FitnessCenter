<?php
//Se non è inserita una categoria torno alla pagina principale
if (!isset($_GET['id'])) {
    header("location: offerta_corsi.php");
    exit;
}
$id_categoria = $_GET['id'];
//Controllo che sia una categoria valida
if ($id_categoria < 1 || $id_categoria > 8) {
    header("location: offerta_corsi.php");
    exit;
}
require_once "utilityphp/header.php";
//Connessione al database
$host = "localhost";
$username = "root";
$pass = "";
$database = "palestra";
$conn = mysqli_connect($host, $username, $pass, $database) or die(mysqli_error());

//Query per ottenere il numero di corsi per la categoria
$sql = "SELECT * from corsi WHERE id_categoria = '$id_categoria'";
if ($result = mysqli_query($conn, $sql)) {
    $numero_corsi = mysqli_num_rows($result);
}

//Ottengo gli id minimi e massimi dei corsi per la categoria
$sql = "SELECT MIN(id_corso) AS minimo, MAX(id_corso) AS massimo FROM corsi WHERE id_categoria = '$id_categoria'";
if ($result = mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_assoc($result);
    $minimo = $row['minimo'];
    $massimo = $row['massimo'];
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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mini.css" media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
    <link rel="stylesheet" href="css/print.css" media="print" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="js/corsi.js"></script>
</head>

<bod id="corpo_corso">
    <?php

    genera_header("categoria");

    ?>
    <section id="cover">
        <?php
        //Query per ottenere il le info della categoria
        $sql = "SELECT * FROM `categorie` WHERE id_categoria = '$id_categoria'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $categoria = $row['nome_cat'];
        $immagine_categoria = $row['immagine'];
        $descrizione = $row['descrizione'];
        $alt = $row['alt'];
        ?>
        <div class="container">
            <?php echo '<img src="img/corsi/' . $immagine_categoria . '"alt="' . $alt . '">
            <div class="overlay">
                <h1 id="home_titolo_titolo"><span lang="en">' . $categoria . '</span></h1>
                <p id="home_titolo_testo">' . $descrizione . '</p>
            </div>';
            ?>
        </div>
        <div id="corsi">
            <?php echo '<h3>' . $numero_corsi . ' corsi</h3>'; ?>
            <div class="flex-container">
                <?php
                for ($i = $minimo; $i <= $massimo; $i++) {
                    //Query per ottenere il le info del corso
                    $sql = "SELECT * FROM `corsi` WHERE id_corso = '$i' AND id_categoria = '$id_categoria'";
                    $result = mysqli_query($conn, $sql);
                    //Controllo se il corso esiste
                    $esiste = mysqli_num_rows($result);
                    if ($esiste == 1) {
                        $row = mysqli_fetch_assoc($result);

                        $corso = $row['nome_corso'];
                        $immagine_corso = $row['immagine'];
                        $alt = $row['alt'];
                        $forza = $row['forza'];
                        $equilibrio = $row['equilibrio'];
                        $resistenza = $row['resistenza'];
                        $stabilita = $row['stabilità'];

                        echo '
                        <a class="unstyled" href="corso.php?id=' . $i . '">
                            <article class="article-wrapper">
                                <div class="rounded-lg container-project">
                                    <div class="project-image">
                                        <img src="img/corsi/' . $immagine_corso . '" alt="' . $alt . '">
                                    </div>
                                </div>
                                <div class="project-info">
                                    <div class="flex-pr">
                                        <div class="project-title text-nowrap">' . $corso . '</div>
                                    </div>
                                    <div class="types">';
                        if ($forza == 1)
                            echo '<div class="project-type forza">• Forza</div>';
                        if ($equilibrio == 1)
                            echo '<div class="project-type equilibrio">• Equilibrio</div>';
                        if ($resistenza == 1)
                            echo '<div class="project-type resistenza">• Resistenza</div>';
                        if ($stabilita == 1)
                            echo '<div class="project-type stabilita">• Stabilità</div>';
                        echo '
                                    </div>
                                </div>
                            </article>
                        </a>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    include_once "utilityphp/footer.php";
    ?>
    </body>

</html>