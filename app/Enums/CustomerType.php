<?php

namespace App\Enums;

enum CustomerType: string
{
    case Prospect = 'prospect';
    case Active   = 'active';
    case Inactive = 'inactive';

    public function label(): string
    {
        return match ($this) {
            self::Prospect => 'Prospekt',
            self::Active   => 'Aktiv',
            self::Inactive => 'Inaktiv',
        };
    }
}