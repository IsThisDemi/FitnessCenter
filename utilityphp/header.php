<?php 
$template='	<a href="#content" class="SRskip" title="salta al contenuto" aria-label="salta al contenuto" tabindex="0" acceskey="s">salta al contenuto</a>
	<header>
            <h1 class="logo"> FitnessCenter </h1>
            </div>
            <nav>
                        <MENU/>
            </nav>
      </header>
      <div class="breadcrumbs">
      	<p> Ti trovi in: <span id="percorso"><BREADCRUMB/> </p>
      </div>';

$link_pagine=[];//nome->link
$link_pagine["home"]="home.php";
$link_pagine["clubs"]="clubs.php";
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

$fl_pagine=[];//nome->link
$fl_pagine["home"]="h";
$fl_pagine["clubs"]="c";
$fl_pagine["offerta corsi"]="o";
$fl_pagine["more"]="m";
$fl_pagine["login"]="l";

$navmenu=["home","clubs","offerta corsi","more","login",];

$genitore_pagine=[];//nome->genitore
$genitore_pagine["home"]="#";
$genitore_pagine["clubs"]="home";
$genitore_pagine["offerta corsi"]="home";
$genitore_pagine["more"]="home";
$genitore_pagine["login"]="home";
$genitore_pagine["categoria"]="offerta corsi";

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
            $menu = $menu . "<li><a class=\"first_letter_underlined\" href=\"" . $link . "\" tabindex=\"" . $i . "\" acceskey=\"" . $fl . "\">" . $menuentry . "</a></li>";
        } else {
            $menu = $menu . "<li class=\"menu_name\" \"first_letter_underlined\">" . $menuentry . "</li>";
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
	echo $output;
}
?>
