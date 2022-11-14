<?php

namespace App\Http\Requests\Resources;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3', 'max:200'],
            'description' => 'nullable|string|min:10|max:400',
            'link' => ['required', 'string', 'min:3', 'max:150'],
            'image' => 'nullable|image|mimes:jpg,png',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Ресурс',
            'link' => 'Ссылка',
        ];
    }
}
