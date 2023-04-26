<?php
class stock
{
    private ?int $id_stock = null;
    private ?string $nb_sac = null;
    private ?string $nb_velo = null;
    private ?string $nb_casque = null;

    public function __construct($i = null, $n, $t, $r)
    {
        $this->id_stock = $i;
        $this->nb_sac = $n;
        $this->nb_velo = $t;
        $this->nb_casque = $r;
    }

    /**
     * Get the value of idClient
     */
    public function getid_stock()
    {
        return $this->id_stock;
    }

    /**
     * Get the value of nb_velo
     */
    public function getnb_velo()
    {
        return $this->nb_velo;
    }

    /**
     * Set the value of nb_velo
     *
     * @return  self
     */
    public function setnb_velo($nb_velo)
    {
        $this->nb_velo = $nb_velo;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getnb_casque()
    {
        return $this->nb_casque;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setnb_casque($nb_casque)
    {
        $this->nb_casque = $nb_casque;

        return $this;
    }

    /**
     * Get the value of reclam
     */
    public function getnb_sac()
    {
        return $this->nb_sac;
    }

    /**
     * Set the value of reclam
     *
     * @return  self
     */
    public function setnb_sac($nb_sac)
    {
        $this->nb_sac = $nb_sac;

        return $this;
    }


}
