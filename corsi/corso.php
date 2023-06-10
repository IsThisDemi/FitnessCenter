<?php
//Se non è inserita una categoria torno alla pagina principale
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}
$id_corso = $_GET['id'];
require_once "../utilityphp/header.php";
//Connessione al database
$host = "localhost";
$username = "root";
$pass = "";
$database = "palestra";
$conn = mysqli_connect($host, $username, $pass, $database) or die(mysqli_error());

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
    <section>
        <?php
        //Query per ottenere il le info del corso
        $sql = "SELECT * FROM `corsi` WHERE id_corso = '$id_corso'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $corso = $row['nome_corso'];
        $descrizione = $row['descrizione'];
        $immagine_corso = $row['immagine'];
        $alt = $row['alt'];
        $forza = $row['forza'];
        $equilibrio = $row['equilibrio'];
        $resistenza = $row['resistenza'];
        $stabilita = $row['stabilità'];

        $intensita = $row['intensita'];
        $durata = $row['durata'];
        $calorie = $row['calorie'];

        $asciugamano = $row['asciugamano'];
        $borraccia = $row['borraccia'];
        $calzini = $row['calzini'];
        $tappetino = $row['tappetino'];
        $scarpe_sportive = $row['scarpe_sportive'];
        $guantoni = $row['guantoni'];
        $capelli_raccolti = $row['capelli_raccolti'];
        $abbigliamento_outdoor = $row['abbigliamento_outdoor'];
        $scarpe_outdoor = $row['scarpe_outdoor'];
        $accappatoio = $row['accappatoio'];
        $cuffia = $row['cuffia'];
        $costume = $row['costume'];
        $ciabatte = $row['ciabatte'];
        $piedi_nudi = $row['piedi_nudi'];

        echo '
        <div class="container">
        <img src="../img/corsi/' . $immagine_corso . '"alt="' . $alt . '">
            <div class="overlay">
                <h1><span lang="en">' . $corso . '</span></h1>
                <p>' . $descrizione . '</p>
            </div>';
        ?>
        </div>
        <div id="corsi">
            <div class="flex-container">
                <h3>Allena <?php
                            if ($forza == 1)
                                echo 'Forza ';
                            if ($equilibrio == 1)
                                echo 'Equilibrio ';
                            if ($resistenza == 1)
                                echo 'Resistenza ';
                            if ($stabilita == 1)
                                echo 'Stabilità '; ?></h3>
            </div>
            <div class="flex-container">
                <img src="../img/corsi/icone/intensita.svg" alt="intensità">
                <h3>Intensità</h3>
                <?php
                if ($intensita == 1)
                    echo '<p>Bassa</p>';
                if ($intensita == 2)
                    echo '<p>Media</p>';
                if ($intensita == 3)
                    echo '<p>Alta</p>'; ?>
                <img src="../img/corsi/icone/durata.svg" alt="durata">
                <h3>Durata</h3>
                <?php echo '<p>' . $durata . ' minuti</p>'; ?>
                <img src="../img/corsi/icone/calorie.svg" alt="calorie">
                <h3>Calorie</h3>
                <?php echo '<p>' . $calorie . ' kcal</p>'; ?>
            </div>
            <div class="flex-container">
                <h3>Ricordati</h3>
            </div>
            <div class="flex-container">
                <?php
                if ($asciugamano == 1)
                    echo '<img src="../img/corsi/icone/asciugamano.svg" alt="asciugamano">
                    <p>Asciugamano</p>';
                if ($borraccia == 1)
                    echo '<img src="../img/corsi/icone/borraccia.svg" alt="borraccia">
                    <p>Borraccia</p>';
                if ($calzini == 1)
                    echo '<img src="../img/corsi/icone/calzini.svg" alt="calzini">
                    <p>Calzini</p>';
                if ($tappetino == 1)
                    echo '<img src="../img/corsi/icone/tappetino.svg" alt="tappetino">
                    <p>Tappetino</p>';
                if ($scarpe_sportive == 1)
                    echo '<img src="../img/corsi/icone/scarpe_sportive.svg" alt="scarpe_sportive">
                    <p>Scarpe sportive</p>';
                if ($guantoni == 1)
                    echo '<img src="../img/corsi/icone/guantoni.svg" alt="guantoni">
                    <p>Guantoni</p>';
                if ($capelli_raccolti == 1)
                    echo '<img src="../img/corsi/icone/capelli_raccolti.svg" alt="capelli_raccolti">
                    <p>Capelli raccolti</p>';
                if ($abbigliamento_outdoor == 1)
                    echo '<img src="../img/corsi/icone/abbigliamento_outdoor.svg" alt="abbigliamento_outdoor">
                    <p>Abbigliamento outdoor</p>';
                if ($scarpe_outdoor == 1)
                    echo '<img src="../img/corsi/icone/scarpe_outdoor.svg" alt="scarpe_outdoor">
                    <p>Scarpe outdoor</p>';
                if ($accappatoio == 1)
                    echo '<img src="../img/corsi/icone/accappatoio.svg" alt="accappatoio">
                    <p>Accappatoio</p>';
                if ($cuffia == 1)
                    echo '<img src="../img/corsi/icone/cuffia.svg" alt="cuffia">
                    <p>Cuffia</p>';
                if ($costume == 1)
                    echo '<img src="../img/corsi/icone/costume.svg" alt="costume">
                    <p>Costume</p>';
                if ($ciabatte == 1)
                    echo '<img src="../img/corsi/icone/ciabatte.svg" alt="ciabatte">
                    <p>Ciabatte</p>';
                if ($piedi_nudi == 1)
                    echo '<img src="../img/corsi/icone/piedi_nudi.svg" alt="piedi_nudi">
                    <p>Piedi nudi</p>';
                ?>
            </div>
        </div>
    </section>
    <?php
    include_once "../utilityphp/footer.php";
    ?>
</body>

</html>