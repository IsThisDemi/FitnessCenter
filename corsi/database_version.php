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
    $numero_categorie = mysqli_num_rows( $result );
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
        <link rel="stylesheet" href="css/mini.css"  media="handheld, screen and (max-width:600px), only screen and (max-device-width:600px)" />
        <link rel="stylesheet" href="css/print.css" media="print" />
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
                    for($i = 1; $i <= $numero_categorie; $i++)
                    {
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
                        echo '<a href="../corsi/categoria.php?id='.$i.'">
                                <article class="article-wrapper">
                                    <div class="rounded-lg container-project">
                                        <div class="project-image">
                                            <img src="../img/corsi/'.$immagine_categoria.'" alt="'.$alt.'">
                                        </div>
                                    </div>
                                    <div class="project-info">
                                        <div class="flex-pr">
                                            <div class="project-title text-nowrap">'.$categoria.'</div>
                                        </div>
                                        <div class="project-text text-nowrap">'.$numero_corsi.' corsi</div>
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
                <img src="../img/valid-xhtml.png" alt="HTML valido">
                <p>Nome Palestra - Via Palestra, 1 - 12345 Roma (RM) - Tel. 06 1234567</p>
                <img src="../img/valid-css.gif" alt="CSS valido">
            </div>
        </footer>
    </body>
</html>

