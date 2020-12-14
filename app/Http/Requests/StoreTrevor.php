<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrevor extends FormRequest
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
      'image' =>'image|max:8000|required'
        ];
    }

    public function data()
    {
      $data=[
        'title'          => $this->get('title'),
//        'content'=> $this->get('content'),
//          'category'=> $this->get('category'),
          'url'            =>$this->get('url'),
        'is_published'   => $this->has('publish'),
      ];
      return $data;
    }
}
