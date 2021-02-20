<?php

declare(strict_types=1);

namespace App\Models;


class User
{
    private string $first_name;
    private string $last_name;

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = trim($first_name);
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = trim($last_name);
    }


}
