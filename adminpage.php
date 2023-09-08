<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/corsi_utilities.php";
if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
    $_SESSION["prev_page"]="adminpage.php";
    header("location:login.php");
}
else
{   $result="";
    if (isset($_GET["action"])) {
        if($_GET["action"]="delete"&&isset($_GET["id"]))
        {
            if(RimuoviCorso($_GET["id"])){
                $result="corso eliminato";
            }
            else{
                $result="errore backend";
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Admin FitnessCenter</title>
    <meta charset="utf-8"/>
    <meta name="description" content="pagina di amministrazione per FitnessCenter" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" media="print" href="css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>

<?php 

    echo genera_header("<span lang='en'>admin</span>");
    $corsi;
    $categorie;
    if(GetCorsi($corsi)!="success"||!$corsi||GetCategorie($categorie)!="success"||!$categorie){

        ?>

            <p>errore connessione o database</p>
        </body>
        
        <?php 
    }
    else{

?>
<div id="content" class="adminpage">
    <a href="inserimento_corsi.php">Inserisci corso</a>
    <?php
    if($result!=""){
        echo '<p class="formresult">';
        echo $result;
        echo '</p>';
    }
?>
    <table id="lista_corsi">
        <tr>
            <th scope=col>nome corso</th>
            <th scope=col>categoria</th>
            <th scope=col>descrizione</th>
            <th scope=col>intensita</th>
            <th scope=col>durata</th>
            <th scope=col>actions</th>
        </tr>
        <?php
        foreach($corsi as $corso){
            echo "<tr>";
            echo "<td>".$corso["nome_corso"]."</td>";
            echo "<td>".$categorie[$corso["id_categoria"]]."</td>";
            echo "<td>".$corso["descrizione"]."</td>";
            echo "<td>".$corso["intensita"]."</td>";
            echo "<td>".$corso["durata"]."</td>";
            echo "<td><a href='adminpage.php?action=delete&id=".$corso["id_corso"]."'>elimina</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>

</div>

</body>
<?php
    }
}
?>