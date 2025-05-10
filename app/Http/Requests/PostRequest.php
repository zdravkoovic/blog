<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**@return array<string, \Illuminate\Contract\Validation\ValidationRule|array<mixed>|string> */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:posts,slug'],
            'content' => ['required', 'string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'tag_ids' => ['required', 'array'],
            'tag_ids.*' => ['integer', 'exist:tags,id']
        ];
    }
}