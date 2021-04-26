<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'birth_day',
        'driver_license_id_number',
        'validity_driver_license',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
