<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverStoreRequest extends FormRequest
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
            'first_name'               => 'required|max:255',
            'last_name'                => 'required|max:255',
            'father_name'              => 'required|max:255',
            'birth_day'                => 'required|date_format:"d-m-Y"',
            'driver_license_id_number' => 'required|integer',
            'validity_driver_license'  => 'required|date_format:"d-m-Y"',
        ];
    }
}
