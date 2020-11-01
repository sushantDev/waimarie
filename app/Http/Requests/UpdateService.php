<?php

namespace App\Http\Requests;


use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;

class UpdateService extends FormRequest
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
             'title'   => 'required|max:200',
             'image'   => 'image|max:8000',
         ];
     }

         public function data()
         {
             $data = [
//                 'brand_id'          => $this->get('brand_id'),
                 'title'            => $this->get('title'),
                 'sub_description'  => $this->get('sub_description'),
                 'content'          => $this->get('content'),
                 'is_featured'      => $this->get('is_featured')? $this->get('is_featured') : 0,
                 'is_published'     => $this->has('publish')
             ];

             return $data;
         }
}
