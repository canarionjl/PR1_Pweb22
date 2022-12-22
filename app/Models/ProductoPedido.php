<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoPedido extends Model
{
    use HasFactory;
    protected $table = 'productos_pedidos';
    protected $guarded  =[];
    public $timestamps = false;
}
