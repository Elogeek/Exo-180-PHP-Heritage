<?php
class Maison extends Habitation {

    private bool $jardin;
    private int $etage;
    private bool $garage;

    /**
     * Maison constructor.
     * @param string $pays
     * @param string $ville
     * @param int $codePostal
     * @param int $chambre
     * @param int $piece
     * @param bool $jardin
     * @param int $etage
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, int $codePostal, int $chambre, int $piece, bool $jardin, int $etage, bool $garage) {
        parent::__construct($pays, $ville, $codePostal, $chambre, $piece);
        $this->setJardin($jardin);
        $this->setEtage($etage);
        $this->setGarage($garage);

    }

    /**
     * @return bool
     */
    public function hasJardin(): bool {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtage(): int {
        return $this->etage;
    }

    /**
     * @param int $etage
     */
    public function setEtage(int $etage): void {
        $this->etage = $etage;
    }

    /**
     * @return bool
     */
    public function hasGarage(): bool {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void {
        $this->garage = $garage;
    }

}