<?php
declare(strict_types=1);

namespace App\Http\Controllers;


use App\Http\Controllers\Traits\HasSearch;
use App\Http\Requests\SearchRequest;
use App\Repositories\DrugsRepo;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\JsonResponse;

class DrugsController extends Controller
{
    use HasSearch;

    function getSearchList(SearchRequest $request, DrugsRepo $repo): array | JsonResponse
    {
        $data = $request->validated();
        return $repo->getSearchList($data['perPage'], $data['page'], $data['search']);
    }
}
