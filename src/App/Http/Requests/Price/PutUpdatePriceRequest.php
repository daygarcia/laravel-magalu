<?php

namespace App\Http\Requests\LaravelMagalu\Price;

use Illuminate\Foundation\Http\FormRequest;

class PutUpdatePriceRequest extends FormRequest
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
            '*.IdSku'     => 'required|string',
            '*.ListPrice' => 'required|numeric',
            '*.SalePrice' => 'required|numeric',
        ];
    }
}
