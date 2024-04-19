<?php

namespace App\Data;

class PlayerInfo
{
    public function __construct(
        public string $first_name,
        public string $last_name,
    )
    {
    }

    public function fullName(): string {
        return $this->first_name . ' ' . $this->last_name;
    }
}
