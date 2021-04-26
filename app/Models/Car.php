<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'brand_name',
        'model_name',
        'license_plate',
        'color',
        'model_year',
    ];

    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }
}
