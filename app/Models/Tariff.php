<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'name',
        'min_price',
        'cost_per_kilometer',
        'cost_per_minute',
        'qty_free_kilometers',
        'qty_free_minutes',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
