<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'categories' => ['required'],
            'batch' => ['required','string'],
            'inventory_category' => ['required','numeric'],
            'description' => ['nullable','string'],
            'status' => ['required','numeric'],
            'sku_code' => ['required','max:255','string'],
            'stock_availability' => ['required','numeric'],
            'quantity' => ['required','numeric'],
            'price' => ['required','numeric'],
            'list_price_for_salesman' => ['numeric','nullable'],
            'commission' => ['numeric','nullable'],
            'video_link' => ['string','nullable'],
            'purchase_discount' => ['numeric','nullable'],
            'purchase_cost' => ['numeric','nullable'],
            'labour_cost' => ['numeric','nullable'],
            'transportation_cost' => ['numeric','nullable'],
            'owner' => ['string','nullable','max:255'],
            'vendor' => ['string','nullable','max:255'],
        ];
    }
}
