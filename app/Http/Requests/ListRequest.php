<?php

namespace App\Http\Requests;

use App\Http\Requests\Common\GeneralRequest;

/**
 * @property string $perPage
 * @property mixed $page
 */
class ListRequest extends GeneralRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'perPage' => ['required', 'integer'],
            'page' => ['required', 'integer']
        ];
    }

    protected function passedValidation(): void
    {
        $this->replace(
            ['perPage' => (int)$this->perPage,
             'page' => (int)$this->page]);
    }

}
