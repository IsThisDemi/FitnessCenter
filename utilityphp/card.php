<?php

class Card {
    public $id;
    public $immagine;
    public $alt;
    public $nome;
    public $descrizione;
    public $numero_corsi;
    
    public function __construct(&$array){
        
        $this->id=$array['id_categoria'];
        $this->immagine=$array['immagine'];
        $this->alt=$array['alt'];
        $this->nome=$array['nome_cat'];
        $this->numero_corsi=$array['numero_corsi'];
    }

    public function makeCard_offerta(){
    
        $pagina = file_get_contents(__DIR__.'\card_offerta.html');
        $pagina=str_replace('%id%',$this->id,$pagina);
        $pagina=str_replace('%categoria%',$this->nome,$pagina);
        $pagina = str_replace("%immagine_categoria%", $this->immagine, $pagina);
        $pagina = str_replace("%alt%", $this->alt, $pagina);
        $pagina=str_replace('%numero_corsi%',$this->numero_corsi,$pagina);
        return $pagina;
    }
}
