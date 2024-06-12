<?php

namespace Deniskarpenko\Uml\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UmlRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'endpoint' => 'string|required',
            'type_uml' => 'string|required',
        ];
    }

}
