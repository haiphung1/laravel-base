<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:191',
            'desc' => 'required|max:255',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Tiều đề không được để trống',
            'desc.required' => 'Mô tả không được để trống',
            'title.max' => 'Tiều đề không quá 191 ký tự',
            'desc.max' => 'Mô tả không quá 255 ký tự',
        ];
    }
}
