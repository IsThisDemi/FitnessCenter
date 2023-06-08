<?php
//Se non è inserita una categoria torno alla pagina principale
if (!isset($_GET['id'])) {
    header("location: database_version.php");
    exit;
}
$categoria = $_GET['id'];
require_once "../utilityphp/header.php";
//Connessione al database
$host = "localhost";
$username = "root";
$pass = "";
$database = "palestra";
$conn = mysqli_connect($host, $username, $pass, $database) or die(mysqli_error());

//Query per ottenere il numero di corsi per la categoria
$sql = "SELECT * from corsi WHERE id_categoria = '$categoria'";
if ($result = mysqli_query($conn, $sql)) {
    $numero_corsi = mysqli_num_rows($result);
}

//Ottengo gli id minimi e massimi dei corsi per la categoria
$sql = "SELECT MIN(id_corso) AS minimo, MAX(id_corso) AS massimo FROM corsi WHERE id_categoria = '$categoria'";
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

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mini.css" media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
    <link rel="stylesheet" href="../css/print.css" media="print" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/corsi.js"></script>
</head>

<body>
    <header>
        <h1>Corsi</h1>
        <nav>
            <a href="home.html"><span lang="en">Home</span></a>
            <a href="palestra.html">Palestra</a>
            <a href="corsi.html">Corsi</a>
            <a href="contatti.html">Contatti</a>
            <a href="login.html"><span lang="en">Login</span></a>
        </nav>
    </header>
    <section>
        <?php
            //Query per ottenere il le info della categoria
            $sql = "SELECT * FROM `categorie` WHERE id_categoria = '$categoria'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $categoria = $row['nome_cat'];
            $immagine_categoria = $row['immagine'];
            $descrizione = $row['descrizione'];
            $alt = $row['alt'];

            echo "<h2><span lang='en'>".$categoria."</span></h2>
            <p>".$descrizione."</p>";
        ?>
        
        <div id="corsi">
            <div class="flex-container">
                <?php
                for ($i = $minimo; $i <= $massimo; $i++) {
                    //Query per ottenere il le info del corso
                    $sql = "SELECT * FROM `corsi` WHERE id_corso = '$i'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $corso = $row['nome_corso'];
                    $immagine_corso = $row['immagine'];
                    $alt = $row['alt'];
                    $forza = $row['forza'];
                    $equilibrio = $row['equilibrio'];
                    $resistenza = $row['resistenza'];
                    $stabilita = $row['stabilità'];

                    echo '
                    <a href="cors.php?id='.$i.'">
                        <article class="article-wrapper">
                            <div class="rounded-lg container-project">
                                <div class="project-image">
                                    <img src="../img/corsi/'.$immagine_corso.'" alt="'.$alt.'">
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="flex-pr">
                                    <div class="project-title text-nowrap">'.$corso.'</div>
                                </div>
                                <div class="types">';
                                    if($forza == 1)
                                        echo '<div class="project-type forza">• Forza</div>';
                                    if($equilibrio == 1)
                                        echo '<div class="project-type equilibrio">• Equilibrio</div>';
                                    if($resistenza == 1)
                                        echo '<div class="project-type resistenza">• Resistenza</div>';
                                    if($stabilita == 1)
                                        echo '<div class="project-type stabilita">• Stabilità</div>';
                                echo '
                                </div>
                            </div>
                        </article>
                    </a>';
                }
                ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="flex-container">
            <img src="../../img/valid-xhtml.png" alt="HTML valido">
            <p>Nome Palestra - Via Palestra, 1 - 12345 Roma (RM) - Tel. 06 1234567</p>
            <img src="../../img/valid-css.gif" alt="CSS valido">
        </div>
</body>

</html>