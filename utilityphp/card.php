<?php

class CardCategoria {
    public $id;
    public $immagine;
    public $alt;
    public $nome;
    public $numero_corsi;
    
    public function __construct(&$array){
        
        $this->id=$array['id_categoria'];
        $this->immagine=$array['immagine'];
        $this->alt=$array['alt'];
        $this->nome=$array['nome_cat'];
        $this->numero_corsi=$array['numero_corsi'];
    }

    public function makeCard_categoria(){
    
        $pagina = file_get_contents(__DIR__.'\card_categoria.html');
        $pagina = str_replace('%id%',$this->id,$pagina);
        $pagina = str_replace('%categoria%',$this->nome,$pagina);
        $pagina = str_replace("%immagine_categoria%", $this->immagine, $pagina);
        $pagina = str_replace("%alt%", $this->alt, $pagina);
        $pagina = str_replace('%numero_corsi%',$this->numero_corsi,$pagina);
        return $pagina;
    }
}

class CardCorso {
    public $id;
    public $immagine;
    public $alt;
    public $nome;
    public $descrizione;
    public $forza;
    public $equilibrio;
    public $resistenza;
    public $stabilità;

    public function __construct(&$array){
        
        $this->id=$array['id_corso'];
        $this->immagine=$array['immagine'];
        $this->alt=$array['alt'];
        $this->nome=$array['nome_corso'];
        $this->descrizione=$array['descrizione'];
        $this->forza=$array['forza'];
        $this->equilibrio=$array['equilibrio'];
        $this->resistenza=$array['resistenza'];
        $this->stabilità=$array['stabilità'];
    }

    public function makeCard_corso(){
        $pagina = file_get_contents(__DIR__ . '\card_corso.html');
        $pagina = str_replace('%id_corso%', $this->id, $pagina);
        $pagina = str_replace('%corso%', $this->nome, $pagina);
        $pagina = str_replace("%immagine_corso%", $this->immagine, $pagina);
        $pagina = str_replace("%alt%", $this->alt, $pagina);
        if($this->forza == 1){
            $pagina = str_replace('%forza%', '<div class="project-type forza">• Forza</div>', $pagina);
        }else{
            $pagina = str_replace('%forza%', '', $pagina);
        }
        if($this->equilibrio == 1){
            $pagina = str_replace('%equilibrio%', '<div class="project-type equilibrio">• Equilibrio</div>', $pagina);
        }else{
            $pagina = str_replace('%equilibrio%', '', $pagina);
        }
        if($this->resistenza == 1){
            $pagina = str_replace('%resistenza%', '<div class="project-type resistenza">• Resistenza</div>', $pagina); 
        }else{
            $pagina = str_replace('%resistenza%', '', $pagina);
        }
        if($this->stabilità == 1){
            $pagina = str_replace('%stabilità%', '<div class="project-type stabilita">• Stabilità</div>', $pagina);
        }else{
            $pagina = str_replace('%stabilità%', '', $pagina);
        }
        return $pagina;
    }
}

class InfoCorso
{
    public $forza;
    public $equilibrio;
    public $resistenza;
    public $stabilità;
    public $intensita;
    public $durata;
    public $calorie;
    public $asciugamano;
    public $borraccia;
    public $calzini;   
    public $tappetino;
    public $scarpe_sportive;
    public $guantoni;
    public $capelli_raccolti;
    public $abbigliamento_outdoor;
    public $scarpe_outdoor;
    public $accappatoio;
    public $cuffia;
    public $costume;
    public $ciabatte;
    public $piedi_nudi;

    public function __construct(&$array)
    {

        $this->forza = $array['forza'];
        $this->equilibrio = $array['equilibrio'];
        $this->resistenza = $array['resistenza'];
        $this->stabilità = $array['stabilità'];
        $this->intensita = $array['intensita'];
        $this->durata = $array['durata'];
        $this->calorie = $array['calorie'];
        $this->asciugamano = $array['asciugamano'];
        $this->borraccia = $array['borraccia'];
        $this->calzini = $array['calzini'];
        $this->tappetino = $array['tappetino'];
        $this->scarpe_sportive = $array['scarpe_sportive'];
        $this->guantoni = $array['guantoni'];
        $this->capelli_raccolti = $array['capelli_raccolti'];
        $this->abbigliamento_outdoor = $array['abbigliamento_outdoor'];
        $this->scarpe_outdoor = $array['scarpe_outdoor'];
        $this->accappatoio = $array['accappatoio'];
        $this->cuffia = $array['cuffia'];
        $this->costume = $array['costume'];
        $this->ciabatte = $array['ciabatte'];
        $this->piedi_nudi = $array['piedi_nudi'];
    }

    public function makeInfo_corso()
    {
        $pagina = file_get_contents(__DIR__ . '\info_corso.html');
        if ($this->forza == 1) {
            $pagina = str_replace('%forza%', '<span class="testo-forza">Forza</span>', $pagina);
        } else {
            $pagina = str_replace('%forza%', '', $pagina);
        }
        if ($this->equilibrio == 1) {
            $pagina = str_replace('%equilibrio%', '<span class="testo-equilibrio">Equilibrio</span>', $pagina);
        } else {
            $pagina = str_replace('%equilibrio%', '', $pagina);
        }
        if ($this->resistenza == 1) {
            $pagina = str_replace('%resistenza%', '<span class="testo-resistenza">Resistenza</span>', $pagina);
        } else {
            $pagina = str_replace('%resistenza%', '', $pagina);
        }
        if ($this->stabilità == 1) {
            $pagina = str_replace('%stabilità%', '<span class="testo-stabilita">Stabilità</span>', $pagina);
        } else {
            $pagina = str_replace('%stabilità%', '', $pagina);
        }
        if($this->intensita == 1)
            $pagina = str_replace('%intensita%', 'Alta', $pagina);
        if($this->intensita == 2)
            $pagina = str_replace('%intensita%', 'Media', $pagina);
        if($this->intensita == 3)
            $pagina = str_replace('%intensita%', 'Bassa', $pagina);
        $pagina = str_replace('%durata%', $this->durata, $pagina);
        $pagina = str_replace('%calorie%', $this->calorie, $pagina);
        if ($this->asciugamano == 1) {
            $pagina = str_replace('%asciugamano%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/asciugamano.svg" alt="">
                    <p>Asciugamano</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%asciugamano%', '', $pagina);
        }
        if ($this->borraccia == 1) {
            $pagina = str_replace('%borraccia%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/borraccia.svg" alt="">
                    <p>Borraccia</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%borraccia%', '', $pagina);
        }
        if ($this->calzini == 1) {
            $pagina = str_replace('%calzini%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/calzini.svg" alt="">
                    <p>Calzini</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%calzini%', '', $pagina);
        }
        if ($this->tappetino == 1) {
            $pagina = str_replace('%tappetino%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/tappetino.svg" alt="">
                    <p>Tappetino</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%tappetino%', '', $pagina);
        }
        if ($this->scarpe_sportive == 1) {
            $pagina = str_replace('%scarpe_sportive%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/scarpe_sportive.svg" alt="">
                    <p>Scarpe sportive</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%scarpe_sportive%', '', $pagina);
        }
        if ($this->guantoni == 1) {
            $pagina = str_replace('%guantoni%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/guantoni.svg" alt="">
                    <p>Guantoni</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%guantoni%', '', $pagina);
        }
        if ($this->capelli_raccolti == 1) {
            $pagina = str_replace('%capelli_raccolti%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/capelli_raccolti.svg" alt="">
                    <p>Capelli raccolti</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%capelli_raccolti%', '', $pagina);
        }
        if ($this->abbigliamento_outdoor == 1) {
            $pagina = str_replace('%abbigliamento_outdoor%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/abbigliamento_outdoor.svg" alt="">
                    <p>Abbigliamento outdoor</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%abbigliamento_outdoor%', '', $pagina);
        }
        if ($this->scarpe_outdoor == 1) {
            $pagina = str_replace('%scarpe_outdoor%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/scarpe_outdoor.svg" alt="">
                    <p>Scarpe outdoor</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%scarpe_outdoor%', '', $pagina);
        }
        if ($this->accappatoio == 1) {
            $pagina = str_replace('%accappatoio%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/accappatoio.svg" alt="">
                    <p>accappatoio</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%accappatoio%', '', $pagina);
        }
        if ($this->cuffia == 1) {
            $pagina = str_replace('%cuffia%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/cuffia.svg" alt="">
                    <p>Cuffia</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%cuffia%', '', $pagina);
        }
        if ($this->costume == 1) {
            $pagina = str_replace('%costume%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/costume.svg" alt="">
                    <p>Costume</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%costume%', '', $pagina);
        }
        if ($this->ciabatte == 1) {
            $pagina = str_replace('%ciabatte%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/ciabatte.svg" alt="">
                    <p>Ciabatte</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%ciabatte%', '', $pagina);
        }
        if ($this->piedi_nudi == 1) {
            $pagina = str_replace('%piedi_nudi%', '<div class="flex-container-col">
                    <img src="img/corsi/icone/piedi_nudi.svg" alt="">
                    <p>Piedi Nudi</p>
                    </div>', $pagina);
        } else {
            $pagina = str_replace('%piedi_nudi%', '', $pagina);
        }

        
        return $pagina;
    }
}