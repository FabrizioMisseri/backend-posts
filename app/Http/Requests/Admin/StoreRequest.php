<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'author_id' => ['nullable', 'exists:authors,id'],
            'name' => ['required', 'min:4', 'max:150'],
            'text' => ['required'],
            'tags' => ['exists:tags,id'],
        ];
    }
}
