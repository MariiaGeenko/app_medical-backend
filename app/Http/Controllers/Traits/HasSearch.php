<?php
declare(strict_types=1);

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

trait HasSearch
{
    /**
     * @param Request $request
     * @return array
     * @throws BadRequestException
     */
    function getSearchColumns(Request $request): array
    {
        $perPage = (int)$request->input('perPage');
        $page = (int)$request->input('page');
        $search = $request->input('search');
        if(!$page || !$perPage || !$search) throw new BadRequestException('не удалось найти поля для поиска');
        return [
          'perPage' => $perPage,
          'page' => $page,
          'search' => $search
        ];
    }

}
