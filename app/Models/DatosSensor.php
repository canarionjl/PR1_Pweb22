<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DatosSensor extends Model
{
    use HasFactory;
    protected $fillable  =['sensor','valor','fecha'];
    protected $table = 'datos_sensores';

    public $timestamps = false;

    public function sensor(): BelongsTo
    {
        return $this->belongsTo(Sensor::class, 'sensor_id', 'id');
    }

}
