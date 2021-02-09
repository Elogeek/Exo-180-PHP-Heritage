<?php
class Habitation {

    private string $pays;
    private string $ville;
    private int $codePostal;
    private int $chambre;
    private int $piece;
    /**
     * Habitation constructor.
     * @param string $pays
     * @param string $ville
     * @param int $codePostal
     * @param int $chambre
     * @param int $piece
     */
    public function __construct(string $pays, string $ville, int $codePostal, int $chambre, int $piece) {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setChambre($chambre);
        $this->setPiece($piece);
    }


    /**
     * @return string
     */
    public function getPays() {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays) {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville) {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    /**
     * @return int
     */
    public function getChambre() {
        return $this->chambre;
    }

    /**
     * @param int $chambre
     */
    public function setChambre($chambre) {
        $this->chambre = $chambre;
    }

    /**
     * @return int
     */
    public function getPiece() {
        return $this->piece;
    }

    /**
     * @param int $piece
     */
    public function setPiece($piece) {
        $this->piece = $piece;
    }

}