<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/user_utilities.php";
$BackendResult="";
$DisplayMessage="";
if (isset($_GET["action"])) {
    if($_GET["action"]=="login"&&isset($_POST["username_login"])&&isset($_POST["password_login"])){
        $username_login=htmlentities(trim($_POST["username_login"]));
        $password_login=htmlentities(trim($_POST["password_login"]));
        /*if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $username_login)){
            $DisplayMessage = 'Email non è nel formato corretto';
        }
        else{*/
            $BackendResult=LoginUser($_POST["username_login"],$_POST["password_login"]);
            if($BackendResult==""){
                if(isset($_SESSION["prev_page"])){
                    header("location:".$_SESSION["prev_page"]);
                }
                else{
                    header("location:index.php");
                }
            }
            else{
                $DisplayMessage=$BackendResult;
            }
        //}
    }
    if($_GET["action"]=="register"&&isset($_POST["username_registra"])&&isset($_POST["email_registra"])&&isset($_POST["password_registra"])){
        $username_registra=htmlentities(trim($_POST["username_registra"]));
        $email_registra=htmlentities(trim($_POST["email_registra"]));
        $password_registra=htmlentities(trim($_POST["password_registra"]));
        $BackendResult=RegisterUser($username_registra,$email_registra,$password_registra);
        if($BackendResult==""){
            $DisplayMessage="registrazione completa";
        }
        else{
            $DisplayMessage=$BackendResult;
        }
    }
    if($_GET["action"]=="logout"){
        $_SESSION = []; // Reset dell'array di sessione
    
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-86400, '/');
            // Reset del cookie di sessione
        }
        session_destroy(); // Chiusura sessione
        header('Location: login.php'); // Reindirizzamento
        exit; // Fine script

    } else {
        header('Location: login.php'); // Reindirizzamento
        exit; // Fine script
    }
}
    //Includo file html
    $paginaHTML = file_get_contents("html/login.html");
    $login_content = file_get_contents("html/login_content.html");
    $login_form = file_get_contents("html/login_form.html");
    //Includo footer
    $footer = file_get_contents("utilityphp/footer.php");
    //Gererazione header
    $header = genera_header("<span lang='en'>login</span>");

    $user=get_logged_user();
    $admin = '';
    $form = '';
    if($user&&$user!=""){
        if($_SESSION["admin"]){
            $admin = '<a href=adminpage.php class="adminlink">accedi all area di amministrazione </a>';
        }
        $campi_replace_content = array("%user%", "%admin%");
        $valori_replace_content = array($user, $admin);
        $login_content = str_replace($campi_replace_content, $valori_replace_content, $login_content);
    }else{
        if($DisplayMessage!=""){
            $DisplayMessage = '<p class="formresult">'.$DisplayMessage.'</p>';
        }
        $campi_replace_form = array("%messaggio%");
        $valori_replace_form = array($DisplayMessage);
        $login_form = str_replace($campi_replace_form, $valori_replace_form, $login_form);
        $form = $login_form;
    }

    //Sostituzione dei campi della pagina html con i valori				
    $campi_replace = array("%header%", "%footer%", "%content%", "%form%");
    $valori_replace = array($header, $footer, $login_content, $form);
    $paginaHTML = str_replace($campi_replace, $valori_replace, $paginaHTML);
    echo $paginaHTML;
?>