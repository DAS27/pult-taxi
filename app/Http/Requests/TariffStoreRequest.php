<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TariffStoreRequest extends FormRequest
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
            'name'                => 'required|max:255',
            'car_id'              => 'required|integer',
            'min_price'           => 'required|integer',
            'cost_per_kilometer'  => 'required|integer',
            'cost_per_minute'     => 'required|integer',
            'qty_free_kilometers' => 'required|integer',
            'qty_free_minutes'    => 'required|integer',
        ];
    }
}
