<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Documents\Receipt;
use App\Repositories\Common\Repository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ReceiptsRepo extends Repository
{
    public function __construct()
    {
        parent::__construct(Receipt::class);
    }

    function getList(string $perPage = '10', string $page = '1'): array
    {
       return $this->getOrdered()->paginate(perPage: $perPage, page: $page)->items();
    }

}
