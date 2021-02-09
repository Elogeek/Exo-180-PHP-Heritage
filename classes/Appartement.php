<?php
class Appartement extends Habitation
{

    private bool $garage;

    /**
     * Appartement constructor.
     * @param string $pays
     * @param string $ville
     * @param int $codePostal
     * @param int $chambre
     * @param int $piece
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, int $codePostal, int $chambre, int $piece, bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambre, $piece);
        $this->setGarage($garage);

    }

    /**
     * @return bool
     */
    public function hasGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}