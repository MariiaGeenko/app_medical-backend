<?php
declare(strict_types=1);

namespace App\Repositories\Common;

use App\Enums\OrderDirection;

class OrderBy
{
    public function __construct(
        public string $column,
        public OrderDirection $direction
    )
    {
    }
}
