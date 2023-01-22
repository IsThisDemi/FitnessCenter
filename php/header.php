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

$pagine=[];//nome->link
$pagine["home"]="home.php"
$pagine["pag2"]="pag2.php"


/// Genera l'header di una data pagina
function genera_header($pagina){
	$menu='<ul class="navmenu">'
	foreach $pagine as $nome => $link) {
      	if ($nome != $pagina) {            	
                	$menu = $menu . "<li><a href=\"" . $link . "\">" . $nome . "</a></li>";
        	} else {
                	$menu = $menu . "<li class=\"menu_name\">" . $nome . "</li>";
        	}
    	}
	$menu=$menu.'</ul>'
	echo str_replace("<MENU/>",$menu,$template);	
}
?>
