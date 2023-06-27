<?php

namespace App\Model;

class Allergy{
    protected ?int $id = null;
    protected string $ingredients;

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
     * Get the value of ingredients
     */
    public function getIngredients(): string
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     */
    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}