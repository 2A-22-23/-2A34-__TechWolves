<?php
class livreurs{
    private int $id_livreur;
    private string $nom;
    private $heure;
    private $tarif;
    private string $email;

    public function __construct($nom, $heure, $tarif,$email){
        $this->nom=$nom;
        $this->heure=$heure;
        $this->tarif=$tarif;
        $this->email=$email;
    }




    
    public function getid_livreur(){
        return $this->id_livreur;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getheure(){
        return $this->heure;
    }
    public function gettarif(){
        return $this->tarif;
    }
    public function getemail(){
        return $this->email;
    }


}

?>