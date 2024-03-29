<?php

declare(strict_types=1);

namespace App\Enum;

enum DrugStatus: string
{
    case ACTIVE = 'active';
    case BLOCKED = 'blocked';

    public static function all(): array
    {
        return [
            self::ACTIVE->value,
            self::BLOCKED->value,
        ];
    }
}
