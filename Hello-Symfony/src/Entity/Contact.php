<?php

namespace App\Entity;

class Contact
{
    protected int $id;
    protected string $firstname;
    protected string $lastname;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Contact
     */
    public function setId(int $id): Contact
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname(string $firstname): Contact
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Contact
     */
    public function setLastname(string $lastname): Contact
    {
        $this->lastname = $lastname;
        return $this;
    }

}
