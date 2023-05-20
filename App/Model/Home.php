<?php

namespace App\Model;

class Home
{
    protected ?int $id = null;
    protected string $title;
    protected string $src;

    

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
     * Get the value of src
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * Set the value of src
     */
    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }
}