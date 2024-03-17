<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255', // Aturan validasi untuk nama
            'email' => 'required|email|unique:users,email|max:255', // Aturan validasi untuk email
            'message' => 'nullable|string', // Aturan validasi untuk pesan (opsional)
            'page' => 'nullable',
            'paginate' => 'nullable|required|integer',
            'filter' => 'nullable'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'email.max' => 'Email tidak boleh lebih dari :max karakter.',
            'paginate.integer' => 'Paginate wajib integer'
        ];
    }
}
