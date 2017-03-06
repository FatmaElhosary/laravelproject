<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'title'=>'required|min:3',
            'body'=>'required',
            
        ];
        
//@if($errors->any())
//<ul class="alert alert-danger">
//    @foreach($errors->all() as $error)
//    <li>{{$error}}</li>
//    @endforeach
//</ul>-->
    }
}
