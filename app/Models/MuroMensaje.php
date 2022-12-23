<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MuroMensaje extends Model
{
    use HasFactory;
    protected $table = 'muro_mensajes';
    public $timestamps = false;

    public function user(): BelongsTo
    {
       return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }
}
