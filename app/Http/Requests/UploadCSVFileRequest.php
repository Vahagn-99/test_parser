<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadCSVFileRequest extends FormRequest
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
     * Get the method for request .
     *
     * @return bool
     */
    public function isMethodPost()
    {
        return $this->method() == 'POST';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['csv_import' => ['required', 'file', 'mimes:csv,txt']];
    }
}
