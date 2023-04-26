<?php
class equipement
{
    private ?int $matricule = null;
    private ?string $img = null;
    private ?string $type = null;
    private ?string $prix = null;
    private ?string $id_stock = null;

    public function __construct($i = null, $n, $t, $r,$s)
    {
        $this->matricule = $i;
        $this->img = $n;
        $this->type = $t;
        $this->prix = $r;
        $this->id_stock = $s;
    }

    /**
     * Get the value of idClient
     */
    public function getmatricule()
    {
        return $this->matricule;
    }

    public function getid_stock()
    {
        return $this->id_stock;
    }

    public function setid_stock($id_stock)
    {
        $this->id_stock = $id_stock;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function gettype()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     */
    public function settype($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of reclam
     */
    public function getimg()
    {
        return $this->img;
    }

    /**
     * Set the value of reclam
     *
     * @return  self
     */
    public function setimg($img)
    {
        $this->img = $img;

        return $this;
    }


}
