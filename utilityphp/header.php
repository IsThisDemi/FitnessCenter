<? 
$template='	<a href="#content" class="SRskip" title="salta al contenuto" aria-label="salta al contenuto">salta al contenuto</a>
	<header>
            <h1> title </h1>
            </div>
            <nav>
                <button type="button" class="nascondiTesto" id="menubutton-apri" title="Apri il burger menu">Apri il burger menu</button>
                <button type="button" class="nascondiTesto" id="menubutton-chiudi" title="Chiudi il burger menu">Chiudi burger il menu</button>
                        <MENU/>
            </nav>
      </header>
      <div class="breadcrumbs">
      	<p> Ti trovi in: <BREADCRUMB/> </p>
      </div>'

$link_pagine=[];//nome->link
$link_pagine["home"]="home.php"
$link_pagine["info"]="info.php"

$navmenupages=["home","info"];

$genitore_pagine=[];//nome->genitore
$genitore_pagine["home"]="#"
$genitore_pagine["info"]="home"
/// Genera l'header di una data pagina
function genera_header($pagina){
	$menu='<ul class="navmenu">'
	foreach ($navmenu as $menuentry) {
      	if ($menuentry != $pagina) {
			$link=$link_pagine[$menuentry];
                	$menu = $menu . "<li><a href=\"" . $link . "\">" . $nome . "</a></li>";
        	} else {
                	$menu = $menu . "<li class=\"menu_name\">" . $nome . "</li>";
        	}
    	}
	$menu=$menu.'</ul>'
	$output= str_replace("<MENU/>",$menu,$template);
	$breadcrum=$pagina;
	$parent=$genitore_pagine[$pagina];

	// genera breadcrumb nel formato genitore/figlio/.....		
	while($parent&&$parent!="#"){//verifica il raggiungimento della radice
		// aggiunge genitore/ a breadrumbs in formato figlio/.....
		$breadcrum="<a href=\"" . $link_pagine[$parent] . "\">" . $parent . "</a>/".$breadcrum;
		$parent=$genitore_pagine[$parent];
	}
	$output= str_replace("<MENU/>",$menu,$template);
	$output= str_replace("<BREADCRUMB/>",$breadcrum,$output);
	echo $output;
}
?>
