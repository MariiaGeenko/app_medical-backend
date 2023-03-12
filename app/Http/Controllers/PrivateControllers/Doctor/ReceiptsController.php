<?php
declare(strict_types=1);

namespace App\Http\Controllers\PrivateControllers\Doctor;

use App\Exceptions\DataBaseException;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddReceiptRequest;
use App\Http\Requests\ListRequest;
use App\Models\Documents\Receipt;
use App\Repositories\ReceiptsRepo;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class ReceiptsController extends Controller
{
    function getList(ListRequest $request, ReceiptsRepo $repo): array
    {
        $data = $request->validated();
        return $repo->getList($data['perPage'], $data['page']);
    }
    function addReceipt(AddReceiptRequest $request): void
    {
        $receipt = new Receipt($request->validated());
        $receipt->saveOrFail();
    }
    function getReceipt(Receipt $receipt, Request $request): array
    {
        if ($request->doctor->id !== $receipt->doctor->id) {
            throw new UnauthorizedException('unauthorized access');
        }
        $receipt->patient()->get();
        return $receipt->toArray();
    }

    /**
     * @throws DataBaseException
     * @throws \Throwable
     */
    function removeReceipt(Receipt $receipt, Request $request): bool
    {
        if ($request->doctor->id !== $receipt->doctor->id) {
            throw new UnauthorizedException('unauthorized access');
        }
        if ($receipt->exists) return $receipt->deleteOrFail();
        else throw new DataBaseException("this receipt don't exists");
    }
}
