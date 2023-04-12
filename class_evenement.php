<?php 

class Evenement
{
    private int $id ;
    private string $nom;
    private string $date;
    

    

    public function __construct( int $id,string $nom,string $date)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }



    public function getDate()
    {
        return $this->date;
    }
    public function setDtae($date)
    {
        $this->date = $date;
    }
}