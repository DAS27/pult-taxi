<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            'driver_id'     => 'required|integer',
            'brand_name'    => 'required|max:255',
            'model_name'    => 'required|max:255',
            'license_plate' => 'required|max:255',
            'color'         => 'required|max:255',
            'model_year'    => 'required|integer',
        ];
    }
}
