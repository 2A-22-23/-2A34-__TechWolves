<?php 
class Client {

private $id;
private $nom;
private $prenom;
private $ddn;
private $tel;
private $adresse;
private $etat_civil;
private $pass;
private $role;


public function __construct(int $id, string $nom,string $prenom,DateTime $ddn,string $tel,string $adresse, string $etat_civil,string $pass,string $role )
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ddn =  $ddn;
        $this->tel = $tel;
        $this->adresse = $adresse;
        $this->etat_civil = $etat_civil;
        $this->pass=$pass;
        $this->role=$role;
    }

    public function getRole() : string
    {
        return $this->role;
    }
    public function setRole(string $rol)
    {
        $this->role=$rol;
    }
    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id=$id;
    }


    public function getNom() : string 
    {
        return $this->nom;
    }
    public function setNom(string $nom )
    {
        $this->nom=$nom;
    }
    public function getPrenom() : string 
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom )
    {
        $this->prenom=$prenom;
    }
    public function getDdn(): DateTime
    {
        return $this->ddn;
    }

    public function setDdn(DateTime $ddn)
    {
        $this->ddn=$ddn;
    }
    public function getTel() : string 
    {
        return $this->tel;
    }
    public function setTel(string $tel)
    {
        $this->tel=$tel;
    }
    public function getAdresse() : string 
    {
        return $this->adresse;
    }
    public function setAdresse(string $adresse)
    {
        $this->adresse=$adresse;
    }
    public function getEtat_civil() : string 
    {
        return $this->etat_civil;
    }
    public function setEtat_civil(string $etat_civil)
    {
        $this->etat_civil=$etat_civil;
    }
    public function getPass() : string 
    {
        return $this->pass;
    }
    public function setPass(string $pass)
    {
        $this->pass=$pass;
    }


}