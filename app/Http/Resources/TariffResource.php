<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TariffResource extends JsonResource
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
            'id'                  => $this->id,
            'name'                => $this->name,
            'min_price'           => $this->min_price,
            'cost_per_kilometer'  => $this->cost_per_kilometer,
            'cost_per_minute'     => $this->cost_per_minute,
            'qty_free_kilometers' => $this->qty_free_kilometers,
            'qty_free_minutes'    => $this->qty_free_minutes,
            'created_at'          => $this->created_at,
        ];
    }
}
