<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosSensor extends Model
{
    use HasFactory;
    protected $fillable  =['sensor','valor','fecha'];
    protected $table = 'datos_sensores';

    public $timestamps = false;
}
