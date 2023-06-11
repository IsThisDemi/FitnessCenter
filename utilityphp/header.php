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
$link_pagine["index"]="corsi/index.php";
$link_pagine["more"]="info.php";
$link_pagine["login"]="login.php";

$fl_pagine=[];//nome->link
$fl_pagine["home"]="h";
$fl_pagine["clubs"]="c";
$fl_pagine["index"]="i";
$fl_pagine["more"]="m";
$fl_pagine["login"]="l";

$navmenu=["home","clubs","index","more","login"];

$genitore_pagine=[];//nome->genitore
$genitore_pagine["home"]="#";
$genitore_pagine["clubs"]="home";
$genitore_pagine["index"]="home";
$genitore_pagine["more"]="home";
$genitore_pagine["login"]="home";
$genitore_pagine["categoria"]="index";
$genitore_pagine["corso"]="categoria";

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
		$breadcrumb="<a href=\"" . $link_pagine[$parent] . "\">" . $parent . "</a> > ". $breadcrumb;
		$parent=$genitore_pagine[$parent];
	}
	$output= str_replace("<MENU/>",$menu,$template);
	$output= str_replace("<BREADCRUMB/>",$breadcrumb,$output);
	echo $output;
}
?>
