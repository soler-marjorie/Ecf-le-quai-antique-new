<?php

namespace App\Model;

class Schedules
{
    protected ?int $id = null;
    protected string $jours;
    protected string $horairesMatin;
    protected string $horairesAprem;

    

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of jours
     */
    public function getJours(): string
    {
        return $this->jours;
    }

    /**
     * Set the value of jours
     */
    public function setJours(string $jours): self
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get the value of horairesMatin
     */
    public function getHorairesMatin(): string
    {
        return $this->horairesMatin;
    }

    /**
     * Set the value of horairesMatin
     */
    public function setHorairesMatin(string $horairesMatin): self
    {
        $this->horairesMatin = $horairesMatin;

        return $this;
    }

    /**
     * Get the value of horairesAprem
     */
    public function getHorairesAprem(): string
    {
        return $this->horairesAprem;
    }

    /**
     * Set the value of horairesAprem
     */
    public function setHorairesAprem(string $horairesAprem): self
    {
        $this->horairesAprem = $horairesAprem;

        return $this;
    }
}