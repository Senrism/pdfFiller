<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileStoreRequest extends FormRequest
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
            'Filename' => 'required',
            'File'     => 'required'
        ];
    }

    public function messages(){
        return [

            'Filename.required' => 'You must Fill Out Filename',
            'File.required'     => 'You must Select The File',

        ];
    }
}
