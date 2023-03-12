<?php
declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\Requests\Common\GeneralRequest;

class AddReceiptRequest extends GeneralRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'patient_id' => ['required' , 'integer', 'exists:patients,id'],
            'doctor_id' => ['required', 'integer', 'exists:doctors,id'],
            'valid_until_date' => ['required', 'date_format:%d.%m.%Y'],
            'drug_id' => ['required', 'integer', 'exists:drugs,id'],
            'barcode' => ['required', 'string']
        ];
    }

}
