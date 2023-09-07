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
$link_pagine["Contattaci"]="JoinUS.php";
$link_pagine["<span lang='en'>home</span>"]="index.php";
$link_pagine["palestre"]="clubs.php";
$link_pagine["offerta corsi"]="offerta_corsi.php";
$link_pagine["categoria"] = "history.back()";
$link_pagine["corso"] = "corso.php";
$link_pagine["<span lang='en'>more</span>"]="info.php";
$link_pagine["<span lang='en'>login</span>"]="login.php";
$link_pagine["<span lang='en'>Balance</span>"]="categoria.php?id=1";
$link_pagine["<span lang='en'>Cycle</span>"]="categoria.php?id=2";
$link_pagine["<span lang='en'>Dance</span>"]="categoria.php?id=3";
$link_pagine["<span lang='en'>Functional</span>"]="categoria.php?id=4";
$link_pagine["<span lang='en'>Running</span>"]="categoria.php?id=5";
$link_pagine["<span lang='en'>Strenght</span>"]="categoria.php?id=6";
$link_pagine["<span lang='en'>Water</span>"]="categoria.php?id=7";
$link_pagine["<span lang='en'>Yoga</span>"]="categoria.php?id=8";
$link_pagine["<span lang='en'>admin</span>"]="adminpage.php";
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
$genitore_pagine["Contattaci"]="<span lang='en'>home</span>";
$genitore_pagine["<span lang='en'>admin</span>"]="<span lang='en'>login</span>";

//Genitore e figli delle categorie
$genitore_pagine["<span lang='en'>Balance</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Cycle</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Dance</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Functional</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Running</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Strenght</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Water</span>"] = "offerta corsi";
$genitore_pagine["<span lang='en'>Yoga</span>"] = "offerta corsi";

//Genitore e figli dei corsi
$genitore_pagine["<span lang='en'>Flexability</span>"] = "<span lang='en'>Balance</span>";
$genitore_pagine["<span lang='en'>Pancafit</span>"] = "<span lang='en'>Balance</span>";
$genitore_pagine["<span lang='en'>Postural</span>"] = "<span lang='en'>Balance</span>";
$genitore_pagine["<span lang='en'>Cycle Body</span>"] = "<span lang='en'>Cycle</span>";
$genitore_pagine["<span lang='en'>Cycle Race</span>"] = "<span lang='en'>Cycle</span>";
$genitore_pagine["<span lang='en'>Cycle Spirit</span>"] = "<span lang='en'>Cycle</span>";
$genitore_pagine["<span lang='en'>Aero Dance</span>"] = "<span lang='en'>Dance</span>";
$genitore_pagine["<span lang='en'>Step</span>"] = "<span lang='en'>Dance</span>";
$genitore_pagine["<span lang='en'>Zumba</span>"] = "<span lang='en'>Dance</span>";
$genitore_pagine["<span lang='en'>Boxe</span>"] = "<span lang='en'>Functional</span>";
$genitore_pagine["<span lang='en'>Calisthenics</span>"] = "<span lang='en'>Functional</span>";
$genitore_pagine["<span lang='en'>Grid</span>"] = "<span lang='en'>Functional</span>";
$genitore_pagine["<span lang='en'>Long Run</span>"] = "<span lang='en'>Running</span>";
$genitore_pagine["<span lang='en'>Speed Run</span>"] = "<span lang='en'>Running</span>";
$genitore_pagine["<span lang='en'>Walking</span>"] = "<span lang='en'>Running</span>";
$genitore_pagine["<span lang='en'>Bars</span>"] = "<span lang='en'>Strenght</span>";
$genitore_pagine["<span lang='en'>Full Body</span>"] = "<span lang='en'>Strenght</span>";
$genitore_pagine["<span lang='en'>Sculpt</span>"] = "<span lang='en'>Strenght</span>";
$genitore_pagine["<span lang='en'>Water Endurance</span>"] = "<span lang='en'>Water</span>";
$genitore_pagine["<span lang='en'>Water Hydrobike</span>"] = "<span lang='en'>Water</span>";
$genitore_pagine["<span lang='en'>Water Reax Raft</span>"] = "<span lang='en'>Water</span>";
$genitore_pagine["<span lang='en'>Water Tone</span>"] = "<span lang='en'>Water</span>";
$genitore_pagine["<span lang='en'>Yoga Align</span>"] = "<span lang='en'>Yoga</span>";
$genitore_pagine["<span lang='en'>Yoga Calm</span>"] = "<span lang='en'>Yoga</span>";
$genitore_pagine["<span lang='en'>Yoga Strength</span>"] = "<span lang='en'>Yoga</span>";

$genitore_pagine["corso"]="categoria";
$genitore_pagine["area_utente"]="<span lang='en'>login</span>";

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
			$breadcrumb = "<a href='javascript:history.back()'>" . $parent . "</a> <span style='display:inline' alt='genitore di'>-></span>  " . $breadcrumb;
			$parent = $genitore_pagine[$parent];
		}
		else {
			$breadcrumb = "<a href=\"" . $link_pagine[$parent] . "\">" . $parent . "</a> <span style='display:inline' alt='genitore di'>-></span> " . $breadcrumb;
			$parent = $genitore_pagine[$parent];
		}
	}
	$output= str_replace("<MENU/>",$menu,$template);
	$output= str_replace("<BREADCRUMB/>",$breadcrumb,$output);
	return $output;
}
?>
