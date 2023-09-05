<?php 
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
$link_pagine["Join US"]="JoinUS.php";
$link_pagine["home"]="index.php";
$link_pagine["palestre"]="clubs.php";
$link_pagine["offerta corsi"]="offerta_corsi.php";
$link_pagine["categoria"] = "history.back()";
$link_pagine["corso"] = "corso.php";
$link_pagine["more"]="info.php";
$link_pagine["login"]="login.php";
$link_pagine["Balance"]="categoria.php?id=1";
$link_pagine["Cycle"]="categoria.php?id=2";
$link_pagine["Dance"]="categoria.php?id=3";
$link_pagine["Functional"]="categoria.php?id=4";
$link_pagine["Running"]="categoria.php?id=5";
$link_pagine["Strenght"]="categoria.php?id=6";
$link_pagine["Water"]="categoria.php?id=7";
$link_pagine["Yoga"]="categoria.php?id=8";
$link_pagine["admin"]="adminpage.php";
$link_pagine["404"]="404.php";
$link_pagine["500"]="500.php";

$fl_pagine=[];//nome->link
$fl_pagine["home"]="h";
$fl_pagine["palestre"]="p";
$fl_pagine["offerta corsi"]="o";
$fl_pagine["more"]="m";
$fl_pagine["login"]="l";

$navmenu=["home","palestre","offerta corsi","more","login"];

$genitore_pagine=[];//nome->genitore
$genitore_pagine["404"]="#";
$genitore_pagine["500"]="#";
$genitore_pagine["home"]="#";
$genitore_pagine["palestre"]="home";
$genitore_pagine["offerta corsi"]="home";
$genitore_pagine["more"]="home";
$genitore_pagine["login"]="home";
$genitore_pagine["categoria"]="offerta corsi";
$genitore_pagine["Join US"]="home";
$genitore_pagine["admin"]="login";

//Genitore e figli delle categorie
$genitore_pagine["Balance"] = "offerta corsi";
$genitore_pagine["Cycle"] = "offerta corsi";
$genitore_pagine["Dance"] = "offerta corsi";
$genitore_pagine["Functional"] = "offerta corsi";
$genitore_pagine["Running"] = "offerta corsi";
$genitore_pagine["Strenght"] = "offerta corsi";
$genitore_pagine["Water"] = "offerta corsi";
$genitore_pagine["Yoga"] = "offerta corsi";

//Genitore e figli dei corsi
$genitore_pagine["Flexability"] = "Balance";
$genitore_pagine["Pancafit"] = "Balance";
$genitore_pagine["Postural"] = "Balance";
$genitore_pagine["Cycle Body"] = "Cycle";
$genitore_pagine["Cycle Race"] = "Cycle";
$genitore_pagine["Cycle Spirit"] = "Cycle";
$genitore_pagine["Aero Dance"] = "Dance";
$genitore_pagine["Step"] = "Dance";
$genitore_pagine["Zumba"] = "Dance";
$genitore_pagine["Boxe"] = "Functional";
$genitore_pagine["Calisthenics"] = "Functional";
$genitore_pagine["Grid"] = "Functional";
$genitore_pagine["Long Run"] = "Running";
$genitore_pagine["Speed Run"] = "Running";
$genitore_pagine["Walking"] = "Running";
$genitore_pagine["Barre"] = "Strenght";
$genitore_pagine["Full Body"] = "Strenght";
$genitore_pagine["Sculpt"] = "Strenght";
$genitore_pagine["Water Endurance"] = "Water";
$genitore_pagine["Water Hydrobike"] = "Water";
$genitore_pagine["Water Reax Raft"] = "Water";
$genitore_pagine["Water Tone"] = "Water";
$genitore_pagine["Yoga Align"] = "Yoga";
$genitore_pagine["Yoga Calm"] = "Yoga";
$genitore_pagine["Yoga Strength"] = "Yoga";

$genitore_pagine["corso"]="categoria";
$genitore_pagine["area_utente"]="login";

/// Genera l'header di una data pagina
function genera_header($pagina){
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
	$breadcrumb="<span id=current_page>" . $pagina . "</span>"; 
	$parent = $genitore_pagine[$pagina];

	// genera breadcrumb nel formato genitore/figlio/.....		
	while($parent&&$parent!="#"){//verifica il raggiungimento della radice
		// aggiunge genitore/ a breadrumbs in formato figlio/.....
		if($parent == "categoria")
		{
			$breadcrumb = "<a href='javascript:history.back()'>" . $parent . "</a> > " . $breadcrumb;
			$parent = $genitore_pagine[$parent];
		}
		else {
			$breadcrumb = "<a href=\"" . $link_pagine[$parent] . "\">" . $parent . "</a> > " . $breadcrumb;
			$parent = $genitore_pagine[$parent];
		}
	}
	$output= str_replace("<MENU/>",$menu,$template);
	$output= str_replace("<BREADCRUMB/>",$breadcrumb,$output);
	return $output;
}
?>
