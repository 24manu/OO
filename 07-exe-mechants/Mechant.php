<?php

class Mechant
{
    /**
     *
     * Attributs ou propriétés
     *
     */
    private int $idMechant;
    private string $nameMechant;
    private int $forceMechant;
    private int $experienceMechant;
    private bool|int $statusMechant;




    // Constantes

    /**
     *
     * Méthodes
     *
     */

    /**
     *
     * getters
     *
     */

    /**
     * @return int
     */
    public function getIdMechant(): int
    {
        return $this->idMechant;
    }

    /**
     * @return string
     */
    public function getNameMechant(): string
    {
        return $this->nameMechant;
    }

    /**
     * @return int
     */
    public function getForceMechant(): int
    {
        return $this->forceMechant;
    }

    /**
     * @return int
     */
    public function getExperienceMechant(): int
    {
        return $this->experienceMechant;
    }

    /**
     * @return bool|int
     */
    public function getStatusMechant(): bool|int
    {
        return $this->statusMechant;
    }

    /**
     *
     * setters
     *
     */

    /**
     * @param int $idMechant
     */
    public function setIdMechant(int $idMechant): void
    {
        $this->idMechant = $idMechant;
    }

    /**
     * @param string $nameMechant
     */
    public function setNameMechant(string $nameMechant): void
    {
        $this->nameMechant = $nameMechant;
    }

    /**
     * @param int $forceMechant
     */
    public function setForceMechant(int $forceMechant): void
    {
        $this->forceMechant = $forceMechant;
    }

    /**
     * @param int $experienceMechant
     */
    public function setExperienceMechant(int $experienceMechant): void
    {
        $this->experienceMechant = $experienceMechant;
    }

    /**
     * @param bool|int $statusMechant
     */
    public function setStatusMechant(bool|int $statusMechant): void
    {
        $this->statusMechant = $statusMechant;
    }



}