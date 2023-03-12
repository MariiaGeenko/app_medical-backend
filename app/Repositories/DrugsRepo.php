<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Enums\OrderDirection;
use App\Models\Drug;
use App\Repositories\Common\OrderBy;
use App\Repositories\Common\Repository;

class DrugsRepo extends Repository
{
        public function __construct()
        {
            $model = Drug::class;
            $defOrderBy = new OrderBy('avg_rating', OrderDirection::DESC);
            parent::__construct($model, $defOrderBy);
        }
        public function getSearchList(string $perPage, string $page, string $search): array
        {
            return $this->getOrdered()->
            whereRaw("name ILIKE '%$search%'")->
            paginate(perPage: $perPage, page: $page)
                ->items();
        }
}
