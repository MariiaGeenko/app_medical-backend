<?php
declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\Requests\Common\GeneralRequest;

class SearchRequest extends GeneralRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'perPage' => ['required', 'integer'],
            'page' => ['required', 'integer'],
            'search' => ['required', 'string']
        ];
    }
}
