<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOcorrencia extends FormRequest
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
            'ocorrencia' => 'required|unique:ocorrencias|min:5|max:10',
            'oficio' => 'required|min:5|max:10',
            'perito' => 'required|min:5|max:10',
            'entrada' => 'required|date'
        ];
    }
}
