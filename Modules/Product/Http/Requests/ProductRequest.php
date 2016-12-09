<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'intro' => 'required',
            'description' => 'required',
            'packings' => 'required',
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kötelező a termék nevét megadni',
            'intro.required' => 'Kötelező a rövid leírást megadni',
            'description.required' => 'Kötelező a termék leírást megadni',
            'packings.required' => 'Kötelező a termék kiszerelését megadni',
            'image.image' => 'Kötelező a termék képet megadni'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
