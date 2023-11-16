<?php

namespace App\Model;

class MenuTitle
{
    protected ?int $id = null;
    protected string $formule;
    protected string $plat;

    

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
     * Get the value of formule
     */
    public function getFormule(): string
    {
        return $this->formule;
    }

    /**
     * Set the value of formule
     */
    public function setFormule(string $formule): self
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get the value of plat
     */
    public function getPlat(): string
    {
        return $this->plat;
    }

    /**
     * Set the value of plat
     */
    public function setPlat(string $plat): self
    {
        $this->plat = $plat;

        return $this;
    }
}