<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CO2Data extends Model
{
    use HasFactory;

    protected $table = 'co2data';

    /**
     * Only needed if we use a string id
     */
    // public $incrementing = false;
    // protected $keyType = 'string';

    protected $fillable = ['co2total', 'co2params'];
}
