<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:projects,title|min:2|max:100',
            'description' => 'nullable|max:1000',
            'card_image' => 'nullable|image|max:5000',
            'show_image' => 'nullable|image|max:5000',
            'preview_link' => 'nullable|max:100',
            'github_link' => 'nullable|max:100',
            'frontend_link' => 'nullable|max:100',
            'backend_link' => 'nullable|max:100',
            'yt_link' => 'nullable|max:100',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'exists:technologies,id',
            'date' => 'nullable|date',
            'is_in_evidence' => 'boolean'
        ];
    }
}
