<?php
    session_start();     
	require_once "utilityphp/header.php";
    require_once "utilityphp/corsi_utilities.php";
    if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
        $_SESSION["prev_page"]="adminpage.php";
        header("location:login.php");
    }
    else
    {   
        $result="";
        if (isset($_GET["action"])) {
            if($_GET["action"]="delete"&&isset($_GET["id"]))
            {
                if(RimuoviCorso($_GET["id"])){
                    $result="Corso eliminato con successo";
                }
                else{
                    $result="Errore <span lang='en'>backend</span>";
                }
            }
        }
        //Includo file html
        $paginaHTML = file_get_contents("html/admin_page.html");
        $corsoHTML = file_get_contents("html/admin_corso.html");
        //Includo footer
        $footer = file_get_contents("utilityphp/footer.php");
        //Gererazione header
        $header = genera_header("<span lang='en'>admin</span>");

        $corsi;
        $categorie;

        if(GetCorsi($corsi)!="success"||!$corsi||GetCategorie($categorie)!="success"||!$categorie){
            echo '<p>errore connessione o database</p>';
        }
        else{
            if($result!=""){
                $result='<p class="formresult">'.$result.'</p>';
            }
            $listaCorsi = "";
            foreach($corsi as $corso){
                $corsoHTML = file_get_contents("html/admin_corso.html");
                //Sostituzione dei campi della pagina corpo_admin con i valori	
                $campi_replace_corso = array("%nome_corso%" , "%id_categoria%" , "%intensita%" , "%durata%" , "%id_corso%");
                $valori_replace_corso = array($corso["nome_corso"] , $categorie[$corso["id_categoria"]], $corso["intensita"], $corso["durata"], $corso["id_corso"]);
                $corsoHTML = str_replace($campi_replace_corso, $valori_replace_corso, $corsoHTML);
                //echo $corsoHTML."<br>";
                $listaCorsi .= $corsoHTML;
            }
            

            //Sostituzione dei campi della pagina html con i valori				
            $campi_replace = array("%header%", "%footer%", "%notifiche%", "%lista_corsi%");
            $valori_replace = array($header, $footer, $result, $listaCorsi);
            $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
            echo $paginaHTML;
        }
    }
?>