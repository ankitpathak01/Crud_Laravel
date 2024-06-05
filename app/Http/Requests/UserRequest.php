<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username'=>'required',
            'fathername'=>'required',
            'age'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'country'=>'required'
        ];
    }
    public function message(){
        return[
            'username.required'=>'UserName is is required.',
            'fathername.required'=>'FatherName is is required.',
            'userage.required'=>'UserAge is is required.',
            'useremail.required'=>'UserEmail is is required.',
            'useraddress.required'=>'UserAddress is is required.',
            'usercountry.required'=>'UserCountry is is required.'
        ];
    }
}
