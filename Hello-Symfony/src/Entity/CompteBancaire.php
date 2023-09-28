<?php

namespace App\Entity;


use App\Entity\CompteType;

class CompteBancaire
{
    protected int $id;
    protected CompteType $type;
    protected float $solde = 0;
    protected Contact $proprietaire;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CompteBancaire
     */
    public function setId(int $id): CompteBancaire
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CompteBancaire
     */
    public function setType(CompteType $type): CompteBancaire
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * @return Contact
     */
    public function getProprietaire(): Contact
    {
        return $this->proprietaire;
    }

    /**
     * @param Contact $proprietaire
     * @return CompteBancaire
     */
    public function setProprietaire(Contact $proprietaire): CompteBancaire
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function crediter(float $montant): CompteBancaire
    {
        $this->solde += $montant;
        return $this;
    }



    public function debiter(float $montant): CompteBancaire
    {
        if ($montant > $this->solde) {
            throw new \Exception('Le solde ne peut pas être négatif');
        }

        $this->solde -= $montant;
        return $this;
    }
}