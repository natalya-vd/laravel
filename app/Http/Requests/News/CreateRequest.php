<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|min:3|max:200',
            'description' => 'required|string|min:10|max:400',
            'text' => 'required|string|min:10',
            'image' => 'nullable|image|mimes:jpg,png',
            'is_private' => 'sometimes|in:1'
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Заголовок',
            'description' => 'Краткое описание',
            'text' => 'Новость',
            'image' => 'Фото',
            'is_private' => 'Приватная новость',
            'category_id' => 'Категория',
        ];
    }

    public function messages()
    {
        return [
            'min' => [
                'string' => 'Поле :attribute должно быть не меньше :min символов.',
            ],
        ];
    }
}
