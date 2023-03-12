<?php
declare(strict_types=1);

namespace App\Repositories\Common;

use App\Enums\OrderDirection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;

abstract class Repository
{
    protected string $tableName;
    protected OrderBy $defaultOrderBy;

    public function __construct(
        protected string $model,
        OrderBy $defaultOrderBy = null
    )
    {
        if(!$defaultOrderBy) $this->defaultOrderBy = new OrderBy('created_at', OrderDirection::DESC);
        else $this->defaultOrderBy = $defaultOrderBy;
    }

    /**
     * @param string[]|string $columns
     * @return Collection
     */
    function getAll(string|array $columns = null): Collection
    {
        return $this->query()->with('category')->get($columns);
    }

    protected function getRusDate(string $field): Expression
    {
        if(preg_match('/./', $field)) {
            $as = explode('.', $field);
            $as = $as[count($as) - 1];
        }
        else $as = $field;
        return DB::raw("date_format($field, '%d.%m.%Y') as $as");
    }

    protected function rusDateTime(string $field): Expression
    {
        if(preg_match('/./', $field)) {
            $as = explode('.', $field);
            $as = $as[count($as) - 1];
        }
        else $as = $field;
        return DB::raw("date_format($field, '%d.%m.%Y %H:%i:%s') as $as");
    }

    protected function getOrdered(?OrderBy $orderBy = null): Builder
    {
        if(!$orderBy) $orderBy = $this->defaultOrderBy;
        return $this->query()->orderBy($orderBy->column, $orderBy->direction->name);
    }

    /** @noinspection PhpUndefinedMethodInspection */
    protected function query(): Builder
    {
        return $this->model::query();
    }
}
