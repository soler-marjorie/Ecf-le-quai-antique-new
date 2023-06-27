<?php

namespace App\Model;

class Booking{

    protected ?int $id = null;
    protected string $name;
    protected string $surname;
    protected string $email;
    protected int $nbrPeople;
    protected string $allergies;
    protected string $date;
    protected string $moment;
    protected string $schedules;



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
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nbrPeople
     */
    public function getNbrPeople(): int
    {
        return $this->nbrPeople;
    }

    /**
     * Set the value of nbrPeople
     */
    public function setNbrPeople(int $nbrPeople): self
    {
        $this->nbrPeople = $nbrPeople;

        return $this;
    }

    /**
     * Get the value of allergies
     */
    public function getAllergies(): string
    {
        return $this->allergies;
    }

    /**
     * Set the value of allergies
     */
    public function setAllergies(string $allergies): self
    {
        $this->allergies = $allergies;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of moment
     */
    public function getMoment(): string
    {
        return $this->moment;
    }

    /**
     * Set the value of moment
     */
    public function setMoment(string $moment): self
    {
        $this->moment = $moment;

        return $this;
    }

    /**
     * Get the value of schedules
     */
    public function getSchedules(): string
    {
        return $this->schedules;
    }

    /**
     * Set the value of schedules
     */
    public function setSchedules(string $schedules): self
    {
        $this->schedules = $schedules;

        return $this;
    }
}