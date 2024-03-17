<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UserSearchRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'perPage' => 'nullable|integer',
            'filter' => 'nullable'
        ];
    }

}
