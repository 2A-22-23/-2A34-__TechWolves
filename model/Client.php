<?php
class Client
{
    private ?int $matricule = null;
    private ?string $img = null;
    private ?string $type = null;
    private ?float $prix = null;

    public function __construct($i = null, $n, $t, $r)
    {
        $this->matricule = $i;
        $this->img = $n;
        $this->type = $t;
        $this->prix = $r;
    }

    /**
     * Get the value of idClient
     */
    public function getmatricule()
    {
        return $this->matricule;
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
     * @return  self
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
