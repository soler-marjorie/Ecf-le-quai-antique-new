<?php

namespace App\Model;

class Menu
{
    protected ?int $id = null;
    protected string $formule;
    protected string $plat;
    protected string $title;
    protected string $description;
    protected float $price;

    

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

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
