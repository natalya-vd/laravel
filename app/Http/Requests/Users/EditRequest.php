<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'email' => 'required|email:rfc,dns',
            'is_admin' => 'sometimes|in:1'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Имя пользователя',
            'email' => 'Email',
            'is_admin' => 'Администратор',
        ];
    }
}
