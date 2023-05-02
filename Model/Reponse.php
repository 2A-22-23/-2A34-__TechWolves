<?php 
class Reponse {

private $id;
private $contenu;
private $id_reclamation;
private $id_user;


public function __construct(int $id, string $contenu,int $id_reclamation,int $id_user )
    {
        $this->id = $id;
        $this->contenu = $contenu;
        $this->id_reclamation = $id_reclamation;
        $this->id_user =  $id_user;
      
        
    }

    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id=$id;
    }

    public function getContenu() : string 
    {
        return $this->contenu;
    }
    public function setContenu(string $contenu )
    {
        $this->contenu=$contenu;
    }
    public function getId_reclamation() : int 
    {
        return $this->id_reclamation;
    }
    public function setId_reclamation(int $id )
    {
        $this->id_reclamation=$id;
    }
    public function getId_user(): int
    {
        return $this->id_user;
    }

    public function setId_user(int $id)
    {
        $this->id_user=$id;
    }
    
   


}