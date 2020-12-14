<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;


class UpdateServiceCategory extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'image|max:8000',
        ];
    }

    public function data()
    {
        $data = [
            'title'               =>$this->get('title'),
            'url'               =>$this->get('url'),
            'is_published'         =>$this->has('publish')
        ];
        return $data;

    }
}
