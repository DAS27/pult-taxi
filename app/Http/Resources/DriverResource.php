<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                       => $this->id,
            'first_name'               => $this->first_name,
            'last_name'                => $this->last_name,
            'father_name'              => $this->father_name,
            'birth_day'                => $this->birth_day,
            'driver_license_id_number' => $this->driver_license_id_number,
            'validity_driver_license'  => $this->validity_driver_license,
        ];
    }
}
