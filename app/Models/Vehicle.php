<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $primaryKey = 'vehicleID';

    protected $fillable = [
        'make',
        'model',
        'year',
        'color',
    ];

    protected $hidden = ['licensePlate'];
}
