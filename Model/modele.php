<?php
class livraisons{
    private int $id;
    private string $adresse;
    private string $type;
    private float $prix;
    private int $id_livreur;

    public function __construct($adresse, $type, $prix,$id_livreur){
        $this->adresse=$adresse;
        $this->type=$type;
        $this->prix=$prix;
        $this->id_livreur=$id_livreur;
    }




    
    public function getid(){
        return $this->id;
    }
    public function getadresse(){
        return $this->adresse;
    }
    public function gettype(){
        return $this->type;
    }
    public function getprix(){
        return $this->prix;
    }
    public function getid_livreur(){
        return $this->id_livreur;
    }

}

?>