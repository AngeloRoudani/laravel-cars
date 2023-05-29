<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|max:50',
            'model' => 'required|max:30',
            'price' => 'required|max:10',
            'cc' => 'required',
            'year_release' => 'required',
            'optionals' => 'exists:optionals,id'

        ];
    }

    public function messages()

    {
      return[
    'brand.required'=>'Il brend è richiesto',
    'brand.max'=>'Deve essere massimo 50 charatteri',
    'model.required' =>'Il model è richiesto',
    'model.max'=> 'Deve essere massimo 30 charatteri',
    'price.required'=>'Il prezzo deve essere richiestto',
    'price.max'=>'Deve essere massimo 10 charatteri',
    'cc.required' =>'Il cc è richiesto',
    'year_release.required' =>'Il year_release è richiesto',
   ];

}

}
