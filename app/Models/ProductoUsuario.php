<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class ProductoUsuario extends Model
{
    use HasFactory;

    protected $table = 'productos_usuarios';
    protected $fillable = ['producto_id', 'usuario_id', 'cantidad', 'precio', 'equivalenciaGrUnidad', 'unidad'];
    public $timestamps = false;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public static function getUnidades(): array
    {
        $type = DB::select(DB::raw('SHOW COLUMNS FROM productos_usuarios WHERE Field = "unidad"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $values = array();
        foreach (explode(',', $matches[1]) as $value) {
            $values[] = trim($value, "'");
        }
        return $values;
    }
}
