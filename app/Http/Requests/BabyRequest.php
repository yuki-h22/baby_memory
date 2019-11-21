<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BabyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'birthday' => 'required|integer',
            'image' => 'nullable|text',
        ];
    }
}
