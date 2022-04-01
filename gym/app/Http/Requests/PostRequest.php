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
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');
        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'body'=>'required',
            'file'=>'image'
        ];

        if($post){
            $rules = ['slug'=>'required|unique:posts,slug,' . $post->id];
        }

        return $rules;
    }
}
