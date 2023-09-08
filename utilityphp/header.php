<?php 
require_once "utilityphp/corsi_utilities.php";
if(!isset($_SESSION)){
	session_start();
}
$template='<a href="#content" class="SRskip" title="salta al contenuto" aria-label="salta al contenuto">Salta al contenuto</a>
	<header>
            <h1 class="logo"> FitnessCenter </h1>
            <nav>
                        <MENU/>
            </nav>
      </header>
      <div class="breadcrumbs">
      	<p> Ti trovi in: <span id="percorso"><BREADCRUMB/> </span></p>
      </div>';

$link_pagine=[];//nome->link
$link_pagine["Contattaci"]="JoinUS.php";
$link_pagine["<span lang='en'>home</span>"]="index.php";
$link_pagine["palestre"]="clubs.php";
$link_pagine["offerta corsi"]="offerta_corsi.php";
$link_pagine["corso"]="corso.php";
$link_pagine["categoria"]="categoria.php";
$link_pagine["<span lang='en'>more</span>"]="info.php";
$link_pagine["<span lang='en'>login</span>"]="login.php";

$link_pagine["<span lang='en'>admin</span>"]="adminpage.php";
$link_pagine["inserimento corsi"]="inserimento_corsi.php";
$link_pagine["404"]="404.php";
$link_pagine["500"]="500.php";

$fl_pagine=[];//nome->link
$fl_pagine["<span lang='en'>home</span>"]="h";
$fl_pagine["palestre"]="p";
$fl_pagine["offerta corsi"]="o";
$fl_pagine["<span lang='en'>more</span>"]="m";
$fl_pagine["<span lang='en'>login</span>"]="l";

$navmenu=["<span lang='en'>home</span>","palestre","offerta corsi","<span lang='en'>more</span>","<span lang='en'>login</span>"];

$genitore_pagine=[];//nome->genitore
$genitore_pagine["404"]="#";
$genitore_pagine["500"]="#";
$genitore_pagine["<span lang='en'>home</span>"]="#";
$genitore_pagine["palestre"]="<span lang='en'>home</span>";
$genitore_pagine["offerta corsi"]="<span lang='en'>home</span>";
$genitore_pagine["<span lang='en'>more</span>"]="<span lang='en'>home</span>";
$genitore_pagine["<span lang='en'>login</span>"]="<span lang='en'>home</span>";
$genitore_pagine["categoria"]="offerta corsi";
$genitore_pagine["corso"]="categoria";
$genitore_pagine["Contattaci"]="<span lang='en'>home</span>";
$genitore_pagine["<span lang='en'>admin</span>"]="<span lang='en'>login</span>";
$genitore_pagine["inserimento corsi"]="<span lang='en'>admin</span>";

$genitore_pagine["corso"]="categoria";
$genitore_pagine["area_utente"]="<span lang='en'>login</span>";

function genera_header($pagina){
	return genera_header_param($pagina,0);
}

/// Genera l'header di una data pagina
function genera_header_param($pagina,$param){
	global $template, $link_pagine, $fl_pagine, $navmenu, $genitore_pagine;
	$menu='<ul class="navmenu">';
	$i = 1;
	foreach ($navmenu as $menuentry) {
      	if ($menuentry != $pagina) {
			$link=$link_pagine[$menuentry];
			$fl=$fl_pagine[$menuentry];
			if($menuentry=="login"&&isset($_SESSION["user"]))
			{
				$menuentry=$_SESSION["user"];
			}
			$menu = $menu . "<li><a class=\"first_letter_underlined\" href=\"" . $link . "\" tabindex=\"" . 0 . "\" accesskey=\"" . $fl . "\">" . $menuentry . "</a></li>";
			
        } else {
            $menu = $menu . "<li class=\"menu_name first_letter_underlined\">" . $menuentry . "</li>";
        }
		$i++;
    }
	$menu=$menu.'</ul>';
	$output= str_replace("<MENU/>",$menu,$template);
	$breadcrumb="";
	$parent=null;
	if($pagina=="corso"){
		$corsi;
		GetCorsi($corsi);
		$categorie;
		GetCategorie($categorie);
		$corso=null;
		$notfound=true;
		for($i=0;$i<sizeof($corsi)&&$notfound;$i++){
			if($corsi[$i]["id_corso"]==$param){
				$corsi[$i]["id_corso"];
				$corso=$corsi[$i];
				$notfound=false;
			}
		}
		if($notfound){
			header("location: offerta_corsi.php");
        	exit;
		}
		$categoria=$corso["id_categoria"];
		$breadcrumb="<a href='".$link_pagine["categoria"]."?".$categoria."'> <span lang='en'>" . $categorie[$categoria] .
		 "</span></a> <span aria-hidden='true'>> </span><span id=current_page> <span lang='en'>" . $corso["nome_corso"] . "</span></span>";
		$parent=$genitore_pagine["categoria"];
	}
	elseif ($pagina=="categoria") {
		$categorie;
		GetCategorie($categorie);
		$breadcrumb="<span id=current_page><span lang='en'>" . $categorie[$param] . "</span></span>";
		$parent = $genitore_pagine[$pagina];
	}else{
		$breadcrumb="<span id=current_page>" . $pagina . "</span>";
		$parent = $genitore_pagine[$pagina];
	}

	// genera breadcrumb nel formato genitore/figlio/.....		
	while($parent&&$parent!="#"){//verifica il raggiungimento della radice
		// aggiunge genitore/ a breadrumbs in formato figlio/.....
		$breadcrumb = "<a href=\"" . $link_pagine[$parent] . "\">" . $parent . "</a> <span aria-hidden='true'>> </span>" . $breadcrumb;
		$parent = $genitore_pagine[$parent];
	}
	$output= str_replace("<MENU/>",$menu,$template);
	$output= str_replace("<BREADCRUMB/>",$breadcrumb,$output);
	return $output;
}
?>
