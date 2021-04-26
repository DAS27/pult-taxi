<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'id'            => $this->id,
            'brand_name'    => $this->brand_name,
            'model_name'    => $this->model_name,
            'license_plate' => $this->license_plate,
            'color'         => $this->color,
            'model_year'    => $this->model_year,
        ];
    }
}
