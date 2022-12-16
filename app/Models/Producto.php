<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable  =['titulo','tipoProducto_id'];
    public $timestamps = false;

    public function tipo(): BelongsTo
    {
        return $this->BelongsTo(TipoProducto::class, 'tipoProducto_id','id');
    }

}
